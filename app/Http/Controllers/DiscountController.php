<?php

namespace App\Http\Controllers;

use App\DataTables\DiscountDataTable;
use App\Models\Discount;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DiscountController extends Controller
{
    public function index(DiscountDataTable $dataTables)
    {
        return $dataTables->render('Admin.Pages.discount.index');
    }


    public function create()
    {
        return view('Admin.Pages.discount.create');
    }




    public function store(Request $request)
    {
        // Data Validate
        $request->validate([
            'discount_code' => ['required', 'unique:discount'],
            'discount_per' => ['required', 'numeric', 'min:0'],
        ]);

        Discount::create([
            'discount_code' => $request->input('discount_code'),
            'discount_per' => $request->input('discount_per'),
        ]);

        $notification = array(
            'message' => 'Discount Added Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('discount.index')->with($notification);
    }


    public function edit($id)
    {
        $code = Discount::findOrFail($id);
        return view('Admin.Pages.discount.edit', compact('code'));
    }


    public function update(Request $request, $id)
    {
        // Data Validate
        $request->validate([
            'discount_code' => ['required', 'unique:discount'],
            'discount_per' => ['required', 'numeric', 'min:0'],
        ]);

        $data = $request->except(['_token', '_method']);


        Discount::where('id', $id)->update($data);

        $notification = array(
            'message' => 'Discount Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('discount.index')->with($notification);
    }


    public function destroy($id)
    {
        $user = Discount::findOrFail($id);
        $user->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
