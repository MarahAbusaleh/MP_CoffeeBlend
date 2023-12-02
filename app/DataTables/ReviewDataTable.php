<?php

namespace App\DataTables;

use App\Models\Review;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ReviewDataTable extends DataTable
{

    public function dataTable($query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($query) {
                $deleteBtn = "<a href='" . route('review.destroy', $query->id) . "' class='btn btn-danger my-2 delete-item'><i class='fas fa-trash-alt'></i></a>";

                return $deleteBtn;
            })

            ->addColumn('user image', function ($query) {
                return "<img width='100px' src='" . asset($query->user->image) . "'/>";
            })

            ->addColumn('user name', function ($query) {
                return $query->user->name;
            })

            ->addColumn('product', function ($query) {
                return $query->product->name;
            })
            ->rawColumns(['action', 'user image'])
            ->setRowId('id');
    }


    public function query(Review $model)
    {
        return $model->newQuery();
    }


    public function html()
    {
        return $this->builder()
            ->setTableId('reviewdatatable-table')
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
            Column::make('user image'),
            Column::make('user name'),
            Column::make('comment'),
            Column::make('product'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }


    protected function filename(): string
    {
        return 'Review_' . date('YmdHis');
    }
}
