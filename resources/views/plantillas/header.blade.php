<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">  
         <meta name="author"      content="Carlos Segué">
         <meta name="Descripción" content="Comienzo curso ITAcademy">
         <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no,  maximum-scale=1.0, minimum-scale=1.0">
         <meta http-equiv="x-ua-compatible" content="ie-edge">
         <link rel="stylesheet" href="fonts/css/fontello.css">  <!-- iconos -->
         <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <!-- Fuente: Roboto Regular 400 -->
         <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
         
         <!-- Font: Staatliches -->
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">

         <!-- Font: EB+Garamond -->
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Staatliches&display=swap" rel="stylesheet">
         
         <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">


         <title>@yield('title')</title>

 </head>
 <body>

<!-- ********************************************************************************************************************* -->
<!-- MENU-2  DEBAJO NAVBAR
**************************************************************************************************************************  -->
<div class="container-fluid" style="width:auto">
        <div class="Mod modtasca">
        <div class="row rowtasca">
            <div class="col-12">
                <h5 class="centrar"> 
                Básico Laravel + PHP
                </h5>
            </div>
        </div>
        </div>          
</div> <!-- container -->          
<!--............................................................................................................... -->    

@yield('content')

     <script src="js/jquery-3.5.1.slim.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>


</body>
</html>