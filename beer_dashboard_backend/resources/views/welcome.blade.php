<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="{{ asset('image/png') }}" sizes="16x16" href="images/logo.jpg">
    <title>Pca Final VisA - Fco Aguilera</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="{{ asset('css/lib/calendar2/semantic.ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- Logo icon -->
                        <b><img src="images/logo.jpg" alt="homepage" class="dark-logo" style="height: 29px;" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>Dashboard Beers</span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">

                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">HOME</li>
                        <li> <a href="{{ url('/') }}"><i class="fa fa-tachometer"></i><span class="">Inicio Dashboard</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Inicio Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-12"><h2>Cervezas con:</h2></div>
                    
                    <div class="col-md-6">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-sliders f-s-90 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h3 >Mayor Grado de Alcohol</h3>
                                    <p class="m-b-0">Valor: <strong id="val_max_alc"></strong></p>
                                    <p class="m-b-0">Nombre: <strong id="nom_max_alc"></strong> </p>
                                    <p class="m-b-0">Tipo: <strong id="tipo_max_alc"></strong> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-signal f-s-90 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h3 >Mayor Grado de Amargor</h3>
                                    <p class="m-b-0">Valor: <strong id="val_max_amar"></strong></p>
                                    <p class="m-b-0">Nombre: <strong id="nom_max_amar"></strong> </p>
                                    <p class="m-b-0">Tipo: <strong id="tipo_max_amar"></strong> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row bg-white m-l-0 m-r-0 box-shadow ">

                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Gráfico de Barras:</h4>
                                <div id="columnchart_beer" style="height: 600px"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- column -->
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Informe:</h4>
                                    <!-- Nav tabs -->
                                    <div class="vtabs customvtab">
                                        <ul class="nav nav-tabs tabs-vertical" role="tablist">
                                            <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#home3" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Análisis de los datos</span> </a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile3" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Justificación del gráfico</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link " data-toggle="tab" href="#messages3" role="tab" aria-selected="true"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Origen de la fuente de datos</span></a> </li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active show" id="home3" role="tabpanel">
                                                <div class="p-20">
                                                    <h5>Análisis de los datos</h5>
                                                    <h6>Se ha decidido observar cuales son las cervezas que mayor grado de alcohol poseen, y contemplar de mano de un gráfico de barras si el amargor puede llegar a influir en esta medida, el problema que se contempla esque hay algunas cervezas que no disponen de toda la información (ejemplo del amargor que algunas cervezas se encuentran a 0). </h6>
                                                    <p>También podemos contemplar que la librería que se ha utilado en este caso es Google Charts y no pinta bien los datos ya que el valor de 0 en el  amargor lo establece entre los rangos 52 y 90 por lo tanto visualmente al usuario lo está engañando. Pero este problema no lo he podido solucionar.</p>
                                                </div>
                                            </div>
                                            <div class="tab-pane p-20" id="profile3" role="tabpanel">
                                                <h5>Justificación del gráfico</h5>
                                                    <h6>Se ha utilizado este tipode gráfico porque se quería mostrar de menor a mayor las cervezas que mayor alcohol poseen. Para ello hemos hecho uso de un gráfico de columnas ya que se consigue ver visualmente rápido lo que se desea transmitir al usuario final.</h6>
                                                    <p>Además nos ha dado la posibilidad de añadir un doble eje de 'y' para mostrar al usuario si cuanto mayor alcohol mayor amargor dentro de este top 10.</p>
                                            </div>
                                            <div class="tab-pane p-20" id="messages3" role="tabpanel">
                                                <h5>Origen de la fuente de datos</h5>
                                                    <h6>Se han obtenido estos datos de la siguiente página web: <a href="https://www.kaggle.com/nickhould/craft-cans"> Kaggle</a></h6>
                                                    <p>es una plataforma para el modelado predictivo y competencias de análisis en el que estadísticos y mineros de datos compiten para producir los mejores modelos para predecir y describir los conjuntos de datos cargados por empresas y usuarios. Este enfoque de crowdsourcing se basa en el hecho de que existen innumerables estrategias que se pueden aplicar a cualquier tarea de modelado predictivo y es imposible saber de antemano qué técnica o analista será más eficaz.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 Todos los derechos reservados <strong>Práctica de Fco José Aguilera Matas</strong> - El tema utilizado ha sido desarrollado por: <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="{{ asset('js/lib/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('js/lib/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <!--Custom JavaScript -->


    <!-- Amchart -->
     <script src="{{ asset('js/lib/morris-chart/raphael-min.js') }}"></script>
    <script src="{{ asset('js/lib/morris-chart/morris.js') }}"></script>
    <script src="{{ asset('js/lib/morris-chart/dashboard1-init.js') }}"></script>


    <script src="{{ asset('js/lib/calendar-2/moment.latest.min.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('js/lib/calendar-2/semantic.ui.min.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('js/lib/calendar-2/prism.min.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('js/lib/calendar-2/pignose.init.js') }}"></script>

    <script src="{{ asset('js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <!-- scripit init-->

    <script src="{{ asset('js/custom.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            var token = "{{ csrf_token() }}";
            $.ajax({
                type: "GET",
                url: "{{url('/data_alc_max_beer')}}",
                headers: {'X-CSRF-TOKEN': token},
                datatype: 'json',
                success: function(data){
                    //console.log(data);
                    // Parse the returned json data
                    var opts = $.parseJSON(data);
                   
                    // Use jQuery's each to iterate over the opts value
                    $.each(opts, function(i) {
                        $('#val_max_alc').append(''+opts[i]['alcohol']+'');
                        $('#nom_max_alc').append(''+opts[i]['nombre']+'');
                        $('#tipo_max_alc').append(''+opts[i]['estilo']+'');
                    });
                }
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            var token = "{{ csrf_token() }}";
            $.ajax({
                type: "GET",
                url: "{{url('/data_amar_max_beer')}}",
                headers: {'X-CSRF-TOKEN': token},
                datatype: 'json',
                success: function(data){
                    //console.log(data);
                    // Parse the returned json data
                    var opts = $.parseJSON(data);
                   
                    // Use jQuery's each to iterate over the opts value
                    $.each(opts, function(i) {
                        $('#val_max_amar').append(''+opts[i]['amargor']+'');
                        $('#nom_max_amar').append(''+opts[i]['nombre']+'');
                        $('#tipo_max_amar').append(''+opts[i]['estilo']+'');
                    });
                }
            });
        });
    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
          google.charts.load('current', {'packages':['bar']});
          google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            $.getJSON('{{ url('/data_alc_beer') }}', function (datos_beer) {
                success = true;
                var data = google.visualization.arrayToDataTable([
                  ['Nombre', 'Alcohol', 'Amargor'],
                  [datos_beer[9]['nombre'], datos_beer[9]['alcohol'], datos_beer[9]['amargor']],
                  [datos_beer[8]['nombre'], datos_beer[8]['alcohol'], datos_beer[8]['amargor']],
                  [datos_beer[7]['nombre'], datos_beer[7]['alcohol'], datos_beer[7]['amargor']],
                  [datos_beer[6]['nombre'], datos_beer[6]['alcohol'], datos_beer[6]['amargor']],
                  [datos_beer[5]['nombre'], datos_beer[5]['alcohol'], datos_beer[5]['amargor']],
                  [datos_beer[4]['nombre'], datos_beer[4]['alcohol'], datos_beer[4]['amargor']],
                  [datos_beer[3]['nombre'], datos_beer[3]['alcohol'], datos_beer[3]['amargor']],
                  [datos_beer[2]['nombre'], datos_beer[2]['alcohol'], datos_beer[2]['amargor']],
                  [datos_beer[1]['nombre'], datos_beer[1]['alcohol'], datos_beer[1]['amargor']],
                  [datos_beer[0]['nombre'], datos_beer[0]['alcohol'], datos_beer[0]['amargor']],
                ]);

                var options = {
                  chart: {
                    title: 'Top 10 Cervezas con más alcohol',
                    subtitle: 'Se ha obtenido una muestra de 2300 Cervezas y se han seleccionado las 10 con mayor grado de alcohol.',
                  },
                  series: {
                    0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
                    1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
                  },
                  axes: {
                    y: {
                      distance: {label: 'Medida Alcohol'}, // Left y-axis.
                      brightness: {side: 'right', label: 'Medida Amargor'} // Right y-axis.
                    }
                  }
                };

                var chart = new google.charts.Bar(document.getElementById('columnchart_beer'));

                chart.draw(data, google.charts.Bar.convertOptions(options));
            });
        }
    </script>

</body>

</html>
