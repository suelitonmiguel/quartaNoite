<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <title>{{$title}}</title>
    <link href="{{url(mix('_adm/css/bundle.css'))}}" rel="stylesheet">
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
</head>

<body class="light-sidebar-nav">

<section id="container">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <i class="fa fa-bars"></i>
        </div>
        <!--logo start-->
        <a href="{{url('/')}}" class="logo">Painel<span>Adm</span></a>
        <!--logo end-->

{{--        @component('painel.components.notify-row')--}}
{{--        @endcomponent--}}

        <div class="top-nav ">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="username">Jhon Doue</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout dropdown-menu-right">
                        <div class="log-arrow-up"></div>
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                        <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    @component('painel.components.aside-menu')
    @endcomponent
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            @yield('main-wrapper')
        </section>
    </section>
    <!--main content end-->

{{--        @component('painel.components.right-sidebar')--}}
{{--        @endcomponent--}}

    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            {{date('Y')}} &copy; Todos os direitos reservados
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>

<script src="{{url(mix('_adm/js/bundle.js'))}}"></script>
</body>
</html>
