@extends('layouts.adminmain')
@section('content')
	<!-- Start page content wrapper -->
  <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content" >
      <div class="row wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2>Roles </h2>
          <ol class="breadcrumb">
            <li> <a href="/dashboard">Dashboard</a> </li>
            <li> <a> Apps </a> </li>
            <li class="active"> <strong>Roles </strong> </li>
          </ol>
        </div>
      </div>
      <div class="wrapper-content ">
        <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                <h5>All roles assigned to this account</h5>
                <div class="ibox-tools"> <a class="btn aqua btn-xs" href="{{ route('role.create')}}">Create new role</a> </div>
              </div>
              <div class="ibox-content collapse in" id="demo1">
                <div class="widgets-container">
                  <div class="row m-b-sm m-t-sm">
                    <div class="col-md-1">
                      <button class="red btn btn-outline btn-sm" id="loading-example-btn" type="button"><i class="fa fa-refresh"></i> Refresh</button>
                    </div>
                    <div class="col-md-11">
                      <div class="input-group">
                        <input id="search-projects" type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
                        <button class="btn btn-sm aqua" type="button"> Go!</button>
                        </span></div>
                    </div>
                  </div>
                  <!-- All projects assigned to this account -->
                  <div class="project-list">
                    <table id="proList" class="table table-hover  responsive nowrap table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th> Name</Roleth>
                          <th>Created Date</th>
                          <th>Last Date</th>
                          <th class="project-actions">Actions</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($roles as $role)
                        <tr>
                          <td class="project-status"><span class="label btn red">Active</span> </td>
                          <td class="project-title"><a>{{ $role->name }}</a> <br>
						  </td>
                          <td>{{ date( 'M j Y h:ia ', strtotime( $role->created_at ))}}</td>
                          <td>{{ date( 'M j Y h:ia ', strtotime( $role->updated_at ))}}</td>
                          <td class="project-actions"><a class="aqua btn btn-outline btn-sm" href="{{ route('role.show', $role->id) }}"><i class="fa fa-folder"></i> View </a> <a class="red btn btn-outline btn-sm" href="{{ route('role.edit', $role->id) }}"><i class="fa fa-pencil"></i> Edit </a> </td>
                          <td>
                          {!! Form::open(['method' => 'DELETE','route' => ['role.destroy', $role->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'red btn btn-outline btn-sm']) !!}
                        {!! Form::close() !!}
                        </td>
                        </tr>
                        @endforeach                     
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection