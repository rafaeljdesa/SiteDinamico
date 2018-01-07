<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href= "{{asset('materialize/css/materialize.min.css')}}"  media="screen, projection"/>
      <!--Import css-->
      <link type="text/css" rel="stylesheet" href= "{{asset('css/style.css')}}"/> 

      <!--Let browser know website is optimized for mobile-->
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    </head>

    <body id="app-layout">
      
      <header>
        @include('layouts._admin._nav')
      </header>             
      <main>
        @if(Session::has('mensagem'))
          <div class="container">
            <div class="row">
              <div class="card {{Session::get('mensagem')['class']}}">
                <div align="center" class="card-content">
                  {{Session::get('mensagem')['msg']}}
                </div>
              </div>
            </div>
          </div>
        @endif

        @yield('content')
      </main> 
          
        @include('layouts._admin._footer')

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="{{asset('js/jquery-3.2.1.js')}}"></script>
        <script type="text/javascript" src="{{asset('materialize/js/materialize.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
                 
    </body>
  </html>