<?php

namespace App\DataTables;

use App\Models\Order;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class OrderDataTable extends DataTable
{

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($query) {
                $editBtn = "<a href='" . route('order.edit', $query->id) . "' class='btn btn-success'><i class='far fa-edit'></i></a>";
                $showBtn = "<a href='" . route('order_item.index', ['order_id' => $query->id]) . "' class='btn btn-muted my-2 show-item'><i class='fas fa-eye'></i></a>";

                return $editBtn . $showBtn;
            })

            ->addColumn('status', function ($query) {
                if ($query->status == 'In Shipping') {
                    return "<span class='InShipping'>In Shipping</span>";
                } elseif ($query->status == 'Done') {
                    return "<span class='Done'>Done</span>";
                } elseif ($query->status == 'Canceled') {
                    return "<span class='Canceled'>Canceled</span>";
                }
            })

            ->addColumn('user name', function ($query) {
                return $query->user->name;
            })

            ->rawColumns(['action', 'image', 'status'])
            ->setRowId('id');
    }


    public function query(Order $model): QueryBuilder
    {
        return $model->newQuery();
    }


    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('order-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }


    public function getColumns(): array
    {
        return [
            Column::make('user name'),
            Column::make('address'),
            Column::make('date'),
            // Column::make('total'),
            Column::make('status'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }


    protected function filename(): string
    {
        return 'Order_' . date('YmdHis');
    }
}
