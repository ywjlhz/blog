<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/10/23
 * Time: 14:31
 */

namespace Admin\Model;


use Think\Model;

class AccessModel extends Model
{
    public function add($role_id,$menu_id)
    {
        foreach ($menu_id as $key => $value) {
            $arr[$key]['role_id'] = $role_id;
            $arr[$key]['menu_id'] = $value;
            $arr[$key]['created_time'] = time();
            $arr[$key]['updated_time'] = time();
        }
        $rs = M('Access')->addAll($arr);
        return $rs;
    }

    public function edit($role_id,$menu_id)
    {
        foreach ($menu_id as $key => $value) {
        $arr[$key]['role_id'] = $role_id;
        $arr[$key]['menu_id'] = $value;
        $arr[$key]['created_time'] = time();
        $arr[$key]['updated_time'] = time();
        }
        //删除原来当前角色的所有权限
        M('Access')->where('role_id='. $role_id)->delete();
        $rs = M('Access')->addAll($arr);
        return $rs;
    }

    public function clearAccess($role_id)
    {
        M('Access')->where('role_id='. $role_id)->delete();
        return true;
    }

    public function getRoleAccess($id)
    {
        $datas = M('Access')->field('menu_id')->where('role_id='.$id)->select();
        $access_datas = array_column($datas,'menu_id');
        $map['id'] = $access_datas ? array('in',$access_datas) : 'NO';
        $arr[] = M('Menu')->where($map)->select();
        return $arr[0];
    }
}