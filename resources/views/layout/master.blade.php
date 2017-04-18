<!DOCTYPE html>
<html>
    <head>
        <title>@yield('head.title')</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ url('/css/main.css') }}" media="screen" title="no title" charset="utf-8">
        @yield('head.css')
    </head>
    <body>

      @include('partials.navbar')

      <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
              @yield('body.content')
            </div>
          </div>
      </div>

      @include('partials.footer')

      @yield('body.js')
    </body>
</html>
