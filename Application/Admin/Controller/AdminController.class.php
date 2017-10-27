<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/10/19
 * Time: 16:46
 */

namespace Admin\Controller;


class AdminController extends CommonController
{
    public function index()
    {
        //查询所有管理员信息展示
        $map['rid'] = array('in','1,2');
        $datas = M('User')->where($map)->select();
        $this->assign('datas',$datas);
        $this->userCount($map);
        $this->display();
    }
    public function add()
    {
        if(IS_POST) {
            $datas = I('post.');
            $rs = D('User')->adminAdd($datas);
            if($rs) {
                $this->ajaxReturn(array('msg'=>'添加成功！','status'=>1));
            }else {
                $this->ajaxReturn(array('msg'=>'添加失败！','status'=>-1));
            }
        }else {
            $this->display();
        }
    }
    public function edit()
    {
        if(IS_POST) {
            $datas = I('post.');
            $datas['password'] = md5($datas['password']);
            $rs = M('User')->save($datas);
            if($rs) {
                $this->ajaxReturn(array('msg'=>'修改成功！','status'=>1));
            }else {
                $this->ajaxReturn(array('msg'=>'修改失败！','status'=>-1));
            }
        }else {
            $id = I('id');
            //查询数据并展示
            $datas = $this->getUserInfo($id);
            $this->assign('datas',$datas);
            $this->display();
        }
    }
    public function del()
    {
        $id = I('id');
        if($id==1) {
            $this->ajaxReturn(array('status'=>100,'msg'=>'此账户不能被删除'));die;
        }
        $rs = M('User')->delete($id);
        if($rs) {
            $this->ajaxReturn(array('status'=>1,'msg'=>'删除成功'));
        }else {
            $this->ajaxReturn(array('status'=>-1,'msg'=>'服务器繁忙，请稍后再试...'));
        }
        $this->index();
    }

    public function freeze()
    {
        //接收前台数据
        $status = I('status');
        $id = I('id');
        if($status==='stop') {
            $rs = M('User')->save(array('status'=>0,'id'=>$id));
            if($rs) {
                $this->ajaxReturn(array('msg'=>'操作成功','status'=>1,'id'=>$id));
            }else {
                $this->ajaxReturn(array('msg'=>'服务器繁忙','status'=>-1,'id'=>$id));
            }
        }else {
            $rs = M('User')->save(array('status'=>1,'id'=>$id));
            if($rs) {
                $this->ajaxReturn(array('msg'=>'操作成功','status'=>1,'id'=>$id));
            }else {
                $this->ajaxReturn(array('msg'=>'服务器繁忙','status'=>-1,'id'=>$id));
            }
        }
    }
    public function userCount($map)
    {
        $num = M('User')->where($map)->count();
        $this->assign('num',$num);
    }
    public function getUserInfo($id)
    {
        $datas = M('User')->find($id);
        return $datas;
    }
}