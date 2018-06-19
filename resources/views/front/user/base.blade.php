@extends('front.base.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/bpHs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.thmeme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/button.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
@endsection

@section('content')
    <div class="banner">
        <div class="container">
            <div class="avatar">
                <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1517129927524&di=a821b74cf2fead4d70c2fa34cd49fbf2&imgtype=jpg&src=http%3A%2F%2Fimg4.imgtn.bdimg.com%2Fit%2Fu%3D1611505379%2C380489200%26fm%3D214%26gp%3D0.jpg" alt="">
            </div>
            <div class="user-info">
                <p>ID:120110</p>
                <p class="nickname">Maker</p>
                <p class="user-infos">
                    <span><i class="fa fa-fw fa-diamond"></i> VIP</span>
                    <span><i class="fa fa-fw fa-clock-o"></i> 注册于2018/01/02</span>
                </p>
            </div>
            <div class="upload-work pull-right">
                <a href="" class="a-btn a-btn-green">
                    <i class="fa fa-fw fa-cloud-upload fa-2x"></i>
                    <p>上传作品</p>
                </a>
            </div>
        </div>
    </div>
    <div class="container mt10">
        <div class="row">
            <div class="col-md-2">
                <div class="panel">
                    <div class="panel-body">
                        <ul class="list-group">
                            <li><a href="" class="active"><i class="fa fa-fw fa-user"></i> 个人中心</a></li>
                            <li><a href=""><i class="fa fa-fw fa-shopping-cart"></i> 购物车</a></li>
                            <li><a href=""><i class="fa fa-fw fa-clipboard"></i> 我的订单</a></li>
                            <li><a href=""><i class="fa fa-fw fa-th"></i> 我的作品</a></li>
                            <li><a href=""><i class="fa fa-fw fa-heart"></i> 我的收藏</a></li>
                            <li><a href=""><i class="fa fa-fw fa-cloud-download"></i> 我的下载</a></li>
                            <li><a href=""><i class="fa fa-fw fa-envelope"></i> 我的消息</a></li>
                            <li><a href=""><i class="fa fa-fw fa-diamond"></i> 我的VIP</a></li>
                            <li><a href=""><i class="fa fa-fw fa-cog"></i> 我的设置</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="panel">
                    <div class="panel-body">
                        <div class="p20">
                            @yield('user_content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection