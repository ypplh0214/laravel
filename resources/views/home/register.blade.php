<!DOCTYPE html>
<html>
	<head>
		<title>注册-个人中心</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<link rel="icon" href="/home/img/favicon.ico" type="image/gif" />
		<link rel="stylesheet" type="text/css" href="/home/css/register.css"/>
		
	</head>
	
	<body>
		<!---------------- top nav start ---------------------->
		<div id="shortcut-2013">
			<div class="w">
				<ul class="fl lh">
					<li class="fore1 ld">
						<b></b>
						<a rel="nofollow" href="#">收藏京东</a>
					</li>
				</ul>
				
				<ul class="fr lh">
					<li id="loginbar" class="fore1">
						<a class="link-login" href="passport">你好，请登录</a>
						<a class="link-regist style-red" href="register">免费注册</a>
					</li>
					<li class="fore2 ld">
						<s></s>
						<a rel="nofollow" href="order">我的订单</a>
					</li>
					<li class="fore3 ld">
						<s></s>
						<a target="_blank" href="#">手机京东</a>
					</li>
					<li id="biz-service" class="fore4 ld menu">
						<s></s>
						<span class="outline"></span>
						<span class="blank"></span>
						客户服务
						<b></b>
					</li>
					<li id="site-nav" class="fore5 ld menu">
						<s></s>
						<span class="outline"></span>
						<span class="blank"></span>
						网站导航
						<b></b>
					</li>
				</ul>
				<span class="clr"></span>
			</div>
		</div>
		<!----------------- top nav end ---------------------->
		
		<!---------------- logo start ---------------------->
		<div id="logo" class="w">
			<div>
				<a href="./index.html">
					<img width="170" height="60" alt="京东商城" src="/home/img/logo-2013.png"/>
				</a>
				<b></b>
			</div>
		</div>
		<!----------------- logo end ----------------------->
		
		<!---------------- regist start ---------------------->
		<div id="regist" class="w">
			<div class="mt">
				<ul class="tab">
					<li class="curr">个人用户</li>
					<li class="line">
						<a href="#">企业用户</a>
					</li>
					<li class="fore">
						<a href="#">International Customers</a>
					</li>
				</ul>
				<div class="extra">
					<span style="text-align:right; width:62px;">
						<a class="flk13" href="#">English</a>
					</span>
					<span>
						我已经注册，现在就<a class="flk13" href="passport">登录</a>
					</span>
				</div>
			</div>
			<div class="mc">
				<form id="presonRegForm" action="" method="POST">
					<div class="form">
						<div id="select-regName" class="item">
							<span class="label">
								<b class="ftx04">*</b>
								用户名:
							</span>
							<div class="fl item-ifo">
								<div class="o-intelligent-regName">
									<input id="regName" class="text" type="text" value="" style="color:#999;"/>
									<i class="i-name"></i>
								</div>
							</div>
						</div>
					
						<!-- o-password start-->
						
						<div id="o-password">
							<div class="item">
								<span class="label">
								<b class="ftx04">*</b>
								请设置密码:
							</span>
							<div class="fl item-ifo">
								<div class="o-intelligent-regName">
									<input id="regName" class="text" type="password" value="" style="color:#999;"/>
									<i class="i-pass"></i>
								</div>
							</div>
							</div>
							
							<div class="item">
								<span class="label">
								<b class="ftx04">*</b>
								请确认密码:
								</span>
								<div class="fl item-ifo">
								<div class="o-intelligent-regName">
									<input id="regName" class="text" type="password" value="" style="color:#999;"/>
									<i class="i-pass"></i>
								</div>
								</div>
							</div>
							
							<div id="dphone" class="item">
								<span class="label">
									<b class="ftx04">*</b>
									验证手机:
								</span>
								<div class="fl item-ifo">
									<div class="o-intelligent-regName">
										<input id="regName" class="text" type="text" value="" style="color:#999;"/>
										<i class="i-phone"></i>
									</div>
								</div>
								<div class="fl">
									<span class="ftx-03 ml5">或</span>
									<a class="ftx-05 ml5 mail-verify" href="#" style="text-decoration:underline;">验证邮箱</a>
								</div>
							</div>
							
							<div class="item">
								<span class="label">
								<b class="ftx04">*</b>
								短信验证码:
								</span>
								<div class="fl item-ifo">
								<div class="o-intelligent-regName">
									<input id="regName" class="text text-1" type="text" value="" style="color:#999;"/>
									<a id="sendMobileCode" class="btn" href="#">
										<span id="dyMobileButton">获取短信验证码</span>
									</a>
								</div>
								</div>
							</div>
							
							<div id="authcodeDiv" class="item">
								<span class="label">
								<b class="ftx04">*</b>
								验证码:
								</span>
								<div class="fl item-ifo">
								
									<input id="authcode" class="text text-1" name="authcode" type="text" maxlength="6" autocomplete="off" tabindex="6" value="" style="color:#999;"/>
									<label class="img">
										<img id="JD_Verification1" src="home/img/image.jpg" style="cursor:pointer;width:100px;height:36px;display:block;"/>
									</label>
									<label class="ftx23">
										看不清?
										<a class="flk13" href="#">换一张</a>
									</label>
								</div>
								<span class="clr"></span>
							</div>
							
							<div class="item item-new">
								<span class="label">
									<b class="ftx04"></b>
									
								</span>
								<div class="fl item-ifo">
									<input id="readme" class="checkbox" type="checkbox" checked value="" />
									<label for="protocol">
										我已阅读并同意
										<a id="protocol" class="blue" href="#">《京东用户注册协议》</a>
									</label>
									
								</div>
							</div>
							
							<div class="item">
								<span class="label">
									<b class="ftx04"></b>
									
								</span>
								
								<input id="registsubmit" class="btn-img btn-regist" type="button" tabindex="8" value="立即注册" />
									
							</div>
							
						</div>
						
						<!-- o-password end --->
					</div>
					
					<div class="phone">
						<img width="180" height="180" src="/home/img/phone-bg.jpg"/>
					</div>
					<span class="clr"></span>
				</form>
			</div>
			
		</div>
		<!----------------- regist end ----------------------->
		
		<!----------------- footer start ----------------------->
		<div class="w">
			<div id="footer-2013">
				<div class="links">
					<a href="#" target="_blank">关于我们</a>|<a href="#" target="_blank">联系我们</a>|<a href="#" target="_blank">人才招聘</a>|<a href="#" target="_blank">商家入驻</a>|<a href="#" target="_blank">广告服务</a>|<a href="#" target="_blank">手机京东</a>|<a href="#" target="_blank">友情链接</a>|<a href="#" target="_blank">销售联盟</a>|<a href="#" target="_blank">京东社区</a>|<a href="#" target="_blank">京东公益</a>
				</div>
				<div class="copyright">Copyright&copy;2004-2015 京东JD.com版权所有</div>
			</div>
		</div>
		<!----------------- footer  end ----------------------->
		
	</body>
</html>