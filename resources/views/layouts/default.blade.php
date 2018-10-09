<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title','Demo')</title>
    <meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="{{ url('/') }}/Flat-UI/dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="{{ url('/') }}/Flat-UI/dist/css/flat-ui.css" rel="stylesheet">
    <link href="{{ url('/') }}/Flat-UI/docs/assets/css/demo.css" rel="stylesheet">

    <link rel="shortcut icon" href="{{ url('/') }}/Flat-UI/dist/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="{{ url('/') }}/Flat-UI/dist/js/vendor/html5shiv.js"></script>
      <script src="{{ url('/') }}/Flat-UI/dist/js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
    <body>
         @include('layouts._header')
        <div class="container">
            @yield('container')
        </div>
        @include('layouts._footer')
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
      <!-- Bootstrap 4 requires Popper.js -->
      <script src="https://unpkg.com/popper.js@1.14.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
      <script src="http://vjs.zencdn.net/6.6.3/video.js"></script>
      <script src="{{ url('/') }}/Flat-UI/dist/scripts/flat-ui.js"></script>
      <script src="{{ url('/') }}/Flat-UI/docs/assets/js/application.js"></script>
      <script type="text/javascript">
          $('#morez').click(function(){
              $('#articlelist').append($('#articlelist').children('.row').clone());
          })
          $('.zremind').click(function(){
            $(this).empty();
          })
      </script>
    </body>
</html>
