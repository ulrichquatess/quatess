@extends('layouts.adminmain')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
	<!-- Start page content wrapper -->
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2>Team </h2>
        <ol class="breadcrumb">
          <li> <a href="/dashboard">Home</a> </li>
          <li> <a>UI</a> </li>
          <li class="active"> <strong> Create Team  </strong> </li>
        </ol>
      </div>
    </div>
    <div class="wrapper-content ">
      <div class="row">
        <!-- Basic Form start -->
        <div class="col-lg-12">
          <div class="ibox float-e-margins">
            <div class="widgets-container">
              <h5>Team Form </h5>
              <hr>
              {!! Form::open(['route' => 'team.store', 'data-parsley-validate' => '', 'files' => true]) !!}
              	
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                  <label>Team Name</label>
                  <input type="text" name="name" id="name" class="form-control m-t-xxs" placeholder="Enter title..." required>
                    @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}} </p>
                     @endif
                </div>

                 <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                  <label>Team Position</label>
                  <input type="text" name="position" id="slug" class="form-control" placeholder="Enter Slug..." required>
                    @if ($errors->has('position'))
                        <p class="help is-danger">{{$errors->first('position')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                  <label>Team Description</label>
                  <textarea class="form-control" name="content" id="content" rows="3" placeholder="Entre Content..."></textarea>
                  @if ($errors->has('content'))
                        <p class="help is-danger">{{$errors->first('content')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  {{ Form::label('team_image', 'Upload Tean Image:')}}
                  {{ Form::file('team_image')}}
                </div>

                <div class="form-group">
                  <label>Facebook</label>
                  <input type="text" name="facebook" id="facebook" class="form-control" placeholder="Enter  Facebook (Optional) ...">
                    
                </div>

                <div class="form-group">
                  <label>Twitter</label>
                  <input type="text" name="twitter" id="twitter" class="form-control" placeholder="Enter Twiiter (Optional) ...">

                  <div class="form-group">
                  <label>Linkedin</label>
                  <input type="text" name="linkedin" id="linkedin" class="form-control" placeholder="Enter linkedin (Optional) ...">
                    
                </div>    
                <div class="box-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ route('team.index') }}" class="btn btn-warning" style="float: right;">Cancel</a>
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
        <!-- Basic Form End -->
       
        
      </div>
    </div>

@endsection