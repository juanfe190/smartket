<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="{{asset('css/app.css')}}" rel="stylesheet">
    </head>

    <body toast="<?php if(isset($_GET['toast'])) echo $_GET['toast']; 
                        else if($errors->any()) echo $errors->first('toast');
                  ?>">
      @yield('body')
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/all.js')}}"></script>
    </body>
  </html>
