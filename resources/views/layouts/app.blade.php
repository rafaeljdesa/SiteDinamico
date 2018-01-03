<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href= "{{asset('materialize/css/materialize.min.css')}}"  media="screen, projection"/>
    <!--Import css-->
    <link type="text/css" rel="stylesheet" href= "{{asset('css/style.css')}}"/> 

    <!--Let browser know website is optimized for mobile-->
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Laravel</title>

    
</head>
<body id="app-layout">
  
    @include('layouts._admin._nav')
  <main>
    @yield('content')
  </main>
    

  <script type="text/javascript" src="{{asset('js/jquery-3.2.1.js')}}"></script>
  <script type="text/javascript" src="{{asset('materialize/js/materialize.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>