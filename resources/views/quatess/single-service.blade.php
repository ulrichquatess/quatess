@extends('layouts.main')
	@section('conteent')
	{{	$service->title }}
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
<!-- Start K2 Item Layout -->
<span id="startOfPageId14"></span>
<div id="k2Container" class="itemView ItemBlog itemIsFeatured">
<div class="blog-info-block">
<div class="blog-info-inner">

<div class="catItemShareBlock" data-uk-dropdown>
<!-- This is the element toggling the dropdown -->
<div class="caTshare">
<i class="uk-icon-share"></i>
<span>Share</span>
</div>
<!-- This is the dropdown -->
<div class="uk-dropdown uk-dropdown-small uk-dropdown-flip">
<ul class="uk-nav uk-nav-dropdown">
<li class="share_title"><span>Share on</span></li>
<li class="facebook_share">
<a class="prettySocial" href="#" data-type="facebook" data-title="How To Be An Effective In-house SEO" data-description="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
" data-url="http://bdthemes.net/demo/joomla/framed/index.php/blog/k2-blog-single-item" data-media="{{ asset('Quatess/media/k2/items/cache/fd8b0f77d767f1f6640afba6916ff67c_XL.jpg')}}">
<i class="uk-icon-facebook"></i>
<span class="share_text">Share</span>
</a>
</li>
<li class="twitter_share">
<a class="prettySocial" href="#" data-type="twitter" data-title="How To Be An Effective In-house SEO" data-description="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
" data-url="http://bdthemes.net/demo/joomla/framed/index.php/blog/k2-blog-single-item" data-media="{{ asset('Quatess/media/k2/items/cache/fd8b0f77d767f1f6640afba6916ff67c_XL.jpg')}}">
<i class="uk-icon-twitter"></i>
<span class="share_text">Tweet</span>
</a>
</li>
<li class="google_share">
<a class="prettySocial" href="#" data-type="googleplus" data-title="How To Be An Effective In-house SEO" data-description="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
" data-url="http://bdthemes.net/demo/joomla/framed/index.php/blog/k2-blog-single-item" data-media="{{ asset('Quatess/media/k2/items/cache/fd8b0f77d767f1f6640afba6916ff67c_XL.jpg')}}">
<i class="uk-icon-google-plus"></i>
<span class="share_text">Share</span>
</a>
</li>
<!-- Print Button -->
<li class="print_share">
<a class="itemPrintLink" rel="nofollow" href="k2-blog-single-item87e8.html?tmpl=component&amp;print=1" onclick="window.open(this.href,'printWindow','width=900,height=600,location=no,menubar=no,resizable=yes,scrollbars=yes'); return false;">
<i class="uk-icon-print"></i>
<span>Print</span>
</a>
</li>
<!-- Email Button -->
<li class="email_share">
<a class="itemEmailLink" rel="nofollow" href="../component/mailto/index9f26.html?tmpl=component&amp;template=framed&amp;link=25a0bfd902eed2f6e70f2bdd265a6cec4204b0a2" onclick="window.open(this.href,'emailWindow','width=400,height=350,location=no,menubar=no,resizable=no,scrollbars=no'); return false;">
<i class="uk-icon-envelope"></i>
<span>Email</span>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="blog-content-block">
<!-- Item Image -->
<div class="itemImageBlock">
<span class="itemImage">
<a class="modal" rel="{handler: 'image'}" href="{{asset('images/services/'.$service->image)}}" title="Click to preview image">
<span class="itemImageZoom"></span>
<span class="itemImageFrame"></span>
<img src="{{asset('images/services/'.$service->image)}}" alt="How To Be An Effective In-house SEO" style="width:1130px; height:auto;" />
<!-- Featured flag -->
<span class="itemFeatured">
					  	Featured				  	</span>
</a>
</span>
<div class="clr"></div>
</div>
<!-- Item title -->
<h2 class="itemTitle">
			
		  	{{ $service->title }}
		  				  	<!-- Featured flag -->
</h2>

<div class="ItemText">
<!-- Item fulltext -->
<div class="itemFullText">
<p>{!! $service->content !!}</p>
</div>
<div class="clr"></div>
<div class="itemContentFooter">

<!-- Item date modified -->
<span class="itemDateModified">
					Last modified on {{ date( 'M j Y h:ia ', strtotime( $service->updated_at ))}}				</span>
<div class="clr"></div>
</div>
<!-- Plugins: AfterDisplayContent -->
<!-- K2 Plugins: K2AfterDisplayContent -->
<div class="clr"></div>
</div>

<div class="uk-grid item-Author-Latest-Related">

<div class="itemBackToTop">
<a class="k2Anchor" href="k2-blog-single-item.html#startOfPageId14">
			back to top		</a>
</div>
</div>
<div class="clr"></div>
</div>
<!-- End K2 Item Layout -->
<!-- JoomlaWorks "K2" (v2.8.0) | Learn more about K2 at http://getk2.org -->
</main>
</div>
<aside class="tm-sidebar-a uk-width-medium-3-10"><div class="uk-panel title3 box3 title-center"><h3 class="uk-panel-title"><span class="uk-title-text">Quatess Service</span></h3><div class="panel-content">
	<!-- Quatess SideBar Start Here -->
		
	<!-- Quatess SideBar Ends Here -->
</div></div></aside>
</div>
</div>
</div>
@include('layouts.footer1')

@endsection