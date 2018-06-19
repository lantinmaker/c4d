@extends('front.user.base')

@section('user_content')
    <div class="row">
        <div class="col-md-12">
            <div class="toolbar">
                <button type="button" class="a-btn a-btn-green">上传作品</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <div class="img">
                <img src="{{ asset('images/c4d.jpg') }}" alt="">
            </div>
        </div>
        <div class="col-md-10">

        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <div class="img">
                <img src="{{ asset('images/c4d.jpg') }}" alt="">
            </div>
        </div>
        <div class="col-md-10">

        </div>
    </div>
@endsection