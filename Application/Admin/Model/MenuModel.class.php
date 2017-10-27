<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/10/21
 * Time: 19:57
 */

namespace Admin\Model;


use Think\Model;

class MenuModel extends Model
{
    public function add($datas)
    {
        //检查数据库中是否存在同名菜单
        $res = M('Menu')->where(array('menu_name'=>$datas['menu_name']))->find();
        $datas['created_time'] = time();
        $datas['updated_time'] = time();
        if($res) {
            if($res['display']==0) {
                $datas['id']=$res['id'];
                $datas['display'] = 1;
                $rs = M('Menu')->save($datas);
            }else {
                return 100;
            }
        }else {
            $rs = M('Menu')->add($datas);
        }
        return $rs;
    }
}