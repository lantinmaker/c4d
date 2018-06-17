<?php

function generate_mmid()
{
    return substr(md5(mt_rand()),8,16);
}

function y_n($string)
{
    return $string === "y" ? "是" : "否";
}