<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index(UserDataTable $dataTables)
    {
        return $dataTables->render('Admin.Pages.user.index');
    }


    public function myProfile()
    {
        $orders = Order::where('user_id', Auth::user()->id)->get();
        return view('Pages.user-profile', compact('orders'));
    }


    public function editMyProfile(Request $request)
    {
        // Data Validate
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'mobile' => ['required', 'string', 'regex:/^07\d{8}$/'],
            'address' => ['required', 'string'],
            'image' => [''],
        ]);

        $data = $request->except(['_token', '_method']);

        $relativeImagePath = null;
        if ($request->file('image')) {
            $newImageName = uniqid() . '-' . $request->input('name') . '.' . $request->file('image')->extension();
            $relativeImagePath = 'images/' . $newImageName;
            $request->file('image')->move(public_path('images'), $newImageName);
            $data['image'] = $relativeImagePath;
        } else {
            dd($data);
        }



        User::where('id', Auth::user()->id)->update($data);
        Alert::success('success', 'Your Information Updated Successfully');

        return redirect()->back();
    }


    public function myOrders($id)
    {
        $orderdetails = OrderItem::where('order_id', $id)->get();
        $orderTotal = OrderItem::where('order_id', $id)->sum(DB::raw('quantity * price'));
        return view('Pages.order-detalis', compact('orderdetails', 'orderTotal'));
    }


    public function create()
    {
        return view('Admin.Pages.user.create');
    }


    public function store(Request $request)
    {
        // Data Validate
        $request->validate([
            'name' => ['required'],
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
        } else {
            $relativeImagePath = 'assets/images/defaultImage.png';
        }

        $roleValue = '';
        if ($request->input('role') == 0) {
            $roleValue = 'user';
        } elseif ($request->input('role') == 1) {
            $roleValue = 'admin';
        }

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'address' => $request->input('address'),
            'role' => $roleValue,
            'image' => $relativeImagePath
        ]);

        $notification = array(
            'message' => 'User Added Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('user.index')->with($notification);
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
        $data = $request->except(['_token', '_method']);

        if ($request->input('role') == null) {

            $currentUser = User::find($id);

            if ($currentUser) {
                $data['role'] = $currentUser->role;
            }
        } else {
            if ($request->input('role') == 0) {
                $data['role'] = 'user';
            } elseif ($request->input('role') == 1) {
                $data['role'] = 'admin';
            }
        }

        User::where('id', $id)->update($data);

        $notification = array(
            'message' => 'User Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('user.index')->with($notification);
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
