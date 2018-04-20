@extends('layouts.adminmain')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ 
  selector:'textarea',
  plugins: "image",
  file_picker_types: 'file image media'
});</script>
	<!-- Start page content wrapper -->
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2>Page </h2>
        <ol class="breadcrumb">
          <li> <a href="/dashboard">Home</a> </li>
          <li> <a>UI</a> </li>
          <li class="active"> <strong> Edit Page </strong> </li>
        </ol>
      </div>
    </div>
    <div class="wrapper-content ">
      <div class="row">
        <!-- Basic Form start -->
        <div class="col-lg-12">
          <div class="ibox float-e-margins">
            <div class="widgets-container">
              <h5>Page Form </h5>
              <hr>
              {!! Form::model($page, ['route' => ['page.update', $page->id], 'method' => 'PATCH', 'files' =>true]) !!}
              	
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                  <label>Title of Page</label>
                  {{ Form::text('title', null, ["class" => 'form-control m-t-xxs']) }}
                    @if ($errors->has('title'))
                        <p class="help is-danger">{{$errors->first('title')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                  <label>Page Description</label>
                  {{ Form::textarea('content', null, ["class" => 'form-control m-t-xxs']) }}
                  @if ($errors->has('content'))
                        <p class="help is-danger">{{$errors->first('content')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  {{ Form::label('page_image', 'Upload page Image:')}}
                  {{ Form::file('page_image')}}
                </div>
    
                <div class="box-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ route('page.index') }}" class="btn btn-warning" style="float: right;">Cancel</a>
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
        <!-- Basic Form End -->
       
        
      </div>
    </div>

@endsection