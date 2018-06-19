@extends('front.base.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/bpHs.css') }}">
@endsection

@section('content')
    <div class="slider-main">
        <div class="bp-hs" id="bp-default">
            <div class="bp-hs_inner">
                <div class="bp-hs_inner__item" >
                    <img src="{{ asset('images/01.jpg') }}" alt="Boompx Hero Slider 01"/>
                </div>
                <div class="bp-hs_inner__item" >
                    <img src="{{ asset('images/02.jpg') }}" alt="Boompx Hero Slider 02"/>
                </div>
                <div class="bp-hs_inner__item" >
                    <img src="{{ asset('images/03.jpg') }}" alt="Boompx Hero Slider 03"/>
                </div>
                <div class="bp-hs_inner__item">
                    <img src="{{ asset('images/04.jpg') }}" alt="Boompx Hero Slider 04"/>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="scroll-nav" style="position:fixed;">
            <ul class="nav" role="tablist">
                <li role="presentation" class="active"><a href="#planes" onclick="scrollto('planes')">飞机</a></li>
                <li role="presentation"><a href="#cars" onclick="scrollto('cars')">汽车</a></li>
                <li role="presentation"><a href="#characters" onclick="scrollto('characters')">人物</a></li>
                <li role="presentation"><a href="#buildings" onclick="scrollto('buildings')">建筑</a></li>
                <li role="presentation"><a href="#electronics" onclick="scrollto('electronics')">电子设备</a></li>
                <li role="presentation"><a href="#animals" onclick="scrollto('animals')">动物</a></li>
                <li role="presentation"><a href="#furniture" onclick="scrollto('furniture')">家具</a></li>
                <li role="presentation"><a href="#fruit" onclick="scrollto('fruit')">水果</a></li>
            </ul>
        </div>
        <div class="index-content">

            <div id="planes" class="mt10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <span><i class="fa fa-fw fa-plane"></i> 飞机模型 | Planes</span>
                            </div>
                            <div class="panel-body mt10">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="thumbnail">
                                            <img src="https://pic.huke88.com/video/cover/2017-06-06/E27E8F98-3CCE-4C95-7EE3-96FC64340D17.jpg!/fw/500/compress/true/format/jpg" alt="...">
                                            <div class="caption">
                                                <a href="">香瓜 甜瓜C4D模型 Melon 3d model</a>
                                            </div>
                                            <div class="caption">
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-angle-left"></i></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img style="width:28px;" src="https://pic.huke88.com/video/cover/2017-06-06/E27E8F98-3CCE-4C95-7EE3-96FC64340D17.jpg!/fw/500/compress/true/format/jpg" alt="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <span class="" style="color:#ffd500"><i class="fa fa-fw fa-database"></i>120</span>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="far fa-fw fa-heart"></i></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-shopping-bag"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="thumbnail">
                                            <img src="https://pic.huke88.com/video/cover/2017-06-06/E27E8F98-3CCE-4C95-7EE3-96FC64340D17.jpg!/fw/500/compress/true/format/jpg" alt="...">
                                            <div class="caption">
                                                <a href="">香瓜 甜瓜C4D模型 Melon 3d model</a>
                                            </div>
                                            <div class="caption">
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-angle-left"></i></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img style="width:28px;" src="https://pic.huke88.com/video/cover/2017-06-06/E27E8F98-3CCE-4C95-7EE3-96FC64340D17.jpg!/fw/500/compress/true/format/jpg" alt="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <span class="" style="color:#ffd500"><i class="fa fa-fw fa-database"></i>120</span>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-shopping-bag"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="thumbnail">
                                            <img src="https://pic.huke88.com/video/cover/2017-06-06/E27E8F98-3CCE-4C95-7EE3-96FC64340D17.jpg!/fw/500/compress/true/format/jpg" alt="...">
                                            <div class="caption">
                                                <a href="">香瓜 甜瓜C4D模型 Melon 3d model</a>
                                            </div>
                                            <div class="caption">
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-angle-left"></i></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img style="width:28px;" src="https://pic.huke88.com/video/cover/2017-06-06/E27E8F98-3CCE-4C95-7EE3-96FC64340D17.jpg!/fw/500/compress/true/format/jpg" alt="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <span class="" style="color:#ffd500"><i class="fa fa-fw fa-database"></i>120</span>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-shopping-bag"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="thumbnail">
                                            <img src="https://pic.huke88.com/video/cover/2017-06-06/E27E8F98-3CCE-4C95-7EE3-96FC64340D17.jpg!/fw/500/compress/true/format/jpg" alt="...">
                                            <div class="caption">
                                                <a href="">香瓜 甜瓜C4D模型 Melon 3d model</a>
                                            </div>
                                            <div class="caption">
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-angle-left"></i></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img style="width:28px;" src="https://pic.huke88.com/video/cover/2017-06-06/E27E8F98-3CCE-4C95-7EE3-96FC64340D17.jpg!/fw/500/compress/true/format/jpg" alt="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <span class="" style="color:#ffd500"><i class="fa fa-fw fa-database"></i>120</span>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-shopping-bag"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="thumbnail">
                                            <img src="https://pic.huke88.com/video/cover/2017-06-06/E27E8F98-3CCE-4C95-7EE3-96FC64340D17.jpg!/fw/500/compress/true/format/jpg" alt="...">
                                            <div class="caption">
                                                <a href="">香瓜 甜瓜C4D模型 Melon 3d model</a>
                                            </div>
                                            <div class="caption">
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-angle-left"></i></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img style="width:28px;" src="https://pic.huke88.com/video/cover/2017-06-06/E27E8F98-3CCE-4C95-7EE3-96FC64340D17.jpg!/fw/500/compress/true/format/jpg" alt="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <span class="" style="color:#ffd500"><i class="fa fa-fw fa-database"></i>120</span>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-shopping-bag"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="thumbnail">
                                            <img src="https://pic.huke88.com/video/cover/2017-06-06/E27E8F98-3CCE-4C95-7EE3-96FC64340D17.jpg!/fw/500/compress/true/format/jpg" alt="...">
                                            <div class="caption">
                                                <a href="">香瓜 甜瓜C4D模型 Melon 3d model</a>
                                            </div>
                                            <div class="caption">
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-angle-left"></i></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img style="width:28px;" src="https://pic.huke88.com/video/cover/2017-06-06/E27E8F98-3CCE-4C95-7EE3-96FC64340D17.jpg!/fw/500/compress/true/format/jpg" alt="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                         <span class="" style="color:#ffd500"><i class="fa fa-fw fa-database"></i>120</span>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-shopping-bag"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="thumbnail">
                                            <img src="https://pic.huke88.com/video/cover/2017-12-08/DF9954D0-2E88-F53C-1C99-34AD8FA24410.jpg!/fw/500/compress/true/format/jpg" alt="...">
                                            <div class="caption">
                                                <a href="">香瓜 甜瓜C4D模型 Melon 3d model</a>
                                            </div>
                                            <div class="caption">
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-angle-left"></i></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img style="width:28px;" src="https://pic.huke88.com/video/cover/2017-12-08/DF9954D0-2E88-F53C-1C99-34AD8FA24410.jpg!/fw/500/compress/true/format/jpg" alt="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <span class="" style="color:#ffd500"><i class="fa fa-fw fa-database"></i>120</span>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-shopping-bag"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="thumbnail">
                                            <img src="https://pic.huke88.com/video/cover/2017-06-06/E27E8F98-3CCE-4C95-7EE3-96FC64340D17.jpg!/fw/500/compress/true/format/jpg" alt="...">
                                            <div class="caption">
                                                <a href="">香瓜 甜瓜C4D模型 Melon 3d model</a>
                                            </div>
                                            <div class="caption">
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-angle-left"></i></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img style="width:28px;" src="https://pic.huke88.com/video/cover/2017-06-06/E27E8F98-3CCE-4C95-7EE3-96FC64340D17.jpg!/fw/500/compress/true/format/jpg" alt="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <div class="row text-center">
                                                    <div class="col-md-4">
                                                        <span class="" style="color:#ffd500">
                                                            <i class="fa fa-fw fa-database"></i>
                                                            <span>100</span>
                                                        </span>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href=""><i class="fa fa-fw fa-shopping-bag"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <a href="" class="more">更多</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="cars" class="mt10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <span><i class="fa fa-fw fa-car"></i> 汽车模型 | Cars</span>
                            </div>
                            <div class="panel-body mt10">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="characters" class="mt10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading text-center">
                                <span><i class="fa fa-fw fa-street-view"></i> 人物模型 | Characters</span>
                                <p class="mt10"><a href="">更多</a></p>
                            </div>
                            <div class="panel-body mt10">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="buildings" class="mt10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading text-center">
                                <span><i class="fa fa-fw fa-building"></i> 建筑模型 | Buildings</span>
                                <p class="mt10"><a href="">更多</a></p>
                            </div>
                            <div class="panel-body mt10">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="electronics" class="mt10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading text-center">
                                <span><i class="fa fa-fw fa-mobile"></i> 电子设备 | Electronics</span>
                                <p class="mt10"><a href="">更多</a></p>
                            </div>
                            <div class="panel-body mt10">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="animals" class="mt10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading text-center">
                                <span><i class="fa fa-fw fa-bug"></i> 动物模型 | Animals</span>
                                <p class="mt10"><a href="">更多</a></p>
                            </div>
                            <div class="panel-body mt10">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="furniture" class="mt10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading text-center">
                                <span><i class="fa fa-fw fa-bed"></i> 家具模型 | Furniture</span>
                                <p class="mt10"><a href="">更多</a></p>
                            </div>
                            <div class="panel-body mt10">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fruit" class="mt10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading text-center">
                                <span><i class="fa fa-fw fa-pagelines"></i> 水果模型 | Fruit</span>
                                <p class="mt10"><a href="">更多</a></p>
                            </div>
                            <div class="panel-body mt10">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="thumbnail">
                                            <img src="{{ asset('images/c4d.jpg') }}" alt="...">
                                            <div class="caption">
                                                <a href="">Thumbnail label</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('js/vendors/jquery.touchSwipe.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bpHS.js') }}">
    </script><script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript">

        function scrollto(_id) {
            var _hig = $("#"+_id).offset().top;
            console.log(_hig);
            $("html,body").animate({scrollTop:_hig - 80}, 500);
            return false;
        }

        $(function(){
            $(window).scroll(function () {
                var _scoll_height = $(window).scrollTop();
                if(_scoll_height <= 316 ){
                    if(56 <= 316-_scoll_height){
                        $('#scroll-nav').css({"top":316-_scoll_height});
                    }else{
                        $('#scroll-nav').css({"top":56});
                    }
                }else{
                    $('#scroll-nav').css({"top":56});
                }
            });
            $(document).ready(function() {

                // create the notification
                var notification = new NotificationFx({
                    message : '<span class="alert-icon alert-icon-megaphone"></span><p>You have some interesting news in your inbox. Go <a href="#">check it out</a> now.</p>',
                    layout : 'bar',
                    effect : 'slidetop',
                    ttl : 5000,
                    type : 'notice', // notice, warning or error
                    onClose : function() {
                        bttn.disabled = false;
                    }
                });

                // show the notification
                notification.show();



                var _body_width = $("body").width();
                var _scroll_width = $("#scroll-nav").width();
                var _width = $("body > .content > .container").width();

                if(_body_width < 730){
                    $('#scroll-nav').hide();
                }else{
                    $('#scroll-nav').css({
                        'right':( _body_width - _width ) / 2 - _scroll_width -10
                    });
                }

                $('#little-default').bpHS({
                    autoPlay: true,
                    duration:3000
                }).find('.bp-hs_control button').remove();


                $('#bp-default').bpHS({
                    nextText : '<i class="fa fa-angle-right"></i>',
                    prevText : '<i class="fa fa-angle-left"></i>',
                    autoPlay: true,
                    duration:3000
                });

                $("#testimonial-slider").owlCarousel({
                    items:4,
                    itemsDesktop:[1000,1],
                    itemsDesktopSmall:[979,1],
                    itemsTablet:[768,1],
                    pagination: true,
                    autoPlay:true
                });

                $("#details_1").darkTooltip({
                    opacity:1,
                    gravity:'west',
                    theme:"light"
                });
            });
        });
    </script>
@endsection