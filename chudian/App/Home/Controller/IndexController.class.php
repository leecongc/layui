<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('前台还没写就想访问，拜托你 OK？','utf-8');
    }
}