@extends('layouts.adminmain')
@section('content')
<!-- Start page content wrapper -->
  <div class="page-content-wrapper animated fadeInRight">
    <div class="page-content" >
      <div class="row wrapper border-bottom page-heading">
        <div class="col-lg-12">
          <h2>Page detail</h2>
          <ol class="breadcrumb">
            <li> <a href="/dashboard">Home</a> </li>
            <li> <a> Page </a> </li>
            <li class="active"> <strong>Page Detail</strong> </li>
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
                  </div>
                  <div class="col-md-7">
                    <h2 class="font-bold m-b-xs"> {{ $page->title }} </h2>
                    <small>{{ $page->title }}.</small>
                    <hr>
                    <h4>Page description</h4>
                    <div class="small text-muted">{!! $page->content !!} <br>
                    </div>
                    <div class="box-footer">
                      <a href="{{ route('page.index') }}" class="btn btn-warning" style="float: left;">Cancel</a>
                      <a href="{{ route('page.edit', $page->id) }}" class="btn btn-primary" style="float: right;">Edit</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  @endsection    