@extends('_master')

@section('title')
Pit Stop Placeholder Text Generator
@stop

@section('body')
<div class="row">
<div class="large-12 columns">  
<h1>Placeholder Text Generator</h1>
</div>
</div><!--ends header row -->
  
<div id="wrap" class="row">
  <div class="large-10 large-centered medium-10 medium-centered columns">
  <p>Pit Stop offers &ldquo;Muttlem Ipsum,&rdquo; an eloquently meaningless mix of the traditional &ldquo;lorem ipsum&rdquo; Latin placeholder text and doggerel from the works of 19th century poet William&nbsp;Topaz&nbsp;McGonagall.</p>
  </div>

  <div class="errors">
    
      @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
      @endforeach
 </div>

 {{Form::open(array('url' => '/text_generator', 'method' => 'POST'));}}

<div id="generate" class="row">
    <div class="large-6  large-offset-4 medium-6 medium-offset-4 small-12 columns">
      <div class="row collapse">
        <label>Number of paragraphs (maximum 5)</label>
        <div class="small-2 end columns">
          <input type="text" name="number_of_paragraphs" id="number_of_paragraphs" />
        </div>
        <div class="small-4 end columns">
        <input type="submit" id="submit" value="Fetch Text!" class="button postfix">
        </div>
      </div>
    </div>
  </div> 
  {{Form::close();}}

  <div class="row">
  <div class="large-4 large-centered medium-4 medium-centered columns">
        <p>Here is your placeholder text:</p>
  </div>
</div>

  <div class="row">
    <div class="large-10 large-centered medium-10 medium-centered columns">
          @foreach ($paragraphs as $paragraph)

              <p>{{{ $paragraph }}}</p>

          @endforeach
      </div>     
    </div>
  </div><!-- end of wrap -->

@stop