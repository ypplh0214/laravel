<!DOCTYPE html>
<html>
	<head>
		<title>我的购物车-京东商城</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<link rel="icon" href="/home/img/favicon.ico" type="image/gif" />
		<link rel="stylesheet" type="text/css" href="/home/css/cart.css"/>
	</head>
	
	<body>
	
	
	<!------------------------------------------------------------------------ top nav stat ------------------------------------------------------------------------------->
	
		<!----======================== left star =========================----->
		<div id="shortout-2014">
			<div class="w">
				<ul class="fl" >
					<li id="ttbar-mycity" class="dorpdown">		
						<div class="dt cw-icon" style="">
							<i class="ci-right">
								<s>◇</s>
							</i>
							送至:
							<span class="ui-areamini-text" title="北京">北京</span>
						</div>
							<!--<div class="dd dorpdown-layer"></div> 隐藏下拉层-->
					</li>
						
				</ul >
				<!---================== right start =======================--->
				<ul class="fr">
					<li class="ttbar-login">
						<a href="#" class="link-login">你好 , 请登录&nbsp;</a>
						<a href="#" class="link-regist style-red" href="#">免费注册</a>
					</li>
					<li class="spacer"></li>
					
					<li class="fore2"><div class="dt"><a href="#">我的订单</a></div></li>
					<li class="spacer"></li>
					
					<li id="ttbar-myjd">
						<div class="dt">
							<i class="ci-right">
								<s>◇</s>
							</i>
							<a href="#">我的京东</a>
						</div>
						<!--<div class="dd dorpdown-layer"></div> 隐藏下拉层-->
					</li>
					<li class="spacer"></li>
					
					<li class="fore4"><div class="dt"><a href="#">京东会员</a></div></li>
					<li class="spacer"></li>
					
					<li class="fore5"><div class="dt"><a href="#">企业采购</a></div></li>
					<li class="spacer"></li>
					
					<li id="ttbar-apps">
						<div class="dt cw-icon">
							<i class="ci-left"></i>
							<i class="ci-right">
								<s>◇</s>
							</i>
							<a href="#">手机京东</a>
						</div>
						<!--<div class="dd dorpdown-layer"></div> 隐藏下拉层-->
					</li>
					<li class="spacer"></li>
					
					<li id="ttbar-atte">
						<div class="dt">
							<i class="ci-right">
								<s>◇</s>
							</i>
							<a href="#">关注京东</a>
						</div>
						<!--<div class="dd dorpdown-layer"></div> 隐藏下拉层-->
					</li>
					<li class="spacer"></li>
					
					<li id="ttbar-serv">
						<div class="dt">
							<i class="ci-right">
								<s>◇</s>
							</i>
							<a href="#">客户服务</a>
						</div>
						<!--<div class="dd dorpdown-layer"></div> 隐藏下拉层-->
					</li>
					<li class="spacer"></li>
					
					<li id="ttbar-navs">
						<div class="dt">
							<i class="ci-right">
								<s>◇</s>
							</i>
							<a href="#">网站导航</a>
						</div>
						<!--<div class="dd dorpdown-layer"></div> 隐藏下拉层-->
					</li>
					
					
				</ul>
				<span class="clr"></span>
			</div>
		</div>
		<!-------------------------------------------------------------------- top nav end -------------------------------------------------------------------------------->
		
		<!-------------------------------------------------------------------- header start ------------------------------------------------------------------------------->
		<div class="w w1 header clearfix">
			<div id="logo">
				<a class="link1" href="./index.html">
					<img alt="京东商城" src="/home/img/logo-201305.png"/>
				</a>
				<a class="link2" href="#">
					<b></b>
					购物车
				</a>
			</div>
			
			<div class="cart-search">
				<div class="form">
					<input id="key" class="itxt" type="text" style="color:#999;"/>
					<input class="button" type="button" value="搜索"/>
				</div>
			</div>
		</div>
		<!-------------------------------------------------------------------- header  end -------------------------------------------------------------------------------->
		
		
		<!-------------------------------------------------------------------- container start ------------------------------------------------------------------------------->
		<div id="container" class="cart">
			<div class="w">
				<div class="nologin-tip">
					<span class="wicon"></span>
					您还没有登录！登录后购物车的商品将保存到您账号中
					<a class="btn-1 ml" href="./passport.html">立即登录</a>
				</div>
				
				<div class="cart-filter-bar">
					<ul class="switch-cart">
						<li class="switch-cart-item curr">
							<a href="#none">
								<em>全部商品</em>
								<span class="number">2</span>
							</a>
						</li>
					</ul>
					<div class="cart-store">
						<span class="label">配送至：</span>
						<div id="jdarea" class="ui-area-wrap">
							<div class="ui-area-text-wrap">
								<div class="ui-area-text" >北京朝阳区三环以内</div>
								<b></b>
							</div>
						</div>
					</div>
					<div class="clr"></div>
					<div class="w-line">
						<div class="floater" style="width:82px;"></div>
					</div>
				</div>
			</div>
			
			<div class="cart-warp">
				<div class="w">
					<div class="cart-main">
						<div class="cart-thead">
							<div class="column t-checkbox">
								<div class="cart-checkbox">
									<input id="toggle-checkboxed_up" class="jdcheckbox" type="checkbox" name="toggle-checkboxex" checked />
								
								</div>
								全选
							</div>
							<div class="column t-goods">商品</div>
							<div class="column t-props"></div>
							<div class="column t-price">单价(元)</div>
							<div class="column t-quantity">数量</div>
							<div class="column t-sum">小计(元)</div>
							<div class="column t-action">操作</div>
						</div>
						
						<div id="cart-list">
							<div id="cart-item-list-01" class="cart-item-list">
								<div id="vender_8888" class="cart-tbody">
									<div class="shop">
										<div class="cart-checkbox">
											<input class="jdcheckbox" type="checkbox" name="checkShop" checked />
										</div>
										<span class="shop-txt">
											<a id="venderId_8888" class="shop-name self-shop-name" href="#">京东自营</a>
										</span>
									</div>
									
									<div class="item-list">
										<div id="product_promo_183830361" class="item-give item-full">
											<div class="item-header">
												<div class="f-txt">
													<span>以下区域放购买的商品</span>
												</div>
												<div class="f-price">
													<strong>10000.00</strong>
												</div>
											</div>
											
											<div class="item-item item-selected" style="height:100px;">
											</div>
											
											<div class="item-last item-selected" style="height:100px;">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div id="cart-floatbar">
						<div class="ui-ceilinglamp-1" style="width:990px;height:52px;">
							<div class="cart-toolbar" style="width:988px;height:50px;">
								<div class="toolbar-wrap">
									<div class="options-box">
										<div class="select-all">
											<div class="cart-checkbox">
												<input id="toggle-checkboxed_down" class="jdcheckbox" type="checkbox" name="toggle-checkboxes"/>
											</div>
											全选
										</div>
										
										<div class="operation">
											<a class="remove-batch" href="#">删除选中的商品</a>
											<a class="follow-batch" href="#">移到我的关注</a>
										</div>
										
										<div class="clr"></div>
										
										<div class="toolbar-right">
											<div class="normal">
												<div class="comm-right">
													<div class="btn-area">
														<a class="submit-btn" href="#">
															去结算
															<b></b>
														</a>
													</div>
													
													<div class="price-sum">
														<span class="txt">总价（不含运费）：</span>
														<span class="price sumPrice"><em>￥100.00</em></span>
														<br/>
														<span class="txt">已节省：</span>
														<span class="price totalRePrice">-￥0.00</span>
													</div>
													
													<div class="amount-sum">
														已选择
														<em>2</em>
														件商品
														<b class="up"></b>
													</div>
													
													<div class="clr"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="w">
			</div>
			
			<div class="w">
			</div>
		</div>
		<!-------------------------------------------------------------------- container  end -------------------------------------------------------------------------------->
		
		<!---------------------------------------------------------------------- footer start ------------------------------------------------------------------------------>
		
		<div id="lazy-footer" class="lazy-fn lazy-fn-done">
		
		<!--=========================== service2014 start ===========================-->
			<div id="service-2014" >
				
			<!--*********************** service ************************-->
				<div class="w">
					<dl class="fore1">
						<dt>购物指南</dt>
							<dd>
								<div><a href="#">购物流程</a></div>
								<div><a href="#">会员介绍</a></div>
								<div><a href="#">生活旅行团购</a></div>
								<div><a href="#">常见问题</a></div>
								<div><a href="#">大家电</a></div>
								<div><a href="#">联系客服</a></div>
							</dd>
							
					</dl>	
					
					<dl class="fore2">
						<dt>配送方式</dt>
							<dd>
								<div><a href="#">上门自提</a></div>
								<div><a href="#">211限时达</a></div>
								<div><a href="#">配送服务查询</a></div>
								<div><a href="#">配送费收取标准</a></div>
								<div><a href="#">海外配送</a></div>
							</dd>
					</dl>
					
					<dl class="fore3">
						<dt>支付方式</dt>
							<dd>
								<div><a href="#">货到付款</a></div>
								<div><a href="#">在线支付</a></div>
								<div><a href="#">分期付款</a></div>
								<div><a href="#">邮局汇款</a></div>
								<div><a href="#">公司转账</a></div>
							</dd>
					</dl>
					<dl class="fore4">
						<dt>售后服务</dt>
							<dd>
								<div><a href="#">售后政策</a></div>
								<div><a href="#">价格保护</a></div>
								<div><a href="#">退款说明</a></div>
								<div><a href="#">返修/退换货</a></div>
								<div><a href="#">取消订单</a></div>
							</dd>
					</dl>
					<dl class="fore5">
						<dt>特色服务</dt>
							<dd>
								<div><a href="#">夺命岛</a></div>
								<div><a href="#">DIY装机</a></div>
								<div><a href="#">延保服务</a></div>
								<div><a href="#">京东E卡</a></div>
								<div><a href="#">京东通信</a></div>
							</dd>
					</dl>
					<span class="clr"></span>
				</div>
			</div>
		<!--=========================== service2014 end =============================-->
			
		<!--================================ w start ================================-->
			<div class="w">
				<div id="footer-2014">
				<!--************************* links start *****************************-->
					<div class="links">
						<a href="#">关于我们</a>|<a href="#">联系我们</a>|<a href="#">商家入驻</a>|<a href="#">营销中心</a>|<a href="#">手机京东</a>|<a href="#">友情链接</a>|<a href="#">销售联盟</a>|<a href="#">京东社区</a>|<a href="#">京东公益</a>|<a href="#">English Site</a>|<a href="#">Contact Us</a>
					</div>
				<!--************************* links end *****************************-->
					
				<!--************************* copyright start *****************************-->	
					<div class="copyright">
						北京市公安局朝阳分局备案编号110105014669  |  京ICP证070359号  |
						<a href="#" >互联网药品信息服务资格证编号(京)-经营性-2014-0008</a>
						 |  新出发京零 字第大120007号
						<br/>
						<a href="#" >音像制品经营许可证苏宿批005号</a>
						 |  出版物经营许可证编号新出发(苏)批字第N-012号  |  互联网出版许可证编号新出网证(京)字150号 
						<br/>
						<a href="#" >网络文化经营许可证京网文[2014]2148-348号</a>
						 违法和不良信息举报电话：4006561155  Copyright © 2004-2015  京东JD.com 版权所有
						<br/>
						京东旗下网站：
						<a href="#">360TOP&nbsp;</a>
						<a href="#">拍拍网&nbsp;</a>
						<a href="#">网银在线</a>
					</div>
					
				<!--************************* copyright end *******************************-->
				
				<!--*********************** authentication start ***************************-->
					<div class="authentication">
						<a href="#"><img class="err-product" src="/home/img/54b8871eNa9a7067e.png" /></a>
						<a href="#"><img class="err-product" src="/home/img/54b8872dNe37a9860.png" /></a>
						<a href="#"><img class="err-product" src="/home/img/54b8874bN694454a5.png" /></a>
						<a href="#"><img class="err-product" src="/home/img/54b8875fNad1e0c4c.png" /></a>
						<a href="#"><img class="err-product" src="/home/img/54b8863dN8d2c61ec.png" /></a>
					</div>
					
				<!--*********************** authentication end *****************************-->
				</div>
			</div>
		<!--================================ w end ==================================-->
		</div>
		
		<!--------------------------------------------------------------------------- footer  end -------------------------------------------------------------------------------->
		
		
	</body>
</html>














































