@extends('_master')

@section('title')
Pit Stop Random User Generator
@stop

@section('body')
<div>
<h1>Random User Generator</h1>
</div><!--ends header row -->
	
<div>
	<p>No need to plod doggedly through the tedious task of creating placeholder user data&mdash;just select the desired options and generate!</p>
	</div>
<div>
<div>
  {{Form::open(array('url' => '/user_generator', 'method' => 'GET'));}}
    
      {{ Form::label('number_of_users', 'Number of users'); }}
      {{ Form::text('number_of_users', 'maximum 99'); }}

      {{ Form::submit('Fetch Users!');}}

  {{Form::close();}}

  </div>
 <div>
      <p>Here are your users:</p>

          @for ($number_of_users = 0; $number_of_users < 99; $number_of_users++)
          
            <p>{{{ $faker->name }}}<br />
            {{{ $faker->email }}}<br />
            {{{ $faker->streetAddress }}}<br />
            {{{ $faker->city }}}, {{{ $faker->state }}} {{{ $faker->postcode }}}</p>

          @endfor
  </div>
</div>


@stop