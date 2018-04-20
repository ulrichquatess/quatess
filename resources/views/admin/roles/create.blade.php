@extends('layouts.adminmain')
@section('content')
	
	<!-- Start page content wrapper -->
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="wrapper-content " style="margin-left: 190px">
      <div class="row">
        <!-- Basic Form start -->
        <div class="col-lg-6">
          <div class="ibox float-e-margins">
            <div class="widgets-container">
              <h5>Basic Form </h5>
              <hr>
              {!! Form::open(['route' => 'role.store', 'data-parsley-validate' => '', 'files' => true]) !!}
              	{{ csrf_field() }}

                <div class="form-group">
                  <label for="name">User Role</label>
                  <input class="form-control m-t-xxs" id="name" placeholder="Enter user role" type="text" name="name">
                  @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}} </p>
                     @endif
                </div>

                {{ Form::submit('Create New Role', ['class' => 'btn btn-success btn-lg btn-block'])}}
              {!! Form::close() !!}
            </div>
          </div>
        </div>
        <!-- Basic Form End -->
       
        
      </div>
    </div>

@endsection