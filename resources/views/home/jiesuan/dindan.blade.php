@extends('common/homes')


@section('home')
<link rel="stylesheet" href="/css/indent.css">
	<div id="center">
		<div id="indent">
			<div class="indent1">
				收货地址 <a href="#" style="margin-left: 150px">添加新地址+</a>
			</div>
			<div class="indent2">
				@if(empty($city))
					<div class="indent2_box">
						<a href="">
							<div class="indent2_a">
								<b>+</b>
							</div>
							<p>添加新地址</p>
						</a>
					</div>

				@else

						{{$city['address']}}

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
				@foreach($rs as $k => $v)
				<div class="indent4">
					<div class="indent4_a">
						<img src="{{$v['gpic']}}" alt="">
					</div>
					<div class="indent4_b">
						<a href="">{{$v['gname']}}</a>
					</div>
					
					<div class="indent4_c">
						{{$v['price']}}  X {{$v['num']}}
					</div>
					<div class="indent4_null">
						
					</div>
					<div class="indent4_d">
						{{$v['total']}}
					</div>
				</div>
				@endforeach
				
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
				</div>
				<div class="indent7_two">
					<div class="indent7_twoa">
						商品件数 :
					</div>
					<div class="indent7_twob">
						{{$rs[0]['counts']}}
					</div>
					<div class="indent7_twoa">
						商品总价 :
					</div>
					<div class="indent7_twob">
						{{$rs[0]['totals']}}
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
						<span>{{$rs[0]['totals']}}</span>
						元
					</div>
				</div>
			</div>
			<a href="/home/dojiesuan">
				<div class="indent8">
					<div class="indent8_a">
						去结算
					</div>
				</div>
			</a>
		</div>
	</div>

@stop

@section('js')
<script type="text/javascript">

</script>
@stop