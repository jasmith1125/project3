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
  <p>Pit Stop offers randomly generated &ldquo;Lorem Ipsum&rdquo; based on the traditional scrambled Latin text.

  Tired of Lorem Ipsom? You can also generate five fixed paragraphs of &ldquo;Muttlem Ipsum,&rdquo; an eloquently meaningless mix of Latin text and doggerel from the works of 19th century poet William&nbsp;Topaz&nbsp;McGonagall.</p>
  </div>

  <div class="errors">
    
      @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
      @endforeach
 </div>

 

<div id="generate" class="row">
{{Form::open(array('url' => '/text_generator', 'method' => 'POST'));}}
    <div class="large-3 columns">
      <div class="row collapse">
        <label>Number of paragraphs (maximum 5)</label>
        <div class="small-2 end columns">
          <input type="text" name="number_of_paragraphs" id="number_of_paragraphs" />
        </div>
        <div class="small-6 end columns">
        <input type="submit" id="submit" value="Lorem Ipsum" class="button postfix" />
        </div>
      </div>
    </div>
  </div> 
  {{Form::close();}}

  <div class="large-5  medium-5 columns">
{{Form::open(array('url' => '/text_generator', 'method' => 'POST', 'files' => true));}}
        <label>Click the button to fetch five present paragraphs of Muttlem Ipsum.</label>
      <input type="hidden" name="doggerel" />
      <input type="submit" value="Muttlem Ipsum" class="button small" />
        </div>
  {{Form::close();}}

  <div class="row">
  <div class="large-12 large-centered medium-4 medium-centered columns">
        <p>Here is your placeholder text:</p>
  </div>
</div>

  <div class="row">
    <div class="large-10 large-centered medium-10 medium-centered columns">
          @foreach ($paragraphs as $paragraph)

              <p>{{{ $paragraph }}}</p>

          @endforeach

          <?php if(isset ($_POST['doggerel'])) {
          $myfile = fopen("muttlem.txt", "r");
          echo fread($myfile,filesize("muttlem.txt"));
          fclose($myfile); }
          ?>

         
       </div>   
    </div>
  </div><!-- end of wrap -->

@stop