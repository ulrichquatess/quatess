@extends('layouts.main')

    @section('title')
			
	Contact Us
	
	@endsection

@section('content')
<div class="mainbody-wrapper" id="tmMainBody">
<div class="uk-container uk-container-center">
<div class="tm-middle uk-grid" data-uk-grid-match data-uk-grid-margin>
<div class="tm-main uk-width-medium-1-1">
<main class="tm-content">
<div id="system-message-container">
</div>
<div class="contact plain-form">
<div class="contact-image">

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

</dd><dt class="tabs display-form">Contact Form</a></h3></span></dt><dd class="tabs">
<div class="contact-form">
	<!-- Contact Form Begins Here -->
	<form   action="{{url('contact')}}" method="POST" id="contact-form" class="form-validate">
                            {{ csrf_field() }}
<fieldset>
<legend>Send an Email. All fields with an asterisk (*) are required.</legend>
<div class="row-fluid">
<div class="span4">
<div class="control-group">
<div class="control-label"><label id="name" for="name" class="hasPopover required" title="Name" data-content="Your name.">
	Name<span class="star">&#160;*</span></label>
</div>
<div class="controls">
	<input type="text" name="name" id="name"  value="" class="required" size="30"       required aria-required="true"      />
</div>
</div>
</div>
<div class="span4">
<div class="control-group">
<div class="control-label"><label id="email" for="email" class="hasPopover required" title="Email" data-content="Email Address for contact.">
	Email<span class="star">&#160;*</span></label>
</div>
<div class="controls">
	<input type="email" name="email" class="validate-email required" id="email" value=""
 size="30"    autocomplete="email"    required aria-required="true"  /></div>
</div>
</div>
<div class="span4">
<div class="control-group">
<div class="control-label"><label id="subject" for="subject" class="hasPopover required" title="Subject" data-content="Enter the subject of your message here.">
	Subject<span class="star">&#160;*</span></label>
</div>
<div class="controls">
	<input type="text" name="subject" id="subject"  value="" class="required" size="60"       required aria-required="true"      />
</div>
</div>
</div>
</div>
<div class="row-fluid">
<div class="span12">
<div class="control-group">
<div class="control-label"><label id="message" for="message" class="hasPopover required" title="Message" data-content="Enter your message here.">
	Message<span class="star">&#160;*</span></label>
</div>
<div class="controls">
	<textarea name="message" id="message"   cols="50"  rows="10" class="required"      required></textarea>
</div>
</div>
</div>
</div>

<div class="control-group">
<div class="controls">
</div>
</div>
<div class="form-action"><button class="validate readon" type="submit">Send Email</button>
<input type="hidden" name="option" value="com_contact" />
<input type="hidden" name="task" value="contact.submit" />
<input type="hidden" name="return" value="" />
<input type="hidden" name="id" value="2:selim-rana" />
<input type="hidden" name="d39aaacb62199c6c27cd7f57ed3eb079" value="1" />	</div>
</fieldset>
</form>
</div>
</dd></dl></div>
</main>
</div>
</div>
</div>
</div>
<div class="fullwidth-bottom-wrapper" id="tmFullWidthBottom">
<div class="uk-container-center">
<section class="tm-fullwidth-bottom uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin>
<div class="uk-width-1-1"><div class=""><div class="panel-content">
<div id="su_gma5ac29696ef8fb"  class="su-gmapa map-as-background"></div>
<div class="su-spacer sus5ac29696efcc0"></div>
<div id="surow5ac29696efded" class="su-row su-clmms-yes">
<div id="sucol5ac29696eff4a" class="su-column su-column-size-1-1 su-column-size-medium-1-2"><div class="su-column-inner"><div class="su-column-content">
</div></div></div>
<div id="sucol5ac29696f0143" class="su-column su-column-size-1-1 su-column-size-medium-1-2"><div class="su-column-inner"><div class="su-column-content">
<div style="max-width: 300px;margin: 0 auto;"><div id="supnl5ac29696f034f" class="su-panel sup-align-left" data-url="" data-target="self"><div class="su-panel-content su-content-wrap">
<h3>Our address</h3>
BdThemes Ltd, Colony(North Para),<br/>Bogra - 5800, Bangladesh. 
<p><b>Phone: +0546-485 874 355</b></p>
</div></div></div>
</div></div></div>
</div>
<div class="su-spacer sus5ac29696f0551"></div>
</div></div></div>
</section>
</div>
</div>
<!-- Footer Here -->
@include('layouts.footer1')

@endsection