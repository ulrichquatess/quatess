<?php
	$setting = App\Setting::find(1);
	$page10 = App\Page::find(10);
	$blog = App\Blog::orderBy('created_at', 'desc')->limit(2)->get();
?>
<div class="bottom-b-wrapper" id="tmBottomB">
<div class="uk-container uk-container-center">
<section class="tm-bottom-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
<div class="uk-width-1-1 uk-width-medium-1-3"><div class="uk-panel title-uppercase"><h3 class="uk-panel-title"><span class="uk-title-text">{{ $page10->title }}</span></h3><div class="panel-content">
<span>{!! $page10->content !!}</span><br><br>
<a id="suico_5ac2974566e55" href="{{ $setting->facebook }}" class="su-icon square-size" target="_blank"><i class="fa fa-facebook"></i></a>
<a id="suico_5ac2974567235" href="{{ $setting->twitter }}" class="su-icon square-size" target="_blank"><i class="fa fa-twitter"></i></a>
<a id="suico_5ac297456777a" href="{{ $setting->linkedin }}" class="su-icon square-size" target="_blank"><i class="fa fa-linkedin"></i></a>
<br><br>
<div>Visit our social link.</div>
</div></div></div>
<div class="uk-width-1-1 uk-width-medium-1-3"><div class="uk-panel title-uppercase"><h3 class="uk-panel-title"><span class="uk-title-text">Join Newsletter</span></h3><div class="panel-content">
<div class="su-newsletter-wrapper">
<p>By subscribing to our mailing list you will always be update with the latest news from.</p>
<form method="post" class="su-newsletter" data-url="https://bdthemes.net/demo/joomla/framed/" name="newsletter_form">
<input type="text" name="su_mc_email" class="su-newsletter-email su-newsletter-field" value="" placeholder="Enter email address" />
<input type="hidden" name="su_list_class" class="su-lid" value="0424dddc05" />
<div class="su-newsletter-button"><input type="submit" name="submit" class="su-newsletter-submit btn su-newsletter-field" value="SIGNUP" /></div>
</form>
</div><!-- end newsletter-signup -->
</div></div></div>
<div class="uk-width-1-1 uk-width-medium-1-3"><div class="uk-panel  title-uppercase"><h3 class="uk-panel-title"><span class="uk-title-text">Latest Blog Post</span></h3><div class="panel-content">
<div id="k2ModuleBox385" class="latest-blog-post k2ItemsBlock  title-uppercase">
<ul>
	@foreach($blog as $blog)
<li class="even">
<!-- Plugins: BeforeDisplay -->
<!-- K2 Plugins: K2BeforeDisplay -->
<a class="moduleItemImage" href="{{ url('blogs/'.$blog->slug)}}" title="Continue reading &quot;How To Be An Effective In-house SEO&quot;">
<!-- <img src="/demo/joomla/framed/" alt=""/> -->
<div ><img src="{{ asset('Quatess/media/k2/items/cache/fd8b0f77d767f1f6640afba6916ff67c_S.jpg')}}" alt=""/></div>
</a>
<a class="moduleItemTitle" href="{{ url('blogs/'. $blog->slug) }}">{{ $blog->title }}</a>
<div class="item-meta">
<span class="moduleItemAuthor">
<i class="uk-icon-user"></i>
<a rel="author" title="Super User" href="{{ url('blogs/'.$blog->slug) }}">Ulrich Quatess</a>
</span>
<span class="moduleItemDateCreated"><i class="uk-icon-clock-o"></i> {{ date( 'j m Y h:ia ', strtotime( $blog->updated_at ))}}</span>
</div>
<!-- Plugins: AfterDisplayTitle -->
<!-- K2 Plugins: K2AfterDisplayTitle -->
<!-- Plugins: BeforeDisplayContent -->
<!-- K2 Plugins: K2BeforeDisplayContent -->
<div class="clr"></div>
<div class="clr"></div>
<!-- Plugins: AfterDisplayContent -->
<!-- K2 Plugins: K2AfterDisplayContent -->
<!-- Plugins: AfterDisplay -->
<!-- K2 Plugins: K2AfterDisplay -->
<div class="clr"></div>
</li>
@endforeach
</ul>
</div>
</div></div></div>
</section>
</div>
</div>