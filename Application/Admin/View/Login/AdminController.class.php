<?php

namespace Admin\Controller;

use Think\Controller;

class AdminController extends Controller {
    
    // 大D方法是实例化数据库对象，大U方法是跳转到对应的方法或页面，大I方法是过滤传进来的值
    
    public function lst() {
        $admin = D('admin'); // 实例化数据库对象，之后才可以调用tp提供的方法
        $count = $admin->count(); // 查询满足要求的总记录数
        $Page = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        $list = $admin->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this -> display(); // 显示方法名对应的html模板
    }
    
    public function add() {
        $admin = D('admin');
        if (IS_POST) {
            $data['username'] = I('username');
            $data['password'] = md5(I('password'));
            if ($admin -> create($data)) { // 对数据进行表单验证，在Model层里进行验证
                if ($admin -> add()) {
                    $this -> success('添加管理员成功！', U('lst'));
                } else {
                    $this -> error('添加管理员失败！');
                }
            } else {
                $this -> error($admin -> getError());
            }
            return;
        }
        $this -> display();
    }

    public function edit() {
        $admin = D('admin');
        
        if (IS_POST) {
            $data['username'] = I('username');
            $data['id'] = I('id');
            $admin_s = $admin->find($data['id']); // 加载进来时的admin对象
            $password = $admin_s['password'];
            if (I('password')) {
                $data['password'] = md5(I('password')); // 如果用户有填入密码，赋值新的密码
            } else {
                $data['password'] = $password; // 如果用户没有填入密码，赋值原密码
            }
            if ($admin -> create($data)) { // 对数据进行表单验证，在Model层里进行验证
                $save = $admin -> save(); // 返回修改了几条数据，一般是1，如果和之前的数据一样返回0
                if ($save !== false) { // 用全等来进行判断，这样如果返回0时就不会被判断成修改失败了
                    $this -> success('修改管理员成功！', U('lst'));
                } else {
                    $this -> error('修改管理员失败！');
                }
            } else {
                $this -> error($admin -> getError());
            }
            return;
        }
        
        $admins = $admin->find(I('id'));
        $this -> assign('admins', $admins);
        $this -> display();
    }

    public function del() {
        $admin = D('admin');
        $id = I('id');
        if ($id == 1) {
            $this->error('初始化管理员不能删除！');
        } else {
            if ($admin->delete($id)) { // 删除相应id的记录值
                $this->success('管理员删除成功！', U('lst'));
            } else {
                $this->error('管理员删除失败！');
            }
        }
    }
    
    public function sort() { // 排序方法
        $admin = D('admin');
        foreach ($_POST as $id => $sort) { // 遍历提交过来的排序数组，将对应的值写入数据库
        	$admin->where(array('id'=>$id))->setField('sort', $sort);
        }
        $this->success('排序成功！', U('lst'));
    }

}
