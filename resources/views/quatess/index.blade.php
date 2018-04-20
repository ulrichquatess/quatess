@include('layouts.header1')
<div class="features-wrapper" id="tmFeatures">
<div class="uk-container uk-container-center">
<section class="tm-features uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
<div class="uk-width-1-1"><div class=""><div class="panel-content">
<div class="su-spacer sus5ac2960b0aded"></div>
	<!--PHP Codes To teh Model Pages -->
		<?php 
			$page2 = App\Page::find(2);
			$page1 = App\Page::find(1);
			$page3 = App\Page::find(3);
			$page4 = App\Page::find(4);
			$page5 = App\Page::find(5);
			$page6 = App\Page::find(6);
			$page7 = App\Page::find(7);
			$support1 = App\Support::find(1);
			$support2 = App\Support::find(2);
			$support3 = App\Support::find(3);
		?>

<!--PHP Codes End Here  -->
<div class="welcome-text" style="text-align: center;">
<div id="sua5ac2960b0af38" class="su-animate " data-animation="flipInX">
<h1 style="font-weight: 800; text-transform: uppercase;">{{ $page2->title }} 
            <span id='ft_5ac2960b0b15f' class='su-fancy-text su-fteffect8'>
<span class='su-ft-wrap'>
<b class="is-visible">{{ $page1->title }}</b><b> {{ $page1->content }}</b>
</span>
</span> {!! $page2->content !!}</h1>
<p style="font-size: 17px; line-height: 24px;">{{ $page3->title }} {!! $page3->content !!}</p>
</div>
<div id="sud5ac2960b0b2be" class="su-divider su-divider-style-default_light su-icon-style-1 su-divider-align-center">
<span>
<span class="divider-left"></span>
<span class="divider-right"></span>
</span>
</div>
<div id="sua5ac2960b0b398" class="su-animate " data-animation="fadeInLeft">
<a href="http://themeforest.net/user/bdthemes/portfolio" class="readon border large">Purchase Now</a>
</div>
<div id="sua5ac2960b0b58f" class="su-animate " data-animation="fadeInRight">
<a href="http://themeforest.net/user/bdthemes/portfolio" class="readon success large">View Details</a>
</div>
</div>
<div class="su-spacer sus5ac2960b0b78d"></div>
</div></div></div>
</section>
</div>
</div>
<div class="top-a-wrapper" id="tmTopA">
<div class="uk-container uk-container-center">
<section class="tm-top-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
<div class="uk-width-1-1"><div class="uk-panel title3 title-center"><div class="panel-content">
<div class="su-spacer sus5ac2960b0bd01"></div>
<div id="surow5ac2960b0be08" class="su-row su-clmms-yes separator">
<div id="sucol5ac2960b0bf64" class="su-column su-column-size-1-1 su-column-size-medium-1-3"><div class="su-column-inner"><div class="su-column-content">
<div id="sua5ac2960b0c0c0" class="su-animate " data-animation="fadeInLeft">
<div id="suil5ac2960b0c351" class="su-icon-list su-icon-align-top su-il-animation-2 template-style"><div class="icon_list_item">
<div class="icon_list_wrapper ">
<div class="icon_list_icon"><i class="list-img-icon fa fa-heart"></i>
</div>
</div>
<div class="icon_description">
<h3 class="icon_title">Crafted with Love</h3>
<div class="icon_description_text">
				We try to make our template much pixel perfect, we don't consider to give maximum effort that's why our client love our products.<br><br>
<a href="#" class="readon">See Details</a>
</div>
</div>
<div class="clearfix"></div>
</div></div>
</div>
</div></div></div>
<div id="sucol5ac2960b0c4df" class="su-column su-column-size-1-1 su-column-size-medium-1-3"><div class="su-column-inner"><div class="su-column-content">
<div id="sua5ac2960b0c63d" class="su-animate " data-animation="fadeInDown">
<div id="suil5ac2960b0c854" class="su-icon-list su-icon-align-top su-il-animation-2 template-style"><div class="icon_list_item">
<div class="icon_list_wrapper ">
<div class="icon_list_icon"><i class="list-img-icon fa fa-lightbulb-o"></i>
</div>
</div>
<div class="icon_description">
<h3 class="icon_title">Multipurpose Think</h3>
<div class="icon_description_text">
				We always think our template for multipurpose uses for that reason it's included huge features and include lot's of extensions.<br><br>
