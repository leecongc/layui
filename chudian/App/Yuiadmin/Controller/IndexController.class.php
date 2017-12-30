<?php
namespace Yuiadmin\Controller;
use Think\Controller;
/**
* 后台主页面
*/
class IndexController extends ComController {
	

    //清除session
    public function out_user(){
        session(null);
        echo 1;
        exit;
    }

}