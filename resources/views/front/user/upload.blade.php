@extends('front.user.base')

@section('user_content')
    <div class="row text-center p20">
        <div class="col-md-3">
            上传文件
        </div>
        <div class="col-md-3">
            填写信息
        </div>
        <div class="col-md-3">
            细节图
        </div>
        <div class="col-md-3">
            发布
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label class="upload-zone text-center" for="file">
                <i class="fa fa-fw fa-cloud-upload fa-2x"></i>
                <p>选择源文件</p>
                <p><small>支持.c4d、.max格式</small></p>
            </label>
            <input type="file" class="hide" id="file">
        </div>
        <div class="col-md-6">
            <label for="thumb" class="upload-zone text-center">
                <i class="fa fa-fw fa-upload fa-2x"></i>
                <p>选择封面图</p>
                <p><small>支持.png、.jpg、.gif格式</small></p>
            </label>
            <input type="file" class="hide" id="thumb">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 p20">
            <div class="text-right">
                <button type="button" class="a-btn a-btn-green">
                    下一步
                </button>
            </div>
        </div>
    </div>
@endsection