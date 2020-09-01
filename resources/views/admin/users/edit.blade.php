@extends('admin.index')
@section('content')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{$title}}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
       {!! Form::open(['route'=>['users.update',$user->id],'method'=>'PATCH']) !!}
       <div class="form-group">

            {!! Form::label('name',__('admin.user_name'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}
            {!! Form::text('name',$user->name,['class'=>'form-control ','required' => true]) !!}

       </div>
       <div class="form-group">
            {!! Form::label('email',__('admin.user_email'),['class'=>lang()=='en' ? "" : "float-right" ])!!}
            {!! Form::email('email',$user->email,['class'=>'form-control','required' => true]) !!}
       </div>
       <div class="form-group">
            {!! Form::label('password',__('admin.user_password'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
       </div>
       <div class="form-group">
        {!! Form::label('level',__('admin.level'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}
        {!! Form::select('level',['user'=>__("admin.user"),'vendor'=>__("admin.vendor"),'company'=>__("admin.company")],$user->level,array('class'=>'form-control','placeholder'=>'. . . . . . . .')) !!}
        </div>
           {!! Form::submit(__('admin.save'),['class'=>'btn btn-primary']) !!}
            {!! Form::close()!!}
    </div>
    <!-- /.card-body -->
</div>



@endsection

