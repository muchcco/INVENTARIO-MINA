<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard | Nifty - Admin Template</title>



<!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('css\bootstrap.min.css')}}" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('css\style.css')}}" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{ asset('css\demo\nifty-demo-icons.min.css')}}" rel="stylesheet">


    <!--=================================================-->


    <!--Font Awesome [ OPTIONAL ]-->
    <link href="{{ asset('plugins\font-awesome\css\font-awesome.min.css')}}" rel="stylesheet">


    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{{ asset('plugins\pace\pace.min.css')}}" rel="stylesheet">
    <script src="{{ asset('plugins\pace\pace.min.js')}}"></script>




 <style>
    .nav-logo{
        max-width: 100%;
    }
 </style>

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">

        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                        <img src="img\inei.jpg" alt="INEI Logo"  class="nav-logo">

                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content">
                    <ul class="nav navbar-top-links">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-list-view"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->



                        <!--Search-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li>
                            <div class="custom-search-form">
                                <label class="btn btn-trans" for="search-input" data-toggle="collapse" data-target="#nav-searchbox">
                                    <i class="demo-pli-magnifi-glass"></i>
                                </label>
                                <form>
                                    <div class="search-container collapse" id="nav-searchbox">
                                        <input id="search-input" type="text" class="form-control" placeholder="Buscar...">
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Search-->

                    </ul>
                    <ul class="nav navbar-top-links">

                        <!--User dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="ic-user pull-right">
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <!--You can use an image instead of an icon.-->
                                    <!--<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">-->
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <i class="demo-pli-male"></i>
                                </span>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--You can also display a user name in the navbar.-->
                                <!--<div class="username hidden-xs">Aaron Chavez</div>-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            </a>


                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
                                <ul class="head-list">
                                    <li>
                                        <a href="#"><i class="demo-pli-male icon-lg icon-fw"></i> Perfil</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="badge badge-danger pull-right">9</span><i class="demo-pli-mail icon-lg icon-fw"></i> Mensajes</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="label label-success pull-right">New</span><i class="demo-pli-gear icon-lg icon-fw"></i> Configuración</a>
                                    </li>
                                    <li>
                                        <a href="pages-login.html"><i class="demo-pli-unlock icon-lg icon-fw"></i> Salir</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End user dropdown-->

                    </ul>
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->

            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            @yield('main')
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->

            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">


                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <!--Profile Widget-->
                                <!--================================-->
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap text-center">
                                        <div class="pad-btm">
                                            <img class="img-circle img-md" src="img\profile-photos\1.png" alt="Profile Picture">
                                        </div>
                                        <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                            <p class="mnp-name">Kevin Muchcco</p>
                                            <span class="mnp-desc">jhon.muchcco@inei.gob.pe</span>
                                        </a>
                                    </div>
                                    <div id="profile-nav" class="collapse list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-information icon-lg icon-fw"></i> Help
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                                        </a>
                                    </div>
                                </div>

                                <ul id="mainnav-menu" class="list-group">

						            <!--Nombre de la Categoria-->
						            <li class="list-header">Panel de Control</li>
                                    <li class="active-link">
						                <a href="helper-classes.html">
						                    <i class="demo-pli-home"></i>
						                    <span class="menu-title">Inicio</span>
						                </a>
						            </li>

                                    <!--Nombre de la Categoria-->
						            <li class="list-header">Panel de Control</li>

						            <!--Lista del Menu-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-boot-2"></i>
						                    <span class="menu-title">Documentos </span>
											<i class="arrow"></i>
						                </a>

						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="ui-buttons.html">Buttons</a></li>
											<li><a href="ui-panels.html">Panels</a></li>
											<li><a href="ui-modals.html">Modals</a></li>
											<li><a href="ui-progress-bars.html">Progress bars</a></li>
											<li><a href="ui-components.html">Components</a></li>
											<li><a href="ui-typography.html">Typography</a></li>
											<li><a href="ui-list-group.html">List Group</a></li>
											<li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
											<li><a href="ui-alerts-tooltips.html">Alerts &amp; Tooltips</a></li>

						                </ul>
						            </li>

                                    <li>
						                <a href="helper-classes.html">
                                            <i class="fa fa-search"></i>
						                    <span class="menu-title">Busqueda de Documentos</span>
						                </a>
						            </li>

                                     <!--Nombre de la Categoria-->
						            <li class="list-header">Configuración</li>

                                    <li>
						                <a href="helper-classes.html">
                                            <i class="fa fa-users"></i>
						                    <span class="menu-title">Usuarios</span>
						                </a>
						            </li>

                                    <li>
						                <a href="helper-classes.html">
                                            <i class="demo-pli-gear"></i>
						                    <span class="menu-title">Roles</span>
						                </a>
						            </li>

                                    <li>
						                <a href="helper-classes.html">
                                            <i class="fa fa-user-o"></i>
						                    <span class="menu-title">Mi Cuenta</span>
						                </a>
						            </li>



                            </div>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>



        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

            <!-- Visible el pie de pagina de forma estatica -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">
                Versión <strong>1.0.0</strong>
            </div>

            <p class="pad-lft">&#0169; 2022 INEI</p>



        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->





    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUERIDO ]-->
    <script src="{{ asset('js\jquery.min.js')}}"></script>


    <!--BootstrapJS [ RECOMENDADO ]-->
    <script src="{{ asset('js\bootstrap.min.js')}}"></script>


    <!--NiftyJS [ RECOMENDADO ]-->
    <script src="{{ asset('js\nifty.min.js')}}"></script>








</body>
</html>
