<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>春舞枝 - 服务声明</title>
		<meta name="keywords" content="春舞枝,">
		<meta name="description" content="春舞枝,">
		<meta property="qc:admins" content="23572640266531314636"><meta property="wb:webmaster" content="9d474898800c1e71"><style type="text/css">body{_behavior:url(http://www.531314.com/templates/new/css/csshover.htc);}</style>
		<link rel="shortcut icon" href="http://531314.com/favicon.ico">
		<link href="__ROOT__/Index/Common/css/base.css" rel="stylesheet" type="text/css">
		<link href="__ROOT__/Index/Common/css/home_header.css" rel="stylesheet" type="text/css">
		<link href="__ROOT__/Index/Common/css/home_login.css" rel="stylesheet" type="text/css">
		<link href="http://www.531314.com/resource/font/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<script src="//hm.baidu.com/hm.js?88de49926eae5852d298d5a5fbba3dda"></script><script>
		var COOKIE_PRE = '3E36_';var _CHARSET = 'utf-8';var SITEURL = 'http://www.531314.com';var SHOP_SITE_URL = 'http://www.531314.com';var RESOURCE_SITE_URL = 'http://res.531314.com';var RESOURCE_SITE_URL = 'http://res.531314.com';var SHOP_TEMPLATES_URL = 'http://www.531314.com/templates/new';
		</script>
		<script src="http://res.531314.com/js/jquery.js"></script>
		<script src="http://res.531314.com/js/common.js" charset="utf-8"></script>
		<script src="http://res.531314.com/js/jquery-ui/jquery.ui.js"></script>
		<script src="http://res.531314.com/js/jquery.validation.min.js"></script>
		<script src="http://res.531314.com/js/jquery.masonry.js"></script>
		<script src="http://res.531314.com/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script><link href="http://res.531314.com/js/dialog/dialog.css" rel="stylesheet" type="text/css">
		
		</head>
		<body>		
		<script type="text/javascript">
	var PRICE_FORMAT = '&yen;%s';
	$(function() {
		//首页左侧分类菜单
		$(".category ul.menu").find("li").each(
			function() {
				$(this).hover(
					function() {
						var cat_id = $(this).attr("cat_id");
						var menu = $(this).find("div[cat_menu_id='" + cat_id + "']");
						menu.show();
						$(this).addClass("hover");
						var menu_height = menu.height();
						if(menu_height < 60) menu.height(80);
						menu_height = menu.height();
						var li_top = $(this).position().top;
						$(menu).css("top", -li_top + 38);
					},
					function() {
						$(this).removeClass("hover");
						var cat_id = $(this).attr("cat_id");
						$(this).find("div[cat_menu_id='" + cat_id + "']").hide();
					}
				);
			}
		);
		$(".head-user-menu dl").hover(function() {
				$(this).addClass("hover");
			},
			function() {
				$(this).removeClass("hover");
			});
		$('.head-user-menu .my-mall').mouseover(function() { // 最近浏览的商品
			load_history_information();
			$(this).unbind('mouseover');
		});
		$('.head-user-menu .my-cart').mouseover(function() { // 运行加载购物车
			load_cart_information();
			$(this).unbind('mouseover');
		});
		$('#button').click(function() {
			if($('#keyword').val() == '') {
				return false;
			}
		});
	});

	$(function() {
		//search
		var act = "index";
		if(act == "store_list") {
			$("#search").children('ul').children('li:eq(1)').addClass("current");
			$("#search").children('ul').children('li:eq(0)').removeClass("current");
		}
		$("#search").children('ul').children('li').click(function() {
			$(this).parent().children('li').removeClass("current");
			$(this).addClass("current");
			$('#search_act').attr("value", $(this).attr("act"));
			$('#keyword').attr("placeholder", $(this).attr("title"));
		});
		$("#keyword").blur();

	});
</script>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<script type="text/javascript">
	//动画显示边条内容区域
	$(function() {
		ncToolbar();
		$(window).resize(function() {
			ncToolbar();
		});

		function ncToolbar() {
			if($(window).width() >= 1240) {
				$('#appBarTabs >.variation').hide();
			} else {
				$('#appBarTabs >.variation').hide();
			}
		}
		$('#appBarTabs').hover(
			function() {
				$('#appBarTabs >.variation').hide();
			},
			function() {
				ncToolbar();
			}
		);
		$("#compare").click(function() {
			if($("#content-compare").css('right') == '-210px') {
				loadCompare(false);
				$('#content-cart').animate({
					'right': '-210px'
				});
				$("#content-compare").animate({
					right: '35px'
				});
			} else {
				$(".close").click();
				$(".chat-list").css("display", 'none');
			}
		});
		$("#rtoolbar_cart").click(function() {
			if($("#content-cart").css('right') == '-210px') {
				$('#content-compare').animate({
					'right': '-210px'
				});
				$("#content-cart").animate({
					right: '35px'
				});
				if(!$("#rtoolbar_cartlist").html()) {
					$("#rtoolbar_cartlist").load('index.php?act=cart&op=ajax_load&type=html');
				}
			} else {
				$(".close").click();
				$(".chat-list").css("display", 'none');
			}
		});
		$(".close").click(function() {
			$(".content-box").animate({
				right: '-210px'
			});
		});

		$(".quick-menu dl").hover(function() {
				$(this).addClass("hover");
			},
			function() {
				$(this).removeClass("hover");
			});

		// 右侧bar用户信息
		$('div[nctype="a-barUserInfo"]').click(function() {
			$('div[nctype="barUserInfo"]').toggle();
		});
		// 右侧bar登录
		$('div[nctype="a-barLoginBox"]').click(function() {
			$('div[nctype="barLoginBox"]').toggle();
			document.getElementById('codeimage').src = '__APP__/Index?act=seccode&op=makecode&nchash=c93636e5&t=' + Math.random();
		});
		$('a[nctype="close-barLoginBox"]').click(function() {
			$('div[nctype="barLoginBox"]').toggle();
		});
	});
</script>
<div class="public-top-layout w">
	<div class="topbar wrapper">
		<div class="user-entry">
		<?php if(!empty($_SESSION['username'])): ?>您好&nbsp;<?php echo (session('username')); ?>，欢迎来到
			<a href="__APP__/Index" title="首页" alt="首页">春舞枝</a> <span>[<a href="__APP__/Index?act=login&op=logout">退出</a>]</span> 
		<?php else: ?>您好，欢迎来到
			<a href="__APP__/Index" title="首页" alt="首页">春舞枝</a> <span>[<a href="__APP__/Index?act=login&op=index">登录</a>]</span> <span>[<a href="__APP__/Index?act=login&op=register">注册</a>]</span><?php endif; ?>
		</div>
		<div class="quick-menu">

			<dl>
				<dt><a href="__APP__/Index?act=seller_login&op=show_login" target="_blank" title="商户中心">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></dt>

			</dl>
			<dl>
				<dt><a href="__APP__/Index?act=member_order">我的订单</a><i></i></dt>
				<dd>
					<ul>
						<li>
							<a href="__APP__/Index?act=member_order&state_type=state_new">待付款订单</a>
						</li>
						<li>
							<a href="__APP__/Index?act=member_order&state_type=state_send">待确认收货</a>
						</li>
						<li>
							<a href="__APP__/Index?act=member_order&state_type=state_noeval">待评价交易</a>
						</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt><a href="__APP__/Index?act=member_favorites&op=fglist">我的收藏</a><i></i></dt>
				<dd>
					<ul>
						<li>
							<a href="__APP__/Index?act=member_favorites&op=fglist">商品收藏</a>
						</li>
						<li>
							<a href="__APP__/Index?act=member_favorites&op=fslist">店铺收藏</a>
						</li>
					</ul>
				</dd>
			</dl>
			<dl>
				<dt>客户服务<i></i></dt>
				<dd>
					<ul>
						<li>
							<a href="http://www.531314.com/article_cate-2.html">帮助中心</a>
						</li>
						<li>
							<a href="http://www.531314.com/article_cate-5.html">售后服务</a>
						</li>
						<li>
							<a href="http://www.531314.com/article_cate-6.html">客服中心</a>
						</li>
					</ul>
				</dd>
			</dl>
			<dl class="weixin">
				<dt>关注我们<i></i></dt>
				<dd>
					<h4>扫描二维码<br/>
关注商城微信号</h4>
					<img src="http://img.531314.com/shop/common/05003950598347095.jpg"> </dd>
			</dl>
		</div>
	</div>
</div>

<div class="header-wrap">
	<header class="public-head-layout wrapper">
		<h1 class="site-logo"><a href="__APP__/Index"><img src="http://img.531314.com/shop/common/04993648993753192.png" class="pngFix"></a></h1>
		<div id="search" class="head-search-bar">

			<ul class="tab">
				<li title="请输入您要搜索的商品关键字" act="search" class="current">商品</li>
				<li title="请输入您要搜索的店铺关键字" act="store_list">店铺</li>
			</ul>
			<form class="search-form" method="get" action="http://www.531314.com">
				<input type="hidden" value="search" id="search_act" name="act">
				<input placeholder="请输入您要搜索的商品关键字" name="keyword" id="keyword" type="text" class="input-text" value="" maxlength="60" x-webkit-speech lang="zh-CN" onwebkitspeechchange="foo()" x-webkit-grammar="builtin:search" />
				<input type="submit" id="button" value="搜索" class="input-submit">
			</form>

			<div class="keyword">热门搜索：
				<ul>
					<li>
						<a href="__APP__/Index?act=search&op=index&keyword=%E7%99%BD%E8%89%B2%E6%83%85%E4%BA%BA%E8%8A%82">白色情人节</a>
					</li>
					<li>
						<a href="__APP__/Index?act=search&op=index&keyword=%E6%AF%8D%E4%BA%B2%E8%8A%82">母亲节</a>
					</li>
					<li>
						<a href="__APP__/Index?act=search&op=index&keyword=%E7%8E%AB%E7%91%B0">玫瑰</a>
					</li>
					<li>
						<a href="__APP__/Index?act=search&op=index&keyword=%E5%BA%B7%E4%B9%83%E9%A6%A8">康乃馨</a>
					</li>
					<li>
						<a href="__APP__/Index?act=search&op=index&keyword=%E7%94%9F%E6%97%A5%E7%A4%BC%E7%89%A9">生日礼物</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="head-user-menu">
			<dl class="my-mall">
				<dt><span class="ico"></span>我的商城<i class="arrow"></i></dt>
				<dd>
					<div class="sub-title">
						<h4>
</h4>
						<a href="__APP__/Index?act=member&op=home" class="arrow">我的用户中心<i></i></a>
					</div>
					<div class="user-centent-menu">
						<ul>
							<li>
								<a href="__APP__/Index?act=member_message&op=message">站内消息(<span>0</span>)</a>
							</li>
							<li>
								<a href="__APP__/Index?act=member_order" class="arrow">我的订单<i></i></a>
							</li>
							<li>
								<a href="__APP__/Index?act=member_consult&op=my_consult">咨询回复(<span id="member_consult">0</span>)</a>
							</li>
							<li>
								<a href="__APP__/Index?act=member_favorites&op=fglist" class="arrow">我的收藏<i></i></a>
							</li>
							<li>
								<a href="__APP__/Index?act=member_voucher">代金券(<span id="member_voucher">0</span>)</a>
							</li>
							<li>
								<a href="__APP__/Index?act=member_points" class="arrow">我的积分<i></i></a>
							</li>
						</ul>
					</div>
					<div class="browse-history">
						<div class="part-title">
							<h4>最近浏览的商品</h4>
							<span style="float:right;"><a href="__APP__/Index?act=member_goodsbrowse&op=list">全部浏览历史</a></span>
						</div>
						<ul>
							<li class="no-goods"><img class="loading" src="__ROOT__/Index/Common/images/loading.gif" /></li>
						</ul>
					</div>
				</dd>
			</dl>
			<dl class="my-cart">
				<dt><span class="ico"></span>购物车结算<i class="arrow"></i></dt>
				<dd>
					<div class="sub-title">
						<h4>最新加入的商品</h4>
					</div>
					<div class="incart-goods-box">
						<div class="incart-goods"> <img class="loading" src="__ROOT__/Index/Common/images/loading.gif" /> </div>
					</div>
					<div class="checkout"> <span class="total-price">共<i>0</i>种商品</span>
						<a href="__APP__/Index?act=cart" class="btn-cart">结算购物车中的商品</a>
					</div>
				</dd>
			</dl>
		</div>
	</header>
</div>
<nav class="public-nav-layout">
	<div class="wrapper">
		<div class="all-category">
			<div class="title"> <i></i>
				<h3>所有商品分类</h3>
			</div>
			<div class="category">
				<ul class="menu">
					<li>
						<div class="class">
							<h4>主花材</h4>
							<span class="arrow"></span>
						</div>
					</li>
					<li class="class-items">
						<dl>
							<dd>
								<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=27&keyword=%E7%8E%AB%E7%91%B0">玫瑰</a></h5></dd>
							<dd>
								<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=28&keyword=%E7%99%BE%E5%90%88">百合</a></h5></dd>
							<dd>
								<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=29&keyword=%E5%BA%B7%E4%B9%83%E9%A6%A8">康乃馨</a></h5></dd>
							<dd>
								<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=30&keyword=%E5%85%B6%E5%AE%83">其它</a></h5></dd>
							<dd>
								<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=85&keyword=%E6%B4%8B%E7%89%A1%E4%B8%B9">洋牡丹</a></h5></dd>
						</dl>
						<li>
							<li>
								<div class="class">
									<h4>节日</h4>
									<span class="arrow"></span>
								</div>
							</li>
							<li class="class-items">
								<dl>
									<dd>
										<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=32&keyword=%E6%83%85%E4%BA%BA%E8%8A%82">情人节</a></h5></dd>
									<dd>
										<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=33&keyword=%E6%AF%8D%E4%BA%B2%E8%8A%82">母亲节</a></h5></dd>
									<dd>
										<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=34&keyword=%E7%88%B6%E4%BA%B2%E8%8A%82">父亲节</a></h5></dd>
									<dd>
										<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=35&keyword=%E5%9C%A3%E8%AF%9E%E8%8A%82">圣诞节</a></h5></dd>
								</dl>
								<li>
									<li>
										<div class="class">
											<h4>枝数</h4>
											<span class="arrow"></span>
										</div>
									</li>
									<li class="class-items">
										<dl>
											<dd>
												<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=37&keyword=9">9</a></h5></dd>
											<dd>
												<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=38&keyword=11">11</a></h5></dd>
											<dd>
												<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=39&keyword=19">19</a></h5></dd>
											<dd>
												<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=40&keyword=36">36</a></h5></dd>
											<dd>
												<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=41&keyword=99">99</a></h5></dd>
										</dl>
										<li>
											<li>
												<div class="class">
													<h4>送花对象</h4>
													<span class="arrow"></span>
												</div>
											</li>
											<li class="class-items">
												<dl>
													<dd>
														<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=51&keyword=%E7%88%B1%E4%BA%BA">爱人</a></h5></dd>
													<dd>
														<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=52&keyword=%E6%81%8B%E4%BA%BA">恋人</a></h5></dd>
													<dd>
														<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=53&keyword=%E5%8D%95%E8%BA%AB">单身</a></h5></dd>
													<dd>
														<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=54&keyword=%E8%80%81%E5%B8%88">老师</a></h5></dd>
													<dd>
														<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=55&keyword=%E6%9C%8B%E5%8F%8B">朋友</a></h5></dd>
													<dd>
														<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=56&keyword=%E9%95%BF%E8%BE%88">长辈</a></h5></dd>
													<dd>
														<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=57&keyword=%E6%8E%A2%E6%9C%9B">探望</a></h5></dd>
													<dd>
														<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=58&keyword=%E5%AE%A2%E6%88%B7">客户</a></h5></dd>
												</dl>
												<li>
													<li>
														<div class="class">
															<h4>鲜花生活馆</h4>
															<span class="arrow"></span>
														</div>
													</li>
													<li class="class-items">
														<dl>
															<dd>
																<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=60&keyword=%E5%AE%B6%E5%BA%AD%E5%A5%97%E9%A4%90">家庭套餐</a></h5></dd>
															<dd>
																<h5><a style="margin-left:15px;" href="__APP__/Index?act=search&op=index&stc_id=61&keyword=%E6%9C%88%E5%BA%A6%E5%A5%97%E9%A4%90">月度套餐</a></h5></dd>
														</dl>
														<li>
				</ul>
			</div>
		</div>
		<ul class="site-menu">
			<li>
				<a href="__APP__/Index/index" class="current">首页</a>
			</li>

			<li>
				<a href="__APP__/Cate/cate_1074">鲜花速递</a>
			</li>
			<li>
				<a href="__APP__/Cate/cate_1075">鲜花礼盒</a>
			</li>
			
		</ul>
	</div>
</nav>
<!--<div class="nch-breadcrumb-layout">
</div>-->

<!--<style type="text/css">
	.category {
		display: block!important;
	}
</style>-->
<!--<div class="clear"></div>-->

		<div class="nch-breadcrumb-layout">
		<div class="nch-breadcrumb wrapper"><i class="icon-home"></i>
		<span><a href="__APP__/Index/index">首页</a></span><span class="arrow">&gt;</span>
		<span><a href="http://www.531314.com/article_cate-2.html">帮助中心</a></span><span class="arrow">&gt;</span>
		<span>文章内容</span>
		</div>
		</div>
		<link href="__ROOT__/Index/Common/css/layout.css" rel="stylesheet" type="text/css">
		<div class="nch-container wrapper">
		<div class="left">
	<div class="nch-module nch-module-style01">
		<div class="title">
			<h3>文章分类</h3>
		</div>
		<div class="content">
			<div class="nch-sidebar-article-class">
				<ul>
					<li>
						<a href="http://www.531314.com/article_cate-14.html">鲜花学院</a>
					</li>
					<li>
						<a href="http://www.531314.com/article_cate-8.html">绿植馆</a>
					</li>
					<li>
						<a href="http://www.531314.com/article_cate-1.html">商城公告</a>
					</li>
					<li>
						<a href="http://www.531314.com/article_cate-2.html">帮助中心</a>
					</li>
					<li>
						<a href="http://www.531314.com/article_cate-3.html">店主之家</a>
					</li>
					<li>
						<a href="http://www.531314.com/article_cate-4.html">支付方式</a>
					</li>
					<li>
						<a href="http://www.531314.com/article_cate-5.html">售后服务</a>
					</li>
					<li>
						<a href="http://www.531314.com/article_cate-6.html">客服中心</a>
					</li>
					<li>
						<a href="http://www.531314.com/article_cate-7.html">关于我们</a>
					</li>
					<li>
						<a href="http://www.531314.com/article_cate-20.html">配送服务</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="nch-module nch-module-style03">
		<div class="title">
			<h3>最新文章</h3>
		</div>
		<div class="content">
			<ul class="nch-sidebar-article-list">
				<li><i></i>
					<a href="http://www.531314.com/article-6.html">购物流程</a>
				</li>
				<li><i></i>
					<a href="http://www.531314.com/article-8.html">服务声明</a>
				</li>
				<li><i></i>
					<a href="http://www.531314.com/article-9.html">集团采购</a>
				</li>
			</ul>
		</div>
	</div>
</div>

		<div class="right">
		<div class="nch-article-con">
		<h1>服务声明</h1>
		<h2>2014-01-16 17:31</h2>
		<div class="default">
		<p></p><p>
		<strong><span style="font-size:13px;font-family:'微软雅黑','sans-serif';">关于订购：</span></strong>
		</p>
		<p style="text-indent:17px;">
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">　欢迎您的惠
		顾，我们的工作时间是：夏秋季：8：00-22：30；春冬季：8：00-22：00，您可以24小时在线提交订单，下单时请备注具体配送日期，未备注则
		默认16：00以前支付成功的订单当天配送，16：00以后支付成功的订单第二日安排配送。配送时段为：9：00-20：30。</span>
		</p>
		<p>
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">　　请您认真详
		细填写订购表单，我们将按照您提交的订单信息提供服务，如果所填信息有误或者不详细，可能会延误订单的配送。若因以下情况造成订单延迟或无法配送，我们将
		不承担责任：提供错误的订货人联系方式或不提供联系方式；提供错误或者不详细的收货人地址；提供错误的收货人联系方式或者没有提供收货人联系方式。</span>
		</p>
		<p>
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">　　如果您在填
		写订单时：所要送达的地址不在我们的配送范围之内，或者远远超出了市区，可能需要加收配送费或无法送达，请您与我们的客服人员沟通确认。如果我们无法通过
		您所留联系方式及时联系到您，超出配送时间的，我们一律将按撤单处理，您所付的货款，我们在与您取得联系后，根据您指定的方式退回。</span>
		</p>
		<p>
		<strong><span style="font-size:13px;font-family:'微软雅黑','sans-serif';">关于配送：</span></strong>
		</p>
		<p style="text-indent:17px;">
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">　原则上，我们
		只承诺配送时间段（例如：2013年5月15日上午或下午的时间段），不予承诺具体时间（例如：2013年5月15日上午10：00）这样的时间送达。但
		如果您确有特殊要求，可在“特殊要求”栏内注明，我们将尽力按照您要求的时间完成。如果您想确定能否按您的时间送达，请联系客服人员确认。</span>
		</p>
		<p style="text-indent:17px;">
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">　国内城市市区免费配送，郊区、偏远地区、郊县、乡镇需加收人工配送费，详情请咨询在线客服后再下单。</span>
		</p>
		<p style="text-indent:17px;">
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';background:white;">　
		情人节(2月12日-15日)、三八女生节（3月6日-9日）、网络情人节（5月19日-21日），母亲节(5月第二个周日含前后各1天)、七夕情人节(农历7月初五-七月初八)，教师节
		(9月10日)、圣诞节(12月24日-26日)、春节(农历28-初6).节日期间由于送货量大、线路、交通状况等原因，我们只承诺当天送达，不承诺具体
		送达时段，请谅解！</span>
		</p>
		<p style="text-indent:17px;">
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">　订单配送完成后，将有客服人员对收花人进行回访，询问鲜花是否收到及满意情况，有任何问题请致电400-053-1314查询。</span>
		</p>
		<p>
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">　　如果您对产品和服务不满意，您有权拒收或要求换货，请在4小时内拍照举证，并通过在线客服或拨打4000531314电话投诉，我们在工作时间内，会立即为您处理。</span>
		</p>
		<p>
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">&nbsp;&nbsp;&nbsp; </span><span style="font-size:13px;font-family:'微软雅黑','sans-serif';">　
		由于下列原因，造成订单延误或无法完成配送的，我们将一律不承担责任：（1）在送货时间三小时之内，我们仍无法联系上订货人，造成延误的；（2）收货人所
		在地址变更，未及时通知我方的；（3）配送工作人员无法联系上收货人的；（4）收货人非我方原因拒收货品的；（5）不可抗力，如自然灾害，交通管制等。</span>
		</p>
		<p>
		<strong><span style="font-size:13px;font-family:'微软雅黑','sans-serif';">关于鲜花：</span></strong>
		</p>
		<p>
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">&nbsp;&nbsp;&nbsp; </span><span style="font-size:13px;font-family:'微软雅黑','sans-serif';">　我们可以保证送到您手中时鲜花是新鲜的，请收货人在收到后务必立刻进行保鲜处理，以免影响货品的品质。</span>
		</p>
		<p>
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">&nbsp;&nbsp;&nbsp; </span><span style="font-size:13px;font-family:'微软雅黑','sans-serif';">　由于鲜花的季节性和供货渠道变化性较强，可能您选择的某种花材无法供应，对于非主要花材，我们在尽量不影响您所选的鲜花效果的情况下，按照寓意相同、类似花材、价值相同替代原则代替，对于主要花材，我们将在征求您的意见后进行处理，恳请您谅解；</span>
		</p>
		<p>
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">&nbsp;&nbsp;&nbsp; </span><span style="font-size:13px;font-family:'微软雅黑','sans-serif';">　由于鲜花的保鲜时间短，如果因为非我方原因造成配送延误，致使鲜花保鲜期已过，订单视为送达。&nbsp;</span>
		</p>
		<p>
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">&nbsp;</span>
		</p>
		<p>
		<strong><span style="font-size:13px;font-family:'微软雅黑','sans-serif';">“国际鲜花”注意事项：</span></strong>
		</p>
		<p>
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">请务必事先致电400-053-1314咨询地区及指定日期是否可以送达。</span>
		</p>
		<p>
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">订购：</span>
		</p>
		<p>
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">1.</span><span style="font-size:13px;font-family:'微软雅黑','sans-serif';">对于配送至国外的订单，请提前3～4个工作日下单，如遇母亲节、圣诞节、复活节、情人节等重要节日，需至少提前4个工作日订购。</span>
		</p>
		<p>
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">2.</span><span style="font-size:13px;font-family:'微软雅黑','sans-serif';">由于各国语言均存在差异，故收花人信息，包括姓名、地址和贺卡留言等请务必用英文或相应的语言详细填写。</span>
		</p>
		<p>
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">配送：</span>
		</p>
		<p>
		<strong><span style="font-size:13px;font-family:'微软雅黑','sans-serif';font-weight:normal;">1.</span></strong><strong><span style="font-size:13px;font-family:'微软雅黑','sans-serif';font-weight:normal;">国际鲜花配送范围：港澳台及海外主要城市。</span></strong>
		</p>
		<p>
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">2.</span><span style="font-size:13px;font-family:'微软雅黑','sans-serif';">国外送花时间一般为当地时间上午9:00至下午17:00，故只能保证当天送达，无法保证具体的送达时间。</span>
		</p>
		<p>
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">3.</span><span style="font-size:13px;font-family:'微软雅黑','sans-serif';">对于配送至国外的订单，在各国法定节假日期间一律停止送花服务，如遇周末或法定节假日，订单将提前或顺延到工作日配送。</span>
		</p>
		<p>
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">4.</span><span style="font-size:13px;font-family:'微软雅黑','sans-serif';">由于世界各地存在的时差问题，请在下订单的同时充分考虑时差因素，如因时差问题导致订单无法送达，我们将提前或顺延一个工作日进行配送。</span>
		</p>
		<p>
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">5.</span><span style="font-size:13px;font-family:'微软雅黑','sans-serif';">替换原则：考虑到各地域、习俗和季节性原因，为避免订单延误，有些花材将由当地插花师视具体情况按寓意相同、类似花材、价值等同的原则进行替换而不再事先通知订花人，故最终送达产品的颜色和花材可能会有所差异。</span>
		</p>
		<p>
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">6.</span><span style="font-size:13px;font-family:'微软雅黑','sans-serif';">回复原则：由于时差及地域跨度问题，国际送花签收情况一般在送达日期后的2～3个工作日回复。</span>
		</p>
		<p>
		<span style="font-size:13px;font-family:'微软雅黑','sans-serif';">7.</span><span style="font-size:13px;font-family:'微软雅黑','sans-serif';">对于配送至国外的订单，我们暂时不提供至机场、码头等类似地方接人的定时鲜花礼仪服务，敬请谅解。</span>
		</p><p></p>
		</div>
		<div class="more_article"> <span class="fl">上一篇：
		<a href="__APP__/Article/article-6">购物流程</a> <time>2014-01-16 17:31</time>
		</span> <span class="fr">下一篇：
		<a href="__APP__/Article/article-9">集团采购</a> <time>2014-01-16 17:31</time>
		</span> </div>
		</div>
		</div>
		</div>
		<div class="wrapper">
	<div class="mt10"></div>
</div>

<div class="clear"></div>
<div class="footer-line"></div>

<div id="faq">
	<div class="faq-wrapper">
		<ul>
			<li>
				<dl class="s1">
					<dt>
帮助中心 </dt>
					<dd><i></i>
						<a href="__APP__/Article?article=9" title="集团采购"> 集团采购 </a>
					</dd>
					<dd><i></i>
						<a href="__APP__/Article?article=8" title="服务声明"> 服务声明 </a>
					</dd>
					<dd><i></i>
						<a href="__APP__/Article?article=6" title="购物流程"> 购物流程 </a>
					</dd>
				</dl>
			</li>
			<li>
				<dl class="s2">
					<dt>
店主之家 </dt>
					<dd><i></i>
						<a href="http://www.531314.com/article-13.html" title="如何发货"> 如何发货 </a>
					</dd>
					<dd><i></i>
						<a href="http://www.531314.com/article-12.html" title="查看售出商品"> 查看售出商品 </a>
					</dd>
					<dd><i></i>
						<a href="http://www.531314.com/article-14.html" title="商城商品推荐"> 商城商品推荐 </a>
					</dd>
					<dd><i></i>
						<a href="http://www.531314.com/article-11.html" title="如何管理店铺"> 如何管理店铺 </a>
					</dd>
				</dl>
			</li>
			<li>
				<dl class="s3">
					<dt>
支付方式 </dt>
					<dd><i></i>
						<a href="http://www.531314.com/article-30.html" title="公司转账"> 公司转账 </a>
					</dd>
					<dd><i></i>
						<a href="http://www.531314.com/article-16.html" title="付款方式"> 付款方式 </a>
					</dd>
					<dd><i></i>
						<a href="http://www.531314.com/article-29.html" title="货到付款"> 货到付款 </a>
					</dd>
					<dd><i></i>
						<a href="http://www.531314.com/article-17.html" title="付款问题"> 付款问题 </a>
					</dd>
				</dl>
			</li>
			<li>
				<dl class="s4">
					<dt>
售后服务 </dt>
					<dd><i></i>
						<a href="http://www.531314.com/article-32.html" title="退换货流程"> 退换货流程 </a>
					</dd>
					<dd><i></i>
						<a href="http://www.531314.com/article-26.html" title="投诉说明"> 投诉说明 </a>
					</dd>
				</dl>
			</li>
			<li>
				<dl class="s5">
					<dt>
客服中心 </dt>
					<dd><i></i>
						<a href="http://www.531314.com/article-18.html" title="会员修改密码"> 会员修改密码 </a>
					</dd>
					<dd><i></i>
						<a href="http://www.531314.com/article-20.html" title="商品发布"> 商品发布 </a>
					</dd>
					<dd><i></i>
						<a href="http://www.531314.com/article-19.html" title="会员修改个人资料"> 会员修改个人资料 </a>
					</dd>
					<dd><i></i>
						<a href="http://www.531314.com/article-21.html" title="修改收货地址"> 修改收货地址 </a>
					</dd>
				</dl>
			</li>
			<li>
				<dl class="s6">
					<dt>
关于我们 </dt>
					<dd><i></i>
						<a href="http://www.531314.com/article-23.html" title="联系我们"> 联系我们 </a>
					</dd>
					<dd><i></i>
						<a href="http://www.531314.com/article-25.html" title="合作及洽谈"> 合作及洽谈 </a>
					</dd>
					<dd><i></i>
						<a href="http://www.531314.com/article-22.html" title="关于我们"> 关于我们 </a>
					</dd>
					<dd><i></i>
						<a href="http://www.531314.com/article-24.html" title="招聘英才"> 招聘英才 </a>
					</dd>
				</dl>
			</li>
		</ul>
		<div class="help">
			<div class="w1190 clearfix">
				<div class="contact f-l">
					<div class="contact-border clearfix">
						<span class="ic tel t20">4000531314</span>
						<span>备用号码：0598-5253803</span>
						<span class="ic mail">it@531314.com</span>
						<div class="attention cleafix">
							<div class="weixin f-l">
								<img src="http://img.531314.com/shop/common/05003950598347095.jpg" class="f-l jImg img-error">
								<p class="f-l">
									<span>扫一扫</span>
									<span>关注我们</span>
								</p>
							</div>
							<div class="weibo f-l">
								<div class="ic qq" style="padding-left: 0px;">
									<ul>
										<li>
											<a target="_blank">腾讯微博</a>
										</li>
									</ul>
								</div>
								<div class="ic sina" style="padding-left: 0px;">
									<ul>
										<li>
											<a target="_blank">新浪微博</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="footer" class="wrapper">
	<p>
		<a href="http://www.531314.com">首页</a>
		|
		<a href="/shop/index.php?act=article&amp;article_id=24">招聘英才</a>
		|
		<a href="/shop/index.php?act=article&amp;article_id=25">合作及洽谈</a>
		|
		<a href="/shop/index.php?act=article&amp;article_id=23">联系我们</a>
		|
		<a href="/shop/index.php?act=article&amp;article_id=22">关于我们</a>
		|
		<a href="/shop/index.php?act=link">友情链接</a>
	</p>
	Copyright 2015</a> 闽ICP备12008006号-1<br/>
	
	<script>
		var _hmt = _hmt || [];
		(function() {
			var hm = document.createElement("script");
			hm.src = "//hm.baidu.com/hm.js?88de49926eae5852d298d5a5fbba3dda";
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(hm, s);
		})();
	</script>
	
	<script type="text/javascript">
		var _py = _py || [];
		_py.push(['a', 'Qws..wq6b3kLKcogvLsNjmWhqcX']);
		_py.push(['domain', 'stats.ipinyou.com']);
		_py.push(['e', '']); -
		function(d) {
			var s = d.createElement('script'),
				e = d.body.getElementsByTagName('script')[0];
			e.parentNode.insertBefore(s, e),
				f = 'https:' == location.protocol;
			s.src = (f ? 'https' : 'http') + '://' + (f ? 'fm.ipinyou.com' : 'fm.p0y.cn') + '/j/adv.js';
		}(document);
	</script>
	<noscript><img src="//stats.ipinyou.com/adv.gif?a=Qws..wq6b3kLKcogvLsNjmWhqcX&e=" style="display:none;"/></noscript> 
</div>		
		<script type="text/javascript" src="http://res.531314.com/js/jquery.cookie.js"></script>
		<link href="http://res.531314.com/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="http://res.531314.com/js/perfect-scrollbar.min.js"></script>
		<script type="text/javascript" src="http://res.531314.com/js/qtip/jquery.qtip.min.js"></script>
		<link href="http://res.531314.com/js/qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css">
		 
		<script src="http://www.531314.com/resource/js/compare.js"></script>
		<script type="text/javascript">
		$(function(){
			// Membership card
			$('[nctype="mcard"]').membershipCard({type:'shop'});
		});
		</script>
		
		
		<div id="cli_dialog_div"></div>		
	</body>
</html>