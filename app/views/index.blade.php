@extends('_master')

@section('title')
Pit Stop: Developer&rsquo;s Best Friend
@stop

@section('body')
<div class="row">
<div class="large-12 columns">  
<h1>The Developer&rsquo;s Best Friend</h1>
</div>
</div>

<div id="wrap" class="row">
	<div class="large-4 columns">
	<p>Generate random placeholder text for all of your web application design and graphic design needs&mdash;filler text that doesn’t include meaningful content helps your clients focus on the graphic elements of the page.
	</div>

	<div class="large-4 columns">
	<p>Pit Stop offers randomly generated &ldquo;Lorem Ipsum&rdquo; text based on scrambled Latin, or choose five paragraphs of preset &ldquo;Muttlem&nbsp;Ipsum,&rdquo; a mixed-breed placeholder text that blends traditional Lorem Ipsum with scrambled doggerel (poorly written verse) from the works of William Topaz McGonagall. McGonagall was a 19th&nbsp;century wag who is widely recognized as the worst English&#8209;language poet of all time.</p>
		<div class="mainpage">
		<p><span class="getform"><a href="/text_generator">Fetch Placeholder Text Generator</a></span></p>
		</div>
	</div>

	<div class="large-4 columns">
	<p>Pit Stop also makes it easy to generate random usernames and user data you can incorporate into your web design.<p>
		<div class="mainpage">
		<span class="getform"><a href="/user_generator">Fetch Random User Generator!</a></span>
		</div>
	</div> <!--end row div -->
</div><!--end of wrap div-->
@stop