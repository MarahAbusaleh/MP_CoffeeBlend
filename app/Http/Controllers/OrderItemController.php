<?php

namespace App\Http\Controllers;

use App\DataTables\OrderItemDataTable;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{

    public function index(OrderItemDataTable $dataTables, Request $request)
    {
        $orderId = $request->get('order_id');

        if ($orderId != null) {
            $dataTables->setorderId($orderId);
            return $dataTables->render('Admin.Pages.order_item.index', compact('orderId'));
        }

        return $dataTables->render('Admin.Pages.order_item.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(OrderItem $orderItem)
    {
        //
    }


    public function edit(OrderItem $orderItem)
    {
        //
    }


    public function update(Request $request, OrderItem $orderItem)
    {
        //
    }


    public function destroy(OrderItem $orderItem)
    {
        //
    }
}
