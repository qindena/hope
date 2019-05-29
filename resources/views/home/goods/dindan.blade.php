<h1>商品订单</h1>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>填写订单信息</title>
	<link rel="icon" href="/indent/image/header.png">
	<link rel="stylesheet" href="/css/indent.css">
</head>
<body>
	<div id="top">
		<div class="top1">
			<div class="top1_logo">
				<img src="./shoppingcart/header.png" width="48px" alt="">
			</div>
			<div class="top1_one">
				<b>确认订单</b>
			</div>
			<span class="top2_a">
				我的订单
			</span>
			<span class="top2">
				1275549167
				<div class="top2_one">
					<a href="./personal.html">
						<div class="top2_one1">
							个人中心
						</div>
					</a>
					<a href="">
						<div class="top2_one2">
							评价晒单
						</div>
					</a>
					<a href="">
						<div class="top2_one2">
							我的喜欢
						</div>
					</a>
					<a href="">
						<div class="top2_one2">
							小米账户
						</div>
					</a>
					<a href="">
						<div class="top2_one2">
							退出登录
						</div>
					</a>
				</div>
			</span>
		</div>
	</div>
	<div id="center">
		<div id="indent">
			<div class="indent1">
				收货地址
			</div>
			<div class="indent2">
				
					@if(empty($rs))
						<div class="indent2_box">
							<a href="/homes/city">
								<div class="indent2_a">
									<b>+</b>
								</div>
								<p>添加新地址</p>
							</a>
						</div>
					@else
					<div class="indent2_box">
							<a href="/homes/city">
								{{$rs->address}}
							</a>
						</div>

					@endif
					
				
			</div>
			<div class="indent3">
				<span class="indent3_a">
					商品及优惠券
				</span>
				<div class="indent3_b">
					<a href="./shoppingcart.html">
					返回购物车<b>></b>
					</a>
				</div>
			</div>
			<div class="indent4_int">
				<div class="indent4">
					<div class="indent4_a">
						<img src="/indent/indent4_a.jpg" alt="">
					</div>
					<div class="indent4_b">
						<a href="">小米8 SE 全网通版 6GB内存 128GB 深灰 </a>
					</div>
					
					<div class="indent4_c">
						1799元 x 1
					</div>
					<div class="indent4_null">
						
					</div>
					<div class="indent4_d">
						1799元
					</div>
				</div>
				<div class="indent4">
					<div class="indent4_a">
						<img src="/indent/indent4_b.jpg" alt="">
					</div>
					<div class="indent4_b">
						<a href="">米粉卡日租卡 
						</a>
						<a href="">
						<div class="indent4_bone">
						赠品	
						</div>
						</a>
					</div>
					
					<div class="indent4_c">
						0元 x 1
					</div>
					<div class="indent4_null">
						
					</div>
					<div class="indent4_d">
						0元
					</div>
				</div>
			</div>
			<div class="indent5">
				<div class="indent5_a">
					配送方式
				</div>
				<div class="indent5_b">
					包邮
				</div>
			</div>
			<div class="indent6">
				<div class="indent6_a">
					发票
				</div>
				<div class="indent6_b">
					<span>电子发票</span>
					<span>个人</span>
					<span>商品明细</span>
					<span>修改></span>
				</div>
			</div>
			<div class="indent7">
				<div class="indent7_one">
					<a href="">
						<div class="indent7_a">
							<div class="indent7_a1">
								<b>+</b>
							</div>
							<p>使用优惠券</p>
						</div>
					</a>
					<a href="">
						<div class="indent7_a">
							<div class="indent7_a1">
								<b>+</b>
							</div>
							<p>使用小米礼品卡</p>
						</div>
					</a>
				</div>
				<div class="indent7_two">
					<div class="indent7_twoa">
						商品件数 :
					</div>
					<div class="indent7_twob">
						2件
					</div>
					<div class="indent7_twoa">
						商品总价 :
					</div>
					<div class="indent7_twob">
						1799元
					</div>
					<div class="indent7_twoa">
						活动优惠 :
					</div>
					<div class="indent7_twob">
						0元
					</div>
					<div class="indent7_twoa">
						优惠券抵扣 :
					</div>
					<div class="indent7_twob">
						0元
					</div>
					<div class="indent7_twoa">
						运费 :
					</div>
					<div class="indent7_twob">
						0元
					</div>
					<div class="indent7_twoc">
						应付金额 :
					</div>
					<div class="indent7_twod">
						<span>1799</span>
						元
					</div>
				</div>
			</div>
			<a href="">
				<div class="indent8">
					<div class="indent8_a">
						去结算
					</div>
				</div>
			</a>
		</div>
	</div>
		<!-- 页脚盒子 -->
	<div id="footercolor">
		<div id="footer">
			<ul>
				<li>
					<div class="footer_one">
						<a href="">
							预约维修服务
						</a>
					</div>
					<div class="footer_one1">
						<a href="">
							7天无理由退货
						</a>
					</div>
					<div class="footer_one1">
						<a href="">
							15天免费换贷
						</a>
					</div>
					<div class="footer_one1">
						<a href="">
							满150元包邮
						</a>
					</div>
					<div class="footer_one1">
						<a href="">
							520余家售后网点
						</a>
					</div>

				</li>
			</ul>
		</div>
		<div id="footer_two">
			<div class="footer_two_div">
				<div class="footer_two_1">
					帮助中心
				</div>
				<div class="footer_two_2">
					<a href="">账户管理</a>
				</div>
				<div class="footer_two_2">
					<a href="">购物指南</a>
				</div>
				<div class="footer_two_2">
					<a href="">订单操作</a>
				</div>
			</div>
			<div class="footer_two_div">
				<div class="footer_two_1">
					服务支持
				</div>
				<div class="footer_two_2">
					<a href="">售后政策</a>
				</div>
				<div class="footer_two_2">
					<a href="">自动服务</a>
				</div>
				<div class="footer_two_2">
					<a href="">相关下载</a>
				</div>
			</div>
			<div class="footer_two_div">
				<div class="footer_two_1">
					线下门店
				</div>
				<div class="footer_two_2">
					<a href="">小米之家</a>
				</div>
				<div class="footer_two_2">
					<a href="">服务网点</a>
				</div>
				<div class="footer_two_2">
					<a href="">授权体验店</a>
				</div>
			</div>
			<div class="footer_two_div">
				<div class="footer_two_1">
					关于小米
				</div>
				<div class="footer_two_2">
					<a href="">了解小米</a>
				</div>
				<div class="footer_two_2">
					<a href="">加入小米</a>
				</div>
				<div class="footer_two_2">
					<a href="">投资者关系</a>
				</div>
			</div>
			<div class="footer_two_div">
				<div class="footer_two_1">
					关注我们
				</div>
				<div class="footer_two_2">
					<a href="">新浪微博</a>
				</div>
				<div class="footer_two_2">
					<a href="">官方微信</a>
				</div>
				<div class="footer_two_2">
					<a href="">联系我们</a>
				</div>
			</div>
			<div class="footer_two_div">
				<div class="footer_two_1">
					特色服务
				</div>
				<div class="footer_two_2">
					<a href="">F码通道</a>
				</div>
				<div class="footer_two_2">
					<a href="">礼物码</a>
				</div>
				<div class="footer_two_2">
					<a href="">防伪查询</a>
				</div>
			</div>
			<div class="footer_three">
				<div class="footer_three1">
					400-100-5678
				</div>
				<div class="footer_three2">
					周一至周日 8:00-18:00（仅收市话费） 
				</div>
				<a href="">
					<div class="footer_three3">
						联系客服
					</div>
				</a>
			</div>
		</div>
	</div>
	<div id="site">
		<div class="site_one">
			<div class="site_one1">
				<div class="site_one_div">
					<a href="">
						<img src="../image/header.png" width="57px" alt="">
					</a>
				</div>
			</div>
			<div class="site_one_div1">
				<div class="site_one_div2">
					<a href="">小米首页</a>
					<span>|</span>
					<a href="">MIUI</a>
					<span>|</span>
					<a href="">IoT</a>
					<span>|</span>
					<a href="">云服务</a>
					<span>|</span>
					<a href="">金融</a>
					<span>|</span>
					<a href="">有品</a>
					<span>|</span>
					<a href="">小爱开放平台</a>
					<span>|</span>
					<a href="">政企服务</a>
					<span>|</span>
					<a href="">资质证照</a>
					<span>|</span>
					<a href="">协议规则</a>
					<span>|</span>
					<a href="">下载app</a>
					<span>|</span>
					<a href="">Select Region</a>
					<span>|</span>
					<a href="">政企服务</a>
					<span>|</span>
					<a href="">资质证照</a>
					<span>|</span>
					<a href="">协议规则</a>
					<span>|</span>
					<a href="">下载app</a>
					<span>|</span>
					<a href="">Select Region</a>
				</div>
				<div class="site_one_div3">
					<p>
						© <a href="">mi.com </a>
						京ICP证110507号
						<a href="">京ICP备10046444号</a>
						<a href="">京公网安备11010802020134号</a>
						<a href="">京网文[2017]1530-131号</a>
					</p>
					<p>
						<a href="">（京）网械平台备字（2018）第00005号</a>
						<a href="">互联网药品信息服务资格证 (京) -非经营性-2014-0090</a>
						<a href="">营业执照</a>
						<a href="">医疗器械公告</a>
					</p>
					<p>
						<a href="">增值电信业务许可证  </a>
						网络食品经营备案（京）【2018】WLSPJYBAHF-12  
						<a href="">食品经营许可证</a>
					</p>
					<p>
						违法和不良信息举报电话：185-0130-1238
						<a href="">知识产权侵权投诉</a>
						本网站所列数据，除特殊说明，所有数据均出自我司实验室测试 
					</p>
				</div>
				<div class="site_one_div4">
					<a href="">
						<img src="../image/site_one_div1.png" height="30px" alt="">
					</a>
					<a href="">
						<img src="../image/site_one_div2.png" height="30px" alt="">
					</a>
					<a href="">
						<img src="../image/site_one_div3.png" height="30px" alt="">
					</a>
					<a href="">
						<img src="../image/site_one_div4.png" height="30px" alt="">
					</a>
					<a href="">
						<img src="../image/site_one_div5.png" height="30px" alt="">
					</a>
				</div>
			</div>
		</div>
		<div class="site_two">
			<img src="../image/" alt="">
		</div>
	</div>
</body>
</html>