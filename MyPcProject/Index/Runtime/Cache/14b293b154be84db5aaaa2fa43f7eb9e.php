<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>春舞枝 - 鲜花束</title>
		<meta name="keywords" content="春舞枝" />
		<meta name="description" content="春舞枝" />
		<meta property="qc:admins" content="23572640266531314636" />
		<meta property="wb:webmaster" content="9d474898800c1e71" />
		<style type="text/css">
			body {
				_behavior: url(http://www.531314.com/templates/new/css/csshover.htc);
			}
		</style>
		<link rel="shortcut icon" href="http://531314.com/favicon.ico" />
		<link href="__ROOT__/Index/Common/css/base.css" rel="stylesheet" type="text/css">
		<link href="__ROOT__/Index/Common/css/home_header.css" rel="stylesheet" type="text/css">
		<link href="__ROOT__/Index/Common/css/home_login.css" rel="stylesheet" type="text/css">
		<link href="http://www.531314.com/resource/font/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
		
		<script>
			var COOKIE_PRE = '3E36_';
			var _CHARSET = 'utf-8';
			var SITEURL = 'http://www.531314.com';
			var SHOP_SITE_URL = 'http://www.531314.com';
			var RESOURCE_SITE_URL = 'http://res.531314.com';
			var RESOURCE_SITE_URL = 'http://res.531314.com';
			var SHOP_TEMPLATES_URL = 'http://www.531314.com/templates/new';
		</script>
		<script src="http://res.531314.com/js/jquery.js"></script>
		<script src="http://res.531314.com/js/common.js" charset="utf-8"></script>
		<script src="http://res.531314.com/js/jquery-ui/jquery.ui.js"></script>
		<script src="http://res.531314.com/js/jquery.validation.min.js"></script>
		<script src="http://res.531314.com/js/jquery.masonry.js"></script>
		<script src="http://res.531314.com/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>
		
	</head>

	<body>
		<script type="text/javascript" src="http://res.531314.com/js/jquery.cookie.js"></script>
		<link href="http://res.531314.com/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="http://res.531314.com/js/perfect-scrollbar.min.js"></script>
		<script type="text/javascript" src="http://res.531314.com/js/qtip/jquery.qtip.min.js"></script>
		<link href="http://res.531314.com/js/qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css">

		<script src="http://www.531314.com/resource/js/compare.js"></script>
		<script type="text/javascript">
			$(function() {
				// Membership card
				$('[nctype="mcard"]').membershipCard({
					type: 'shop'
				});
			});
		</script>
		<script src="http://www.531314.com/resource/js/search_goods.js"></script>
		<link href="__ROOT__/Index/Common/css/layout.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			body {
				_behavior: url(http://www.531314.com/templates/new/css/csshover.htc);
			}
		</style>
		
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
			您好，欢迎来到
			<a href="__APP__/Index" title="首页" alt="首页">春舞枝</a> <span>[<a href="__APP__/Index?act=login&op=index">登录</a>]</span> <span>[<a href="__APP__/Index?act=login&op=register">注册</a>]</span>

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
				<span><a href="http://www.531314.com">首页</a></span><span class="arrow">></span>
				<span><a href="http://www.531314.com/cate-1072-0-0-0-0-0-0-0-0.html">所有分类</a></span><span class="arrow">></span>
				<span><a href="http://www.531314.com/cate-1073-0-0-0-0-0-0-0-0.html">鲜花速递</a></span><span class="arrow">></span>
				<span>鲜花束</span>
			</div>
		</div>
		
		<div class="nch-container wrapper">
			<div class="left">
				<div class="nch-module nch-module-style02">
					<div class="title">
						<h3>分类筛选</h3>
					</div>
					<div class="content">
						<ul id="files" class="tree">
							<li><i class="tree-parent tree-parent-collapsed"></i>
								<a href="http://www.531314.com/cate-1072-0-0-0-0-0-0-0-0.html">所有分类</a>
								<ul>
									<li><i class="tree-parent tree-parent-collapsed"></i>
										<a href="http://www.531314.com/cate-1073-0-0-0-0-0-0-0-0.html">鲜花速递</a>
										<ul>
											<li class="tree-parent tree-parent-collapsed"><i></i>
												<a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-0-0.html" class="selected">鲜花束</a>
											</li>
											<li class="tree-parent tree-parent-collapsed"><i></i>
												<a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-0-0.html">盒装鲜花</a>
											</li>
											<li class="tree-parent tree-parent-collapsed"><i></i>
												<a href="http://www.531314.com/cate-1076-0-0-0-0-0-0-0-0.html">家庭插花</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>

				<div nctype="booth_goods" class="nch-module" style="display:none;"> </div>

				<div class="nch-module"></div>

				<div class="nch-module nch-module-style03">
					<div class="title">
						<h3>最近浏览</h3>
					</div>
					<div class="content">
						<div class="nch-sidebar-viewed" id="nchSidebarViewed">
							<ul>
							</ul>
						</div>
						<a href="http://www.531314.com/index.php?act=member_goodsbrowse&op=list" class="nch-sidebar-all-viewed">全部浏览历史</a>
					</div>
				</div>
			</div>
			<div class="right">
				<div class="nch-module">
					<div class="class-content">
						<div class="goodsType">
							<div class="goodsType_row">
								<div class="goodsClass">主花材：</div>
								<div class="goodsLable">
									<input type="hidden" id="search_div_class_26" data-acid="26" data-pre="0">
									<div class="goodsLables" id="search_div_class_27" data-acid="27" data-pre="26">
										<a href="javascript:send_class_searh_url(26,27);">玫瑰</a>
										<a class="span-a" href="javascript:deleteItem(26,27);"><span id="delte-span-27">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_28" data-acid="28" data-pre="26">
										<a href="javascript:send_class_searh_url(26,28);">百合</a>
										<a class="span-a" href="javascript:deleteItem(26,28);"><span id="delte-span-28">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_29" data-acid="29" data-pre="26">
										<a href="javascript:send_class_searh_url(26,29);">康乃馨</a>
										<a class="span-a" href="javascript:deleteItem(26,29);"><span id="delte-span-29">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_30" data-acid="30" data-pre="26">
										<a href="javascript:send_class_searh_url(26,30);">其它</a>
										<a class="span-a" href="javascript:deleteItem(26,30);"><span id="delte-span-30">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_85" data-acid="85" data-pre="26">
										<a href="javascript:send_class_searh_url(26,85);">洋牡丹</a>
										<a class="span-a" href="javascript:deleteItem(26,85);"><span id="delte-span-85">×</span></a>
									</div>
								</div>
							</div>
							<div class="goodsType_row">
								<div class="goodsClass">节日：</div>
								<div class="goodsLable">
									<input type="hidden" id="search_div_class_31" data-acid="31" data-pre="0">
									<div class="goodsLables" id="search_div_class_32" data-acid="32" data-pre="31">
										<a href="javascript:send_class_searh_url(31,32);">情人节</a>
										<a class="span-a" href="javascript:deleteItem(31,32);"><span id="delte-span-32">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_33" data-acid="33" data-pre="31">
										<a href="javascript:send_class_searh_url(31,33);">母亲节</a>
										<a class="span-a" href="javascript:deleteItem(31,33);"><span id="delte-span-33">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_34" data-acid="34" data-pre="31">
										<a href="javascript:send_class_searh_url(31,34);">父亲节</a>
										<a class="span-a" href="javascript:deleteItem(31,34);"><span id="delte-span-34">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_35" data-acid="35" data-pre="31">
										<a href="javascript:send_class_searh_url(31,35);">圣诞节</a>
										<a class="span-a" href="javascript:deleteItem(31,35);"><span id="delte-span-35">×</span></a>
									</div>
								</div>
							</div>
							<div class="goodsType_row">
								<div class="goodsClass">枝数：</div>
								<div class="goodsLable">
									<input type="hidden" id="search_div_class_36" data-acid="36" data-pre="0">
									<div class="goodsLables" id="search_div_class_37" data-acid="37" data-pre="36">
										<a href="javascript:send_class_searh_url(36,37);">9</a>
										<a class="span-a" href="javascript:deleteItem(36,37);"><span id="delte-span-37">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_38" data-acid="38" data-pre="36">
										<a href="javascript:send_class_searh_url(36,38);">11</a>
										<a class="span-a" href="javascript:deleteItem(36,38);"><span id="delte-span-38">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_39" data-acid="39" data-pre="36">
										<a href="javascript:send_class_searh_url(36,39);">19</a>
										<a class="span-a" href="javascript:deleteItem(36,39);"><span id="delte-span-39">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_40" data-acid="40" data-pre="36">
										<a href="javascript:send_class_searh_url(36,40);">36</a>
										<a class="span-a" href="javascript:deleteItem(36,40);"><span id="delte-span-40">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_41" data-acid="41" data-pre="36">
										<a href="javascript:send_class_searh_url(36,41);">99</a>
										<a class="span-a" href="javascript:deleteItem(36,41);"><span id="delte-span-41">×</span></a>
									</div>
								</div>
							</div>
							<div class="goodsType_row">
								<div class="goodsClass">送花对象：</div>
								<div class="goodsLable">
									<input type="hidden" id="search_div_class_50" data-acid="50" data-pre="0">
									<div class="goodsLables" id="search_div_class_51" data-acid="51" data-pre="50">
										<a href="javascript:send_class_searh_url(50,51);">爱人</a>
										<a class="span-a" href="javascript:deleteItem(50,51);"><span id="delte-span-51">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_52" data-acid="52" data-pre="50">
										<a href="javascript:send_class_searh_url(50,52);">恋人</a>
										<a class="span-a" href="javascript:deleteItem(50,52);"><span id="delte-span-52">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_53" data-acid="53" data-pre="50">
										<a href="javascript:send_class_searh_url(50,53);">单身</a>
										<a class="span-a" href="javascript:deleteItem(50,53);"><span id="delte-span-53">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_54" data-acid="54" data-pre="50">
										<a href="javascript:send_class_searh_url(50,54);">老师</a>
										<a class="span-a" href="javascript:deleteItem(50,54);"><span id="delte-span-54">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_55" data-acid="55" data-pre="50">
										<a href="javascript:send_class_searh_url(50,55);">朋友</a>
										<a class="span-a" href="javascript:deleteItem(50,55);"><span id="delte-span-55">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_56" data-acid="56" data-pre="50">
										<a href="javascript:send_class_searh_url(50,56);">长辈</a>
										<a class="span-a" href="javascript:deleteItem(50,56);"><span id="delte-span-56">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_57" data-acid="57" data-pre="50">
										<a href="javascript:send_class_searh_url(50,57);">探望</a>
										<a class="span-a" href="javascript:deleteItem(50,57);"><span id="delte-span-57">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_58" data-acid="58" data-pre="50">
										<a href="javascript:send_class_searh_url(50,58);">客户</a>
										<a class="span-a" href="javascript:deleteItem(50,58);"><span id="delte-span-58">×</span></a>
									</div>
								</div>
							</div>
							<div class="goodsType_row">
								<div class="goodsClass">鲜花生活馆：</div>
								<div class="goodsLable">
									<input type="hidden" id="search_div_class_59" data-acid="59" data-pre="0">
									<div class="goodsLables" id="search_div_class_60" data-acid="60" data-pre="59">
										<a href="javascript:send_class_searh_url(59,60);">家庭套餐</a>
										<a class="span-a" href="javascript:deleteItem(59,60);"><span id="delte-span-60">×</span></a>
									</div>
									<div class="goodsLables" id="search_div_class_61" data-acid="61" data-pre="59">
										<a href="javascript:send_class_searh_url(59,61);">月度套餐</a>
										<a class="span-a" href="javascript:deleteItem(59,61);"><span id="delte-span-61">×</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="nch-module nch-module-style01">
					<div class="title">
						<h3>
<em>鲜花束</em> -
商品筛选</h3>
					</div>
					<div class="content">
						<div class="nch-module-filter">
							<dl>
								<dt>品牌：</dt>
								<dd class="list">
									<ul>
										<li>
											<a href="http://www.531314.com/cate-1074-365-0-0-0-0-0-0-0.html">春舞枝</a>
										</li>
									</ul>
								</dd>
							</dl>
							<dl>
								<dt>颜色：</dt>
								<dd class="list">
									<ul>
										<li>
											<a href="http://www.531314.com/cate-1074-0-1-0-0-0-0-0-0.html">红色</a>
										</li>
										<li>
											<a href="http://www.531314.com/cate-1074-0-2-0-0-0-0-0-0.html">香槟</a>
										</li>
										<li>
											<a href="http://www.531314.com/cate-1074-0-3-0-0-0-0-0-0.html">蓝色</a>
										</li>
										<li>
											<a href="http://www.531314.com/cate-1074-0-4-0-0-0-0-0-0.html">白色</a>
										</li>
									</ul>
								</dd>
							</dl>
						</div>
					</div>
				</div>
				<div class="shop_con_list" id="main-nav-holder">
					<nav class="sort-bar" id="main-nav">
						<div class="pagination">
							<ul>
								<li><span>上一页</span></li>
								<li>
									<a class="demo" href="http://www.531314.com/cate-1074-0-0-0-0-0-0-0-2.html"><span>下一页</span></a>
								</li>
							</ul>
						</div>
						<div class="nch-all-category">
							<div class="all-category">
								<div class="title"> <i></i>
									<h3><a href="http://www.531314.com/category.html">所有商品分类</a></h3>
								</div>
								<div class="category">
									<ul class="menu">
										<li cat_id="1072" class="odd">
											<div class="class">
												<h4><a href="http://www.531314.com/cate-1072-0-0-0-0-0-0-0-0.html">所有分类</a></h4>
												<span class="arrow"></span> </div>
											<div class="sub-class" cat_menu_id="1072">
												<div class="sub-class-content">
													<div class="recommend-class">
														<span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-0-0.html" title="鲜花束">鲜花束</a></span>
														<span><a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-0-0.html" title="盒装鲜花">盒装鲜花</a></span>
														<span><a href="http://www.531314.com/cate-1076-0-0-0-0-0-0-0-0.html" title="家庭插花">家庭插花</a></span>
														<span><a href="http://www.531314.com/cate-1078-0-0-0-0-0-0-0-0.html" title="多肉植物">多肉植物</a></span>
														<span><a href="http://www.531314.com/cate-1079-0-0-0-0-0-0-0-0.html" title="桌面盆栽">桌面盆栽</a></span>
													</div>
													<dl>
														<dt>
<h3><a href="http://www.531314.com/cate-1073-0-0-0-0-0-0-0-0.html">鲜花速递</a></h3>
</dt>
														<dd class="goods-class">
															<a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-0-0.html">鲜花束</a>
															<a href="http://www.531314.com/cate-1075-0-0-0-0-0-0-0-0.html">盒装鲜花</a>
															<a href="http://www.531314.com/cate-1076-0-0-0-0-0-0-0-0.html">家庭插花</a>
														</dd>
													</dl>
													<dl>
														<dt>
<h3><a href="http://www.531314.com/cate-1077-0-0-0-0-0-0-0-0.html">花卉绿植</a></h3>
</dt>
														<dd class="goods-class">
															<a href="http://www.531314.com/cate-1078-0-0-0-0-0-0-0-0.html">多肉植物</a>
															<a href="http://www.531314.com/cate-1079-0-0-0-0-0-0-0-0.html">桌面盆栽</a>
														</dd>
													</dl>
												</div>
												<div class="sub-class-right">
													<div class="brands-list">
													</div>
													<div class="adv-promotions"> </div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="nch-sortbar-array"> 排序方式：
							<ul>
								<li class="selected">
									<a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-0-0.html" title="默认排序">默认</a>
								</li>
								<li>
									<a href="http://www.531314.com/cate-1074-0-0-1-2-0-0-0-0.html" title="点击按销量从高到低排序">销量<i></i></a>
								</li>
								<li>
									<a href="http://www.531314.com/cate-1074-0-0-2-2-0-0-0-0.html" title="点击按人气从高到低排序">人气<i></i></a>
								</li>
								<li>
									<a href="http://www.531314.com/cate-1074-0-0-3-2-0-0-0-0.html" title="点击按价格从高到低排序">价格<i></i></a>
								</li>
							</ul>
						</div>
						<div class="nch-sortbar-owner"><span><a href="http://www.531314.com/cate-1074-0-0-0-0-1-0-0-0.html"><i></i>平台自营</a></span></div>
						<div class="nch-sortbar-owner"><span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-1-0-0.html"><i></i>赠品</a></span></div>
						<div class="nch-sortbar-location">商品所在地：
							<div class="select-layer">
								<div class="holder"><em nc_type="area_name">不限地区 </em></div>
								<div class="selected">
									<a nc_type="area_name">不限地区 </a>
								</div>
								<i class="direction"></i>
								<ul class="options">
									<div class="filter-detailc" id="addressDraw">
										<dl class="location-hots">
											<dt>常用地区</dt>
											<dd>
												<a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-1-0.html">北京</a>
											</dd>
											<dd>
												<a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-2-0.html">天津</a>
											</dd>
											<dd>
												<a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-9-0.html">上海</a>
											</dd>
											<dd>
												<a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-35-0.html">海外</a>
											</dd>
										</dl>
										<dl class="location-all">
											<dt>省份</dt>
											<dd>
												<ul>
													<li>
														<p class="lt">A</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-12-0.html">安徽</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-34-0.html">澳门</a></span> </p>
													</li>
													<li>
														<p class="lt">C</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-22-0.html">重庆</a></span> </p>
													</li>
													<li>
														<p class="lt">F</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-13-0.html">福建</a></span> </p>
													</li>
													<li>
														<p class="lt">G</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-19-0.html">广东</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-28-0.html">甘肃</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-20-0.html">广西</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-24-0.html">贵州</a></span> </p>
													</li>
												</ul>
												<ul>
													<li>
														<p class="lt">H</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-21-0.html">海南</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-3-0.html">河北</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-16-0.html">河南</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-8-0.html">黑龙江</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-17-0.html">湖北</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-18-0.html">湖南</a></span> </p>
													</li>
													<li>
														<p class="lt">J</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-10-0.html">江苏</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-14-0.html">江西</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-7-0.html">吉林</a></span> </p>
													</li>
												</ul>
												<ul>
													<li>
														<p class="lt">N</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-6-0.html">辽宁</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-5-0.html">内蒙古</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-30-0.html">宁夏</a></span> </p>
													</li>
													<li>
														<p class="lt">Q</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-29-0.html">青海</a></span> </p>
													</li>
													<li>
														<p class="lt">S</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-15-0.html">山东</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-4-0.html">山西</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-27-0.html">陕西</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-23-0.html">四川</a></span> </p>
													</li>
												</ul>
												<ul>
													<li>
														<p class="lt">T</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-32-0.html">台湾</a></span> </p>
													</li>
													<li>
														<p class="lt">X</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-26-0.html">西藏</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-31-0.html">新疆</a></span> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-33-0.html">香港</a></span> </p>
													</li>
													<li>
														<p class="lt">Y</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-25-0.html">云南</a></span> </p>
													</li>
													<li>
														<p class="lt">Z</p>
														<p class="lc"> <span><a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-11-0.html">浙江</a></span> </p>
													</li>
												</ul>
											</dd>
										</dl>
										<p class="oreder-default">
											<a href="http://www.531314.com/cate-1074-0-0-0-0-0-0-0-0.html">不限地区</a>
										</p>
									</div>
								</ul>
							</div>
						</div>
					</nav>

					<div>
						<style type="text/css">
							#box {
								background: #FFF;
								width: 238px;
								height: 410px;
								margin: -390px 0 0 0;
								display: block;
								border: solid 4px #434343;
								position: absolute;
								z-index: 999;
								opacity: .5
							}
							
							.shopMenu {
								position: fixed;
								z-index: 1;
								right: 25%;
								top: 0;
							}
						</style>
						<div class="squares" nc_type="current_display_mode">
							<input type="hidden" id="lockcompare" value="unlock" />
							<ul class="list_pic">
								<li class="item">
									<div class="goods-content" nctype_goods=" 101014" nctype_store="1">
										<div class="goods-pic">
											<a href="__APP__/Item/item_101014" target="_blank" title="【春舞枝】基地直销 33白+紫玫瑰16枝+8枝子洋桔梗"><img src="http://img.531314.com/shop/store/goods/1/1_05424700938891995_240.jpg" title="【春舞枝】基地直销 33白+紫玫瑰16枝+8枝子洋桔梗" alt="【春舞枝】基地直销 33白+紫玫瑰16枝+8枝子洋桔梗" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424700938891995_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424701597331704_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424701671243872_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424701767640824_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424701861394707_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="__APP__/Item/item_101014" target="_blank" title="9枝白玫瑰紫玫瑰16枝 、8枝子洋桔梗、尤加利若干">【春舞枝】基地直销 33白+紫玫瑰16枝+8枝子洋桔梗<em>9枝白玫瑰紫玫瑰16枝 、8枝子洋桔梗、尤加利若干</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;388.00">&yen;388.00</em> <em class="market-price" title="市场价：&yen;599.00">&yen;599.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_101014" data-param='{"gid":"101014"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="__APP__/Item/item_101014" target="_blank" class="status">1</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-101014-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:101014,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 101013" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-101013.html" target="_blank" title="【春舞枝】基地直销 33枝香槟玫瑰 、高山积雪若干"><img src="http://img.531314.com/shop/store/goods/1/1_05424698223279567_240.jpg" title="【春舞枝】基地直销 33枝香槟玫瑰 、高山积雪若干" alt="【春舞枝】基地直销 33枝香槟玫瑰 、高山积雪若干" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424698223279567_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424698699995100_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424698735463772_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424698785145227_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424698813117412_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-101013.html" target="_blank" title="33枝香槟玫瑰 、高山积雪若干">【春舞枝】基地直销 33枝香槟玫瑰 、高山积雪若干<em>33枝香槟玫瑰 、高山积雪若干</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;388.00">&yen;388.00</em> <em class="market-price" title="市场价：&yen;599.00">&yen;599.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_101013" data-param='{"gid":"101013"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-101013.html#ncGoodsRate" target="_blank" class="status">2</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-101013-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:101013,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 101012" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-101012.html" target="_blank" title="【春舞枝】基地直销 33枝香槟玫瑰"><img src="http://img.531314.com/shop/store/goods/1/1_05424692804368301_240.jpg" title="【春舞枝】基地直销 33枝香槟玫瑰" alt="【春舞枝】基地直销 33枝香槟玫瑰" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424692804368301_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424693610467826_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424693695305684_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424711060143011_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424711194215975_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-101012.html" target="_blank" title="33枝香槟玫瑰 、淡紫色相思梅若干">【春舞枝】基地直销 33枝香槟玫瑰<em>33枝香槟玫瑰 、淡紫色相思梅若干</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;388.00">&yen;388.00</em> <em class="market-price" title="市场价：&yen;599.00">&yen;599.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_101012" data-param='{"gid":"101012"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-101012.html#ncGoodsRate" target="_blank" class="status">1</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-101012-0-0.html" target="_blank">1</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:101012,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 101011" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-101011.html" target="_blank" title="【春舞枝】基地直销 33枝红玫瑰情人草"><img src="http://img.531314.com/shop/store/goods/1/1_05424686092644715_240.jpg" title="【春舞枝】基地直销 33枝红玫瑰情人草" alt="【春舞枝】基地直销 33枝红玫瑰情人草" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424686092644715_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424686092644715_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424687083423157_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424687182178904_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424687355468567_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-101011.html" target="_blank" title="33枝红玫瑰 、情人草3枝">【春舞枝】基地直销 33枝红玫瑰情人草<em>33枝红玫瑰 、情人草3枝</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;388.00">&yen;388.00</em> <em class="market-price" title="市场价：&yen;599.00">&yen;599.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_101011" data-param='{"gid":"101011"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-101011.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-101011-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:101011,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 101009" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-101009.html" target="_blank" title="【春舞枝】基地直销 33枝红玫瑰"><img src="http://img.531314.com/shop/store/goods/1/1_05424668432492171_240.jpg" title="【春舞枝】基地直销 33枝红玫瑰" alt="【春舞枝】基地直销 33枝红玫瑰" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424668432492171_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424671895926702_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424672089673360_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424672169525972_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424721562644340_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-101009.html" target="_blank" title="33支红玫瑰 、黄莺若干">【春舞枝】基地直销 33枝红玫瑰<em>33支红玫瑰 、黄莺若干</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;388.00">&yen;388.00</em> <em class="market-price" title="市场价：&yen;599.00">&yen;599.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_101009" data-param='{"gid":"101009"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-101009.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-101009-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:101009,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 101007" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-101007.html" target="_blank" title="【春舞枝】基地直销 33枝粉玫瑰"><img src="http://img.531314.com/shop/store/goods/1/1_05424639725775441_240.jpg" title="【春舞枝】基地直销 33枝粉玫瑰" alt="【春舞枝】基地直销 33枝粉玫瑰" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424639725775441_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424641055610631_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424641081398227_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424641116398428_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424641175305477_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-101007.html" target="_blank" title="33枝粉玫瑰 、情人草若干">【春舞枝】基地直销 33枝粉玫瑰<em>33枝粉玫瑰 、情人草若干</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;388.00">&yen;388.00</em> <em class="market-price" title="市场价：&yen;599.00">&yen;599.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_101007" data-param='{"gid":"101007"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-101007.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-101007-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:101007,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 101006" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-101006.html" target="_blank" title="【春舞枝】基地直销 26枝白玫瑰 、7枝紫色洋桔梗"><img src="http://img.531314.com/shop/store/goods/1/1_05424637067173141_240.jpg" title="【春舞枝】基地直销 26枝白玫瑰 、7枝紫色洋桔梗" alt="【春舞枝】基地直销 26枝白玫瑰 、7枝紫色洋桔梗" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424637067173141_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424637884994368_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424637949521710_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424638012648195_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424638050615467_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-101006.html" target="_blank" title="26枝白玫瑰 、7枝紫色洋桔梗  情人草若干">【春舞枝】基地直销 26枝白玫瑰 、7枝紫色洋桔梗<em>26枝白玫瑰 、7枝紫色洋桔梗 情人草若干</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;388.00">&yen;388.00</em> <em class="market-price" title="市场价：&yen;599.00">&yen;599.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_101006" data-param='{"gid":"101006"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-101006.html#ncGoodsRate" target="_blank" class="status">2</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-101006-0-0.html" target="_blank">2</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:101006,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 101005" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-101005.html" target="_blank" title="【春舞枝】基地直销 33枝白玫瑰"><img src="http://img.531314.com/shop/store/goods/1/1_05424583143423227_240.jpg" title="【春舞枝】基地直销 33枝白玫瑰" alt="【春舞枝】基地直销 33枝白玫瑰" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424583143423227_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424709479214936_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424709499058938_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05424709536861341_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-101005.html" target="_blank" title="33支白玫瑰 、紫色相思梅若干">【春舞枝】基地直销 33枝白玫瑰<em>33支白玫瑰 、紫色相思梅若干</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;388.00">&yen;388.00</em> <em class="market-price" title="市场价：&yen;599.00">&yen;599.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_101005" data-param='{"gid":"101005"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-101005.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-101005-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:101005,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 101000" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-101000.html" target="_blank" title="【春舞枝】基地直销 11枝粉玫瑰+洋桔梗7枝 双鱼座(粉玫瑰+洋桔梗)主图"><img src="http://img.531314.com/shop/store/goods/1/1_05406700465405296_240.jpg" title="【春舞枝】基地直销 11枝粉玫瑰+洋桔梗7枝 双鱼座(粉玫瑰+洋桔梗)主图" alt="【春舞枝】基地直销 11枝粉玫瑰+洋桔梗7枝 双鱼座(粉玫瑰+洋桔梗)主图" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05406700465405296_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05406702889460232_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05406702911342055_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05406702929622276_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05406703012438702_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-101000.html" target="_blank" title="11枝粉玫瑰+洋桔梗7枝+水蜜果若干">【春舞枝】基地直销 11枝粉玫瑰+洋桔梗7枝 双鱼座(粉玫瑰+洋桔梗)主图<em>11枝粉玫瑰+洋桔梗7枝+水蜜果若干</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;168.00">&yen;168.00</em> <em class="market-price" title="市场价：&yen;236.00">&yen;236.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_101000" data-param='{"gid":"101000"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-101000.html#ncGoodsRate" target="_blank" class="status">6</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-101000-0-0.html" target="_blank">5</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:101000,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100991" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100991.html" target="_blank" title="【春舞枝】12星座系列 - 摩羯座守护花束 摩羯座守护花束"><img src="http://img.531314.com/shop/store/goods/1/1_05360604416553144_240.jpg" title="【春舞枝】12星座系列 - 摩羯座守护花束 摩羯座守护花束" alt="【春舞枝】12星座系列 - 摩羯座守护花束 摩羯座守护花束" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05360604416553144_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05360692076863686_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05360692140144566_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05360692195142171_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05360692258584623_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100991.html" target="_blank" title="15枝粉白腊梅">【春舞枝】12星座系列 - 摩羯座守护花束 摩羯座守护花束<em>15枝粉白腊梅</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;168.00">&yen;168.00</em> <em class="market-price" title="市场价：&yen;288.00">&yen;288.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100991" data-param='{"gid":"100991"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100991.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100991-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100991,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100978" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100978.html" target="_blank" title="【春舞枝】12星座系列 - 天秤座守护花束 天秤座守护花束"><img src="http://img.531314.com/shop/store/goods/1/1_05279565511236212_240.jpg" title="【春舞枝】12星座系列 - 天秤座守护花束 天秤座守护花束" alt="【春舞枝】12星座系列 - 天秤座守护花束 天秤座守护花束" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05279565511236212_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05279567100305778_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05279567136087787_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05279567167014275_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05279567199833361_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100978.html" target="_blank" title="6枝黄太阳花 5枝橘太阳花混搭花束">【春舞枝】12星座系列 - 天秤座守护花束 天秤座守护花束<em>6枝黄太阳花 5枝橘太阳花混搭花束</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;168.00">&yen;168.00</em> <em class="market-price" title="市场价：&yen;288.00">&yen;288.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100978" data-param='{"gid":"100978"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100978.html#ncGoodsRate" target="_blank" class="status">3</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100978-0-0.html" target="_blank">3</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100978,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100964" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100964.html" target="_blank" title="【春舞枝】同城配送 3支玫瑰鲜花束 3枝黄玫瑰"><img src="http://img.531314.com/shop/store/goods/1/1_05169928911131299_240.jpg" title="【春舞枝】同城配送 3支玫瑰鲜花束 3枝黄玫瑰" alt="【春舞枝】同城配送 3支玫瑰鲜花束 3枝黄玫瑰" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05169928911131299_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05169928792031142_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100964.html" target="_blank" title="各色3朵玫瑰 鲜花束">【春舞枝】同城配送 3支玫瑰鲜花束 3枝黄玫瑰<em>各色3朵玫瑰 鲜花束</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;66.00">&yen;66.00</em> <em class="market-price" title="市场价：&yen;88.00">&yen;88.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100964" data-param='{"gid":"100964"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100964.html#ncGoodsRate" target="_blank" class="status">2</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100964-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100964,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100963" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100963.html" target="_blank" title="【春舞枝】同城配送 3支玫瑰鲜花束 3枝金辉玫瑰"><img src="http://img.531314.com/shop/store/goods/1/1_05169928617030373_240.jpg" title="【春舞枝】同城配送 3支玫瑰鲜花束 3枝金辉玫瑰" alt="【春舞枝】同城配送 3支玫瑰鲜花束 3枝金辉玫瑰" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05169928617030373_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05169928711096560_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100963.html" target="_blank" title="各色3朵玫瑰 鲜花束">【春舞枝】同城配送 3支玫瑰鲜花束 3枝金辉玫瑰<em>各色3朵玫瑰 鲜花束</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;66.00">&yen;66.00</em> <em class="market-price" title="市场价：&yen;88.00">&yen;88.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100963" data-param='{"gid":"100963"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100963.html#ncGoodsRate" target="_blank" class="status">5</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100963-0-0.html" target="_blank">3</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100963,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100962" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100962.html" target="_blank" title="【春舞枝】同城配送 3支玫瑰鲜花束 3枝紫玫瑰"><img src="http://img.531314.com/shop/store/goods/1/1_05169928476878526_240.jpg" title="【春舞枝】同城配送 3支玫瑰鲜花束 3枝紫玫瑰" alt="【春舞枝】同城配送 3支玫瑰鲜花束 3枝紫玫瑰" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05169928476878526_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05169928834883305_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100962.html" target="_blank" title="各色3朵玫瑰 鲜花束">【春舞枝】同城配送 3支玫瑰鲜花束 3枝紫玫瑰<em>各色3朵玫瑰 鲜花束</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;66.00">&yen;66.00</em> <em class="market-price" title="市场价：&yen;88.00">&yen;88.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100962" data-param='{"gid":"100962"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100962.html#ncGoodsRate" target="_blank" class="status">6</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100962-0-0.html" target="_blank">5</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100962,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100961" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100961.html" target="_blank" title="【春舞枝】同城配送 3支玫瑰鲜花束 3枝白玫瑰"><img src="http://img.531314.com/shop/store/goods/1/1_05169928332814776_240.jpg" title="【春舞枝】同城配送 3支玫瑰鲜花束 3枝白玫瑰" alt="【春舞枝】同城配送 3支玫瑰鲜花束 3枝白玫瑰" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05169928332814776_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05169928590192388_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100961.html" target="_blank" title="各色3朵玫瑰 鲜花束">【春舞枝】同城配送 3支玫瑰鲜花束 3枝白玫瑰<em>各色3朵玫瑰 鲜花束</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;66.00">&yen;66.00</em> <em class="market-price" title="市场价：&yen;88.00">&yen;88.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100961" data-param='{"gid":"100961"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100961.html#ncGoodsRate" target="_blank" class="status">2</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100961-0-0.html" target="_blank">1</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100961,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100960" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100960.html" target="_blank" title="【春舞枝】同城配送 3支玫瑰鲜花束 3枝粉玫瑰"><img src="http://img.531314.com/shop/store/goods/1/1_05169928208598612_240.jpg" title="【春舞枝】同城配送 3支玫瑰鲜花束 3枝粉玫瑰" alt="【春舞枝】同城配送 3支玫瑰鲜花束 3枝粉玫瑰" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05169928208598612_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05169928422222298_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05169928700828285_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100960.html" target="_blank" title="各色3朵玫瑰 鲜花束">【春舞枝】同城配送 3支玫瑰鲜花束 3枝粉玫瑰<em>各色3朵玫瑰 鲜花束</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;66.00">&yen;66.00</em> <em class="market-price" title="市场价：&yen;88.00">&yen;88.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100960" data-param='{"gid":"100960"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100960.html#ncGoodsRate" target="_blank" class="status">2</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100960-0-0.html" target="_blank">2</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100960,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100959" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100959.html" target="_blank" title="【春舞枝】同城配送 3支玫瑰鲜花束 3枝香槟玫瑰"><img src="http://img.531314.com/shop/store/goods/1/1_05169926730194025_240.jpg" title="【春舞枝】同城配送 3支玫瑰鲜花束 3枝香槟玫瑰" alt="【春舞枝】同城配送 3支玫瑰鲜花束 3枝香槟玫瑰" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05169926730194025_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05169926464219201_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100959.html" target="_blank" title="各色3朵玫瑰 鲜花束">【春舞枝】同城配送 3支玫瑰鲜花束 3枝香槟玫瑰<em>各色3朵玫瑰 鲜花束</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;66.00">&yen;66.00</em> <em class="market-price" title="市场价：&yen;88.00">&yen;88.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100959" data-param='{"gid":"100959"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100959.html#ncGoodsRate" target="_blank" class="status">1</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100959-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100959,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100958" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100958.html" target="_blank" title="【春舞枝】同城配送 3支玫瑰鲜花束 3枝红玫瑰"><img src="http://img.531314.com/shop/store/goods/1/1_05169925756763647_240.jpg" title="【春舞枝】同城配送 3支玫瑰鲜花束 3枝红玫瑰" alt="【春舞枝】同城配送 3支玫瑰鲜花束 3枝红玫瑰" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05169925756763647_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05169926313016446_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100958.html" target="_blank" title="各色3朵玫瑰 鲜花束">【春舞枝】同城配送 3支玫瑰鲜花束 3枝红玫瑰<em>各色3朵玫瑰 鲜花束</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;66.00">&yen;66.00</em> <em class="market-price" title="市场价：&yen;88.00">&yen;88.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100958" data-param='{"gid":"100958"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100958.html#ncGoodsRate" target="_blank" class="status">5</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100958-0-0.html" target="_blank">4</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100958,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100944" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100944.html" target="_blank" title="【春舞枝】鲜花速递-紫雨烟云花束 紫白色满天星 提前3天预订"><img src="http://img.531314.com/shop/store/goods/1/1_05140438819067877_240.jpg" title="【春舞枝】鲜花速递-紫雨烟云花束 紫白色满天星 提前3天预订" alt="【春舞枝】鲜花速递-紫雨烟云花束 紫白色满天星 提前3天预订" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05140438819067877_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05142869184413929_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05142869221138370_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05142869260358244_60.jpg" /></a>
													</li>
													<li>
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05142869294414837_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100944.html" target="_blank" title="紫白色满天星混搭花束  提前三天预定">【春舞枝】鲜花速递-紫雨烟云花束 紫白色满天星 提前3天预订<em>紫白色满天星混搭花束 提前三天预定</em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;178.00">&yen;178.00</em> <em class="market-price" title="市场价：&yen;288.00">&yen;288.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100944" data-param='{"gid":"100944"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100944.html#ncGoodsRate" target="_blank" class="status">10</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100944-0-0.html" target="_blank">8</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100944,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100941" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100941.html" target="_blank" title="【春舞枝】补差价链接，差多少买多少"><img src="http://img.531314.com/shop/store/goods/1/1_05114435486606689_240.jpg" title="【春舞枝】补差价链接，差多少买多少" alt="【春舞枝】补差价链接，差多少买多少" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05114435486606689_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100941.html" target="_blank" title="">【春舞枝】补差价链接，差多少买多少<em></em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;1.00">&yen;1.00</em> <em class="market-price" title="市场价：&yen;1.00">&yen;1.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100941" data-param='{"gid":"100941"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100941.html#ncGoodsRate" target="_blank" class="status">32</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100941-0-0.html" target="_blank">2</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100941,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100940" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100940.html" target="_blank" title="【春舞枝】鲜花速递19枝金辉玫瑰礼盒情人节鲜花七夕鲜花全国花店同城配送 19枝金辉玫瑰礼盒 提前3天"><img src="http://img.531314.com/shop/store/goods/1/1_05090246513745458_240.jpg" title="【春舞枝】鲜花速递19枝金辉玫瑰礼盒情人节鲜花七夕鲜花全国花店同城配送 19枝金辉玫瑰礼盒 提前3天" alt="【春舞枝】鲜花速递19枝金辉玫瑰礼盒情人节鲜花七夕鲜花全国花店同城配送 19枝金辉玫瑰礼盒 提前3天" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05090246513745458_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100940.html" target="_blank" title="">【春舞枝】鲜花速递19枝金辉玫瑰礼盒情人节鲜花七夕鲜花全国花店同城配送 19枝金辉玫瑰礼盒 提前3天<em></em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;198.00">&yen;198.00</em> <em class="market-price" title="市场价：&yen;288.00">&yen;288.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100940" data-param='{"gid":"100940"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100940.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100940-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" onclick="login_dialog();"><i class="icon-bullhorn"></i>到货通知</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100939" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100939.html" target="_blank" title="【春舞枝】鲜花速递11枝金辉玫瑰礼盒情人节鲜花七夕鲜花全国花店同城配送 11枝金辉玫瑰礼盒 提前3天"><img src="http://img.531314.com/shop/store/goods/1/1_05090248959830788_240.jpg" title="【春舞枝】鲜花速递11枝金辉玫瑰礼盒情人节鲜花七夕鲜花全国花店同城配送 11枝金辉玫瑰礼盒 提前3天" alt="【春舞枝】鲜花速递11枝金辉玫瑰礼盒情人节鲜花七夕鲜花全国花店同城配送 11枝金辉玫瑰礼盒 提前3天" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05090248959830788_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100939.html" target="_blank" title="">【春舞枝】鲜花速递11枝金辉玫瑰礼盒情人节鲜花七夕鲜花全国花店同城配送 11枝金辉玫瑰礼盒 提前3天<em></em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;168.00">&yen;168.00</em> <em class="market-price" title="市场价：&yen;248.00">&yen;248.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100939" data-param='{"gid":"100939"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100939.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100939-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" onclick="login_dialog();"><i class="icon-bullhorn"></i>到货通知</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100937" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100937.html" target="_blank" title="【春舞枝】鲜花速递 粉色满天星 花束全国同城配送上海北京广州 此款鲜花需提前1-3天预订哦 粉色满天"><img src="http://img.531314.com/shop/store/goods/1/1_05075587620311753_240.jpg" title="【春舞枝】鲜花速递 粉色满天星 花束全国同城配送上海北京广州 此款鲜花需提前1-3天预订哦 粉色满天" alt="【春舞枝】鲜花速递 粉色满天星 花束全国同城配送上海北京广州 此款鲜花需提前1-3天预订哦 粉色满天" /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05075587620311753_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100937.html" target="_blank" title="">【春舞枝】鲜花速递 粉色满天星 花束全国同城配送上海北京广州 此款鲜花需提前1-3天预订哦 粉色满天<em></em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;298.00">&yen;298.00</em> <em class="market-price" title="市场价：&yen;390.00">&yen;390.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100937" data-param='{"gid":"100937"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100937.html#ncGoodsRate" target="_blank" class="status">3</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100937-0-0.html" target="_blank">1</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:100937,store_id:1}"><i class="icon-shopping-cart"></i>加入购物车</a>
											</div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="goods-content" nctype_goods=" 100936" nctype_store="1">
										<div class="goods-pic">
											<a href="http://www.531314.com/item-100936.html" target="_blank" title="【春舞枝】鲜花速递 16枝紫影玫瑰配枝腊梅松3枝 花束全国同城配送  此款鲜花需提前1-3天预订哦 "><img src="http://img.531314.com/shop/store/goods/1/1_05075610167960717_240.jpg" title="【春舞枝】鲜花速递 16枝紫影玫瑰配枝腊梅松3枝 花束全国同城配送  此款鲜花需提前1-3天预订哦 " alt="【春舞枝】鲜花速递 16枝紫影玫瑰配枝腊梅松3枝 花束全国同城配送  此款鲜花需提前1-3天预订哦 " /></a>
										</div>
										<div class="goods-info">
											<div class="goods-pic-scroll-show">
												<ul>
													<li class="selected">
														<a href="javascript:void(0);"><img src="http://img.531314.com/shop/store/goods/1/1_05075610167960717_60.jpg" /></a>
													</li>
												</ul>
											</div>
											<div class="goods-name">
												<a href="http://www.531314.com/item-100936.html" target="_blank" title="">【春舞枝】鲜花速递 16枝紫影玫瑰配枝腊梅松3枝 花束全国同城配送 此款鲜花需提前1-3天预订哦 <em></em></a>
											</div>
											<div class="goods-price"> <em class="sale-price" title="商城价：&yen;299.00">&yen;299.00</em> <em class="market-price" title="市场价：&yen;427.00">&yen;427.00</em> <span class="raty" data-score="5"></span> </div>
											<div class="goods-sub">
												<span class="goods-compare" nc_type="compare_100936" data-param='{"gid":"100936"}'><i></i>加入对比</span> </div>
											<div class="sell-stat">
												<ul>
													<li>
														<a href="http://www.531314.com/item-100936.html#ncGoodsRate" target="_blank" class="status">0</a>
														<p>商品销量</p>
													</li>
													<li>
														<a href="http://www.531314.com/comments-100936-0-0.html" target="_blank">0</a>
														<p>用户评论</p>
													</li>
													<li><em member_id="1">&nbsp;</em></li>
												</ul>
											</div>
											<div class="store">
												<a href="http://123.531314.com/" title="春舞枝旗舰店" class="name">春舞枝旗舰店</a>
											</div>
											<div class="add-cart">
												<a href="javascript:void(0);" onclick="login_dialog();"><i class="icon-bullhorn"></i>到货通知</a>
											</div>
										</div>
									</div>
								</li>
								<div class="clear"></div>
							</ul>
						</div>
						<form id="buynow_form" method="post" action="http://www.531314.com/index.php?store_id=1" target="_blank">
							<input id="act" name="act" type="hidden" value="buy" />
							<input id="op" name="op" type="hidden" value="buy_step1" />
							<input id="goods_id" name="cart_id[]" type="hidden" />
						</form>
						<script type="text/javascript" src="http://res.531314.com/js/jquery.raty/jquery.raty.min.js"></script>
						<script type="text/javascript">
							$(document).ready(function() {
								$('.raty').raty({
									path: "http://res.531314.com/js/jquery.raty/img",
									readOnly: true,
									width: 80,
									score: function() {
										return $(this).attr('data-score');
									}
								});
								//初始化对比按钮
								initCompare();
							});
						</script>
					</div>
					<div class="tc mt20 mb20">
						<div class="pagination">
							<ul>
								<li><span>首页</span></li>
								<li><span>上一页</span></li>
								<li><span class="currentpage">1</span></li>
								<li>
									<a class='demo' href='http://www.531314.com/cate-1074-0-0-0-0-0-0-0-2.html'><span>2</span></a>
								</li>
								<li>
									<a class='demo' href='http://www.531314.com/cate-1074-0-0-0-0-0-0-0-3.html'><span>3</span></a>
								</li>
								<li>
									<a class='demo' href='http://www.531314.com/cate-1074-0-0-0-0-0-0-0-4.html'><span>4</span></a>
								</li>
								<li>
									<a class='demo' href='http://www.531314.com/cate-1074-0-0-0-0-0-0-0-5.html'><span>5</span></a>
								</li>
								<li>
									<a class='demo' href='http://www.531314.com/cate-1074-0-0-0-0-0-0-0-6.html'><span>6</span></a>
								</li>
								<li>
									<a class="demo" href="http://www.531314.com/cate-1074-0-0-0-0-0-0-0-2.html"><span>下一页</span></a>
								</li>
								<li>
									<a class="demo" href="http://www.531314.com/cate-1074-0-0-0-0-0-0-0-6.html"><span>末页</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div id="guesslike_div" style="width:980px;"></div>
			</div>
		</div>
		<script src="http://res.531314.com/js/waypoints.js"></script>
		<script src="http://www.531314.com/resource/js/search_category_menu.js"></script>
		<script type="text/javascript">
			function delArr(ar, n) {
				if(n < 0)
					return ar;
				else
					return ar.slice(0, n).concat(ar.slice(n + 1, ar.length));
			}
			//标记已选择样式
			$(function() {
				var r_selected = "";
				var r_arr = r_selected.split(',');
				var r_count = r_arr.length;
				if(r_selected !== "") {
					for(var i = 0; i < r_count; i++) {
						$("#search_div_class_" + r_arr[i] + "").addClass("goodsLables_selected");
						var data_pre = $("#search_div_class_" + r_arr[i] + "").attr("data-pre");
						$("#search_div_class_" + data_pre + "").attr('data-pre', r_arr[i]);
						$("#delte-span-" + r_arr[i] + "").show();
						// $("#search_class_"+data_pre+"").removeClass("goodsLables_selected");
					}
				}
				//      $(".goodsLables a").hover(function(){
				//            var _itme_id=$(this).attr("data-acid");
				//        
				//      },function(){
				//            var _itme_id=$(this).attr("data-acid");
				//            $("#delte-span-"+_itme_id+"").hide(); 
				//      });
			});
			//删除当前选择项
			function deleteItem(cid, stcid) {
				$("#search_div_class_" + stcid + "").removeClass("goodsLables_selected");
				$("#delte-span-" + stcid + "").hide();
				var _stcids = "";
				var _s = $("div[id^=search_div_class_]");
				var data_pre = $("#search_div_class_" + cid + "").attr("data-pre");
				$("#search_div_class_" + data_pre + "").removeClass("goodsLables_selected");
				$("#delte-span-" + stcid + "").show();
				for(var i = 0; i < _s.length; i++) {
					if($(_s[i]).hasClass("goodsLables_selected")) {
						var id = $(_s[i]).attr("data-acid");
						if(_stcids == '') {
							_stcids = id;
						} else {
							_stcids = _stcids + ',' + id;
						}
					}
				}
				document.location.href = "http://www.531314.com/index.php?act=search&op=index&keyword=" + $("#keyword").val() + "&cate_id=1074&stc_id=" + _stcids;
			}
			//拼接搜索
			function send_class_searh_url(cid, stcid) {
				var _stcids = "";
				var _s = $("div[id^=search_div_class_]");
				var data_pre = $("#search_div_class_" + cid + "").attr("data-pre");
				$("#search_div_class_" + data_pre + "").removeClass("goodsLables_selected");
				$("#search_div_class_" + stcid + "").addClass("goodsLables_selected");
				$("#delte-span-" + stcid + "").show();
				for(var i = 0; i < _s.length; i++) {
					if($(_s[i]).hasClass("goodsLables_selected")) {
						var id = $(_s[i]).attr("data-acid");
						if(_stcids == '') {
							_stcids = id;
						} else {
							_stcids = _stcids + ',' + id;
						}
					}
				}
				document.location.href = "http://www.531314.com/index.php?act=search&op=index&keyword=" + $("#keyword").val() + "&cate_id=1074&stc_id=" + _stcids;
			}
		</script>
		<script type="text/javascript">
			var defaultSmallGoodsImage = 'shop/common/default_goods_image_240.gif';
			var defaultTinyGoodsImage = 'shop/common/default_goods_image_60.gif';

			$(function() {
				$('#files').tree({
					expanded: 'li:lt(2)'
				});

				//浮动导航  waypoints.js
				$('#main-nav-holder').waypoint(function(event, direction) {
					$(this).parent().toggleClass('sticky', direction === "down");
					event.stopPropagation();
				});
				// 单行显示更多
				$('span[nc_type="show"]').click(function() {
					s = $(this).parents('dd').prev().find('li[nc_type="none"]');
					if(s.css('display') == 'none') {
						s.show();
						$(this).html('<i class="icon-angle-up"></i>收起');
					} else {
						s.hide();
						$(this).html('<i class="icon-angle-down"></i>更多');
					}
				});

				// 推荐商品异步显示
				$('div[nctype="booth_goods"]').load('http://www.531314.com/index.php?act=search&op=get_booth_goods&cate_id=1074', function() {
					$(this).show();
				});
				//浏览历史处滚条
				$('#nchSidebarViewed').perfectScrollbar();

				//猜你喜欢
				$('#guesslike_div').load('http://www.531314.com/index.php?act=search&op=get_guesslike', function() {
					$(this).show();
				});
			});
		</script>
		
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
	
	</body>

</html>