<a href="#" class="readon">See Details</a>
</div>
</div>
<div class="clearfix"></div>
</div></div>
</div>
</div></div></div>
<div id="sucol5ac2960b0c9d6" class="su-column su-column-size-1-1 su-column-size-medium-1-3"><div class="su-column-inner"><div class="su-column-content">
<div id="sua5ac2960b0cb24" class="su-animate " data-animation="fadeInRight">
<div id="suil5ac2960b0cda6" class="su-icon-list su-icon-align-top su-il-animation-2 template-style"><div class="icon_list_item">
<div class="icon_list_wrapper ">
<div class="icon_list_icon"><i class="list-img-icon fa fa-rocket"></i>
</div>
</div>
<div class="icon_description">
<h3 class="icon_title">Done Awesome Feature</h3>
<div class="icon_description_text">
				We always try to include edge of technology with browser compatiblity and valid code, so all features work smartly without any hassle.<br><br>
<a href="#" class="readon">See Details</a>
</div>
</div>
<div class="clearfix"></div>
</div></div>
</div>
</div></div></div>
</div>
<div class="su-spacer sus5ac2960b0cf7c"></div>
</div></div></div>
</section>
</div>
</div>
<div class="top-b-wrapper" id="tmTopB">
<div class="uk-container uk-container-center">
<section class="tm-top-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
<div class="uk-width-1-1"><div class="uk-panel"><div class="panel-content">
<div class="su-spacer sus5ac2960b0d6ae"></div>
<div id="sua5ac2960b0d82b" class="su-animate " data-animation="fadeInLeft">
<div id="suhead5ac2960b0daec" class="su-heading su-heading-style-small-line su-heading-align-center"><h2 class="su-heading-inner">{{ $page4->title }}</h2></div>
<p style="text-align:center; color: #fff">{!! $page4->content !!}</p>
</div>
<div class="su-spacer sus5ac2960b0dcf2"></div>
<div id="surow5ac2960b0ddfb" class="su-row su-clmms-yes">
	<!--Here the Random service display starts -->
@foreach($services as $service)
<div id="sucol5ac2960b0dede" class="su-column su-column-size-1-1 su-column-size-medium-1-4"><div class="su-column-inner"><div class="su-column-content">
<div id="sua5ac2960b0e026" class="su-animate " data-animation="fadeInDown">
<div class="flip-box-wrap"><div class="su-flip-box horizontal_flip_left">
<div class="front-flip_box"
        style="background-color:#ffffff;
        color:#444;
        border:none;
        box-shadow:none;
        border-radius:2;
        text-align:center;
        padding:15px;
        ">
<img src="{{asset('images/services/'.$service->image)}}" alt="Quatess template printer" style="width: 100%; padding: 20px;" />
<h4>{{ $service->title_1 }}</h4>
</div>
<div class="back-flip_box"
       style="background-color:#ffffff;
       color:#444;
       border:none;
       box-shadow:none;
       border-radius:2;
       text-align:center;
       padding:15px;
         ">
<div class="su-spacer sus5ac2960b0e4d2"></div>
<h4 class="uk-text-center">{!! substr(strip_tags($service->title), 0, 50) !!} {!! strlen(strip_tags($service->title)) > 50 ? "...." : "" !!}</h4>
<p class="uk-hidden-medium">{!! substr(strip_tags($service->content), 0, 100) !!} {!! strlen(strip_tags($service->content)) > 100 ? "...." : "" !!}</p>
<a href="{{ url('services/'.$service->slug)}}" class="readon">View Services</a>
</div>
<div style="clear:both;height:0"></div>
</div></div>
</div>
</div></div></div>
@endforeach
<!--End Service -->


