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
  <div class="large-11 large-centered medium-10 medium-centered columns">
  <p>Pit Stop offers randomly generated &ldquo;Lorem Ipsum&rdquo; that&rsquo;s the traditional scrambled Latin placeholder text.</p>
  <p>Tired of Lorem&nbsp;Ipsum? You can generate five fixed paragraphs of &ldquo;Muttlem Ipsum,&rdquo; an eloquently meaningless mix of Latin Lorem&nbsp;Ipsum text and doggerel from the works of 19th century poet William&nbsp;Topaz&nbsp;McGonagall.</p>
  </div>


  <div class="errors">
    
      @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
      @endforeach
 </div>

<div id="generate" class="row">
    <div class="large-5 medium-5 medium-offset-1 columns">

      {{Form::open(array('url' => '/text_generator', 'method' => 'POST'));}}
      <label>Choose Lorem Ipsum, indicate number of paragraphs</label>
      <div class="row collapse">
        <div class="medium-2 small-2 end columns">
         <input type="text" name="number_of_paragraphs" id="number_of_paragraphs" placeholder="max 99">
        </div>
        <div class="medium-9 small-9 end columns">
         <input type="submit" id="submit" value="Fetch Lorem Ipsum" class="button postfix">
        </div>
      </div>
      {{Form::close();}}
    </div>
    <div class="large-5 medium-5 end columns">
      {{Form::open(array('url' => '/text_generator', 'method' => 'POST', 'files' => true));}}
      <label>Choose five preset paragraphs of Muttlem Ipsum</label>
      <input type="hidden" name="doggerel">
        <input type="submit" value="Fetch Muttlem Ipsum" class="button postfix">
      {{Form::close();}}
    </div>
  </div><!-- end of row div -->

  <div class="row">
  <div class="large-4 large-centered medium-5 medium-centered columns">
        {{ $success_message }}
  </div>
</div>

  <div class="row">
    <div id="text_container" class="large-11 large-centered medium-11 medium-centered columns">
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
</div>
@stop