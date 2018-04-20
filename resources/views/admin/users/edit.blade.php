@extends('layouts.adminmain')
@section('content')
  
  <!-- Start page content wrapper -->
<div class="page-content-wrapper animated fadeInRight">
  <div class="page-content" >
    <div class="row wrapper border-bottom page-heading">
      <div class="col-lg-12">
        <h2> Form Stuff </h2>
        <ol class="breadcrumb">
          <li> <a href="index.html">Home</a> </li>
          <li> <a>UI Features</a> </li>
          <li class="active"> <strong> Form Stuff </strong> </li>
        </ol>
      </div>
    </div>
    <div class="wrapper-content " style="margin-left: 190px">
      <div class="row">
        <!-- Basic Form start -->
        <div class="col-lg-6">
          <div class="ibox float-e-margins">
            <div class="widgets-container">
              <h5>Basic Form </h5>
              <hr>
              {!! Form::model($user, ['route' => ['account.update', $user->id], 'method' => 'PATCH', 'files' =>true]) !!}
               
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="name">Username</label>
                  {{ Form::text('name', null, ["class" => 'form-control m-t-xxs']) }}
                  @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}} </p>
                     @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email">Email address</label>
                  {{ Form::text('email', null, ["class" => 'form-control m-t-xxs']) }}
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
                {{ Form::select('role_id', $roles, null, ["class" => 'form-control input-lg']) }}
<hr>
                {{ Form::submit('Update User', ['class' => 'btn btn-success btn-lg btn-block'])}}
              {!! Form::close() !!}
            </div>
          </div>
        </div>
        <!-- Basic Form End -->
       
        
      </div>
    </div>

@endsection