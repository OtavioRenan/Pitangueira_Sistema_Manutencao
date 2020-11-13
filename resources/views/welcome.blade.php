<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>
        <link rel="icon" type="image/png" href="../../imagens/logos/logo-1.png" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- App Laravel & Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Admin -->
        <link rel="stylesheet" href="{{asset('vendor/admin/css/style.min.css')}}">

        <!-- Icons -->
        <link rel="stylesheet" href="{{asset('vendor/icons/fontawesome-free-5.9.0-web/css/all.css')}}">        
    </head>
    <body>
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>        
        <div id="main-wrapper">            
            <header class="topbar" data-navbarbg="skin5">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header" data-logobg="skin5">                        
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none">
                            <i class="ti-menu ti-close"></i>
                        </a>
                        <a class="navbar-brand d-flex justify-content-center">
                            <b class="logo-icon px-2 ">                                
                                <i class="fas fa-tachometer-alt"></i>                                
                            </b>                            
                            <span class="logo-text"> Administração </span>
                        </a>
                    </div>                    
                    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">                        
                        <ul class="navbar-nav float-left mr-auto">
                            <li class="nav-item d-none d-md-block">
                                <a class="nav-link sidebartoggler waves-effect waves-light" data-sidebartype="mini-sidebar">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </li>                            
                        </ul>                        
                        <ul class="navbar-nav float-right">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user-circle fa-2x"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated">                                                            
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">                                        
                                        <i class="fa fa-power-off"></i>
                                        <span> SAIR</span>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </a>                                                                        
                                </div>
                            </li>                            
                        </ul>
                    </div>
                </nav>
            </header>            
            <aside class="left-sidebar" data-sidebarbg="skin5">
                <div class="scroll-sidebar">                    
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav" class="p-t-30">
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/phpmyadmin/restrito/noticias" aria-expanded="false">
                                    <i class="far fa-newspaper"></i>
                                    <span class="hide-menu px-2 font-weight-bold">Notícias</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/phpmyadmin/restrito/edital" aria-expanded="false">
                                    <i class="far fa-file-pdf"></i>
                                    <span class="hide-menu px-2 font-weight-bold">Editais</span>
                                </a>
                            </li>                            
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/phpmyadmin/restrito/tvcamara" aria-expanded="false">
                                    <i class="fas fa-tv"></i>
                                    <span class="hide-menu px-2 font-weight-bold">TV Câmara</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/phpmyadmin/restrito/calendario" aria-expanded="false">
                                <i class="fas fa-calendar-week"></i>
                                    <span class="hide-menu px-2 font-weight-bold">Calendário</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/phpmyadmin/restrito/contato" aria-expanded="false">
                                    <i class="fas fa-address-book"></i>
                                    <span class="hide-menu px-2 font-weight-bold">Contatos</span>
                                </a>
                            </li>                              
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" aria-expanded="false">
                                    <i class="fas fa-users"></i>
                                    <span class="hide-menu px-2 font-weight-bold">Legislativo</span>
                                </a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                        <a href="/phpmyadmin/restrito/legislatura" class="sidebar-link">
                                            <i class="far fa-user"></i>
                                            <span class="hide-menu px-2 font-weight-bold">Legislatura</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="/phpmyadmin/restrito/cargos" class="sidebar-link">
                                            <i class="far fa-user"></i>
                                            <span class="hide-menu px-2 font-weight-bold">Cargos</span>
                                        </a>
                                    </li>                                                                       
                                </ul>
                            </li>                            
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" aria-expanded="false">
                                    <i class="fas fa-layer-group"></i>
                                    <span class="hide-menu px-2 font-weight-bold">Layout</span>
                                </a>
                                <ul aria-expanded="false" class="collapse  first-level">                                    
                                    <li class="sidebar-item">
                                        <a href="/phpmyadmin/restrito/menu" class="sidebar-link">
                                            <i class="fas fa-bars"></i>
                                            <span class="hide-menu px-2 font-weight-bold">MENUS</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="/phpmyadmin/restrito/corpadrao" class="sidebar-link">
                                            <i class="fas fa-fill-drip"></i>
                                            <span class="hide-menu px-2 font-weight-bold">COR PADRÃO</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="/phpmyadmin/restrito/facebook" class="sidebar-link">
                                            <i class="fab fa-facebook"></i>
                                            <span class="hide-menu px-2 font-weight-bold">FACEBOOK</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="/phpmyadmin/restrito/tempo" class="sidebar-link">
                                            <i class="fas fa-temperature-low"></i>
                                            <span class="hide-menu px-2 font-weight-bold">PREVISÃO</span>
                                        </a>
                                    </li>                                                                      
                                </ul>
                            </li>
                        </ul>                        
                    </nav><!-- End Sidebar navigation -->                    
                </div><!-- End Sidebar scroll-->                
            </aside>
            <div class="page-wrapper">                
                @yield('app')                
            </div>           
        </div>
    </body>

        <!-- App Laravel -->
        <script src="{{asset('js/app.js')}}"></script>

        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="{{asset('vendor/admin/js/perfect-scrollbar.jquery.min.js')}}"></script>

        <!--Menu sidebar -->
        <script src="{{asset('vendor/admin/js/sidebarmenu.js')}}"></script>

        <!--Custom JavaScript -->
        <script src="{{asset('vendor/admin/js/custom.min.js')}}"></script>
</html>
