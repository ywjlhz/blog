<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/10/20
 * Time: 15:49
 */

namespace Admin\Controller;


class MemberController extends CommonController
{
    public function index()
    {
        //查询所有用户并展示
        $map['rid'] = array(3);
        $datas = M('User')->where($map)->select();
        $this->assign('datas',$datas);
        $num = M('User')->where($map)->count();
        $this->assign('num',$num);
        $this->display();
    }
    public function add()
    {
        $this->display();
    }
//    public function edit()
//    {
//        $this->display();
//    }
    public function changepwd()
    {
        if(IS_POST) {
            $data['password'] = md5(I('newpassword'));
            $data['id'] = I('change_id');
            $rs = M('User')->save($data);
            if($rs) {
                $this->ajaxReturn(array('msg'=>'修改成功','status'=>1));
            }else {
                $this->ajaxReturn(array('msg'=>'服务器繁忙','status'=>2));
            }
        }else {
            //展示用户名
            $id = I('id');
            $data = M('User')->find($id);
            $this->assign('data',$data);
            $this->display();
        }
    }
    public function del()
    {
        $this->display();
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
}