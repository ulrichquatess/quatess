@extends('layouts.adminmain')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
	<!-- Start page content wrapper -->
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2>Blog </h2>
        <ol class="breadcrumb">
          <li> <a href="/dashboard">Home</a> </li>
          <li> <a>UI</a> </li>
          <li class="active"> <strong> Create Blog </strong> </li>
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
              {!! Form::open(['route' => 'blog.store', 'data-parsley-validate' => '', 'files' => true]) !!}
              	
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                  <label>Title of Blog</label>
                  <input type="text" name="title" id="title" class="form-control m-t-xxs" placeholder="Enter title..." required>
                    @if ($errors->has('title'))
                        <p class="help is-danger">{{$errors->first('title')}} </p>
                     @endif
                </div>

                 <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                  <label>Blog Slug</label>
                  <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter Slug..." required>
                    @if ($errors->has('slug'))
                        <p class="help is-danger">{{$errors->first('slug')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                  <label>Blog Description</label>
                  <textarea class="form-control" name="content" id="content" rows="3" placeholder="Entre Content..."></textarea>
                  @if ($errors->has('content'))
                        <p class="help is-danger">{{$errors->first('content')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  {{ Form::label('blog_image', 'Upload Blog Image:')}}
                  {{ Form::file('blog_image')}}
                </div>

                <div class="form-group">
                  <label>Sub Title</label>
                  <input type="text" name="title_1" id="title_1" class="form-control" placeholder="Enter sub title(Optional) ...">
                    
                </div>

                <div class="form-group">
                  <label>Sub Title 2</label>
                  <input type="text" name="title_2" id="title_2" class="form-control" placeholder="Enter Any Sub title(Optional) ...">
                    
                </div>    
                <div class="box-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ route('blog.index') }}" class="btn btn-warning" style="float: right;">Cancel</a>
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
        <!-- Basic Form End -->
       
        
      </div>
    </div>

@endsection