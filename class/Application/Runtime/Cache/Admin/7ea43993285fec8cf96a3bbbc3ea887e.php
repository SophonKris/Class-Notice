<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="loading">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="viewport" content="width=device-width, initial-scale=0.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="keywords" content="" />
<meta name="description" content="设计师网站">
<meta name="author" content="" />
<link rel="stylesheet" type="text/css" href="/class/Public/Css/style.css" />
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
.thank
{ 
	 font-size:20px
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
			<li class="nav_index menu_cur"><a href="/class/index.php/Admin/Index/index"><i></i><span>首页</span><b></b><div class="clear"></div></a></li>
			<!-- <li class="nav_site"><a href="index.html"><i></i><span></span><b></b><div class="clear"></div></a></li> -->
			<li class="nav_help"><a href="/class/index.php/Admin/Notice/money"><i></i><span>捐赠我们</span><b></b><div class="clear"></div></a></li>
			<li class="nav_about"><a href="/class/index.php/Admin/Notice/thank"><i></i><span>开源鸣谢</span><b></b><div class="clear"></div></a></li>
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
				<form method="post" action="/class/index.php/Admin/Login/index">
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
			<div class="logo"><a href="http://www.cssmoban.com/" title=""><!-- <img src="css/logo.png" /> --></a></div>
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
							<div class="sort_b"><a href="#" onclick="return false;"><div class="sort_b_inner"><i class="cate_sort"></i><span>开发中</span><div class="clear"></div></div></a></div>
						</div>
					</td>
					<td class="sort_right">
						<div class="sort_tag">
							<div class="sort_b"><a href="#" onclick="return false;"><div class="sort_b_inner"><i class="cate_tag"></i><span>留言墙</span><div class="clear"></div></div></a></div>
						</div>
					</td>
				</tr>
			</table>
		</div>
		
		<div id="content">	
			<div id="list">
				<div class="wrap">
							<!-- <a class="alist" vhref="zhengwen.html"> -->
								
								<div class="thank">
								
						<font color="red">本站免费开源，由于服务器租用及后期维护均由个人承担，您的帮助是对我们最大的支持和动力！〒▽〒

	^_^</font></br></br>
	本站开发者遵循Apache2开源协议发布本站，并提供免费使用。</br></br>
    
	<img height="100%" width="100%" src="/class/Public/Image/捐赠.jpg" alt=""></br></br>
	版权所有Copyright © 2017 All rights reserved.
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
															<div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="/class/index.php/Admin/Notice/select/id/0">教务网信息</a></li></div><div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="/class/index.php/Admin/Notice/select/id/1">各科作业通知</a></li></div><div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="/class/index.php/Admin/Notice/select/id/2">考试信息</a></li></div><div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="/class/index.php/Admin/Notice/select/id/3">课程安排</a></li></div><div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="/class/index.php/Admin/Notice/select/id/4">其他</a></li></div>
															
	
															
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
													<li class="a_selected" s_data="rec"><i class="s"></i><span>最新推荐</span><i class="e"></i></li>
													
											</ul>
					<div class="clear"></div>
				</div>
			</div>
		</div>

		<div class="asort">
			<div class="hd">
				<div class="wrap">
					<div class="fl"><i></i><span>留言墙</span><div class="clear"></div></div>
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
	<script language="javascript" src="/class/Public/Js/zepto.min.js"></script>
	<script language="javascript" src="/class/Public/Js/fx.js"></script>
	<script language="javascript" src="/class/Public/Js/script.js"></script>
	
</body>
</html>