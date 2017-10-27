<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/10/18
 * Time: 11:53
 */

namespace Admin\Controller;


use Think\Controller;

class LoginController extends Controller
{
    public function login()
    {
        if(IS_POST) {
            //接收用户提交数据
            $datas = I('post.');
            $datas['password'] = md5($datas['password']);
            //判断用户是否登陆成功
            $verify = new \Think\Verify();
            $res = $verify->check($datas['captcha']);
            if(!$res) {
                $this->error('验证码有误，请重新输入',U('login/login'));
            }
            //数据库中匹配是否存在该用户
            $rs = M('User')->where($datas)->find();
            if($rs) {
                if($rs['status']==0) {
                    $this->error('该账户已被冻结，请与超级管理员联系');
                }
                //登录成功保存用户信息到session
                session('uid',$rs['id']);
                session('user_info',$rs);
                //判断用户是否保存登录信息
                if($datas['online']==1) {
                    cookie('username',$rs['username'],3600*24*7);
                }else {
                    cookie('username',null);
                }
                //更新用户登录信息
                D('User')->loginUpdate($rs);
                $this->success('欢迎光临！',U('index/index'));
            }else{
                $this->error('账号密码有误，请重新输入！');
            }
        }else {
            $this->display();
        }
    }
    public function captcha()
    {
        $config=array(
            // 中文验证码字符串
            'useImgBg'  =>  false,           // 使用背景图片
            'fontSize'  =>  14,              // 验证码字体大小(px)
            'useCurve'  =>  true,            // 是否画混淆曲线
            'useNoise'  =>  true,            // 是否添加杂点
            'imageH'    =>  40,               // 验证码图片高度
            'imageW'    =>  100,               // 验证码图片宽度
            'length'    =>  4,               // 验证码位数
            'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
            'bg'        =>  array(243, 251, 254),  // 背景颜色
            'reset'     =>  true,           // 验证成功后是否重置
        );
        $verify = new \Think\Verify($config);
        $verify->entry();
    }
    public function quit()
    {
        session('uid',null);
        session('user_info',null);
        $this->success('退出成功',U("login/login"));
    }
}