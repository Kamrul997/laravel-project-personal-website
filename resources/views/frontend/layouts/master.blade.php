<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Arshia - Fully Responsive Personal Template</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Retrina Group" />

        <!--  FavIcon  -->
        <link rel="shortcut icon" href="assets/img/favicon.ico">

        <!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Muli:300,400,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

        <!-- Plugin Css -->
        <link rel="stylesheet" href="assets/css/plugins.css">
        <!-- Colors Css -->
        <link rel="stylesheet" href="assets/css/green-color.css" id="option-color">
        <!--  Custom Style CSS  -->
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/colorfull-main.css">
    </head>

    <main >

        @include('frontend.layouts.header')

        @yield('contents')

         <!--   Color Scheme  -->
         <a class="color-scheme hide text-white bg-base-color d-inline-block" href="javascript:void(0)"><i class="lni-night"></i></a>
         <a class="color-scheme hide color-scheme-light text-white bg-base-color d-none" href="javascript:void(0)"><i class="lni-sun"></i></a>

         <!-- Start Color Pallet -->
         <!-- <div id="color-switcher" class="color-switcher" >
             <div class="text-center color-pallet hide">
                 <h6 class="text-center mt-3">Select your color</h6>
                 <ul class="pattern">
                     <li>
                         <a class="color1" href="#"></a>
                     </li>
                     <li>
                         <a class="color2" href="#"></a>
                     </li>
                     <li>
                         <a class="color3" href="#"></a>
                     </li>
                     <li>
                         <a class="color4" href="#"></a>
                     </li>
                     <li>
                         <a class="color5" href="#"></a>
                     </li>
                     <li>
                         <a class="color6" href="#"></a>
                     </li>
                     <li>
                         <a class="color7" href="#"></a>
                     </li>
                     <li>
                         <a class="color8" href="#"></a>
                     </li>
                     <li>
                         <a class="color9" href="#"></a>
                     </li>
                 </ul>
             </div>
             <div class="pallet-button hide">
                 <a href="#" class="cp-toggle"><i class="fa fa-cog fa-spin"></i></a>
             </div>
         </div> -->
         <!-- End Color Pallet -->

    </main>

    <!--  JavaScripts  -->
 <script data-cfasync="false" src="{{ asset('assets/js/email-decode.min.js') }}">
 </script>
 <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>


 <!--  Plugin Js  -->
 <script src="{{ asset('assets/js/plugins.js') }}"></script>
 <!--  Custom JS  -->
 <script src="{{ asset('assets/js/arshia.js') }}"></script>

 </body>
</html>
