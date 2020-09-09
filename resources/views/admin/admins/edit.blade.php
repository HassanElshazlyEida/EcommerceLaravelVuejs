@extends('admin.index')
@section('content')


<div class="card">
    <div class="card-header">
      <h3 class="card-title text-center">{{$title}}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
       {!! Form::open(['route'=>['admins.update',$admin->id],'method'=>'PATCH']) !!}
       <div class="form-group">

            {!! Form::label('name',__('admin.admin_name'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}
            {!! Form::text('name',$admin->name,['class'=>'form-control ','required' => true]) !!}

       </div>
       <div class="form-group">
            {!! Form::label('email',__('admin.admin_email'),['class'=>lang()=='en' ? "" : "float-right" ])!!}
            {!! Form::email('email',$admin->email,['class'=>'form-control','required' => true]) !!}
       </div>
       <div class="form-group">
            {!! Form::label('password',__('admin.admin_password'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
       </div>
            {!! Form::submit(__('admin.save'),['class'=>'btn btn-primary']) !!}
            {!! Form::close()!!}
    </div>
    <!-- /.card-body -->
</div>



@endsection

