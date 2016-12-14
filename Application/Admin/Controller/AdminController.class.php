<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends CommonController {
    
    public function lst(){
        $admin=D('admin');
        $count=$admin->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,2);
        $show=$Page->show();
        $list =$admin->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

    public function add(){
        $admin=D('admin');
    	if(IS_POST){
            $data['username']=I('username');
    		$data['password']=md5(I('password'));
            if($admin->create($data)){
                if($admin->add()){
                    $this->success('添加管理员成功！',U('lst'));
                }else{
                    $this->error('添加管理员失败！');
                }
            }else{
                $this->error($admin->getError());
            }

            return;
    	}
        $this->display();
    }

    public function edit(){
        $admin=D('admin');
        if(IS_POST){
            $data['username']=I('username');
            $data['id']=I('id');
            $admin_s=$admin->find($data['id']);
            $password=$admin_s['password'];
            if(I('password')){
                $data['password']=md5(I('password'));
            }else{
                $data['password']=$password;
            }
            if($admin->create($data)){
                $save=$admin->save();
                if( $save !== false){
                    $this->success('修改管理员成功！',U('lst'));
                }else{
                    $this->error('修改管理员失败！');
                }
            }else{
                $this->error($admin->getError());
            }
            return;
        }
        $admins=$admin->find(I('id'));
        $this->assign('admins',$admins);
        $this->display();
    }

    public function del(){
        $admin=D('admin');
        $id=I('id');
        if($id==1){
            $this->error('初始化管理员不能删除！');
        }else{
          if($admin->delete($id)){
            $this->success('删除管理员成功！',U('lst'));
        }else{
            $this->error('删除管理员失败！');
        }  
        }
        
    }

    public function sort(){
        $admin=D('admin');
        foreach ($_POST as $id => $sort) {
            $admin->where(array('id'=>$id))->setField('sort',$sort);
        }

        $this->success('排序成功！',U('lst'));

    }


    public function logout(){
        session(null); // 清空当前的session
        $this->success('退出成功，跳转中...',U('Login/index'));
    }

    
}