@extends('admin.layouts.admin')

@section('admin-css')
    <link href="{{ asset('asset_admin/assets/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('asset_admin/assets/plugins/bootstrap-sweetalert-master/dist/sweetalert.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('asset_admin/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset_admin/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}" rel="stylesheet" />
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
                    <div class="panel-body">

                        {{--@permission('models.add')--}}
                        @if(auth('admin')->user()->can('models.add'))
                            <a href="{{ url('admin/models/create') }}">
                                <button type="button" class="btn btn-primary m-r-5 m-b-5"><i class="fa fa-plus-square-o"></i> 新增</button>
                            </a>
                        @endif
                        {{--@endpermission--}}
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th style="width: 15%;">名称</th>
                                <th style="width: 5%;">价格</th>
                                <th style="width: 4%;">多边形</th>
                                <th style="width: 3%;">顶点</th>
                                <th style="width: 3%;">纹理</th>
                                <th style="width: 3%;">物料</th>
                                <th style="width: 3%;">非法操作</th>
                                <th style="width: 3%;">动画</th>
                                <th style="width: 5%;">可3D打印</th>
                                <th style="width: 5%;">可用于游戏</th>
                                <th style="width: 5%;">紫外映射</th>
                                <th style="width: 10%;">更新时间</th>
                                <th style="width: 20%;">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($models as $model)
                                <tr>
                                    <td>{{ $model->title }}</td>
                                    <td><i class="fa fa-yen"></i>{{ $model->price }}</td>
                                    <td>{{ $model->polygons }}</td>
                                    <td>{{ $model->vertices }}</td>
                                    <td>{{ y_n($model->textures) }}</td>
                                    <td>{{ y_n($model->materials) }}</td>
                                    <td>{{ y_n($model->rigged) }}</td>
                                    <td>{{ y_n($model->animated) }}</td>
                                    <td>{{ y_n($model->printable_ready_3d) }}</td>
                                    <td>{{ y_n($model->game_ready) }}</td>
                                    <td>{{ y_n($model->uv_mapped) }}</td>
                                    <td>{{ $model->updated_at }}</td>
                                    <td>{!! $model->button !!}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $models->links() }}
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
    <script src="{{ asset('asset_admin/assets/plugins/gritter/js/jquery.gritter.js') }}"></script>
    <script src="{{ asset('asset_admin/assets/plugins/bootstrap-sweetalert-master/dist/sweetalert.js') }}"></script>
    <script src="{{ asset('asset_admin/assets/plugins/treeTable/jquery.treeTable.js') }}"></script>
    <script>
        $(function(){


            @if (session()->has('flash_notification.message'))
            //通知信息
            $.gritter.add({
                title: '操作消息！',
                text: '{!! session('flash_notification.message') !!}'
            });
            @endif

            //删除
            $(document).on('click','.destroy',function(){
                var _delete_id = $(this).attr('data-id');
                swal({
                        title: "确定删除？",
                        text: "删除将不可逆，请谨慎操作！",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-danger",
                        cancelButtonText: "取消",
                        confirmButtonText: "确定",
                        closeOnConfirm: false
                    },
                    function () {
                        $('form[name=delete_item_'+_delete_id+']').submit();
                    }
                );
            });
        });
    </script>

@endsection