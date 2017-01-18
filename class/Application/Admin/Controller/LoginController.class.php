<?php
/* 
* @Author: anchen
* @Date:   2016-11-25 14:15:54
* @Last Modified by:   anchen
* @Last Modified time: 2016-11-25 14:18:23
*/
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller{
    public function index(){
        $user=M('user');
        $username=$_POST['username'];
            $password=$_POST['password'];
            $where['username']=$username;
            $where['password']=$password;

            $arr=$user->field('id')->where($where)->find();
           
            if ($arr) {
                $_SESSION['username']=$username;
                $_SESSION['id']=$arr['id'];
                
                $this->success('登录成功，好高兴！〒▽〒',U('Notice/index'));
                # code...
            } else {
                # code...
                $this->error('哎呀，该用户不存在或密码错误！¯\_(ツ)_/¯');
                }

        }
    }

?>