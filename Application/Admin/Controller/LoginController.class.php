<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

    public function index(){
        $admin=D('admin');
        if(IS_POST){
            if($admin->create($_POST,4)){
                if($admin->login()){
                    $this->success('登录成功，跳转中...',U('Index/index'));
                }else{
                    $this->error('您的用户名或者密码错误！',U('Login/index'));
                }
            }else{
                $this->error($admin->getError());
            }

            return;
        }
        if(session('id')){
            $this->error('您已经登录该系统，请勿重复登录！',U('Index/index'));
        }else{
           $this->display('login');
        }

    }

    public function verify(){
        $Verify =     new \Think\Verify();
        $Verify->fontSize = 30;
        $Verify->length   = 3;
        $Verify->useNoise = false;
        $Verify->entry();
    }


}