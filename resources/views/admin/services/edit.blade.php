@extends('layouts.adminmain')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
	<!-- Start page content wrapper -->
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2>Service </h2>
        <ol class="breadcrumb">
          <li> <a href="/dashboard">Home</a> </li>
          <li> <a>UI</a> </li>
          <li class="active"> <strong> Edit Service </strong> </li>
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
              {!! Form::model($service, ['route' => ['service.update', $service->id], 'method' => 'PATCH', 'files' =>true]) !!}
              	
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                  <label>Title of Service</label>
                  {{ Form::text('title', null, ["class" => 'form-control m-t-xxs']) }}
                    @if ($errors->has('title'))
                        <p class="help is-danger">{{$errors->first('title')}} </p>
                     @endif
                </div>

                 <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                  <label>Service Slug</label>
                  {{ Form::text('slug', null, ["class" => 'form-control m-t-xxs']) }}
                    @if ($errors->has('slug'))
                        <p class="help is-danger">{{$errors->first('slug')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                  <label>Service Description</label>
                  {{ Form::textarea('content', null, ["class" => 'form-control m-t-xxs']) }}
                  @if ($errors->has('content'))
                        <p class="help is-danger">{{$errors->first('content')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  {{ Form::label('service_image', 'Upload service Image:')}}
                  {{ Form::file('service_image')}}
                </div>

                <div class="form-group">
                  <label>Sub Title</label>
                  {{ Form::text('title_1', null, ["class" => 'form-control m-t-xxs']) }}
                    
                </div>

                <div class="form-group">
                  {{ Form::label('service1_image', 'Upload Main Image:')}}
                  {{ Form::file('service1_image')}}
                </div>

                <div class="form-group">
                  <label>Sub Title 2</label>
                  {{ Form::text('title_2', null, ["class" => 'form-control m-t-xxs']) }}
                    
                </div>    
                <div class="box-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ route('service.index') }}" class="btn btn-warning" style="float: right;">Cancel</a>
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
        <!-- Basic Form End -->
       
        
      </div>
    </div>

@endsection