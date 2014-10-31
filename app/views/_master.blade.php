<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <title>@yield('title', 'Pit Stop: The Developer&rsquo;s Best Friend')</title>
    
    {{ HTML::style('css/foundation.min.css') }}
  {{ HTML::style('css/app.css') }}
  {{ HTML::script('js/vendor/modernizr.js') }}

   

</head>

<body>
 <div id="outer_limits">
<div id="container" class="row">
 <div class="row">
    <div class = "large-12 columns">
  <img src='../img/banner.jpg' alt='Friendly pitbull with "Pit Stop" title'>
</div>
</div>
  <div class="large-12 columns">

@yield('body')

@yield('scripts')

</div>
   <div class="row">
    <div class="large-12 columns">
    <footer>
          <ul>
             <li><a href="/">Home</a></li>
            <li><a href="/text_generator">Placeholder&nbsp;Text&nbsp;Generator</a></li>
            <li><a href="/user_generator">Random&nbsp;User&nbsp;Generator</a></li>
            
          </ul>
  </footer>
  <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script> 
</div>
</div>
</div>
</div><!-- end outer_limits -->
</body>
</html>