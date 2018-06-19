@extends('admin.layouts.admin')

@section('admin-css')
    <style>
        ul.images-list{
            width:100%;
            position:relative;
            margin:0px;
            height: 500px;
        }
        ul.images-list li{
            width:200px; height:150px; float:left; list-style:none; margin:10px;
        }
        ul.images-list li:hover{
            border-color: #9a9fa4; box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.85);
        }
        ul.images-list li img{
            width:200px;
            height:150px;
        }
        ul.images-list .active{
            border:1px dashed red;
        }
    </style>
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
                        <button class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i>增加图片</button>
                        <button class="btn btn-danger"><i class="fa fa-fw fa-times-circle"></i>删除图片</button>


                        <ul class="images-list" id="images-list">
                            <li data-image-id="0" data-sort="0"><img src="{{ asset('images/test/6.jpg') }}" width="200" height="150" /></li>
                            <li data-image-id="1" data-sort="1" ><img src="{{ asset('images/test/1.jpg') }}" width="200" height="150" /></li>
                            <li data-image-id="2" data-sort="2" ><img src="{{ asset('images/test/2.jpg') }}" width="200" height="150" /></li>
                            <li data-image-id="3" data-sort="3"><img src="{{ asset('images/test/3.jpg') }}" width="200" height="150" /></li>
                            <li data-image-id="4" data-sort="4"><img src="{{ asset('images/test/4.jpg') }}" width="200" height="150" /></li>
                            <li data-image-id="5" data-sort="5"><img src="{{ asset('images/test/5.jpg') }}" width="200" height="150" /></li>
                        </ul>
                        <div class="text-center">
                            <button type="button" onclick="submitSort()" class="btn btn-info">确定排序</button>
                        </div>
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
    <script src="{{ asset('asset_admin/assets/plugins/movejs/move.js') }}"></script>

    <script type="text/javascript">
        window.onload = function() {

            var oUl= document.getElementById("images-list");
            var aLi = oUl.getElementsByTagName("li");
            var disX = 0;
            var disY = 0;
            var minZindex = 1;
            var aPos =[];
            for(var i=0;i<aLi.length;i++){
                var t = aLi[i].offsetTop;
                var l = aLi[i].offsetLeft - 50;
                aLi[i].style.top = t+"px";
                aLi[i].style.left = l+"px";
                aPos[i] = {left:l,top:t};
                aLi[i].index = i;
            }
            for(var i=0;i<aLi.length;i++){
                aLi[i].style.position = "absolute";
                aLi[i].style.margin = 0;
                setDrag(aLi[i]);
            }
            //拖拽
            function setDrag(obj){
                obj.onmouseover = function(){
                    obj.style.cursor = "move";
                }
                obj.onmousedown = function(event){
                    var scrollTop = document.documentElement.scrollTop||document.body.scrollTop;
                    var scrollLeft = document.documentElement.scrollLeft||document.body.scrollLeft;
                    obj.style.zIndex = minZindex++;
                    //当鼠标按下时计算鼠标与拖拽对象的距离
                    disX = event.clientX +scrollLeft-obj.offsetLeft;
                    disY = event.clientY +scrollTop-obj.offsetTop;
                    document.onmousemove=function(event){
                        //当鼠标拖动时计算div的位置
                        var l = event.clientX -disX +scrollLeft;
                        var t = event.clientY -disY + scrollTop;
                        obj.style.left = l + "px";
                        obj.style.top = t + "px";
                        /*for(var i=0;i<aLi.length;i++){
                            aLi[i].className = "";
                            if(obj==aLi[i])continue;//如果是自己则跳过自己不加红色虚线
                            if(colTest(obj,aLi[i])){
                                aLi[i].className = "active";
                            }
                        }*/
                        for(var i=0;i<aLi.length;i++){
                            aLi[i].className = "";
                        }
                        var oNear = findMin(obj);
                        if(oNear){
                            oNear.className = "active";
                        }
                    }
                    document.onmouseup = function(){
                        document.onmousemove = null;//当鼠标弹起时移出移动事件
                        document.onmouseup = null;//移出up事件，清空内存
                        //检测是否普碰上，在交换位置
                        var oNear = findMin(obj);
                        if(oNear){
                            oNear.className = "";
                            oNear.style.zIndex = minZindex++;
                            obj.style.zIndex = minZindex++;

                            startMove(oNear,aPos[obj.index]);
                            startMove(obj,aPos[oNear.index]);

                            //交换index
                            oNear.index += obj.index;
                            obj.index = oNear.index - obj.index;
                            oNear.index = oNear.index - obj.index;

                            $(oNear).attr('data-sort' ,oNear.index);
                            $(obj).attr('data-sort' , obj.index);

                        }else{
                            startMove(obj,aPos[obj.index]);
                        }
                    }
                    clearInterval(obj.timer);
                    return false;//低版本出现禁止符号
                }
            }
            //碰撞检测
            function colTest(obj1,obj2){
                var t1 = obj1.offsetTop;
                var r1 = obj1.offsetWidth+obj1.offsetLeft;
                var b1 = obj1.offsetHeight+obj1.offsetTop;
                var l1 = obj1.offsetLeft;

                var t2 = obj2.offsetTop;
                var r2 = obj2.offsetWidth+obj2.offsetLeft;
                var b2 = obj2.offsetHeight+obj2.offsetTop;
                var l2 = obj2.offsetLeft;

                if(t1>b2||r1<l2||b1<t2||l1>r2){
                    return false;
                }else{
                    return true;
                }
            }
            //勾股定理求距离
            function getDis(obj1,obj2){
                var a = obj1.offsetLeft-obj2.offsetLeft;
                var b = obj1.offsetTop-obj2.offsetTop;
                return Math.sqrt(Math.pow(a,2)+Math.pow(b,2));
            }
            //找到距离最近的
            function findMin(obj){
                var minDis = 999999999;
                var minIndex = -1;
                for(var i=0;i<aLi.length;i++){
                    if(obj==aLi[i])continue;
                    if(colTest(obj,aLi[i])){
                        var dis = getDis(obj,aLi[i]);
                        if(dis<minDis){
                            minDis = dis;
                            minIndex = i;
                        }
                    }
                }
                if(minIndex==-1){
                    return null;
                }else{
                    return aLi[minIndex];
                }
            }

        };

        function submitSort() {
            var oUl= document.getElementById("images-list");
            var aLi = oUl.getElementsByTagName("li");
            for(var i=0;i<aLi.length;i++){
                console.log($(aLi[i]).data('image-id') + ":" + $(aLi[i]).data('sort'));
            }
        }
    </script>
@endsection