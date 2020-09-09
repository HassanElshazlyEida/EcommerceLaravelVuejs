@extends('admin.index')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title text-center"  >{{ $title }}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('settings'),'files'=>true]) !!}<!-- file true meanwhile enctype="multipart/form-data" -->
    <div class="form-group">
      {!! Form::label('sitename_ar',__('admin.sitename_ar'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}
      {!! Form::text('sitename_ar',isset(setting()->sitename_ar) ? setting()->sitename_ar : null,['class'=>'form-control ',]) !!}
    </div>
    <div class="form-group">
      {!! Form::label('sitename_en',__('admin.sitename_en'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}
      {!! Form::text('sitename_en',isset(setting()->sitename_en) ? setting()->sitename_en: null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('email',__('admin.admin_email'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}

      {!! Form::email('email',isset(setting()->email) ? setting()->email : null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('logo',__('admin.logo'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}
        <input type="file" class="form-control" name="logo" id="logo">
      @if(isset(setting()->logo))
        @if(!empty(setting()->logo))
        <div class="row text-center">
            <img src="{{Storage::url(setting()->logo)}}" alt="logo" style="width: 100px;height:100px" class="img-thumbnail center-block">
        </div>
        @endif
      @endif
    </div>
    <div class="form-group">
      {!! Form::label('icon',__('admin.icon'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}
        <input type="file" class="form-control" name="icon" id="icon">
     @if(isset(setting()->icon))
        @if(!empty(setting()->icon))
        <div class="row text-center">
            <img src="{{Storage::url(setting()->icon)}}" alt="icon" style="width: 100px;height:100px"  class="img-thumbnail center-block" >
        </div>
         @endif
      @endif
    </div>
    <div class="form-group">
      {!! Form::label('description',__('admin.description'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}
      {!! Form::textarea('description',isset(setting()->description) ? setting()->description: null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('keywords',__('admin.keywords'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}
      {!! Form::textarea('keywords',isset(setting()->keywords) ? setting()->keywords : null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('main_lang',__('admin.main_lang'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}
      {!! Form::select('main_lang',['ar'=>__('admin.ar'),'en'=>__('admin.en')],isset(setting()->main_lang) ? setting()->main_lang: null,['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
      {!! Form::label('status',__('admin.status'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}
      {!! Form::select('status',['open'=>__('admin.open'),'close'=>__('admin.close')],isset(setting()->status) ? setting()->status : null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('message_maintenance',__('admin.message_maintenance'),['class'=>lang()=='en' ? "" : "float-right" ]) !!}
      {!! Form::textarea('message_maintenance',isset(setting()->message_maintenance) ? setting()->message_maintenance: null,['class'=>'form-control']) !!}
    </div>
    {!! Form::submit(__('admin.save'),['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection
