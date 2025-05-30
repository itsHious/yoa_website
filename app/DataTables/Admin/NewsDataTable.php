<?php

namespace App\DataTables\Admin;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class NewsDataTable extends DataTable
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

          ->editColumn('cover_img', function ($query){
            return '<img src="'.env('APP_URL').'/'.$query->cover_img.'"  class="img-rounded img-fluid text-center"  width="100"/>';
          })

          ->editColumn('action', function ($query){
            return '
           <a href="'.route('admin.news.view',$query->id).'" class="btn btn-primary">View</a>
   <a href="'.route('admin.news.edit',$query->id).'" class="btn btn-info">Edit</a>
   <a href="#" data-toggle="modal" data-target="#modal_1_'.$query->id.'" class="btn btn-danger">Delete</a>
            
            
            <div class="modal  fade" id="modal_1_'.$query->id.'" tabindex="-1" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
              <div class="modal-dialog modal-md" role="document">
                  <div class="modal-content">
                  <div class="modal-header border"><h6 class="heading h6">Delete '.$query->name.'  </h6></div>
                      <div class="modal-body">
                          <div class="row justify-content-center">
                              <div class="col-lg-11 text-center py-4">
                                  <form  action="'.route('news.delete',$query->id).'" method="post">
                                  '.csrf_field().'
                                  <p class="text-center">Delete this news article! <br> Action is irreversible</p>
                                    <div class="text-center">
                                      <button " type="submit" class="btn text-white btn-danger btn-sm col-lg-7" name="button">Delete News Article</button>
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
            ->rawColumns(['cover_img','action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(News $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('news-table')
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
            
            Column::make('cover_img'),
            Column::make('title'),
            Column::make('content_type'),
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
        return 'News_' . date('YmdHis');
    }
}
