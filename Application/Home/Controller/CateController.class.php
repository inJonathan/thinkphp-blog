<?php
namespace Home\Controller;
use Think\Controller;
class CateController extends CommonController {
    public function index(){
        $cateid = I('id');
        $article = D('article');
        
        $cates = D('cate') -> find($cateid);
               
        $count = $article->where(array('cateid'=>$cateid))->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        $list = $article->where(array('cateid'=>$cateid))->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this -> assign('catename', $cates['catename']);  // 当前cate名输出
        $this->current();
        $this->display();
    }
    
    public function current() {
        $current = I('id');
        $this -> assign('current', $current);
    }
    
}