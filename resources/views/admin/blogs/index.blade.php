@extends('layouts.adminmain')
@section('content')
	<!-- Start page content wrapper -->
  <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content" >
      <div class="row wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2> Blog</h2>
          <ol class="breadcrumb">
            <li> <a href="index.html">Home</a> </li>
            <li> <a> App Views </a> </li>
            <li class="active"> <strong> Blog</strong> </li>
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
        <div class="row blog">
          <div class="col-lg-4">
            <!-- blog 1 -->
            @foreach($blog as $blog)
            <div class="ibox"> <img alt="" class="full-width" src="{{asset('images/blogs/'.$blog->image)}}">
              <div class="widgets-container padding-top10"> <a class="btn-link" href="{{ route('blog.show', $blog->id)}}">
                <h2 class="hed"> {{ $blog->title}} </h2>
                </a>
                <div class="small bottom5"> <strong>Ulrich Quatess</strong> <span class="text-muted right"><i class="fa fa-clock-o"></i> {{ date( 'M j Y h:ia ', strtotime( $blog->updated_at ))}}</span> </div>
                <p> {!! substr(strip_tags($blog->content), 0, 100) !!} {!! strlen(strip_tags($blog->content)) > 100 ? "...." : "" !!}</p>
                <div class="row">
                  <div class="col-md-6">
                    <h5>Tags:</h5>
                    <a href="{{ route('blog.edit', $blog->id)}}" class="btn green btn-outline sbold btn-xs"> Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['blog.destroy', $blog->id],'style'=>'display:inline']) !!}
                      {!! Form::submit('Delete', ['class' => 'btn red btn-outline sbold btn-xs']) !!}
                    {!! Form::close() !!}
                  </div>
                  <div class="col-md-6">
                    <div class="small text-right">
                      <h5>Stats:</h5>
                      <div> <i class="fa fa-comments-o"> </i> My Signature </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            
          </div>
          
          
        </div>
      </div>
      
@endsection