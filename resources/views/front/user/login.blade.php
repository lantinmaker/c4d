@extends('front.base.base')

@section('css')
    <link href="https://cdn.bootcss.com/animate.css/3.5.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
    <div class="login_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-4 col-md-offset-2">
                    <div class="thumbnail mt10 animated fadeInRight">
                        <form action="{{ route('users.auth.dologin') }}" method="post" class="register-form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="">昵称 / 邮箱</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">密码</label>
                                <input type="text" name="password" class="form-control">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">登录</button>
                            </div>
                            <hr>
                            <div class="form-group text-center">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href=""><i class="fab fa-fw fa-qq fa-lg"></i></a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href=""><i class="fab fa-fw fa-weixin fa-lg"></i></a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href=""><i class="fab fa-fw fa-weibo fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group text-center">
                                <div class="row">
                                    <div class="col-md-4"><a href="">找回密码？</a></div>
                                    <div class="col-md-8"><p>还没有账号？请点击<a href="">注册</a></p></div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection