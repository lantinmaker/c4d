<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')_C4D.ink</title>
    <link href="{{ asset('fontawesome/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('iconfont/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ns-default.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ns-style-bar.css') }}" />
    @yield('css')
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body  data-spy="scroll" data-target="#scroll-nav" data-offset="180" >
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/c4d_3.png') }}" style="width:30px;" alt="">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="{{ isActiveRoute('home.index') }}"><a href="{{ route('home.index') }}">资讯</a></li>
                    <li class="{{ isActiveRoute('bbs.*') }}"><a href="{{ route('bbs.index') }}">交流区</a></li>
                    <li><a href="#">作品</a></li>
                    <li><a href="#">教程</a></li>
                    <li class="{{ isActiveRoute('model.*') }}"><a href="{{ route('model.index') }}">模型</a></li>
                    <li><a href="#">工程</a></li>
                    <li><a href="#">预设</a></li>
                    <li><a href="#">材质</a></li>
                    <li><a href="#">贴图</a></li>
                    <li><a href="#">插件/软件</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">相关 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">发布需求</a></li>
                            <li><a href="#">需求大厅</a></li>
                            <li><a href="#">我的需求</a></li>
                        </ul>
                    </li>
                    {{--<li class="dropdown">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">需求 <span class="caret"></span></a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="#">发布需求</a></li>--}}
                            {{--<li><a href="#">需求大厅</a></li>--}}
                            {{--<li><a href="#">我的需求</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href=""><i class="fa fa-fw fa-search"></i></a></li>
                    {{--<li><a href=""><i class="fa fa-fw fa-envelope-o"></i></a></li>--}}
                    {{--<li><a href=""><i class="fa fa-fw fa-commenting-o"></i></a></li>--}}
                    <li><a href="{{ route('users.auth.login') }}">登录</a></li>
                    <li><a href="{{ route('users.auth.register') }}">注册</a></li>
                    {{--<li class="dropdown">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="#">Action</a></li>--}}
                            {{--<li><a href="#">Another action</a></li>--}}
                            {{--<li><a href="#">Something else here</a></li>--}}
                            {{--<li role="separator" class="divider"></li>--}}
                            {{--<li><a href="#">Separated link</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="content">
        @include('layouts.flash')
        @yield('content')
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <img src="{{ asset('images/logo-text.png') }}" style="width:100px;" alt="">
                    </div>
                    <p>Copyright <i class="fa fa-fw fa-copyright"></i> 2017 - {{ date('Y') }} <a href="">C4D.ink</a> All rights reserved.</p>
                </div>
                <div class="col-md-8">
                    <div class="row footer-list">
                        <div class="col-md-3">
                            <ul>
                                <li><b>快速入口</b></li>
                                <li><a href="">模型</a></li>
                                <li><a href="">工程</a></li>
                                <li><a href="">预设</a></li>
                                <li><a href="">材质</a></li>
                                <li><a href="">贴图</a></li>
                                <li><a href="">软件/插件</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul>
                                <li><b>关于C4D.ink</b></li>
                                <li><a href="">关于我们</a></li>
                                <li><a href="">商务合作</a></li>
                                <li><a href="">广告服务</a></li>
                                <li><a href="">联系客服</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul>
                                <li><b>会员相关</b></li>
                                <li><a href="">新手交流</a></li>
                                <li><a href="">成为特邀设计师</a></li>
                                <li><a href="">成为原创贡献者</a></li>
                                <li><a href="">开通VIP</a></li>
                                <li><a href="">充值/售后</a></li>
                                <li><a href="">用户守则</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul>
                                <li><b>其他</b></li>
                                <li><a href="">常见问题</a></li>
                                <li><a href="">版权投诉</a></li>
                                <li><a href="">举报中心</a></li>
                                <li><a href="">申请友链</a></li>
                                <li><a href="">网站帮助</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('layouts.fastlink')
    <script src="{{ asset('js/classie.js') }}"></script>
    <script src="{{ asset('js/notificationFx.js') }}"></script>
    <script type="text/javascript" src="{{ asset('tooltip/tipso.min.js') }}"></script>
    @yield('js')
</body>
</html>