<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/10/18
 * Time: 16:11
 */

namespace Admin\Model;


use Think\Model;

class UserModel extends Model
{
    public function loginUpdate($rs)
    {
        //更新用户登录信息
        $arr['last_login_time'] = time();
        $arr['last_ip'] = ip2long($_SERVER['SERVER_ADDR']);
        $arr['login_count'] = $rs['login_count']+1;
        $rs = M('User')->where(array('id'=>$rs['id']))->save($arr);
        return $rs;
    }
    public function adminAdd($datas)
    {
        $datas['password'] = md5($datas['password']);
        $datas['created_time'] = time();
        $datas['updated_time'] = time();
        $datas['last_login_time'] = time();
        $datas['last_ip'] = ip2long($_SERVER['SERVER_ADDR']);
        $rs = M('User')->add($datas);
        return $rs;
    }
}