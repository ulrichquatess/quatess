@extends('layouts.adminmain')
@section('content')

 <!-- Start page content wrapper -->
  <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content" >
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
          <div class="row article">
            <div class="col-lg-10 col-lg-offset-1">    
                  <div class="text-center article-title"> <span class="text-muted"><i class="fa fa-clock-o"></i> 18th Dec 2016</span>
                    <h1> View Admin User </h1>
                  </div>
                  <!-- /article-title -->

                  <!-- article end -->
                  <div class="row">
                    <div class="col-md-6">
                   <a href="{{ route('account.index')}}" class="btn green btn-outline sbold btn-xs"> Cancel </a> 
                   <a href="{{ route('account.create')}}" class="btn red btn-outline sbold btn-xs"> Create New </a>
                  </div>

                  <!-- comments start-->
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="social-feed-box">
                        <div class="social-avatar">
                          <div class="media-body"> <a> Created at: </a> <small class="text-muted">{{ date( 'M j Y h:ia ', strtotime( $user->updated_at ))}}</small> </div>
                        </div>
                        <div class="social-body">
                          <h2> {{ $user->name }} </h2> <h2> {{ $user->email }} </h2>
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