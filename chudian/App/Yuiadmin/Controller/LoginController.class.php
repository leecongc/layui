<?php 
namespace Yuiadmin\Controller;
use Think\Controller;
use Think\Verify;
/**
* 后台登录主页
*/
class LoginController extends ComController{

	//图像验证码
	public function yzm(){
		$Verify =     new \Think\Verify();
		$Verify->fontSize = 60;		//// 验证码字体大小
		$Verify->length   = 4;		// 验证码位数
		$Verify->codeSet = '0123456789'; 
		$Verify->useNoise = true;	// 关闭验证码杂点
		$Verify->entry();
	}

	//验证验证码
	public function login(){
		if ($_POST) {
			$verify = new \Think\Verify();	//调用类
		    $code = $_POST['yzm'];
		    if(!$verify->check($code)){
		        $this->error("验证码错误！");
		        return;
		    }else{
		      	if(isset($_POST['user']) && isset($_POST['pwd'])){
					$name = $_POST['user'];
					$pwd = md5($_POST['pwd']);
					// show_bug($pwd);die;
					$use = D('admin_user');
					$data = $use -> where(array('username' => $name, 'pwd' => $pwd))->find();
					if($data){
						
						$_SESSION['username']=$data['username'];	//用户名
						$_SESSION['time']=$data['time'];			//取出上次登录时间，保存session
						//插入本次登录时间
						$info['id'] = $data['id'];
						$info['time'] = time();
						$newtime = $use-> save($info);	
						$this->success('登录成功',U('Index/index'));
					}else{
						$this->error('密码错误');
					}
				}
		    }
		}else{
			$this->display();
		}
	}
}