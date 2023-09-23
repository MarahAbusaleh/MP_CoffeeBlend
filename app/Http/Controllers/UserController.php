<?php

namespace App\Http\Controllers;
use App\DataTables\UserDataTable;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(UserDataTable $dataTables)
    {
        return $dataTables->render('Admin.Pages.user.index');
    }

    public function create()
    {
        return view('Admin.Pages.user.create');
    }


    public function store(Request $request)
    {
        // Data Validate
        $request->validate([
            'name' => ['required', 'max:20'],
            'email' => ['email'],
            'mobile' => ['string', 'regex:/^07\d{8}$/'],
            'address' => ['string'],
            'role' => ['required'],
            'image' => ['image', 'max:4192'],
        ]);

        $relativeImagePath = null;
        if ($request->hasFile('image')) {
            $newImageName1 = uniqid() . '-' . $request->input('name') . '.' . $request->file('image')->extension();
            $relativeImagePath = 'assets/images/' . $newImageName1;
            $request->file('image')->move(public_path('assets/images'), $newImageName1);
        }else {
            $relativeImagePath = 'assets/images/defaultImage.png'; 
        }

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'address' => $request->input('address'),
            'role' => $request->input('role'),
            'image' => $relativeImagePath
        ]);

        return redirect()->route('user.index')->with('success', 'User Added successfully.');
    }


    public function show()
    {
        //
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('Admin.Pages.user.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
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
        if ($request->hasFile('image')) {
            $newImageName = uniqid() . '-' . $request->input('name') . '.' . $request->file('image')->extension();
            $relativeImagePath = 'assets/images/' . $newImageName;
            $request->file('image')->move(public_path('assets/images'), $newImageName);
            $data['image'] = $relativeImagePath;
        }

        if($request->input('role') == null){

            $currentUser = User::find($id);
            if ($currentUser) {
                $data['role'] = $currentUser->role;
            }
        }else{
            $data['role'] = $request->input('role');
        }

        User::where('id', $id)->update($data);

        return redirect()->route('user.index')->with('success', 'User updated successfully.');
    }


    public function destroy($id)
    {
        // dd($id);
        User::destroy($id);
        // dd($id);

        return back()->with('success', 'User deleted successfully.');
    }
}
