<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/10/23
 * Time: 14:37
 */

namespace Admin\Model;


use Think\Model;

class RoleModel extends Model
{
    public function add($datas)
    {
        //判断角色是否已存在
        $rs = M('Role')->where(array('role_name'=>$datas['role_name']))->select();
        if($rs) {
            return 100;
        }else {
            $datas['created_time'] = time();
            $datas['updated_time'] = time();
            $rs = M('Role')->add($datas);
            return $rs;
        }
    }
    public function edit($datas)
    {
        $datas['updated_time'] = time();
        $rs = M('Role')->save($datas);
        return $rs;
    }
}