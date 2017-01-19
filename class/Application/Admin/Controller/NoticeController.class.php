<?php
namespace Admin\Controller;
use Think\Controller;
class NoticeController extends Controller {

	public function index(){
			$this->display();
		}
	public function money(){
		$this->display();
	}

	public function thank(){
		$this->display();
	}

	public function me(){
		$this->display();
	}

	public function select(){
			$notice=D('notice');
			$type=$_GET['id'];
			
            		
			 
            import('ORG.Util.Page');
            $count=$notice->where("type=".$type)->count();
            $page = new \Think\Page($count,5);
            

            $page->setConfig('header','篇文章');

            $show=$page->show();




            $arr=$notice->where("type=".$type)->order('time desc')->limit($page->firstRow.','  .$page->listRows)->select();
            
            html_entity_decode($arr);//函数把 HTML 实体转换为字符
            $this->assign('list',$arr);

            $this->assign("show",$show);
            $this->display();
       }

public function doNotice(){
			//添加通知
			$data = array(
						'id' => $_POST['id'],
						'name' => $_POST['name'],
						'title' => $_POST['title'],
						'content' => $_POST['content'],
						'type' => $_POST['kind'],
						'upload' => $_POST['upload'],
						'level' => $_POST['level'],
						'time' => time(),
						);
			$notice =M('notice');
			var_dump($data);
						
			
			if(($data["title"]!==null) & ($data["content"]!==null) & ($data["type"]!==null))
			{
					$list = $notice->add($data);
					$this->redirect("Index/index","发布成功！〒▽〒",0);//跳转到通知中心
			}else{
					$this->error("发布操作失败，请填写完整哦！〒▽〒");//错误判断
				}
			}

			//转到通知详情
			public function noticeDetail(){
					M("Notice"); // 实例化User对象
                    $id = $_GET['notice_id'];
                    // var_dump($id);
                    // exit;
                    $arr=$notice->where("notice_id=".$id)->find();
                    
                    $title=$arr['title'];
                    $content=$arr['content'];
                    $time=$arr['time'];
                    
                    $this->assign('title',$title);
                    $this->assign('time',$time);
                    $this->assign('content',$content);
                   


					$this->display();
	}


}