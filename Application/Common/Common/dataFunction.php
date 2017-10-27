<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/10/18
 * Time: 19:19
 */
function getUserRole($val)
{
    $arr = array(
        '1'=>'超级管理员',
        '2'=>'管理员',
        '3'=>'会员'
    );
    return $arr[$val];
}
function getUserStatus($val)
{
    $arr = array(
        '0'=>'<span class="label label-default radius">已禁用</span>',
        '1'=>'<span class="label label-success radius">已启用</span>',
    );
    return $arr[$val];
}
function getUserSex($val)
{
    $arr = array(
        '1'=>'男',
        '2'=>'女',
    );
    return $arr[$val];
}