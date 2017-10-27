<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/10/19
 * Time: 8:50
 */

namespace Admin\Model;


use Think\Model;

class CategoryModel extends Model
{
    /**
     * 获得分类树数据
     */
        public function getCategoryTree()
    {
        $datas = M('Category')->where(array('display'=>1))->select();
        $tree = getTree($datas);
        return $tree;
    }
}