@extends('layouts.adminmain')
@section('content')
	
	<!-- Start page content wrapper -->
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2>Users </h2>
        <ol class="breadcrumb">
          <li> <a href="index.html">Home</a> </li>
          <li> <a>UI</a> </li>
          <li class="active"> <strong> Create User </strong> </li>
        </ol>
      </div>
    </div>
    <div class="wrapper-content " style="margin-left: 190px">
      <div class="row">
        <!-- Basic Form start -->
        <div class="col-lg-6">
          <div class="ibox float-e-margins">
            <div class="widgets-container">
              <h5>User Form </h5>
              <hr>
              {!! Form::open(['route' => 'account.store', 'data-parsley-validate' => '', 'files' => true]) !!}
              	{{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="name">Username</label>
                  <input class="form-control m-t-xxs" id="name" placeholder="Enter name" type="text" name="name" required autofocus>
                  @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}} </p>
                     @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email">Email address</label>
                  <input class="form-control m-t-xxs" id="email" placeholder="Enter email" type="email" name="email" required>
                  @if ($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}} </p>
                     @endif
                </div>

                {{ Form::label('user_image', 'Upload User Image:')}}
            	{{ Form::file('user_image')}}

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password">Password</label>
                  <input name="password" class="password form-control m-t-xxs" id="password" name="password" placeholder="Password" type="password">
                  @if ($errors->has('password'))
                        <p class="help is-danger">{{$errors->first('password')}} </p>
                     @endif
                </div>   

                {{ Form::label('role_id', 'Role:') }}
            <select class="form-control" name="role_id" style="margin-bottom: 20px;">
               @foreach($role as $role)
                 <option value="{{ $role->id }}">{{ $role->name }}</option>
               @endforeach
            </select>

                {{ Form::submit('Create New User', ['class' => 'btn btn-success btn-lg btn-block'])}}
              {!! Form::close() !!}
            </div>
          </div>
        </div>
        <!-- Basic Form End -->
       
        
      </div>
    </div>

@endsection