<div class="su-spacer sus5ac2960b0fdeb"></div>
</div></div></div>
</section>
</div>
</div>
<div class="expanded-top-wrapper parallax-section" id="tmExpandedTop">
<div class="uk-container uk-container-center">
<section class="tm-expanded-top uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
<div class="uk-width-1-1"><div class=""><div class="panel-content">
<div class="su-spacer sus5ac2960b10546"></div>
<div id="suhead5ac2960b10672" class="su-heading su-heading-style-small-line su-heading-align-center"><h2 class="su-heading-inner">{{ $page5->title }}</h2></div>
<p class="uk-hidden-medium">{!! $page5->content !!} </p>
<div class="su-spacer sus5ac2960b10841"></div>
<div id="susc5ac2960b13b5d" class="su-showcase " data-scid="susc5ac2960b13b5d" data-layout="grid" data-loading_animation="default" data-filter_animation="rotateSides" data-caption_style="overlayBottomPush" data-horizontal_gap="0" data-vertical_gap="0" data-popup_position="below" data-large="3" data-medium="2" data-small="1" data-filter_deeplink="false" data-page_deeplink="false" data-loadmoreaction="click" ><div id="susc5ac2960b13b5d_container" class="cbp-l-grid-gallery">

@foreach($project as $project)
<div class="cbp-item Flat-Design">
<a data-id="60" data-source = "k2" data-include_article_image = "no" data-popup_image = "yes" data-popup_category = "yes" data-popup_date = "yes" data-popup_detail_button = "yes" href="{{ url('projects/'.$project->slug)}}" class="cbp-caption cbp-singlePageOutline" data-title="Totam Rem Aperiam // Flat Design">
<div class="cbp-caption-defaultWrap"><img src="{{ asset('images/projects/'.$project->image)}}" alt="Totam Rem Aperiam"></div>
<div class="cbp-caption-activeWrap">
<div class="cbp-l-caption-alignLeft">
<div class="cbp-l-caption-body">
<div class="cbp-l-caption-title">{!! $project->title !!}</div>
<div class="cbp-l-caption-desc">{!! $project->title_1 !!}</div>
</div>
</div>
</div>
</a>
</div>
@endforeach
</div></div>
</div></div></div>
</section>
</div>
</div>
<div class="expanded-bottom-wrapper" id="tmExpandedBottom">
<div class="uk-container uk-container-center">
<section class="tm-expanded-bottom uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
<div class="uk-width-1-1"><div class=""><div class="panel-content">
<div class="su-spacer sus5ac2960bddb03"></div>
<div id="sua5ac2960bddbdb" class="su-animate " data-animation="fadeInDown">
<div id="suhead5ac2960bdddea" class="su-heading su-heading-style-small-line su-heading-align-center"><h2 class="su-heading-inner">{{ $page6->title }}</h2></div>
<p style="text-align:center; color: #fff;">{!! $page6->content !!}</p>
</div>
<div class="su-spacer sus5ac2960bddf49"></div>
<div id="surow5ac2960bde024" class="su-row su-clmms-yes">
<div id="sucol5ac2960bde100" class="su-column su-column-size-1-1 su-column-size-medium-1-2"><div class="su-column-inner"><div class="su-column-content">
<div id="sua5ac2960bde24a" class="su-animate " data-animation="fadeInRight">
<img class="uk-hidden-small" style="margin-bottom: -30px;" src="{{ asset('Quatess/images/sampledata/fm-510x355.jpg')}}" alt="" />
</div>
</div></div></div>
<div id="sucol5ac2960bde447" class="su-column su-column-size-1-1 su-column-size-medium-1-2"><div class="su-column-inner"><div class="su-column-content">
<div id="sua5ac2960bde5a8" class="su-animate " data-animation="fadeInLeft">
<div style="color: #fff">
<h4 style="margin-top: 0; margin-bottom: 5px; text-transform: uppercase; color: #fff;">CAREFULLY CRAFTED</h4>
<p style="margin: 0">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
<h4 style=" margin-bottom: 5px; text-transform: uppercase; color: #fff;">AMAZING BUSINESS TEMPLATE</h4>
<p style="margin: 0; margin-bottom: 20px;">When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
<a href="#" class="readon white border">Read More</a></div>
</div>
</div></div></div>
</div>
</div></div></div>
</section>
</div>
</div>
<div class="bottom-a-wrapper" id="tmBottomA">
<div class="uk-container uk-container-center">
<section class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
<div class="uk-width-1-1"><div class="uk-panel title3"><div class="panel-content">
<div class="su-spacer sus5ac2960bdec2c"></div>
<div id="sua5ac2960bdecea" class="su-animate " data-animation="fadeInDown">
<div id="suhead5ac2960bdeeeb" class="su-heading su-heading-style-small-line su-heading-align-center"><h2 class="su-heading-inner">{{ $page7->title }}</h2></div>
<p style="text-align:center; color: #fff;">{!! $page7->title !!}</p>
</div>
<div class="su-spacer sus5ac2960bdf057"></div>
<div id="surow5ac2960bdf153" class="su-row su-clmms-yes separator">

