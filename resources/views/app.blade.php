<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title')</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CSS Datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 

    <!-- Style Template -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('/vendor/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{url('/img/ntust.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{url('/vendor/css/material-dashboard.css?v=2.1.0')}}" rel="stylesheet" />

    @yield('css')
    
    <script>
        /* isNumberKey
            Only allows NUMBERS to be keyed into a text field.
            @environment ALL
            @param evt - The specified EVENT that happens on the element.
            @return True if number, false otherwise.
        */
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            // Added to allow decimal, period, or delete
            if (charCode == 110 || charCode == 190 || charCode == 46) 
                return true;
            
            if (charCode > 31 && (charCode < 48 || charCode > 57)) 
                return false;
            
            return true;
        }
    </script>
    </head>
    <body class="">
    <div class="wrapper ">
        @section('sidebar')
            <div class="sidebar" data-color="azure" data-background-color="white">
                {{-- 
                    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

                    Tip 2: you can also add an image using data-image tag
                --}}
                <div class="logo">
                    <a href="http://ntust.edu.tw" class="simple-text logo-normal">
                        <img src="{{url('/img/taiwantech.png')}}" class="img-fluid" alt="Taiwan Tech"/>
                    </a>
                </div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="nav-item {{Request::is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="{{url('/')}}">
                            <i class="material-icons">import_contacts</i>
                            <p>Homework</p>
                            </a>
                        </li>
                        <li class="nav-item  {{Request::is('new') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/new')}}">
                            <i class="material-icons">queue</i>
                            <p>New Data</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        @show
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="#pablo">Richard Firdaus Oeyliawan M10709801</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form">
                    <div class="input-group no-border">
                    </div>
                    </form>
                </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                    <li>
                        <a href="https://www.creative-tim.com">
                        Creative Tim
                        </a>
                    </li>
                    </ul>
                </nav>
                <div class="copyright float-right">
                    created by Richard Firdaus Oeyliawan M10709801 MI
                </div>
                <!-- your footer here -->
                </div>
            </footer>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!--   Core JS Files   -->
    <script src="{{url('/vendor/js/core/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{url('/vendor/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{url('/vendor/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
    <script src="{{url('/vendor/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <!-- Chartist JS -->
    <script src="{{url('/vendor/js/plugins/chartist.min.js')}}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{url('/vendor/js/plugins/bootstrap-notify.js')}}"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{url('/vendor/js/material-dashboard.min.js?v=2.1.0')}}" type="text/javascript"></script>
    
    {{-- Datatables JS --}}
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

    {{-- Highcharts JS--}}
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>

    @yield('javascript')
    
</body>
</html>
