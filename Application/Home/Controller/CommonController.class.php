<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function __construct () {
        parent::__construct();
        $this -> nav();
        $this -> link();
        $this -> latest();
    }
    
    public function nav() {
        $cate = D('cate');
        $cateres = $cate -> order('sort desc') -> select();
        $this -> assign('cateres', $cateres);
    }
    
    public function link() {
        $link = D('link');
        $linkres = $link->order('sort desc')->select();
        $this -> assign('linkres', $linkres);
    }
    
    public function latest() {
        $latest = D('article')->order('time desc')->limit(8)->select();
        $this -> assign('latest', $latest);
    }

}
