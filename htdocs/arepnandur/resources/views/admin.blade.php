<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Halaman Admin</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{url()}}/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{url()}}/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{url()}}/dist/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{url()}}/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{url()}}/bower_components/morrisjs/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{url()}}/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/admin">Dasbor Admin</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> {!!Auth::user()->name!!} <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="/admin"><i class="fa fa-home fa-fw"></i> Halaman utama</a>
                            </li>
                            <li>
                                <a href="/admin/tanaman"><i class="fa fa-tree fa-fw"></i> Tanaman</a>
                            </li>
                            <li>
                                <a href="/admin/pupuk"><i class="fa fa-pagelines fa-fw"></i> Pupuk</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            @yield('content')
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{url()}}/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{url()}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{url()}}/bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Flot Charts JavaScript -->
        <script src="{{url()}}/bower_components/flot/excanvas.min.js"></script>
        <script src="{{url()}}/bower_components/flot/jquery.flot.js"></script>
        <script src="{{url()}}/bower_components/flot/jquery.flot.pie.js"></script>
        <script src="{{url()}}/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="{{url()}}/bower_components/flot/jquery.flot.time.js"></script>
        <script src="{{url()}}/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src="{{url()}}/js/flot-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{url()}}/dist/js/sb-admin-2.js"></script>
    </body>
</html>