<?php

namespace App\Http\Controllers;
use App\DataTables\OrderDataTable;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index(OrderDataTable $dataTables)
    {
        return $dataTables->render('Admin.Pages.order.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $orderitem = OrderItem::where('order_id', $id)->get();
        // dd($orderitem);
        return view('Admin.Pages.order.show', compact('orderitem'));
    }


    public function edit(Order $order)
    {
        //
    }


    public function update(Request $request, Order $order)
    {
        //
    }


    public function destroy(Order $order)
    {
        //
    }
}
