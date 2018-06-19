@extends('admin.layouts.admin')

@section('admin-css')
    <link href="{{ asset('asset_admin/assets/plugins/parsley/src/parsley.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset_admin/assets/plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset_admin/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />
@endsection

@section('admin-content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="javascript:;">Tables</a></li>
            <li class="active">Basic Tables</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">模型列表 <small>header small text goes here...</small></h1>
        <!-- end page-header -->
        <!-- begin row -->
        <div class="row">
            <!-- begin col-6 -->
            <div class="col-md-12">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="table-basic-5">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                        <h4 class="panel-title">列表</h4>
                    </div>

                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="panel-body">
                        <form class="form-horizontal form-bordered" data-parsley-validate="true" action="{{ url('admin/models/'.$model->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2" for="title">标题 :</label>
                                <div class="col-md-4 col-sm-4">
                                    <input class="form-control" type="text" name="title" placeholder="标题" data-parsley-required="true" data-parsley-required-message="请输入标题" value="{{ $model->title }}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2" for="price">价格 * :</label>
                                <div class="col-md-4 col-sm-4">
                                    <input class="form-control" type="text" name="price" placeholder="价格" data-parsley-required="true" data-parsley-required-message="请输入价格" value="{{ $model->price }}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2" for="polygons">多边形 * :</label>
                                <div class="col-md-4 col-sm-4">
                                    <input class="form-control" type="text" name="polygons" placeholder="polygons" data-parsley-required="true" data-parsley-required-message="polygons" value="{{ $model->polygons }}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2" for="vertices">顶点 * :</label>
                                <div class="col-md-4 col-sm-4">
                                    <input class="form-control" type="text" name="vertices" placeholder="vertices" data-parsley-required="true" data-parsley-required-message="vertices" value="{{ $model->vertices }}"/>
                                </div>
                            </div>
                            <div class="form-group">

                                <label class="control-label col-md-2 col-sm-2" for="description">其他 * :</label>
                                <div class="col-md-10 col-sm-10">
                                    <div class="col-md-3 col-sm-3">
                                        <input type="checkbox" name="textures" data-render="switchery" data-theme="purple" @if( $model->textures === "y") checked @endif value="y" /> 纹理
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <input type="checkbox" name="materials" data-render="switchery" data-theme="purple" @if( $model->materials === "y") checked @endif value="y" /> 材质
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <input type="checkbox" name="rigged" data-render="switchery" data-theme="purple" @if( $model->rigged === "y") checked @endif value="y" /> 控制
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <input type="checkbox" name="animated" data-render="switchery" data-theme="purple"  @if( $model->animated === "y") checked @endif value="y" /> 动画
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <input type="checkbox" name="printable_ready_3d" data-render="switchery" data-theme="purple"  @if( $model->printable_ready_3d === "y") checked @endif value="y" /> 可3D打印
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <input type="checkbox" name="game_ready" data-render="switchery" data-theme="purple" @if( $model->game_ready === "y") checked @endif value="y" /> 可用于游戏
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <input type="checkbox" name="uv_mapped" data-render="switchery" data-theme="purple"  @if( $model->uv_mapped === "y") checked @endif value="y" /> UV映射
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2"></label>
                                <div class="col-md-4 col-sm-4">
                                    <button type="submit" class="btn btn-primary">提交</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
@endsection

@section('admin-js')
    <script src="{{ asset('asset_admin/assets/plugins/parsley/dist/parsley.js') }}"></script>
    <script src="{{ asset('asset_admin/assets/plugins/switchery/switchery.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            renderSwitcher();
        });

        function renderSwitcher(){
            if ($('[data-render=switchery]').length !== 0) {
                $('[data-render=switchery]').each(function() {
                    var themeColor = '#00acac';
                    if ($(this).attr('data-theme')) {
                        switch ($(this).attr('data-theme')) {
                            case 'red': themeColor = '#ff5b57'; break;
                            case 'blue': themeColor = '#348fe2'; break;
                            case 'purple': themeColor = '#727cb6'; break;
                            case 'orange': themeColor = '#f59c1a'; break;
                            case 'black': themeColor = '#2d353c'; break;
                        }
                    }
                    var option = {};
                    option.color = themeColor;
                    option.secondaryColor = ($(this).attr('data-secondary-color')) ? $(this).attr('data-secondary-color') : '#dfdfdf';
                    option.className = ($(this).attr('data-classname')) ? $(this).attr('data-classname') : 'switchery';
                    option.disabled = ($(this).attr('data-disabled')) ? true : false;
                    option.disabledOpacity = ($(this).attr('data-disabled-opacity')) ? parseFloat($(this).attr('data-disabled-opacity')) : 0.5;
                    option.speed = ($(this).attr('data-speed')) ? $(this).attr('data-speed') : '0.3s';
                    var switchery = new Switchery(this, option);
                });
            }
        }
    </script>
@endsection