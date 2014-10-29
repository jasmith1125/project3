@extends('_master')

@section('title')
Pit Stop Random User Generator
@stop

@section('body')
<div class="row">
<div class="large-12 columns">  
<h1>Random User Generator</h1>
</div>
</div><!--ends header row -->
  
<div id="wrap" class="row">
  
  <div class="large-12 medium-12 columns">
  <p>No need to plod doggedly through the tedious task of creating placeholder user data&mdash;just indicate the number of users you need below and generate! Data includes user name, email address and mailing address.</p>
  </div>

<div class="errors">
      @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
      @endforeach
 </div>

  {{Form::open(array('url' => '/user_generator', 'method' => 'POST'));}}
    
      <div id="generate" class="row">
    <div class="large-6  large-offset-4 medium-6 medium-offset-4 small-11 small-offset-1 columns">
      <div class="row collapse">
        <label>Number of users (maximum 99)</label>
        <div class="small-2 end columns">
          <input type="text" name="number_of_users" id="number_of_users" placeholder="max 99">
        </div>
        <div class="small-6 end columns">
        <input type="submit" name="result" id="submit" value="Fetch Users!" class="button postfix">
        </div>
      </div>
    </div>
  </div> 
  {{Form::close();}}

 <div class="row">
  <div class="large-4 large-centered medium-4 medium-centered columns">
      {{ $success_message }}
      </div>
    </div>

<div class="row">
  <div id="text_container" class="large-4 large-centered medium-4 medium-centered columns">
          @for ($i = 0; $i < $number_of_users; $i++)
         
            <p>{{ $faker->name }}<br />
            {{ $faker->email }}<br />
            {{ $faker->streetAddress }}<br />
            {{ $faker->city }}, {{ $faker->state }} {{ $faker->postcode }}</p>
          @endfor

    </div>     
  </div>
</div><!--end wrap div -->

@stop