<?php

namespace App\DataTables;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;

use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class OrderItemDataTable extends DataTable
{
    protected $orderId;

    public function setorderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        if (!is_null($this->orderId)) {
            $query->where('order_id', $this->orderId);
        }

        return (new EloquentDataTable($query))
            ->addColumn('product', function ($query) {
                if ($query->product_id) {
                    return $query->product->name;
                } else {
                    return '--NAN--';
                }
            })
            ->addColumn('menu', function ($query) {
                if ($query->menu_id) {
                    return $query->menu->name;
                } else {
                    return '--NAN--';
                }
            })

            ->setRowId('id');
    }


    public function query(OrderItem $model): QueryBuilder
    {
        return $model->newQuery();
    }


    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('orderitem-table')
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


    protected function getColumns(): array
    {
        return [
            Column::make('product'),
            Column::make('menu'),
            Column::make('price'),
            Column::make('quantity'),
        ];
    }


    protected function filename(): string
    {
        return 'OrderItem_' . date('YmdHis');
    }
}
