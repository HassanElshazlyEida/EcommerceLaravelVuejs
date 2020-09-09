@extends('admin.index')
@section('content')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{$title}}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
       {!! Form::open(['route'=>'countries.store','files'=>true]) !!}
       <div class="form-group">

            {!! Form::label('country_name_ar',__('admin.country_name_ar'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}
            {!! Form::text('country_name_ar',old('country_name_ar'),['class'=>'form-control ']) !!}

       </div>
       <div class="form-group">
            {!! Form::label('country_name_en',__('admin.country_name_ar'),['class'=>lang()=='en' ? "" : "float-right" ])!!}
            {!! Form::text('country_name_en',old('country_name_en'),['class'=>'form-control']) !!}
       </div>
       <div class="form-group">
            {!! Form::label('code',__('admin.code'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}
            {!! Form::text('code',old('country_name_en'),['class'=>'form-control']) !!}
       </div>
       <div class="form-group">
        {!! Form::label('mob',__('admin.mob'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}
        {!! Form::text('mob',old('country_name_en'),['class'=>'form-control']) !!}
        </div>
       <div class="form-group">
        {!! Form::label('logo',__('admin.logo_cr'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}
        {!! Form::file('logo',['class'=>"form-control"]) !!}
        </div>
            {!! Form::submit(__('admin.create_countries'),['class'=>'btn btn-primary']) !!}
            {!! Form::close()!!}
    </div>
    <!-- /.card-body -->
</div>



@endsection

