<div id="k2ModuleBox90" class="k2UsersBlock title3 box3 title-center">

@foreach($service as $service)
<ul>
<li class="even lastItem">
<a class="k2Avatar ubUserAvatar" rel="author" title="Super User">
<img src="{{ asset('Quatess/media/k2/users/1.png')}}" alt="Super User" style="width:50px;height:auto;" />
</a>
<a class="ubUserName" rel="author" href="{{ url('services/'.$service->id)}}" title="Super User">		
		{{ $service->title }}
</a>
<div class="ubUserDescription">
	{!! substr(strip_tags($service->content), 0, 90) !!} {!! strlen(strip_tags($service->content)) > 90 ? "...." : "" !!}
 </div>
<div class="clr"></div>
</li>
</ul>
@endforeach

</div>
</div></div>
<div class="uk-panel box4 title8 title-center"><h3 class="uk-panel-title"><span class="uk-title-text">Founder </span></h3><div class="panel-content">
<div id="k2ModuleBox166" class="k2ItemsBlock">
<div class="project-container">
<div class="projectItem  lastItem">
<!-- Plugins: BeforeDisplay -->
<!-- K2 Plugins: K2BeforeDisplay -->
<!-- Plugins: BeforeDisplayContent -->
<!-- K2 Plugins: K2BeforeDisplayContent -->
<div class="moduleItemIntrotext">
<a class="moduleItemImage hoverAni" title="Continue reading &quot;How To Be An Effective In-house SEO&quot;">
<img src="{{asset('images/pages/'.$page9->image)}}" alt="How To Be An Effective In-house SEO"/>
<span class="link-hover"></span>
</a>
<p>{!! $page9->content !!}
</p>
</div>
<!-- Plugins: AfterDisplayContent -->

<!-- K2 Plugins: K2AfterDisplay -->
<div class="clr"></div>
</div>
<div class="clearList"></div>
</div>
</div>