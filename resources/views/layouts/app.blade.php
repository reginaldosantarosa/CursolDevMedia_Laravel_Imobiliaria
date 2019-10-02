<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/materialize/dist/css/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

   
</head>
<body id="app-layout">
   

   @include('layouts._admin._nav')
    <main>
       @if(Session::has('mensagem'))
           <div class="container">
               <div class="row">
                   <div class="card {{ Session::get('mensagem')['class'] }}}}">
                       <div align="center" class="card-contend">
                           {{Session::get('mensagem')['msg']}}
                       </div>
                   </div>
               </div>
           </div>

       @endif
       @yield('content')
    </main>

    <footer class="page-footer blue">
       <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">SysAdmin</h5>
                  <p class="grey-text text-lighten-4">Sistema de Administração</p>
                
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="{{route('admin.principal')}}">Inicio</a></li>
                  <li><a class="grey-text text-lighten-3" href="{{route('site.home')}}">Site</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright SysAdmin
            <a class="grey-text text-lighten-4 right" href="#!">ReginaldoSantaRosa</a>
            </div>
        </div>
    </footer>

    <!-- JavaScripts -->
    <script src="{{asset('lib/jquery/dist/jquery.js')}}">></script>
    <script src="{{asset('lib/materialize/dist/js/materialize.js')}}">></script>    
    <script src="{{asset('js/init.js')}}"></script>

</body>
</html>
