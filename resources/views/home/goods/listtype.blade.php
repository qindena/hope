@extends('common/homes')

@section('home')
	<div class="breadcrumbs">
	    <div class="container">
	        <a href="//www.mi.com/index.html" data-stat-id="b67dea7347d3b7fc" onclick="_msq.push(['trackEvent', '52f3592f9550ece4-b67dea7347d3b7fc', '//www.mi.com/index.html', 'pcpid', '']);">首页</a><span class="sep">&gt;</span><a href="//search.mi.com/search_表" data-stat-id="4a0f5b63fc7229d1" onclick="_msq.push(['trackEvent', '52f3592f9550ece4-4a0f5b63fc7229d1', '//search.mi.com/search_表', 'pcpid', '']);">全部结果</a><span class="sep">&gt;</span><span></span>    </div>
	</div>
	<div class="filter-box">
	                <div class="filter-list-wrap">
			           <dl class="filter-list clearfix" style="margin-left:145px">
						    <dt>分类：</dt>
						    <dd class="active">全部</dd>
						    @php

						    	$arr = DB::table('type')->where('id',$id)->get();
						    @endphp	
							@foreach($arr as $key => $val)
						    <dd>
						        <a href="/homes/goodsList?id={{$val->id}}" data-stat-id="eeb591a09dd0cdc7" onclick="_msq.push(['trackEvent', '75b8c6bb87d19180-eeb591a09dd0cdc7', '//search.mi.com/search_手表-130', 'pcpid', '']);">{{$val->tname}}</a></dd>
						   @endforeach
						</dl>
			        </div>               
	</div>
	<!-- 产品列表 start -->
	<div class="goods" style="margin-top:0px">

					<!-- 手机 start -->
		<div class="flashover con_width clearfix" >
			@foreach($goods as $k => $v)
				@php 
					$gpic = DB::table('goodspicture')->where('gid',$v->id)->value('gpic');
				@endphp
			<div class="goods_item_right" >
				<div class="goods_item_list" style="margin-bottom:10px">
					<div class="goodlist_content" >
						<a href="/home/details?id={{$v->id}}"><img src="{{$gpic}}" alt=""></a>
						<p class="good_title"><a href="/home/details?id={{$v->id}}">{{$v->gname}}</a></p>
						<p class="good_desc"></p>
						<p class="good_price">{{$v->price}}￥</p>
					</div>
				</div>
			
			</div>
			@endforeach
		</div>
		<!-- 手机 end -->
	</div>
		<!-- 产品列表 end -->
@stop
