<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/10/23
 * Time: 12:03
 */

namespace Admin\Controller;


class RoleController extends CommonController
{
    public function index()
    {
        $datas = M('User')->where(array('status'=>1))->select();
        $this->assign('userList',$datas);
        $num = M('Role')->where(array('status'=>1))->count();
        $this->assign('num',$num);
        $this->showRoleList();
        $this->display();
    }
    public function add()
    {
        if(IS_POST) {
            //先将角色信息入库
            $datas = I('post.');
            $rs = D('Role')->add($datas);
            if($rs == 100) {
                $this->ajaxReturn(array('status'=>100,'msg'=>'该角色已存在！'));
            }else if($rs) {
                //查询入库角色id
                $data = M('Role')->where(array('role_name'=>$datas['role_name']))->find();
                $role_id = $data['id'];
                //将权限入库
                if(isset($datas['menu_id'])) {
                    $rs = D('Access')->add($role_id,$datas['menu_id']);
                    if($rs) {
                        // //status==1  操作成功
                        $this->ajaxReturn(array('status'=>1,'msg'=>'操作成功'));
                    }else {
                        //status==-1  权限入库失败
                        $this->ajaxReturn(array('status'=>-1,'msg'=>'服务器繁忙请稍后再试'));
                    }
                }else {
                    $this->ajaxReturn(array('status'=>2,'msg'=>'操作成功'));
                }
            }else {
                //status==0  角色入库失败
                $this->ajaxReturn(array('status'=>0,'msg'=>'服务器繁忙请稍后再试'));
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
            $rs = D('Role')->edit($datas);
            if($rs) {
                //将权限入库
                $rs = D('Access')->edit($datas['id'],$datas['menu_id']);
                if($rs) {
                    // //status==1  操作成功
                    $this->ajaxReturn(array('status'=>1,'msg'=>'操作成功'));
                }else {
                    //status==-1  权限入库失败
                    $this->ajaxReturn(array('status'=>-1,'msg'=>'服务器繁忙请稍后再试'));
                }
            }else {
                //status==0  角色入库失败
                $this->ajaxReturn(array('status'=>0,'msg'=>'服务器繁忙请稍后再试'));
            }
        }else {
            //原信息展示
            $id = I('id');
            $data = M('Role')->find($id);
            $this->assign('data',$data);
            //需要修改角色的所有权限
            $datas = D('Access')->getRoleAccess($id);
            foreach($datas as $val) {
                $arr[] = $val['id'];
            }
            $this->assign('accessDatas',$arr);
            $this->showMenuList();
            $this->display();
        }
    }
    public function del()
    {
        $id = I('id');
        if($id==1) {
            $this->ajaxReturn(array('status'=>100,'msg'=>'此用户不允许被操作'));
        }
        $rs = M('Role')->save(array('id'=>$id,'status'=>0));
        if($rs) {
            //清空此角色的所有权限
            D('Access')->clearAccess($id);
            $this->ajaxReturn(array('status'=>1,'msg'=>'删除成功'));
        }else {
            $this->ajaxReturn(array('status'=>-1,'msg'=>'服务器繁忙请稍后再试'));
        }
        $this->display();
    }
    private function showMenuList()
    {
        //查询菜单表展示
        $datas = M('Menu')->where(array('display'=>1))->select();
        $datas = list_to_tree($datas);
//        dump($datas);
        $this->assign('menuList',$datas);
    }
    private function showRoleList()
    {
        $datas = M('Role')->order('role_sort desc')->where(array('status'=>1))->select();
        $this->assign('roleList',$datas);
    }
}