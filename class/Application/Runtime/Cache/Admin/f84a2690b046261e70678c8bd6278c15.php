<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="loading">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="viewport" content="width=device-width, initial-scale=0.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="keywords" content="" />
<meta name="description" content="">
<meta name="author" content="" />
<link rel="stylesheet" type="text/css" href="/Public/Css/style.css" />
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no" name="format-detection">
<link rel="apple-touch-icon-precomposed" href="images/favicon.ico">
<script>
var logined = 0
</script>
<title>自动化154班通知整理</title>
</head>

<body>
<style>
.notice a  
{  
   color:black;  
}
.content
{ 
	 font-size:18px;
	  background:#fff;
	  color:#333;
}

</style>
<script>
var now_page = 1,
search_value = '';
</script>

		<div id="menu">
		<div class="search_wrap">
			<!-- <form action="" method="get">
				<input type="text" name="search" class="search_input" placeholder="关键字查找" />
				<i class="reset_input"><i></i></i>
			</form> -->
		</div>
		<ul>
			<li class="nav_index menu_cur"><a href="/index.php/Index/index"><i></i><span>首页</span><b></b><div class="clear"></div></a></li>
			<!-- <li class="nav_site"><a href="index.html"><i></i><span></span><b></b><div class="clear"></div></a></li> -->
			<li class="nav_help"><a href="/index.php/Notice/money"><i></i><span>捐赠我们</span><b></b><div class="clear"></div></a></li>
			<li class="nav_about"><a href="/index.php/Notice/thank"><i></i><span>开源鸣谢</span><b></b><div class="clear"></div></a></li>
		</ul>
	</div>
		<div id="user">
					<!-- <div class="account">
				<div class="login_b_t">
					<div class="pd10">
						<div class="fl">还没有账号<a id="reg_now" href="" onclick="return false;">立即注册</a></div><div class="fr"><a href="#">忘记密码?</a></div><div class="clear"></div>
					</div>
				</div>
			</div> -->
			<div class="pd10">
				<form method="post" action="/index.php/Login/index">
					<div class="login_b_i">
						<div class="login_input">
							<div class="login_user"><input type="text" name="username" placeholder="帐号" /><i></i></div>
							<div class="login_password"><input type="password" name="password" placeholder="密码" /><i></i></div>
						</div>
					</div>
					<input type="submit" class='login_submit' value="登录"/>
				</form>
				<!-- <div class="login_quick">
					<p>用第三方帐号直接登录</p>
					<a href="#" id="weibo_app"><span><i></i>微博帐号登录</span></a>
					<a href="#" id="qq_connect"><span><i></i>QQ&nbsp;&nbsp;帐号登录</span></a>
				</div> -->
			</div>
			</div>	
	<div id="header">
		<div class="wrap">
			<i class="menu_open"></i>
			<div class="logo"><a href="" title=""><!-- <img src="css/logo.png" /> --></a></div>
			<i class="search_open"></i>
		</div>
		<div class="logo_msk"></div>
	</div>
	<div id="container">
		<div id="sort">
			<table width="100%" border="0" cellspacing="0">
				<tr>
					<td class="sort_left">
						<div class="sort_cate">
							<div class="sort_b"><a href="#" onclick="return false;"><div class="sort_b_inner"><i class="cate_default"></i><span>全部</span><div class="clear"></div></div></a></div>
						</div>
					</td>
					<td>
						<div class="sort_sort">
							<div class="sort_b"><a href="#" onclick="return false;"><div class="sort_b_inner"><i class="cate_sort"></i><span>常用信息</span><div class="clear"></div></div></a></div>
						</div>
					</td>
					<td class="sort_right">
						<div class="sort_tag">
							<div class="sort_b"><a href="#" onclick="return false;"><div class="sort_b_inner"><i class="cate_tag"></i><span>开发中●﹏●</span><div class="clear"></div></div></a></div>
						</div>
					</td>
				</tr>
			</table>
		</div>
		
		<div id="content">	
			<div id="list">
				<div class="wrap">
							<!-- <a class="alist" vhref="zhengwen.html"> -->
								
								<div >
								<p>
<span style="
     text-align: center; 
     padding-bottom: 6px; 
     background-color: #99ccff; 
     padding-left: 20px; 
     padding-right: 20px; 
     color: #0000ff; 
     padding-top: 6px; 
     box-shadow: 10px 10px 5px #888888;"
