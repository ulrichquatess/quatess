@extends('layouts.main')

    @section('title')
			
		About Us
	
	@endsection

@section('content')

 <?php
 	$page8 = App\Page::find(8);
 	$page9 = App\Page::find(9);
 ?>
<div class="mainbody-wrapper" id="tmMainBody">
<div class="uk-container uk-container-center">
<div class="tm-middle uk-grid" data-uk-grid-match data-uk-grid-margin>
<div class="tm-main uk-width-medium-7-10">
<main class="tm-content">
<div id="system-message-container">
</div>
<article class="uk-article tm-article"  itemscope itemtype="http://schema.org/Article">
<meta itemprop="inLanguage" content="en-gb" />
<div class="tm-article-content ">
<div itemprop="articleBody">
	<!--About Page Begins Here -->
<div class="su-spacer sus5ac296ab7f8e3"></div>

<p> {!! $page8->content !!} </p>


<div class="su-spacer sus5ac296ab7fb57"></div>
</div>
</div>
</article>	</main>
</div>
<aside class="tm-sidebar-a uk-width-medium-3-10"><div class="uk-panel title3 box3 title-center"><h3 class="uk-panel-title"><span class="uk-title-text">Quatess Services</span></h3><div class="panel-content">
		<!-- Here We Have The SideBar -->
		@include('quatess.sidebar')
</div></div>
</aside>
</div>
</div>
</div>
@include('layouts.footer1')

@endsection