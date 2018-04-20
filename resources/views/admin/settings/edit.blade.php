@extends('layouts.adminmain')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
	<!-- Start page content wrapper -->
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2>Setting </h2>
        <ol class="breadcrumb">
          <li> <a href="/dashboard">Home</a> </li>
          <li> <a>UI</a> </li>
          <li class="active"> <strong> Edit Setting </strong> </li>
        </ol>
      </div>
    </div>
    <div class="wrapper-content ">
      <div class="row">
        <!-- Basic Form start -->
        <div class="col-lg-12">
          <div class="ibox float-e-margins">
            <div class="widgets-container">
              <h5>Setting Form </h5>
              <hr>
              {!! Form::model($setting, ['route' => ['setting.update', $setting->id], 'method' => 'PATCH', 'files' =>true]) !!}
              	
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label>Email</label>
                  {{ Form::text('email', null, ["class" => 'form-control m-t-xxs']) }}
                    @if ($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}} </p>
                     @endif
                </div>

                 <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                  <label>Address</label>
                  {{ Form::text('address', null, ["class" => 'form-control m-t-xxs']) }}
                    @if ($errors->has('address'))
                        <p class="help is-danger">{{$errors->first('address')}} </p>
                     @endif
                </div>

                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                  <label>Phone</label>
                  {{ Form::text('phone', null, ["class" => 'form-control m-t-xxs']) }}
                    @if ($errors->has('phone'))
                        <p class="help is-danger">{{$errors->first('phone')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  <label>Facebook</label>
                  {{ Form::text('facebook', null, ["class" => 'form-control m-t-xxs']) }}
                    
                </div>

                <div class="form-group">
                  <label>Twitter</label>
                  {{ Form::text('twitter', null, ["class" => 'form-control m-t-xxs']) }}        
                </div>  

                <div class="form-group">
                  <label>Google+</label>
                  {{ Form::text('google', null, ["class" => 'form-control m-t-xxs']) }}        
                </div>  

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ route('setting.index') }}" class="btn btn-warning" style="float: right;">Cancel</a>
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
        <!-- Basic Form End -->
       
        
      </div>
    </div>

@endsection