><strong><span style="font-size: 18px;">欢迎来到自动化154班专属站点〒▽〒</span></strong></span></p></br></br>
						<div>
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p>通知摘要：</p><?php echo ($vo["title"]); ?></br>  <!-- <a href="/class/index.php/Edit/edit/id/39">编辑</a><br/> -->
                        <p>通知内容：</p></br><p><?php echo ($vo["content"]); ?></p></br>
                        <p>发布时间：</p><?php echo (date("Y m d H:i:s" , $vo["time"])); ?><br/>

                        <p>发布人：</p><?php echo ($vo["name"]); ?>                        <!-- <p>相关文件：</p><br/> -->
                        <p>______________________</p>
                        <br/><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
                        <style>

.re_page2{ width:auto; height:30px; padding-right:10px; padding-top:10px; float:left;}
.re_page2 a { text-decoration: none; border: 1px solid #CCC; padding: 5px; }
.re_page2 span { border: 1px solid #ccc; padding: 5px 12px; background: #CCC; color: #853645; }

</style>



<div class="re_page2">

 <?php echo ($show); ?>  </div>

 </div></div></div>
					<div>
							
								<div class="clear"></div>
							
						</div>
					</li>
				
				<div class="list_loading"><i></i><span>努力加载中...</span></div>
			</div>
		</div>
		
		<div class="push_msk"></div>
	</div>

	<div id="sort_content">
		<div class="asort">
			<div class="hd">
				<div class="wrap">
					<div class="fl"><span>选择通知</span><div class="clear"></div></div>
					<div class="fr"></div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="ct">
				<div class="wrap">
					<ul class="choose_cate">
												<li style="font-weight:700;" c_data="1" style="background:#f7f7f7;"><i style="margin-right:0;background:none;width:0;" class="s"></i><span>通知类型</span></li>
															<div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="/index.php/Notice/select/id/0">教务网信息</a></li></div><div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="/index.php/Notice/select/id/1">各科作业通知</a></li></div><div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="/index.php/Notice/select/id/2">考试信息</a></li></div><div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="/index.php/Notice/select/id/3">课程安排</a></li></div><div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="/index.php/Notice/select/id/4">其他</a></li></div>
															
	
															
					<div class="clear"></div>
				</div>
			</div>
		</div>
				
		<div class="asort">
			<div class="hd">
				<div class="wrap">
					<div class="fl"><span>选择排序</span><div class="clear"></div></div>
					<div class="fr"></div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="ct">
				<div class="wrap">
					<ul class="choose_sort">
													<div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="http://jwc.njit.edu.cn/">教务网</a></li></div>
													<div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="http://www.njit.edu.cn/">南京工程学院</a></li></div>
													<div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="http://jwjx.njit.edu.cn/">教务管理系统</a></li></div>
													<div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="http://lib.njit.edu.cn/">图书馆</a></li></div>
													<div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="http://zdh.njit.edu.cn/">自动化学院</a></li></div>
													<div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="http://202.119.160.175/">爱课程</a></li></div>
													<div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="http://english.njit.edu.cn/">外语教学网</a></li></div>
													<div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="">等待你的添加。。请直接联系开发者</a></li></div>
											</ul>
					<div class="clear"></div>
				</div>
			</div>
		</div>

		<div class="asort">
			<div class="hd">
				<div class="wrap">
					<div class="fl"><i></i><span>等待你的建议。。请直接联系开发者</span><div class="clear"></div></div>
					<div class="fr"></div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="ct">
				<div class="wrap">
					<!--<h4 class="cate_trade"><i></i><span>行业</span></h4>-->
					<ul>
												
											</ul>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		
	</div>
	
	<div id="newwrap_t" class="newwrap">
		<div class="newwrap_msk"></div>
		<iframe id="newwrap" frameborder="0" width="100%" height="100%"></iframe>
	</div>
	<div id="reg_index">
		<div class="reg_bar">
			<div class="wrap">
				<span class="fl"><i></i>注册帐号</span>
				<i class="reg_bar_close fr"></i>
				<div class="clear"></div>
			</div>
		</div>
		<!-- <div class="wrap reg_ct">
			<p>您可以选择以下第三方帐号直接登录uehtml<br />一分钟完成注册</p>
			<a href="#" id="weibo_app"><span><i></i>微博帐号登录</span></a>
			<a href="#" id="qq_connect"><span><i></i>QQ&nbsp;&nbsp;帐号登录</span></a>
		</div> -->
	</div>
	<div class="loading_dark"></div>
	<div id="loading_mask">
		<div class="loading_mask">
			<ul class="anm">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
	</div>
	<script language="javascript" src="/Public/Js/zepto.min.js"></script>
	<script language="javascript" src="/Public/Js/fx.js"></script>
	<script language="javascript" src="/Public/Js/script.js"></script>
	
</body>
</html>