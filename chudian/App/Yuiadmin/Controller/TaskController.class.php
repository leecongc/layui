<?php
namespace Yuiadmin\Controller;
use Think\Controller;
class TaskController extends Controller {
	//add_task.html  添加任务
    public function add_task(){
        $this->display();
    }

    //about_task.html  管理任务
    public function about_task(){
        $this->display();
    }
}