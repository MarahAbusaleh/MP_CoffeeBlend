<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class AdminController extends Controller
{
    public function login()
    {
        return view('Admin.Pages.login');
    }


    public function AdminDashboard()
    {
        return view('Admin.Pages.index');
    }


    public function profileAdmin()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('Admin.Pages.profile.profile', compact('adminData'));
    }

    public function editAdminInfo(Request $request)
    {
        $id = Auth::user()->id;

        //Data Validate
        $request->validate([
            'name' => ['max:20'],
            'email' => ['email'],
            'mobile' => ['string', 'regex:/^07\d{8}$/'],
            'address' => ['string'],
            'image' => ['image', 'max:4192'],
        ]);

        $data = $request->except(['_token', '_method']);

        $relativeImagePath = null;
        if ($request->file('image')) {
            $newImageName = uniqid() . '-' . $request->input('name') . '.' . $request->file('image')->extension();
            $relativeImagePath = 'assets/images/' . $newImageName;
            $request->file('image')->move(public_path('assets/images'), $newImageName);
            $data['image'] = $relativeImagePath;
        }

        User::where('id', $id)->update($data);

        Alert::success('success', 'Admin Info Updated Successfully');

        return redirect()->route('profileAdmin');
    }

    public function editAdminPass(Request $request)
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);

        //Data Validate
        $request->validate([
            'password' => 'required',
            'newpass' => 'required|min:8',
            'newpassconf' => 'required|same:newpass',
        ]);

        if (Hash::check($request->password, $adminData->password)) {
            $adminData->password = Hash::make($request->newpass);
            $adminData->save();

            Alert::success('success', 'Password Updated Successfully');
            return redirect()->route('profileAdmin');
        } else {
            Alert::error('error', 'Current password is incorrect');
            return redirect()->route('profileAdmin');
        }
    }
}
