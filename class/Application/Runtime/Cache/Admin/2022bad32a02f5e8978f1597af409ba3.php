<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
			<li class="nav_index menu_cur"><a href="/index.php/Index/index"><i></i><span>首页</span><b></b><div class="clear"></div></a></li>
			<!-- <li class="nav_site"><a href="index.html"><i></i><span></span><b></b><div class="clear"></div></a></li> -->
			<li class="nav_about"><a href="/index.php/Notice/me"><i></i><span>ALL HERE</span><b></b><div class="clear"></div></a></li>
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
							<div class="sort_b"><a href="#" onclick="return false;"><div class="sort_b_inner"><i class="cate_tag"></i><span>开发中</span><div class="clear"></div></div></a></div>
						</div>
					</td>
				</tr>
			</table>
		</div>
		
		<div id="content">	
			
				
							<!-- <a class="alist" vhref="zhengwen.html"> -->
								
								<div class="thank">
								
						
本站全部源代码Licensed under the Apache2 license</br></br>
Apache2开源协议：</br>
Apache Licence是著名的非盈利开源组织Apache采用的协议。该协议和BSD类似，鼓励代码共享和尊重原作者的著作权，允许代码修改，再作为开源或商业软件发布。需要满足的条件如下</br></br><ul><li>1． 需要给用户一份Apache Licence ；</li><li>2． 如果你修改了代码，需要在被修改的文件中说明；</li><li>3． 在延伸的代码中（修改和有源代码衍生的代码中）需要带有原来代码中的协议，商标，专利声明和其他原来作者规定需要包含的说明；</li><li>4． 如果再发布的产品中包含一个Notice文件，则在Notice文件中需要带有本协议内容。你可以在Notice中增加自己的许可，但不可以表现为对Apache Licence构成更改。</li> </ul>具体的协议参考：</br></br><a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">http://www.apache.org/licenses/LICENSE-2.0</a><br /></br>
THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS<br />
FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER<br />
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.</br></br>
<p>版权所有Copyright © 2017 by Kris All rights reserved</p>
	</div>	
		
	</div>

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
												<!-- <li style="font-weight:700;" c_data="1" style="background:#f7f7f7;"><i style="margin-right:0;background:none;width:0;" class="s"></i><span>通知类型</span></li>
															<div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="/index.php/Admin/Notice/select/id/0">教务网信息</a></li></div><div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="/index.php/Admin/Notice/select/id/1">各科作业通知</a></li></div><div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="/index.php/Admin/Notice/select/id/2">考试信息</a></li></div><div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="/index.php/Admin/Notice/select/id/3">课程安排</a></li></div><div class="notice"><li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><a href="/index.php/Admin/Notice/select/id/4">其他</a></li></div> -->
															
	
															
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
			
		</div>

		<div class="asort">
			<div class="hd">
				<div class="wrap">
					<div class="fl"><i></i><span>留言墙</span><div class="clear"></div></div>
					<div class="fr"></div>
					<div class="clear"></div>
				</div>
			</div>
			
		</div>
		
	
	
	
	
	<script language="javascript" src="/Public/Js/zepto.min.js"></script>
	<script language="javascript" src="/Public/Js/fx.js"></script>
	<script language="javascript" src="/Public/Js/script.js"></script>
	
</body>
</html>