<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/10/18
 * Time: 22:03
 */

namespace Admin\Controller;


class CategoryController extends CommonController
{
    public function lists()
    {
        //展示分类树数据
        $this->showCategoryList();
        $this->display();
    }
    public function index()
    {
        //展示分类树数据
        $this->showCategoryList();
        $this->display();
    }
    public function add()
    {
        if(IS_POST) {
            //接收用户添加分类数据
            $datas = I('post.');
            $datas['created_time'] = time();
            $datas['updated_time'] = time();
            $rs = M('Category')->add($datas);
            if($rs) {
                $this->success('添加分类成功',U('category/index'));die;
            }else {
                $this->error('服务器繁忙，请稍后再试...');
            }
        }else {
            //展示分类树数据
            $this->showCategoryList();
            $this->display();
        }
    }
    public function edit()
    {
        if(IS_POST) {
            //接收用户提交数据
            $datas = I('post.');
            $rs = M('Category')->save($datas);
            if($rs) {
                $this->success('修改分类成功',U('lists'));
            }else {
                $this->error('服务器繁忙，请稍后再试...');
            }
        }else {
            //展示分类树数据
            $this->showCategoryList();
            //接收需要修改分类id
            $id = I('id');
            //查询信息并展示
            $datas = M('Category')->find($id);
            $this->assign('datas',$datas);
            $this->display();
        }
    }
    public function del()
    {
        $id=I('id');
        $datas = M('Category')->find($id);
        $datas['display'] = 0;
        $rs = M('Category')->save($datas);
        if($rs) {
            $this->success('删除分类成功',U('lists'));
        }else {
            $this->error('服务器繁忙，请稍后再试...');
        }
    }
    private function showCategoryList()
    {
        //展示分类树数据
        $tree = D('Category')->getCategoryTree();
        $this->assign('dataslist',$tree);
    }
}