@extends('admin.index')
@section('content')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{$title}}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! $dataTable->table([
            'class'=>'dataTable table table-bordered table-hover'
        ])!!}
    </div>
    <!-- /.card-body -->
  </div>
@push('js')
  {!! $dataTable->scripts() !!}
@endpush
@endsection

