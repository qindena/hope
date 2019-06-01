@extends('common/homes')
<style type="text/css">
	.header_bar .con_width{
		padding:0px;
	}
</style>
@section('home')
<link href='/css/finish.css' type='text/css' rel='stylesheet'>
	<!--shortcut end-->
<div id="o-header-2013"><div id="header-2013" style="display:none;"></div></div>
<div class="w w1 header clearfix" style="margin-bottom:39px ">
	<div id="logo">
		<a href="/" class="link1" target="_blank">
		<img src="/home/images/mi-logo.png" alt="大米商城">
		</a>
		<a href="http://success.jd.com/success/success.action?orderId=44392478919&amp;rid=0.746903008460361#none" class="link2"><b></b>"结算页"</a>
	</div>
	<div class="stepflex" id="#sflex03">
		<dl class="normal doing last">
			<dt class="s-num">3</dt>
			<dd class="s-text">3.成功提交订单<s></s><b></b></dd>
		</dl>
	</div>
</div>
<!-- /header -->
<!--/ /widget/header-succ-2015/header-succ-2015.tpl -->
<div class="w" id="safeinfo"></div><!--父订单的ID-->
<input type="hidden" id="successOrderId" value="44392478919">
<div id="container">
    <div class="w main">
    	<div class="m m3 msop">
            <div class="mt" id="success_tittle"><s class="icon-succ02"></s><h3 class="ftx-02">感谢您，订单提交成功！</h3>
    		</div>
    		<div class="mc" id="success_detail">	
	<input type="hidden" id="loadSuccessFlag" value="ok"><!-- 加載成功標識  -->
		<input type="hidden" id="skuIds" value="1832201"><!-- 商品id串  -->
	<!-- 再次购买按钮 -->
    <div class="btn-area mb10">
        <a class="btn-ordershow" href="/home/oindex" clstag="pageclick|keycount|trade_201602181|31">查看订单</a>
                    <a class="btn-buyagain ml10" href="http://cart.jd.com/cart/dynamic/reBuyForOrderCenter.action?wids=1832201&amp;nums=1&amp;rid=1478856930554" clstag="pageclick|keycount|trade_201602181|32">
                <i></i>
                            再次购买
            </a>
            </div>
            @foreach($rs as $k => $v)
			   <ul class="list-order">
				    <li class="li-st">
				        <div class="fore1">订单号：
				            <a href="http://order.jd.com/center/itemPage.action?orderid=44392478919&amp;PassKey=869D978B2C2CD34F0349D28270FA8950">{{$v['oid']}}</a></div>
				        <!-- 货到付款 -->
				        <div class="fore2">货到付款：
				            <strong class="ftx-01">{{$v['total']}}元</strong></div>
				        <div class="fore3">大米快递 &nbsp; 送货时间:
				            <strong class="ftx-01">预计11月13日（周日）送达,双十一期间促销火爆，可能影响送货时效，请谅解。</strong>&nbsp;</div></li>
				</ul>
			@endforeach
		<!-- 在线支付按钮  -->
				<div id="bookDiv"></div>
 								        <div class="wx-banner">
			<div class="wx-share">
				<div class="share-trigger" id="gwqpc-handle-point" data-scene="100104000" data-dealid="44392478919" data-pin="景水">
				<i class="i-share"></i><span class="txt">分享给微信好友</span>
				</div>
			</div>
        	<div class="mobile-ordertrack">
        		<div class="ordertrack-trigger">
        			<i class="i-mobile"></i><span class="txt">订单小助手&nbsp;随时随地查订单</span>			
        		</div>
        		<div class="wx-qrcode-tip">
        			<span class="tip-arrow"><em class="layer1"></em><em class="layer2"></em></span>
        			<div class="tip-inner">
        				<div class="tip-cont">
        					<div class="tip-title">订单助手</div>
        					<div class="tip-hint">关注微信公众号<br>随时随地查订单</div>					
        				</div>
        			</div>	
        		</div>
        	</div>		
        </div>
        <div class="d-tips">
            <span class="d-tips-cont">
                <i></i>
			       重要提醒：大米平台及销售商不会以
			    <span class="ftx-01">任何理由</span>
			       ，要求您点击
			    <span class="ftx-01">任何网址链接</span>
                进行退款操作。点此查看大米平台“
			    <a class="ftx-05" target="_blank" href="http://www.jd.com/news.aspx?id=22399">谨防诈骗公告声明</a>
			    ”
            </span>
        </div>
 </div>
    		<div class="qr-code"><a class="code" href="javascript:void(0)"><img alt="" src="./images/5435f1eeNc4bfcf9e.jpg"></a><a class="sao02" href="javascript:void(0)"></a></div>
    	</div>
    	<div class="o-mb">完成支付后，您可以：
                  <a href="http://www.jd.com/" clstag="pageclick|keycount|trade_201602181|33">继续购物</a>&nbsp;&nbsp;<a href="http://surveys.jd.com/index.php?r=survey/index/sid/264885/newtest/Y/lang/zh-Hans" clstag="pageclick|keycount|trade_201602181|34">问题反馈</a>
    	 <span class="jl-jingdou">
            <a href="http://vip.jd.com/help_beansIntroduction.html" class="jl-la" style="color:#7ABD54;" target="_blank">完成订单有机会奖励京豆</a> | 使用京豆更超值，请登录<a href="http://vip.jd.com/" target="_blank">会员俱乐部</a>
          </span>
    	</div>
    </div>
    
    <div class="w m" id="da930X1001"></div>
    <!-- 电子书广告-->
    <div id="dianzishu_image" class="w m">
    </div>
    <!--@end #c-tabs-->
</div>

@stop