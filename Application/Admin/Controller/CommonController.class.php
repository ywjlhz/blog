<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/10/18
 * Time: 11:53
 */

namespace Admin\Controller;


use Think\Controller;

class CommonController extends Controller
{
    public function _initialize()
    {
        if(!session('?uid')) {
            $this->error('非法访问,请先登录',U('login/login'));
        }
        //判断是否有操作权限
        //查询当前角色所有权限
        $datas = D('Access')->getRoleAccess($_SESSION['user_info']['rid']);
        foreach ($datas as $key=>$value) {
            if(!empty($value['menu_controller'])) {
                $arr[$key] = strtolower($value['menu_controller'].$value['menu_action']);
            }
        }
        $url = strtolower(CONTROLLER_NAME.ACTION_NAME);
        if(!in_array($url,$arr) && session('uid')!=1 ) {
            $this->error('没有相关权限，请联系超管开通',U('login/login'));
        }
    }
}