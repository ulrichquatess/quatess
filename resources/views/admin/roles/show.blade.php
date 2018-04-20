@extends('layouts.adminmain')
@section('content')
 <!-- Start page content wrapper -->
  <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content" >
      
      <div class="wrapper-content ">
          <div class="row article">
            <div class="col-lg-10 col-lg-offset-1">    
                  <div class="text-center article-title"> <span class="text-muted"><i class="fa fa-clock-o"></i> 18th Dec 2016</span>
                    <h1> View Roles For Admin </h1>
                  </div>
                  <!-- /article-title -->

                  <!-- article end -->
                  <div class="row">
                    <div class="col-md-6">
                   <a href="{{ route('role.index')}}" class="btn green btn-outline sbold btn-xs"> Cancel </a> 
                   <a href="{{ route('role.create')}}" class="btn red btn-outline sbold btn-xs"> Create New </a>
                  </div>

                  <!-- comments start-->
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="social-feed-box">
                        <div class="social-avatar">
                          <div class="media-body"> <a> Created at: </a> <small class="text-muted">{{ date( 'M j Y h:ia ', strtotime( $role->updated_at ))}}</small> </div>
                        </div>
                        <div class="social-body">
                          <p> {{ $role->name }} </p>
                        </div>
                      </div>
          
                    </div>
                  </div>
                  <!-- comments end-->
                </div>
              </div>
            </div>
          </div>
          <!-- /article -->
        </div>
        <!-- /wrapper-content -->

        @endsection