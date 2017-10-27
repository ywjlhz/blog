<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/10/18
 * Time: 16:28
 */

namespace Admin\Controller;


use Think\Controller;

class TestController extends Controller
{
    public function test()
    {
        echo time();
    }
}