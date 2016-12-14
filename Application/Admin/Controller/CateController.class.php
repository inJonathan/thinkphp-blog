<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends CommonController {
    
    public function lst(){
        $cate=D('cate');
        $cateres=$cate->order('sort desc')->select();
        $this->assign('cateres',$cateres);
        $this->display();
    }

    public function add(){
        $cate=D('cate');
    	if(IS_POST){
    		$data['catename']=I('catename');
            if($cate->create($data)){
                if($cate->add()){
                    $this->success('添加栏目成功！',U('lst'));
                }else{
                    $this->error('添加栏目失败！');
                }
            }else{
                $this->error($cate->getError());
            }

            return;
    	}
        $this->display();
    }

    public function edit(){
        $cate=D('cate');
        if(IS_POST){
            $data['catename']=I('catename');
            $data['id']=I('id');
            if($cate->create($data)){
                $save=$cate->save();
                if( $save !== false){
                    $this->success('修改栏目成功！',U('lst'));
                }else{
                    $this->error('修改栏目失败！');
                }
            }else{
                $this->error($cate->getError());
            }
            return;
        }
        $cates=$cate->find(I('id'));
        $this->assign('cates',$cates);
        $this->display();
    }

    public function del(){
        $cate=D('cate');
        if($cate->delete(I('id'))){
            $this->success('删除栏目成功！',U('lst'));
        }else{
            $this->error('删除栏目失败！');
        }
    }

    public function sort(){
        $cate=D('cate');
        foreach ($_POST as $id => $sort) {
            $cate->where(array('id'=>$id))->setField('sort',$sort);
        }

        $this->success('排序成功！',U('lst'));

    }

    
}