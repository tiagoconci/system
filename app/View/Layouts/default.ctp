<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Sistema de Agendamento
            </a>
            <!-- Minimizar bara lateral -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
<!-- ICONE DE NOTIFICAÇÃO -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">

                            </ul>
                        </li>


<!-- ICONE DE STATUS -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">

                            </ul>
                        </li>

<!-- PEFFIL DA CONTA -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">

<!-- LOUGOUT E CONTA-->
                                <li class="user-panel">
                                    <div class="pull-left">
                                        <a href="#" class="fa fa-user btn btn-default btn-flat">  Conta</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="fa fa-power-off btn btn-default btn-flat">  Sair</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>


<!-- MENU LATERAL   -->
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder=<?php echo __("Search..."); ?>>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->

<!-- INCIO ICONES BARA LATERAL -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.html">
                                <i class="glyphicon glyphicon-home"></i> <span>Início</span>
                            </a>
                        </li>

                        <!-- MENU AGENDA -->
                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-calendar"></i>
                                <span>AGENDA</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/diaries"><i class="glyphicon glyphicon-align-justify"></i> Listar Agendas</a></li>
                                <li><a href="/diaries"><i class="glyphicon glyphicon-collapse-down"></i> Fechar Agenda</a></li>
                                <li><a href="/diaries/add"><i class="fa fa-folder-open-o"></i> Abrir Agenda</a></li>
                            </ul>
                        </li>

                        <!-- MENU PACINETES -->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-wheelchair"></i>
                                <span>PACIENTES</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/patients"><i class="glyphicon glyphicon-align-justify"></i> Listar Pacientes</a></li>
                                <li><a href="/patients/add"><i class="fa fa-plus"></i> Cadastrar Paciente</a></li>
                                <li><a href="/patients"><i class="fa fa-minus-square-o"></i> Listar Pacientes Desbilitados</a></li>
                            </ul>
                        </li>

                        <!-- MENU DESTINOS -->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-map-marker"></i>
                                <span>DESTINOS</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/destinations"><i class="glyphicon glyphicon-align-justify"></i> Listar Destinos</a></li>
                                <li><a href="/destinations/add"><i class="fa fa-plus"></i> Cadastrar Destinos</a></li>
                                <li><a href="/destinations"><i class="fa fa-minus-square-o"></i> Listar Destinos Desbilitados</a></li>
                            </ul>
                        </li>

                        <!-- MENU ESTABELECIMENTOS -->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-hospital-o"></i>
                                <span>ESTABELECIMENTOS</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/establishments"><i class="glyphicon glyphicon-align-justify"></i> Listar Estabelecimentos</a></li>
                                <li><a href="/establishments/add"><i class="fa fa-plus"></i> Cadastrar Estabelecimento</a></li>
                                <li><a href="/establishments"><i class="fa fa-minus-square-o"></i> Listar Estabelecimentos Desabilitados</a></li>
                            </ul>
                        </li>

                        <!-- MENU CIDADES -->
                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-tower"></i>
                                <span>CIDADES</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/cities"><i class="glyphicon glyphicon-align-justify"></i> Listar Cidades</a></li>
                                <li><a href="/cities/add"><i class="fa fa-plus"></i> Cadastrar Cidade</a></li>
                                <li><a href="/cities"><i class="fa fa-minus-square-o"></i> Listar Cidades desabilitadas</a></li>
                            </ul>
                        </li>

                        <!-- MENU USUARIOS -->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span>USUÁROIS</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/users"><i class="glyphicon glyphicon-align-justify"></i> Listar Usuáriso</a></li>
                                <li><a href="/users/add"><i class="fa fa-plus"></i> Cadastrar Usuário</a></li>
                                <li><a href="/users"><i class=" fa fa-minus-square-o"></i> Listar Usuáriso Desabilitados</a></li>
                            </ul>
                        </li>

                        <!-- MENU CARRROS -->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-ambulance"></i>
                                <span>CARROS</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/cars"><i class="glyphicon glyphicon-align-justify"></i> Listar Veículos</a></li>
                                <li><a href="/cars/add"><i class="fa fa-plus"></i> Cadastrar Veículo</a></li>
                                <li><a href="/cars"><i class=" fa fa-minus-square-o"></i> Listar Veículos Desabilitados</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="mg-cool-1">

                <!-- Main content -->
                <section class="mg-cool-1">

                    <div class="container">

                      <?php echo $this->Session->flash(); ?>

                      <?php echo $this->fetch('content'); ?>

                    </div><!-- /.container -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="/js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="/js/AdminLTE/dashboard.js" type="text/javascript"></script>

    </body>
</html>
