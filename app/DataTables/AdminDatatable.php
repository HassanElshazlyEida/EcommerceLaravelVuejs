<?php

namespace App\DataTables;

use App\Admin;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class AdminDatatable extends DataTable
{

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('checkbox', 'admin.admins.btn.checkbox')
            ->addColumn('edit', 'admin.admins.btn.edit')
            ->addColumn('delete', 'admin.admins.btn.delete')
            ->rawColumns(['edit','delete','checkbox']);
    }


    public function query()
    {
        return Admin::query();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('admindatatable-table')
                    ->columns($this->getColumns())
                    ->parameters([
                        'buttons'      => [
                            'pageLength',
                            //old way
                            [
                                'text'=>
                                '<i class="fa fa-trash"></i> '.__('admin.admin_table_delete_all'),
                                'className'=>'dt-button buttons-collection delBtn buttons-page-length'
                            ],
                            //new way (names unique)
                            'export',
                            'print',
                            'reset',
                            'reload',
                            'create'
                            ],
                        'lengthMenu' => [
                            [ 10, 25, 50, -1 ],
                            [ 10, 25, 50, __('admin.Show_all')]
                            ],
                        "initComplete"=> "function () {
                            this.api().columns([2,3]).every(function () {
                                var column = this;
                                var input = document.createElement('input');
                                $(input).appendTo($(column.footer()).empty())
                                .on('keyup', function () {
                                    column.search($(this).val(), false, false, true).draw();
                                });
                            });
                        }",


                        'language' => datatable_lang(),

                        ])
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            //old WAY
            [
                'name'=>"checkbox",
                'data'=>"checkbox",
                'title'=>"<input type='checkbox'class='check_all' onclick='check_all()'/> ",
                "exportable"=>false,
                "printable"=>false,
                "orderable"=>false,
                "searchable"=>false,
            ],
            //New WAY
            Column::make('id'),//same as blew
            Column::make('name')->title(__("admin.admin_table_name")),
            Column::make('email')->title(__("admin.admin_table_email")),
            Column::make('created_at')->title(__("admin.admin_table_created_at")),
            Column::make('updated_at')->title(__("admin.admin_table_updated_at")),
            Column::computed('edit')
            ->title(__('admin.admin_table_edit'))
            ->exportable(false)
            ->printable(false)
            ->searchable(false)
            ->width(120)
            ->addClass('text-center'),
            Column::computed('delete')
            ->title(__('admin.admin_table_delete'))
            ->exportable(false)
            ->printable(false)
            ->searchable(false)
            ->width(50)
            ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Admin_' . date('YmdHis');
    }
}
