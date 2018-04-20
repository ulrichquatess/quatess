@extends('layouts.adminmain')
@section('content')
	<!-- Start page content wrapper -->
  <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content" >
      <div class="row wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2> Portfolio grid</h2>
          <ol class="breadcrumb">
            <li> <a href="/dashboard">Home</a> </li>
            <li> <a> Portfolio </a> </li>
            <li class="active"> <strong>Portfolios grid</strong> </li>
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
          <!-- grid box start -->
          @foreach($portfolio as $portfolio)
          <div class="col-md-3">
            <div class="ibox white-bg">
              <div class="ibox-content product-box"> <img alt="" class="img-responsive" src="{{asset('images/portfolios/'.$portfolio->image)}}">
                <div class="product-desc"> <span class="product-price">&</span> <small class="text-muted"></small> <a class="product-name" href=""> {{ $portfolio->title }}</a>
                  <div class="small m-t-xs"> {!! substr(strip_tags($portfolio->content), 0, 50) !!} {!! strlen(strip_tags($portfolio->content)) > 50 ? "...." : "" !!} </div>
                  <div class="top15 text-center"> <a class="red btn btn-outline btn-xs" href="{{ route('portfolio.show', $portfolio->id)}}">Quick View</a> </div>
                   <div class="box-footer">
                <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-success">Edit</a>
                {!! Form::open(['method' => 'DELETE','route' => ['portfolio.destroy', $portfolio->id],'style'=>'display:inline']) !!}
                      {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-md', 'style' => 'float: right;']) !!}
                    {!! Form::close() !!}
              </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <!-- grid box End -->
  
        </div>
      </div>
@endsection