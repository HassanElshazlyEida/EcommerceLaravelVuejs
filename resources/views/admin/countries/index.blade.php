@extends('admin.index')
@section('content')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{$title}}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['id'=>'form_data','url'=>aurl('countries/destroy/all'),'method'=>'delete']) !!}
        {!! $dataTable->table([
            'class'=>'dataTable table table-bordered table-hover'
        ],true)!!}
        {!! Form::close() !!}
    </div>
    <!-- /.card-body -->
</div>

    <!-- Modal Alert  -->
    <div id="multipleDelete" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{__("admin.admin_table_delete_all")}}</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    <div class="empty_record hidden">
                        <h4>{{__('admin.please_check_records')}}   </h4>
                    </div>
                    <div class="not_empty_record hidden">
                        <h4>{{__('admin.admin_ask_delete')}}    <span class="record_count"></span> {{__('admin.table_record_delete')}}?</h4>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="not_empty_record hidden">
                    <button type="button"   class="btn btn-default" data-dismiss="modal">{{__("admin.table_record_delete_no")}}</button>
                    <input type="submit"  value="{{__("admin.table_record_delete_yes")}}" class="btn btn-danger del_all" >
                </div>
                <div class="empty_record hidden">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">{{__("admin.table_record_delete_close")}}</button>
                </div>
            </div>
            </div>

        </div>
    </div>

@push('js')
    <script>
        delete_all();
    </script>
    {!! $dataTable->scripts() !!}
@endpush
@push('css')
    <style>
        .hidden {
            display:none;
        }
    </style>
@endpush
@endsection

