@extends('layouts.adminmain')
@section('content')
  <!-- Start page content wrapper -->
  <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content" >
      <div class="row wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2>Supports </h2>
          <ol class="breadcrumb">
            <li> <a href="/dashboard">Dashboard</a> </li>
            <li> <a> Apps </a> </li>
            <li class="active"> <strong>Supports </strong> </li>
          </ol>
        </div>
      </div>
      @if(session()->has('success'))
          <div class="alert alert-success">
             {{ session()->get('success')}}
         </div>
      @endif

       @if(count($errors) > 0)
           <div class="alert alert-danger">
             <ul>
                @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                       @endforeach
                     </ul>
                   </div>
                 @endif
      <div class="wrapper-content ">
        <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                <h5>All Support For This Websites</h5>
                <div class="ibox-tools"> <a class="btn aqua btn-xs" href="{{ route('support.create')}}">Create new Support</a> </div>
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
                          <th>Title</th>
                          <th>Content</th>
                          <th>Link</th>
                          <th>Heading</th>
                          <th class="project-actions">Actions</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($supports as $support)
                        <tr>
                          <td class="project-status"><span class="label btn red">Active</span> </td>
                          <td class="project-title"><a>{!! substr(strip_tags($support->title), 0, 20) !!} {!! strlen(strip_tags($support->title)) > 20 ? "...." : "" !!}</a> <br>
                          </td>
                          <td>{!! substr(strip_tags($support->content), 0, 50) !!} {!! strlen(strip_tags($support->content)) > 50 ? "...." : "" !!}</td>
                          <td>{!! substr(strip_tags($support->link), 0, 50) !!} {!! strlen(strip_tags($support->link)) > 50 ? "...." : "" !!}</td>
                          <td>{!! substr(strip_tags($support->heading), 0, 50) !!} {!! strlen(strip_tags($support->heading)) > 50 ? "...." : "" !!}</td>
                          <td class="project-actions"><a class="aqua btn btn-outline btn-sm" href="{{ route('support.show', $support->id) }}"><i class="fa fa-folder"></i> View </a> <a class="red btn btn-outline btn-sm" href="{{ route('support.edit', $support->id) }}"><i class="fa fa-pencil"></i> Edit </a> </td>
                          <td>
                          {!! Form::open(['method' => 'DELETE','route' => ['support.destroy', $support->id],'style'=>'display:inline']) !!}
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