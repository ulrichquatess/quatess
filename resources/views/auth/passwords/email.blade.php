@extends('layouts.main')

@section('content')
   <div class="mainbody-wrapper" id="tmMainBody">
<div class="uk-container uk-container-center">
<div class="tm-middle uk-grid" data-uk-grid-match data-uk-grid-margin>
<div class="tm-main uk-width-medium-1-1">
<main class="tm-content">
<div id="system-message-container">
</div>
<div class="reset">
<form id="user-registration" method="POST" action="{{ route('password.email') }}" class="form-validate form-horizontal well">
    {{ csrf_field() }}
<fieldset>
    @if (session('status'))
       <div class="alert alert-success">
           {{ session('status') }}
    <div>
    @endif

<p>Please enter the email address for your account. A verification code will be sent to you. Once you have received the verification code, you will be able to choose a new password for your account.</p>
<div class="control-group">
<div class="control-label{{ $errors->has('email') ? ' has-error' : '' }}">
<label id="email" for="email" class="hasPopover required" title="Email Address" data-content="Please enter the email address associated with your User account.&lt;br /&gt;A verification code will be sent to you. Once you have received the verification code, you will be able to choose a new password for your account.">
    Email Address<span class="star">&#160;*</span></label>
</div>
<div class="controls">
<input type="email" name="email" id="email"  value="{{ old('email') }}" class="validate-username required" size="30"       required aria-required="true" />
</div>
@if ($errors->has('email'))
   <span class="help-block">
       <strong>{{ $errors->first('email') }}</strong>
   </span>
@endif
</div>
</fieldset>
<div class="control-group">
<div class="controls">
<button type="submit" class="btn btn-primary validate">
                    Submit              </button>
</div>
</div>
<input type="hidden" name="d39aaacb62199c6c27cd7f57ed3eb079" value="1" />  
</form>
</div>
</main>
</div>
</div>
</div>
</div>
<div class="bottom-b-wrapper" id="tmBottomB">
<div class="uk-container uk-container-center">
<section class="tm-bottom-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
<div class="uk-width-1-1 uk-width-medium-1-3"><div class="uk-panel title-uppercase"><h3 class="uk-panel-title"><span class="uk-title-text">Keep in Touch</span></h3><div class="panel-content">
<span>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.</span><br><br>
<a id="suico_5ac296349e313" href="http://www.facebook.com/bdthemes" class="su-icon square-size" target="_blank"><i class="fa fa-facebook"></i></a>
<a id="suico_5ac296349e55d" href="http://www.twitter.com/bdthemes" class="su-icon square-size" target="_blank"><i class="fa fa-twitter"></i></a>
<a id="suico_5ac296349e7a2" href="http://www.pinterest.com/bdthemes" class="su-icon square-size" target="_blank"><i class="fa fa-pinterest"></i></a>
<a id="suico_5ac296349e9d9" href="http://www.pinterest.com/selimmw/bdthemes/" class="su-icon square-size" target="_blank"><i class="fa fa-linkedin"></i></a>
<a id="suico_5ac296349ebf6" href="http://www.youtube.com/bdthemes" class="su-icon square-size" target="_blank"><i class="fa fa-youtube"></i></a>
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
<span class="su_mailchimp_result  su-newsletter-result"></span>
<p>Don't worry, we hate spam!</p>
</div><!-- end newsletter-signup -->
</div></div></div>
<div class="uk-width-1-1 uk-width-medium-1-3"><div class="uk-panel"><h3 class="uk-panel-title"><span class="uk-title-text">TAGS CLOUD</span></h3><div class="panel-content">
<div id="k2ModuleBox89" class="k2TagCloudBlock">
<a href="../../component/k2/itemlist/tag/Branding.html" data-uk-tooltip style="background-color: #5b5a5a" title="2 items tagged with Branding">
        Branding    </a>
<a href="../../component/k2/itemlist/tag/Brochure.html" data-uk-tooltip style="background-color: #484968" title="2 items tagged with Brochure">
        Brochure    </a>
<a href="../../blog/k2-tags-page.html" data-uk-tooltip style="background-color: #4c8a76" title="11 items tagged with Business">
        Business    </a>
<a href="../../component/k2/itemlist/tag/Colorful.html" data-uk-tooltip style="background-color: #755c7c" title="1 items tagged with Colorful">
        Colorful    </a>
<a href="../../component/k2/itemlist/tag/Create.html" data-uk-tooltip style="background-color: #c67554" title="2 items tagged with Create">
        Create  </a>
<a href="../../component/k2/itemlist/tag/dapibus.html" data-uk-tooltip style="background-color: #a6bc44" title="1 items tagged with dapibus">
        dapibus </a>
<a href="../../component/k2/itemlist/tag/Design.html" data-uk-tooltip style="background-color: #958aaa" title="1 items tagged with Design">
        Design  </a>
<a href="../../component/k2/itemlist/tag/Generative.html" data-uk-tooltip style="background-color: #5baa84" title="1 items tagged with Generative">
        Generative  </a>
<a href="../../component/k2/itemlist/tag/Idea.html" data-uk-tooltip style="background-color: #4c55b9" title="1 items tagged with Idea">
        Idea    </a>
<a href="../../component/k2/itemlist/tag/Identity.html" data-uk-tooltip style="background-color: #5ab8c4" title="2 items tagged with Identity">
        Identity    </a>
<a href="../../component/k2/itemlist/tag/Logo.html" data-uk-tooltip style="background-color: #8a7797" title="1 items tagged with Logo">
        Logo    </a>
<a href="../../component/k2/itemlist/tag/Magic.html" data-uk-tooltip style="background-color: #8694c7" title="1 items tagged with Magic">
        Magic   </a>
<a href="../../component/k2/itemlist/tag/Mockup.html" data-uk-tooltip style="background-color: #a558ba" title="9 items tagged with Mockup">
        Mockup  </a>
<a href="../../component/k2/itemlist/tag/Products.html" data-uk-tooltip style="background-color: #8b9a47" title="7 items tagged with Products">
        Products    </a>
<a href="../../component/k2/itemlist/tag/ridiculus.html" data-uk-tooltip style="background-color: #6554a5" title="1 items tagged with ridiculus">
        ridiculus   </a>
<a href="../../component/k2/itemlist/tag/Vivamus.html" data-uk-tooltip style="background-color: #55b898" title="1 items tagged with Vivamus">
        Vivamus </a>
<a href="../../component/k2/itemlist/tag/Ways.html" data-uk-tooltip style="background-color: #c4b84b" title="2 items tagged with Ways">
        Ways    </a>
<div class="clr"></div>
</div>
</div></div></div>
</section>
</div>
</div>
@endsection
