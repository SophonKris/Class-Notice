<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	   $notice=M('notice');
             import('ORG.Util.Page');
            $count=$notice->count();
            $page = new \Think\Page($count,5);
            

            $page->setConfig('header','篇文章');

            $show=$page->show();




            $arr=$notice->where()->order('time desc')->limit($page->firstRow.','  .$page->listRows)->select();
            html_entity_decode($arr);
            $this->assign('list',$arr);

            $this->assign("show",$show);
            $this->display();
        
    }
}