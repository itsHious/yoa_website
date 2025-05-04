<?php

namespace App\DataTables\Admin;

use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class TeamDataTable extends DataTable
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

          ->editColumn('image', function ($query){
            return '<img src="'.env('APP_URL').'/'.$query->image.'"  class="img-rounded img-fluid text-center"  width="100"/>';
          })

                ->editColumn('action', function ($query){
    return '
    <div class="dropdown ">
    <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
    </button>
    <div class="dropdown-menu dropdown-menu-sm">
    <a class="dropdown-item has-icon"   href="'.route('team.edit',$query->id).'"> <i class="fa fa-pencil text-info"></i> Edit</a>
    <a class="dropdown-item has-icon" href="#" data-toggle="modal" data-target="#modal_1_'.$query->id.'"> <i class="
fa fa-trash text-danger"></i> Delete</a>
    </div>
    </div>
    
    
    <div class="modal  fade" id="modal_1_'.$query->id.'" tabindex="-1" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
          <div class="modal-header border"><h6 class="heading h6">Delete '.$query->name.'s'.' Account </h6></div>
              <div class="modal-body">
                  <div class="row justify-content-center">
                      <div class="col-lg-11 text-center py-4">
                          <form  action="'.route('team.delete',$query->id).'" method="post">
                          '.csrf_field().'
                          <p class="text-center">Delete Account! <br> Action is irreversible<br> </p>
                            <div class="text-center">
                              <button " type="submit" class="btn text-white btn-danger btn-sm col-lg-7" name="button">Delete Team Details</button>
                            </div>
                          </form>


                      </div>

                  </div>
                    <div class="modal-footer"><button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button></div>
              </div>
          </div>
      </div>
    </div>';
              
    
                  })
               
              ->rawColumns(['image','action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Team $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('team-table')
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
            Column::make('image')->title('Profile Image'),
            Column::make('name'),
            Column::make('position'),
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
        return 'Team_' . date('YmdHis');
    }
}
