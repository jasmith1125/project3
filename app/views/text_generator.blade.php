@extends('_master')

@section('title')
Pit Stop Placeholder Text Generator
@stop

@section('body')
<div> 
<h1>Pit Stop Placeholder Text Generator</h1>
</div><!--ends header row -->
	
<div>
  <p>Pit Stop currently offers traditional &ldquo;Lorem Ipsum&rdquo; text based on scrambled Latin. In the near future we hope to offer &ldquo;Doggerel&rdquo; based on the works of 19th century poet William&nbsp;Topaz&nbsp;McGonagall.</p>
  </div>

  <div>
  {{Form::open(array('url' => '/text_generator', 'method' => 'GET'));}}
      {{Form::label('number_of_paragraphs', 'Number of paragraphs');}}
      {{Form::text('number_of_paragraphs', 'maximum 99');}}
      {{Form::submit('Submit');}}
  {{Form::close();}}

  </div>
  <div>
      <p>Here is your placeholder text:</p>

          @foreach ($paragraphs as $paragraph)
              <p>{{{$paragraph}}}</p>
          @endforeach
  </div>

@stop