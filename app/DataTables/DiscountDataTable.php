<?php

namespace App\DataTables;

use App\Models\Discount;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class DiscountDataTable extends DataTable
{
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($query) {
                $editBtn = "<a href='" . route('discount.edit', $query->id) . "' class='btn btn-success'><i class='far fa-edit'></i></a>";
                $deleteBtn = "<a href='" . route('discount.destroy', $query->id) . "' class='btn btn-danger my-2 delete-item'><i class='fas fa-trash-alt'></i></a>";

                return $editBtn . $deleteBtn;
            })

            ->addColumn('discount code', function ($query) {
                return $query->discount_code;
            })

            ->addColumn('discount_percentage', function ($query) {
                return $query->discount_per * 100 . ' %';
            })

            ->rawColumns(['action', 'discount_percentage', 'discount code'])
            ->setRowId('id');
    }


    public function query(Discount $model)
    {
        return $model->newQuery();
    }


    public function html()
    {
        return $this->builder()
            ->setTableId('discount-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->buttons(
                Button::make('create'),
                Button::make('export'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            );
    }


    protected function getColumns()
    {
        return [
            Column::make('discount code'),
            Column::make('discount_percentage'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }


    protected function filename(): string
    {
        return 'Discount_' . date('YmdHis');
    }
}