<div id="sucol5ac2960bdf234" class="su-column su-column-size-1-1 su-column-size-medium-1-3"><div class="su-column-inner"><div class="su-column-content">
<div id="sua5ac2960bdf37a" class="su-animate " data-animation="bounceInRight">
<div id="supnl5ac2960bdf59e" class="su-panel sup-align-center" data-url="" data-target="self"><div class="su-panel-content su-content-wrap">
<div id="suil5ac2960bdf71a" class="su-icon-list su-icon-align-top"><div class="icon_list_item">
<div class="icon_list_wrapper ">
<div class="icon_list_icon"><i class="list-img-icon fa fa-question"></i>
</div>
</div>
<div class="icon_description">
<h3 class="icon_title">{{ $support1->title }}</h3>
<div class="icon_description_text">
				{!! $support1->content !!}<br><br>
<a href="{{ $support1->link }}">{{ $support1->heading }}</a>
</div>
</div>
<div class="clearfix"></div>
</div></div>
</div></div>
</div>
</div></div></div>
<div id="sucol5ac2960bdf89b" class="su-column su-column-size-1-1 su-column-size-medium-1-3"><div class="su-column-inner"><div class="su-column-content">
<div id="sua5ac2960bdf9e4" class="su-animate " data-animation="bounceInRight">
<div id="supnl5ac2960bdfc34" class="su-panel sup-align-center" data-url="" data-target="self"><div class="su-panel-content su-content-wrap">
<div id="suil5ac2960bdfdcf" class="su-icon-list su-icon-align-top"><div class="icon_list_item">
<div class="icon_list_wrapper ">
<div class="icon_list_icon"><i class="list-img-icon fa fa-building"></i>
</div>
</div>
<div class="icon_description">
<h3 class="icon_title">{{ $support3->title }}</h3>
<div class="icon_description_text">
				{!! $support3->content !!}<br><br>
<a href="{{ $support3->link }}">{{ $support3->heading }}</a>
</div>
</div>
<div class="clearfix"></div>
</div></div>
</div></div>
</div>
</div></div></div>
<div id="sucol5ac2960bdff47" class="su-column su-column-size-1-1 su-column-size-medium-1-3"><div class="su-column-inner"><div class="su-column-content">
<div id="sua5ac2960be0088" class="su-animate " data-animation="bounceInRight">
<div id="supnl5ac2960be02d2" class="su-panel sup-align-center" data-url="" data-target="self"><div class="su-panel-content su-content-wrap">
<div id="suil5ac2960be045b" class="su-icon-list su-icon-align-top"><div class="icon_list_item">
<div class="icon_list_wrapper ">
<div class="icon_list_icon"><i class="list-img-icon fa fa-support"></i>
</div>
</div>
<div class="icon_description">
<h3 class="icon_title">{{ $support2->title }}</h3>
<div class="icon_description_text">
				{!! $support2->content !!}<br><br>
<a href="{{ $support2->link }}">{{ $support2->heading }}</a>
</div>
</div>
<div class="clearfix"></div>
</div></div>
</div></div>
</div>
</div></div></div>
</div>
<div class="su-spacer sus5ac2960be05cc"></div>
</div></div></div>
</section>
</div>
</div>

@include('layouts.footer1')
<!-- Here The Footer Goes Below--> 

@include('layouts.footer')