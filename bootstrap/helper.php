<?php

function generate_mmid()
{
    return substr(md5(mt_rand()),8,16);
}

function y_n($string)
{
    return $string === "y" ? "是" : "否";
}

function vip_img($zhekou = 0){
    switch ($zhekou){
        case 0:
            $img = asset('images/vip_0.png');
            break;
        case 95:
            $img = asset('images/vip_95.png');
            break;
        case 9:
            $img = asset('images/vip_9.png');
            break;
        case 85:
            $img = asset('images/vip_85.png');
            break;
        case 8:
            $img = asset('images/vip_8.png');
            break;
        case 75:
            $img = asset('images/vip_75.png');
            break;
        case 7:
            $img = asset('images/vip_7.png');
            break;
        case 6:
            $img = asset('images/vip_6.png');
            break;
        case 5:
            $img = asset('images/vip_5.png');
            break;
        case 4:
            $img = asset('images/vip_4.png');
            break;
        case 3:
            $img = asset('images/vip_3.png');
            break;
        case 2:
            $img = asset('images/vip_2.png');
            break;
        case 1:
            $img = asset('images/vip_1.png');
            break;
        default:
            $img = '';
            break;
    }

    return $img;
}