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
              <h5>Edit Role </h5>
              <hr>
              {!! Form::model($role, ['route' => ['role.update', $role->id], 'method' => 'PATCH']) !!}

                <div class="form-group">
                  <label for="name">User Role</label>
                  {{ Form::text('name', null, ["class" => 'form-control m-t-xxs']) }}
                  
                  @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}} </p>
                     @endif
                </div>

                {{ Form::submit('Edit Role', ['class' => 'btn btn-success btn-lg btn-block'])}}
              {!! Form::close() !!}
            </div>
          </div>
        </div>
        <!-- Basic Form End -->
       
        
      </div>
    </div>

@endsection