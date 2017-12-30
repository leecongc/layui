<?php
namespace Yuiadmin\Controller;
use Think\Controller;
/*
*公共类	
*/
//session判断
class ComController extends Controller {

	//相当于onload
	public function _initialize(){
		//设置需要限制的控制器
		$arrName = array('Index','Other','Task');

		//当访问某个控制器时，自动加载session判断
		if(in_array(CONTROLLER_NAME, $arrName)){
			$this->checkLogin();
		}

	}

	//判断Session
    protected function checkLogin(){

    	if(empty($_SESSION['username'])){
    		$this->error('请先登录',U('Login/login'),1);
    	}else{
            // show_bug($_SESSION);die;

    		$use_other=$_SESSION;	//用户名
            //将用户名称输入前台(此处可以输出到后台所有页面) 
            $this->assign('use_other',$use_other);
    		// $this->display();	
    	}
    }

}

?>