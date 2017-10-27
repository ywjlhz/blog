<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/10/21
 * Time: 10:33
 */

namespace Admin\Controller;


class MenuController extends CommonController
{
    public function index()
    {
        $this->showMenuList();
        $num = M('Menu')->where(array('display'=>1))->count();
        $this->assign('num',$num);
        $this->display();
    }
    public function add()
    {
        if(IS_POST) {
            $datas = I('post.');
            $rs = D('Menu')->add($datas);
            if($rs) {
                if($rs==100) {
                    $this->ajaxReturn(array('msg'=>'请不要重复添加','status'=>100));
                }else {
                    $this->ajaxReturn(array('msg'=>'添加成功','status'=>1));
                }
            }else {
                $this->ajaxReturn(array('msg'=>'服务器繁忙','status'=>-1));
            }
        }else {
            $this->showMenuList();
            $this->display();
        }
    }
    public function edit()
    {
        if(IS_POST) {
            $datas = I('post.');
            $rs = M('Menu')->save($datas);
            if($rs) {
                $this->ajaxReturn(array('msg'=>'修改成功','status'=>1));
            }else {
                $this->ajaxReturn(array('msg'=>'服务器繁忙','status'=>2));
            }
        }else {
            $id = I('id');
            $datas = M('Menu')->find($id);
            $this->assign('datas',$datas);
            $this->showMenuList();
            $this->display();
        }
    }
    public function del()
    {
        $id = I('id');
        //判断是否有子菜单
        $rs = M('Menu')->where(array('pid'=>$id))->select();
        if($rs) {
            $this->ajaxReturn(array('msg'=>'请先删除该菜单下的所有子菜单','status'=>100));
        }
        $rs = M('Menu')->save(array('id'=>$id,'display'=>0));
        if($rs) {
            $this->ajaxReturn(array('msg'=>'删除成功','status'=>1));
        }else {
            $this->ajaxReturn(array('msg'=>'服务器繁忙','status'=>2));
        }
    }
    public function showMenuList()
    {
        //查询菜单表展示
        $datas = M('Menu')->where(array('display'=>1))->select();
        $datas = getTree($datas);
        $this->assign('menuList',$datas);
    }
}