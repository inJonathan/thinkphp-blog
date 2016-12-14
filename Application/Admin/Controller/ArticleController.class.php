<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends CommonController {
    
    

    public function lst(){
        $article=D('ArticleView');
        $count=$article->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,2);
        $show=$Page->show();
        $list =$article->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

    public function add(){
        $article=D('article');
    	if(IS_POST){
            $data['title']=I('title');
            $data['content']=I('content');
            $data['desc']=I('desc');
            $data['cateid']=I('cateid');
    		$data['time']=time();
            if($_FILES['pic']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $upload->rootPath  =      './'; // 设置附件上传目录
                $info   =   $upload->uploadOne($_FILES['pic']);
                if(!$info){
                    $this->error($upload->getError());
                }else{
                   $data['pic']=$info['savepath'].$info['savename'];
                }
            }
            if($article->create($data)){
                if($article->add()){
                    $this->success('添加文章成功！',U('lst'));
                }else{
                    $this->error('添加文章失败！');
                }
            }else{
                unlink($data['pic']); // 验证不通过则删除已上传的缩略图
                $this->error($article->getError());
            }

            return;
    	}
        $cateres=D('cate')->select();
        $this->assign('cateres',$cateres);
        $this->display();
    }

    public function edit(){
        $article=D('article');
        if(IS_POST){
            $data['title']=I('title');
            $data['content']=I('content');
            $data['desc']=I('desc');
            $data['cateid']=I('cateid');
            $data['id']=I('id');
            if($_FILES['pic']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $upload->rootPath  =      './'; // 设置附件上传目录
                $info   =   $upload->uploadOne($_FILES['pic']);
                if(!$info){
                    $this->error($upload->getError());
                }else{
                   $data['pic']=$info['savepath'].$info['savename'];
                }
            }
            if($article->create($data)){
                $save=$article->save();
                if($save !== false){
                    $this->success('修改文章成功！',U('lst'));
                }else{
                    $this->error('修改文章失败！');
                }
            }else{
                $this->error($article->getError());
            }

            return;
        }
        $articles=$article->find(I('id'));
        $this->assign('articles',$articles);
        $cateres=D('cate')->select();
        
        
        $this->assign('cateres',$cateres);
        $this->display();
    }

    public function del(){
        $article=D('article');
        
        $articles=$article->find(I('id'));
        
        if($article->delete(I('id'))){
            
            $delfile = $articles['pic'];
            unlink($delfile); // 删除相应的缩略图
            
            $this->success('删除文章成功！',U('lst'));
        }else{
            $this->error('删除文章失败！');
        }
    }


    
}