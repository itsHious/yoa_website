<?php

namespace App\DataTables\Admin;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->editColumn('created_at', function ($query){
            return Carbon::parse($query->created_at)->format('D, d F Y');
          })
           

            ->editColumn('is_enabled', function ($query){
               return  $query->is_enabled == true ? '<label class="badge badge-success">Active</label>':'<label class="badge badge-danger">Inactive</label>';})

               ->editColumn('role', function ($query){
                return  $query->role == 1 ? 'Super Admin':'Admin';})


                ->editColumn('action', function ($query){
if($query->is_enabled == true){
    return '
    <div class="dropdown ">
    <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
    </button>
    <div class="dropdown-menu dropdown-menu-sm">
    <a class="dropdown-item"   href="'.route('users.edit',$query->id).'"> <i class="fa fa-pencil text-info"></i> Edit</a>
    <a class="dropdown-item" href="'.route('users.enable',$query->id).'" > <i class="
fas fa-undo-alt text-success"></i> Disable Account</a>
    </div>
    </div>';
}else{
    return '
    <div class="dropdown ">
    <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
    </button>
    <div class="dropdown-menu dropdown-menu-sm">
    <a class="dropdown-item"   href="'.route('users.edit',$query->id).'"> <i class="fa fa-pencil text-info"></i> Edit</a>
    <a class="dropdown-item" href="'.route('users.enable',$query->id).'" > <i class="
fas fa-undo-alt text-success"></i> Enable Account</a>
    </div>
    </div>';
}
                  
    
                  })
               
              ->rawColumns(['status','is_enabled','action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(User $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('users-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(0)
                    // ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('updated_at')->visible(false)->exportable(false)
            ->printable(false),
            Column::make('name'),
            Column::make('email'),
            Column::make('role'),
            Column::make('is_enabled')->exportable(false)->printable(false),
            Column::make('created_at'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Users_' . date('YmdHis');
    }
}
