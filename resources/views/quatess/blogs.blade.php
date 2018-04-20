@extends('layouts.main')
	@section('title')
			
		 Blogs
	
	@endsection
@section('content')

<?php

 	$page9 = App\Page::find(9);
 ?>
	<div class="mainbody-wrapper" id="tmMainBody">
<div class="uk-container uk-container-center">
<div class="tm-middle uk-grid" data-uk-grid-match data-uk-grid-margin>
<div class="tm-main uk-width-medium-7-10">
<main class="tm-content">
<div id="system-message-container">
</div>
<!-- Start K2 User Layout -->
<div id="k2Container" class="userView">
<!-- Item list -->
<div class="userItemList">
<!-- Start K2 Item Layout -->
@foreach($blogs as $blog)
<div class="userItemView userItemIsFeatured">
<!-- Plugins: BeforeDisplay -->
<!-- K2 Plugins: K2BeforeDisplay -->
<div class="userItemHeader">
<!-- Item title -->
<h3 class="userItemTitle">
<a href="{{ url('blogs/'.$blog->slug)}}">
	{{ $blog->title }}	
</a>
</h3>
</div>
<!-- Plugins: AfterDisplayTitle -->
<!-- K2 Plugins: K2AfterDisplayTitle -->
<div class="userItemLinks">
<!-- Date created -->
<span class="userItemDateCreated">
<i class="uk-icon-clock-o"></i>
					{{ date( 'M j Y h:ia ', strtotime( $blog->updated_at ))}}
</span>
</div>
<div class="userItemBody">
<!-- Plugins: BeforeDisplayContent -->
<!-- K2 Plugins: K2BeforeDisplayContent -->
<!-- Item Image -->
<div class="userItemImageBlock">
<span class="userItemImage">
<a href="{{ url('blogs/'.$blog->slug)}}" title="How To Be An Effective In-house SEO">
<span class="image-over-style"></span>
<img src="{{asset('images/blogs/'.$blog->image)}}" alt="How To Be An Effective In-house SEO" style="width:300px; height:auto;" />
</a>
</span>
<div class="clr"></div>
</div>
<!-- Item introtext -->
<div class="userItemIntroText">
<p>{!! substr(strip_tags($blog->content), 0, 200) !!} {!! strlen(strip_tags($blog->content)) > 920 ? "...." : "" !!}</p>
</div>
<div class="clr"></div>
<!-- Plugins: AfterDisplayContent -->
<!-- K2 Plugins: K2AfterDisplayContent -->
<div class="clr"></div>
</div>
<div class="clr"></div>
<!-- Item "read more..." link -->
<div class="userItemReadMore">
<a class="k2ReadMore" href="{{ url('blogs/'.$blog->slug)}}">
					Read more...				</a>
</div>
<div class="clr"></div>
<!-- Plugins: AfterDisplay -->
<!-- K2 Plugins: K2AfterDisplay -->
<div class="clr"></div>
</div>
<!-- End K2 Item Layout -->
@endforeach

</div>
<!-- Pagination -->
<div class="k2Pagination">
<ul>
<li><span class="pagenav">{{ $blogs->links() }}</span></li>	
</ul>
</div>
</div>
<!-- End K2 User Layout -->
<!-- JoomlaWorks "K2" (v2.8.0) | Learn more about K2 at http://getk2.org -->
</main>
</div>
<aside class="tm-sidebar-a uk-width-medium-3-10"><div class="uk-panel title3 box3 title-center"><h3 class="uk-panel-title"><span class="uk-title-text">Quatess Services</span></h3><div class="panel-content">
	@include('quatess.sidebar')
</aside>
</div>
</div>
</div>
	<!-- Another Small Footer Before the Last one is Here -->
	@include('layouts.footer1')
@endsection