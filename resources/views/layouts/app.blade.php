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
   

    <nav>
        <div class="nav-wrapper blue">
            <div class="container">
                <a href="#!" class="brand-logo">Logo</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="sass.html">Home</a></li>        
                </ul>
            </div>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
       <li><a href="mobile.html">Home</a></li>
    </ul>

        


    @yield('content')

    <!-- JavaScripts -->
    <script src="{{asset('lib/jquery/dist/jquery.js')}}">></script>

    <script src="{{asset('lib/materialize/dist/js/materialize.js')}}">></script>
    
    <script src="{{asset('js/init.js')}}"></script>


</body>
</html>
