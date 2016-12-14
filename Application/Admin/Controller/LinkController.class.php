<?php
namespace Admin\Controller;
use Think\Controller;
class LinkController extends CommonController {
    
    public function lst(){
        $link=D('link');
        $count=$link->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,2);
        $show=$Page->show();
        $list =$link->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

    public function add(){
        $link=D('link');
    	if(IS_POST){
            $data['title']=I('title');
            $data['url']=I('url');
    		$data['desc']=I('desc');
            if($link->create($data)){
                if($link->add()){
                    $this->success('添加链接成功！',U('lst'));
                }else{
                    $this->error('添加链接失败！');
                }
            }else{
                $this->error($link->getError());
            }

            return;
    	}
        $this->display();
    }

    public function edit(){
        $link=D('link');
        if(IS_POST){
            $data['title']=I('title');
            $data['url']=I('url');
            $data['desc']=I('desc');
            $data['id']=I('id');
            if($link->create($data)){
                $save=$link->save();
                if( $save !== false){
                    $this->success('修改链接成功！',U('lst'));
                }else{
                    $this->error('修改链接失败！');
                }
            }else{
                $this->error($link->getError());
            }
            return;
        }
        $links=$link->find(I('id'));
        $this->assign('links',$links);
        $this->display();
    }

    public function del(){
        $link=D('link');
        if($link->delete(I('id'))){
            $this->success('删除链接成功！',U('lst'));
        }else{
            $this->error('删除链接失败！');
        }
    }

    public function sort(){
        $link=D('link');
        foreach ($_POST as $id => $sort) {
            $link->where(array('id'=>$id))->setField('sort',$sort);
        }

        $this->success('排序成功！',U('lst'));

    }

    
}