@extends('layouts.main')
	@section('title')
			
		 Portfolio
	
	@endsection
@section('content')

<div class="mainbody-wrapper" id="tmMainBody">
<div class="uk-container uk-container-center">
<div class="tm-middle uk-grid" data-uk-grid-match data-uk-grid-margin>
<div class="tm-main uk-width-medium-1-1">
<main class="tm-content">
<div id="system-message-container">
</div>
<article class="uk-article tm-article"  itemscope itemtype="http://schema.org/Article">
<meta itemprop="inLanguage" content="en-gb" />
<div class="tm-article-content ">
<div itemprop="articleBody">
<div id="supg5ac29730b684a" class="su-post-grid " data-pgid="supg5ac29730b684a" data-layout="grid" data-loading_animation="fadeIn" data-filter_animation="slideLeft" data-caption_style="overlayRightAlong" data-horizontal_gap="35" data-vertical_gap="15" data-large="3" data-medium="3" data-small="1" data-filter_deeplink="false" data-loadmoreaction="click"><div id="supg5ac29730b684a_filter" class="cbp-l-filters-alignLeft">
</div><div id="supg5ac29730b684a_container" class="cbp-l-grid-gallery">
@foreach($portfolios as $portfolio)
<div class="cbp-item Branding"><a data-id="51" href="{{ url('portfolios/'.$portfolio->slug)}}" class="cbp-caption su-blog-img">
<div class="cbp-caption-defaultWrap"><img src="{{asset('images/portfolios/'.$portfolio->image)}}" alt="Digital Business Cards"></div><div class="cbp-caption-activeWrap">

<div class="cbp-l-caption-alignCenter">
<div class="cbp-l-caption-body">
<div class="cbp-l-caption-text">VIEW POST</div>
</div>
</div>
</div></a><a href="{{ url('portfolios/'.$portfolio->slug)}}" class="cbp-l-grid-blog-title">{!! substr(strip_tags($portfolio->title), 0, 90) !!} {!! strlen(strip_tags($portfolio->title)) > 90 ? "...." : "" !!}</a>
<div class="su-pgrid-meta">
<span class="cbp-l-grid-blog-date">{{ date( 'M j Y h:ia ', strtotime( $portfolio->updated_at ))}}</span>
<span class="cpb-category">Branding</span>
</div>
<div class="cbp-l-grid-blog-desc">{!! substr(strip_tags($portfolio->content), 0, 90) !!} {!! strlen(strip_tags($portfolio->content)) > 90 ? "...." : "" !!}</div>
</div>
@endforeach
<script data-cfasync="false" src="https://bdthemes.net/cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">var tdata=tdata||[];tdata["supg5ac29730b684a"]={"source":"k2-category: 11,12,13,14,15,","limit":"9","layout":"grid","show_more":"yes","intro_text_limit":105,"show_more_item":"3","show_more_action":"click","order":"title","order_by":"desc","loading_animation":"fadeIn","filter_animation":"slideLeft","caption_style":"overlayRightAlong","horizontal_gap":35,"vertical_gap":15,"filter":"yes","filter_style":"3","filter_deeplink":"false","filter_align":"","filter_counter":"yes","category":"yes","date":"yes","large":"3","medium":3,"small":1,"show_thumb":"yes","thumb_resize":"yes","include_article_image":"yes","thumb_width":640,"thumb_height":"420","show_search":"no","scroll_reveal":"","class":""};tdata["supg5ac29730b684a"]["offset"]=9</script>
</div></div>
</div>
</div>
</article>	</main>
</div>
</div>
</div>
</div>
@include('layouts.footer1')
@endsection