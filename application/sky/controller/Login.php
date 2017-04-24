<?php
namespace app\sky\controller;
use think\Controller;
class Login extends Controller
{
    public function index()
    {
        $this->redirect('home/index');
    	$this->assign('js_file','../application/sky/view/login/js/index.html');
    	return view();

    }
    public function check_login()
    {
    	return 1111;
    }
    function login()
    {
    	//echo $this->check_login();
    	$this->redirect('home/index');
    }
}
