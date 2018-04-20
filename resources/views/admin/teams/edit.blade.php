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
          <li class="active"> <strong> Edit Team </strong> </li>
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
              {!! Form::model($team, ['route' => ['team.update', $team->id], 'method' => 'PATCH', 'files' =>true]) !!}
              	
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                  <label>Team Name</label>
                  {{ Form::text('name', null, ["class" => 'form-control m-t-xxs']) }}
                    @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}} </p>
                     @endif
                </div>

                 <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                  <label>Position</label>
                  {{ Form::text('position', null, ["class" => 'form-control m-t-xxs']) }}
                    @if ($errors->has('position'))
                        <p class="help is-danger">{{$errors->first('position')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                  <label>Team Description</label>
                  {{ Form::textarea('content', null, ["class" => 'form-control m-t-xxs']) }}
                  @if ($errors->has('content'))
                        <p class="help is-danger">{{$errors->first('content')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  {{ Form::label('team_image', 'Upload team Image:')}}
                  {{ Form::file('team_image')}}
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
                  <label>Linkedin</label>
                  {{ Form::text('linkedin', null, ["class" => 'form-control m-t-xxs']) }}             
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