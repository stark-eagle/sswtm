<?php
namespace app\index\controller;
use  think\Controller;
use think\Session;

class Base extends Controller
{
    protected function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        define('USER_ID',Session::get('user_id'));
    }
    protected function islogin(){
        if (empty(Session::get('user_id'))){
            $this->redirect(WEBSITE.'/index.php/index/user/login');
//            $this->error('用户未登陆，无效访问！','index.php/index/user/login');
        }
    }
    protected function alreadylogin(){
        if (!empty(Session::get('user_id'))){
            $this->redirect(WEBSITE.'/index.php/index/index/index');
        }
    }
}
