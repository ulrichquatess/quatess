@extends('layouts.adminmain')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
	<!-- Start page content wrapper -->
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2>Client </h2>
        <ol class="breadcrumb">
          <li> <a href="/dashboard">Home</a> </li>
          <li> <a>UI</a> </li>
          <li class="active"> <strong> Create Client </strong> </li>
        </ol>
      </div>
    </div>
    <div class="wrapper-content ">
      <div class="row">
        <!-- Basic Form start -->
        <div class="col-lg-12">
          <div class="ibox float-e-margins">
            <div class="widgets-container">
              <h5>Client Form </h5>
              <hr>
              {!! Form::open(['route' => 'client.store', 'data-parsley-validate' => '', 'files' => true]) !!}
              	
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label>Name Of Client</label>
                  <input type="text" name="name" id="name" class="form-control m-t-xxs" placeholder="Enter title..." required>
                    @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}} </p>
                     @endif
                </div>

                 <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                  <label>Position</label>
                  <input type="text" name="position" id="position" class="form-control" placeholder="Enter Slug..." required>
                    @if ($errors->has('position'))
                        <p class="help is-danger">{{$errors->first('position')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                  <label>Client Description</label>
                  <textarea class="form-control" name="content" id="content" rows="3" placeholder="Entre Content..."></textarea>
                  @if ($errors->has('content'))
                        <p class="help is-danger">{{$errors->first('content')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  {{ Form::label('client_image', 'Upload Client Image:')}}
                  {{ Form::file('client_image')}}
                </div>

                <div class="form-group">
                  <label>Company</label>
                  <input type="text" name="company" id="company" class="form-control" placeholder="Enter sub title(Optional) ...">    
                </div>

                </div>    
                <div class="box-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ route('client.index') }}" class="btn btn-warning" style="float: right;">Cancel</a>
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
        <!-- Basic Form End -->
       
        
      </div>
    </div>

@endsection