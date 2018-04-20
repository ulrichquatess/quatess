@extends('layouts.main')

@section('content')
<div class="mainbody-wrapper" id="tmMainBody">
<div class="uk-container uk-container-center">
<div class="tm-middle uk-grid" data-uk-grid-match data-uk-grid-margin>
<div class="tm-main uk-width-medium-1-1">
<main class="tm-content">
<div id="system-message-container">
</div> 
<div class="login ">
<div class="login-description">
    
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa strong. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.     
        
        </div>
<form method="POST" action="{{ route('login') }}" class="form-horizontal">
    {{ csrf_field() }}

<fieldset class="well">
<div class="login-wrapper">

    <div class="control-group">
<div class="control-label{{ $errors->has('name') ? ' has-error' : '' }}">
<label id="name" for="name" class="required">
    UserName<span class="star">&#160;*</span></label>
</div>
<div class="controls">
<input type="text" name="name" id="name"  value="{{ old('name') }}" class="validate-username required" size="25"       required aria-required="true"   autofocus    />
</div>
@if ($errors->has('name'))
  <span class="help-block">
    <strong>{{ $errors->first('name') }}</strong>
  </span>
@endif
</div>
   <div class="control-group">
<div class="control-label{{ $errors->has('email') ? ' has-error' : '' }}">
<label id="email" for="email" class="required">
    Email Address<span class="star">&#160;*</span></label>
</div>
<div class="controls">
<input type="email" name="email" id="email"  value="{{ old('email') }}" class="validate-username required" size="25"       required aria-required="true"   autofocus    />
</div>
@if ($errors->has('email'))
  <span class="help-block">
    <strong>{{ $errors->first('email') }}</strong>
  </span>
@endif
</div>

<div class="control-group">
<div class="control-label{{ $errors->has('password') ? ' has-error' : '' }}">
<label id="password" for="password" class="required">
    Password<span class="star">&#160;*</span></label>
</div>
<div class="controls">
<input type="password" name="password" id="password"  value="{{ old('password') }}" class="validate-username required" size="25"       required aria-required="true"   autofocus    />
</div>
@if ($errors->has('password'))
  <span class="help-block">
    <strong>{{ $errors->first('password') }}</strong>
  </span>
@endif
</div>
<div class="control-group">
<div class="control-label{{ $errors->has('password') ? ' has-error' : '' }}">
<label id="password-confirm" for="password-confirm" class="required">
   Confirmation Password<span class="star">&#160;*</span></label>
</div>
<div class="controls">
<input type="password" name="password_confirmation" id="password" value=""   class="validate-password required"   size="25" maxlength="99" required aria-required="true"  /> </div>
</div>

</div>
<div class="controls bdt-button">
<button type="submit" class="btn btn-primary">
                    Log in              </button>
</div>
<input type="hidden" name="return" value="" />
<input type="hidden" name="d39aaacb62199c6c27cd7f57ed3eb079" value="1" />
<div  class="control-group bdt-remember">
<div class="lbl-remeber">
    <label for="remember">Remember Me</label>
<input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
</div>
<div class="bdt-acnt-ret">
<ul class="nav nav-tabs nav-stacked">
<li>
<a href="{{ route('password.request') }}">
                            Forgot your password?</a>
</li>
<li>
<a href="{{ route('register') }}">
                            Register Here?</a>
</li>
</ul>
</div>
</div>
</fieldset>
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
<a id="suico_5ac296893c679" href="http://www.facebook.com/bdthemes" class="su-icon square-size" target="_blank"><i class="fa fa-facebook"></i></a>
<a id="suico_5ac296893c8d5" href="http://www.twitter.com/bdthemes" class="su-icon square-size" target="_blank"><i class="fa fa-twitter"></i></a>
<a id="suico_5ac296893cb17" href="http://www.pinterest.com/bdthemes" class="su-icon square-size" target="_blank"><i class="fa fa-pinterest"></i></a>
<a id="suico_5ac296893cd4b" href="http://www.pinterest.com/selimmw/bdthemes/" class="su-icon square-size" target="_blank"><i class="fa fa-linkedin"></i></a>
<a id="suico_5ac296893cf77" href="http://www.youtube.com/bdthemes" class="su-icon square-size" target="_blank"><i class="fa fa-youtube"></i></a>
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
<a href="../../component/k2/itemlist/tag/Branding.html" data-uk-tooltip style="background-color: #5aa57b" title="2 items tagged with Branding">
        Branding    </a>
<a href="../../component/k2/itemlist/tag/Brochure.html" data-uk-tooltip style="background-color: #8b8a95" title="2 items tagged with Brochure">
        Brochure    </a>
<a href="../../blog/k2-tags-page.html" data-uk-tooltip style="background-color: #a64c99" title="11 items tagged with Business">
        Business    </a>
<a href="../../component/k2/itemlist/tag/Colorful.html" data-uk-tooltip style="background-color: #64a5c5" title="1 items tagged with Colorful">
        Colorful    </a>
<a href="../../component/k2/itemlist/tag/Create.html" data-uk-tooltip style="background-color: #bca55a" title="2 items tagged with Create">
        Create  </a>
<a href="../../component/k2/itemlist/tag/dapibus.html" data-uk-tooltip style="background-color: #c6897b" title="1 items tagged with dapibus">
        dapibus </a>
<a href="../../component/k2/itemlist/tag/Design.html" data-uk-tooltip style="background-color: #8b9c96" title="1 items tagged with Design">
        Design  </a>
<a href="../../component/k2/itemlist/tag/Generative.html" data-uk-tooltip style="background-color: #568665" title="1 items tagged with Generative">
        Generative  </a>
<a href="../../component/k2/itemlist/tag/Idea.html" data-uk-tooltip style="background-color: #b859a5" title="1 items tagged with Idea">
        Idea    </a>
<a href="../../component/k2/itemlist/tag/Identity.html" data-uk-tooltip style="background-color: #a84895" title="2 items tagged with Identity">
        Identity    </a>
<a href="../../component/k2/itemlist/tag/Logo.html" data-uk-tooltip style="background-color: #59795a" title="1 items tagged with Logo">
        Logo    </a>
<a href="../../component/k2/itemlist/tag/Magic.html" data-uk-tooltip style="background-color: #7a94a5" title="1 items tagged with Magic">
        Magic   </a>
<a href="../../component/k2/itemlist/tag/Mockup.html" data-uk-tooltip style="background-color: #6b8b4a" title="9 items tagged with Mockup">
        Mockup  </a>
<a href="../../component/k2/itemlist/tag/Products.html" data-uk-tooltip style="background-color: #4c658c" title="7 items tagged with Products">
        Products    </a>
<a href="../../component/k2/itemlist/tag/ridiculus.html" data-uk-tooltip style="background-color: #658695" title="1 items tagged with ridiculus">
        ridiculus   </a>
<a href="../../component/k2/itemlist/tag/Vivamus.html" data-uk-tooltip style="background-color: #7baa7c" title="1 items tagged with Vivamus">
        Vivamus </a>
<a href="../../component/k2/itemlist/tag/Ways.html" data-uk-tooltip style="background-color: #8b95b6" title="2 items tagged with Ways">
        Ways    </a>
<div class="clr"></div>
</div>
</div></div></div>
</section>
</div>
</div>
@endsection
