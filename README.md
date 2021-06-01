-----EXTENDENDO O TEMPLATE ADM BOOTSTRAP 5 MAKRO HTML PARA CADA VIEW -------------------------------------------


extendendo layout.app

        - incluir o layout hearder e nav  @incluede("layouts.hearder") @include("layouts.nav")
        - @yield("style")
        - @yield("wrapper") 
        - @yield("script") 

        <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--favicon-->
        <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
        <!--plugins-->
        @yield("style")
        <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
        <!-- loader-->
        <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
        <script src="{{ asset('assets/js/pace.min.js') }}"></script>
        <!-- Bootstrap CSS -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

        <title>Siliplastic</title>
        </head>

        <body class="bg-theme bg-theme1">
        <!--wrapper-->
        <div class="wrapper">

        @include("layouts.header")

        @include("layouts.nav")


        <div class="page-wrapper">
            <div class="page-content">
                
                @yield("wrapper")

            </div>
        </div>
    

        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © {{ date('Y') }}. Todos os direitos reservados.</p>
        </footer>
        </div>
        <!--end wrapper-->
        <!-- Bootstrap JS -->
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <!--plugins-->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
        <!--app JS-->
        <script src="{{ asset('assets/js/app.js') }}"></script>
        @yield("script")
</body>



passar a extensão dos layouts nas views        index.blade.php

    @extends('layouts.app')

        @section('style')
        <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
        @endsection

        @section('wrapper')

        ////cola aqui a informacao que fica na pagina index.

        
        @endsection
            
        @section('script')
        <script src="{{ asset('assets/plugins/chartjs/js/Chart.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-knob/excanvas.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.js') }}"></script>
        <script>
            $(function() {
                $(".knob").knob();
            });
        </script>
        <script src="{{ asset('assets/js/index.js') }}"></script>
        @endsection
