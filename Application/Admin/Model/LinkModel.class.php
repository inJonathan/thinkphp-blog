<?php
namespace Admin\Model;
use Think\Model;
class LinkModel extends Model {
    
    protected $_validate=array(
        array('title','require','链接名称不得为空！',1,'regex',3), 
        array('url','require','链接地址不得为空！',1,'regex',3), 
        array('title','','链接名称不得重复！',1,'unique',3), 

        );

    
}