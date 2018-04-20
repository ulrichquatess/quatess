@extends('layouts.adminmain')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
	<!-- Start page content wrapper -->
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2>Support </h2>
        <ol class="breadcrumb">
          <li> <a href="/dashboard">Home</a> </li>
          <li> <a>UI</a> </li>
          <li class="active"> <strong> Edit Support </strong> </li>
        </ol>
      </div>
    </div>
    <div class="wrapper-content ">
      <div class="row">
        <!-- Basic Form start -->
        <div class="col-lg-12">
          <div class="ibox float-e-margins">
            <div class="widgets-container">
              <h5>User Form </h5>
              <hr>
              {!! Form::model($support, ['route' => ['support.update', $support->id], 'method' => 'PATCH', 'files' =>true]) !!}
              	
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                  <label>Title of Support</label>
                  {{ Form::text('title', null, ["class" => 'form-control m-t-xxs']) }}
                    @if ($errors->has('title'))
                        <p class="help is-danger">{{$errors->first('title')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                  <label>Support Description</label>
                  {{ Form::textarea('content', null, ["class" => 'form-control m-t-xxs']) }}
                  @if ($errors->has('content'))
                        <p class="help is-danger">{{$errors->first('content')}} </p>
                     @endif
                </div>

                 <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                  <label>Link</label>
                  {{ Form::text('link', null, ["class" => 'form-control m-t-xxs']) }}
                    @if ($errors->has('link'))
                        <p class="help is-danger">{{$errors->first('link')}} </p>
                     @endif
                </div>

                 <div class="form-group{{ $errors->has('heading') ? ' has-error' : '' }}">
                  <label>Heading Shown</label>
                  {{ Form::text('heading', null, ["class" => 'form-control m-t-xxs']) }}
                    @if ($errors->has('heading'))
                        <p class="help is-danger">{{$errors->first('heading')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  {{ Form::label('support_image', 'Upload Support Image:')}}
                  {{ Form::file('support_image')}}
                </div>
    
                <div class="box-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ route('support.index') }}" class="btn btn-warning" style="float: right;">Cancel</a>
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
        <!-- Basic Form End -->
       
        
      </div>
    </div>

@endsection