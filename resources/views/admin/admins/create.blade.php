@extends('admin.index')
@section('content')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{$title}}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
       {!! Form::open(['route'=>'admins.store']) !!}
       <div class="form-group">

            {!! Form::label('name',__('admin.admin_name'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}
            {!! Form::text('name',old('name'),['class'=>'form-control ','required' => true]) !!}

       </div>
       <div class="form-group">
            {!! Form::label('email',__('admin.admin_email'),['class'=>lang()=='en' ? "" : "float-right" ])!!}
            {!! Form::email('email',old('email'),['class'=>'form-control','required' => true]) !!}
       </div>
       <div class="form-group">
            {!! Form::label('password',__('admin.admin_password'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}
            {!! Form::password('password',['class'=>'form-control','required' => true]) !!}
       </div>
            {!! Form::submit(__('admin.admin_create'),['class'=>'btn btn-primary']) !!}
            {!! Form::close()!!}
    </div>
    <!-- /.card-body -->
</div>



@endsection

