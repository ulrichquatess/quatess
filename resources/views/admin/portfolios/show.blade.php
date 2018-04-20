@extends('layouts.adminmain')
@section('content')
<!-- Start page content wrapper -->
  <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content" >
      <div class="row wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2>portfolio detail</h2>
          <ol class="breadcrumb">
            <li> <a href="/dashboard">Home</a> </li>
            <li> <a> Portfolio </a> </li>
            <li class="active"> <strong>Portfolio Detail</strong> </li>
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
            <div class="ibox product-detail white-bg">
              <div class="ibox-content">
                <div class="row">
                  <div class="col-md-5">
                    <!-- start  product slidare-->
                    <section class="product-images">
                      <div> <img class="full-width" src="{{asset('images/portfolios/'.$portfolio->image)}}" alt=""> </div>
                    <!-- End  product slidare-->
                    <hr>
                  </div>
                  <div class="col-md-7">
                    <h2 class="font-bold m-b-xs"> {{ $portfolio->title }} </h2>
                    <small>{{ $portfolio->title }}.</small>
                    <hr>
                    <h4>Product description</h4>
                    <div class="small text-muted">{!! $portfolio->content !!} <br>
                    </div>
                    <div class="box-footer">
                      <a href="{{ route('portfolio.index') }}" class="btn btn-warning" style="float: left;">Cancel</a>
                      <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-primary" style="float: right;">Edit</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h2 class="recenty-viewed"> RECENTLY VIEWED </h2>
        <!-- start recently view product -->
        <div class="row">
          
          
  
          <!-- grid box start -->
          <div class="col-md-3">
            <div class="ibox white-bg">
              <div class="ibox-content product-box"> <img alt="" class="img-responsive" src="{{ asset('quatess/images/productDetail/8.jpg') }}">
                <div class="product-desc"> <span class="product-price">&</span> <small class="text-muted">Category</small> <a class="product-name" href="#"> Product</a>
                  <div class="small m-t-xs"> A cultural icon. Always original. Etiam euismod eleifend ipsum... </div>
                  <div class="top15 text-center"> <a class="red btn btn-outline btn-xs" href="#">Quick View</a> </div>
                </div>
              </div>
            </div>
          </div>
          <!-- grid box End -->
        </div>
        <!-- End  recently view product -->
      </div>
  @endsection    