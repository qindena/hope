@extends('common.homes')

@section('title','个人订单')

    <link rel="stylesheet" href="/home/css/main.min.css">
    <link rel="stylesheet" href="/home/css/base.min.css">
    <script src="/home/js/jquery.statData.min.js"></script>
    <script src="/home/js/mstr.js"></script>
    <script src="/home/js/user.min.js"></script>
    <script src="/home/js/xmst.js"></script>

    <link type="text/css" rel="stylesheet" href="/home/order/css/commonbak.css" source="widget">       
    <link rel="stylesheet" href="/home/order/css/myjd.order2015bak.css">
    <link rel="stylesheet" href="/home/order/css/alpha3bak.css">
    <link charset="utf-8" rel="stylesheet" href="/home/order/css/tipsbak.css">
@section('home')
      <div class="breadcrumbs">
            <div class="container">
                <a href='//www.mi.com/index.html'>
                    首页
                </a>
                <span class="sep">
                    &gt;
                </span>
                <span>
                    个人中心
                </span>
            </div>
        </div>
        <div class="page-main user-main">
            <div class="container">
                <div class="row" style="margin-left: -40px">
                    <div class="span4">
                        <div class="uc-box uc-sub-box">
                            <div class="uc-nav-box">
                                <div class="box-hd">
                                    <h3 class="title">
                                        订单中心
                                    </h3>
                                </div>
                                <div class="box-bd">
                                    <ul class="uc-nav-list">
                                        <li  class="active">
                                            <a href="/home/oindex">
                                                我的订单
                                            </a>
                                        </li>
                                        <!-- <li><a href="//service.order.mi.com/insurance/payServiceList?_r=26153.1557822362">意外保</a></li>
                                        -->
                                        <li>
                                            <a href="//static.mi.com/order/#type=11">
                                                团购订单
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://order.mi.com/user/comment?filter=1&r=26153.1557822362"
                                            data-count="comment" data-count-style="bracket">
                                                评价晒单
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//recharge.10046.mi.com/list">
                                                话费充值订单
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//huanxin.mi.com/order/list?r=26153.1557822362">
                                                以旧换新订单
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uc-nav-box">
                                <div class="box-hd">
                                    <h3 class="title">
                                        个人中心
                                    </h3>
                                </div>
                                <div class="box-bd">
                                    <ul class="uc-nav-list">
                                        <li>
                                            <a href="/home/geren">
                                                我的个人中心
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://order.mi.com/message/list?r=26153.1557822362">
                                                消息通知
                                                <i class="J_miMessageTotal">
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://order.mi.com/invite/list?r=26153.1557822362">
                                                购买资格
                                                <i class="J_miInviteTotal">
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://order.mi.com/cashAccount?r=26153.1557822362">
                                                现金账户
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://order.mi.com/ecard/bind?r=26153.1557822362">
                                                小米礼品卡
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://order.mi.com/huanxin/list?r=26153.1557822362">
                                                现金券
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://order.mi.com/user/favorite?r=26153.1557822362">
                                                喜欢的商品
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://order.mi.com/user/coupon?r=26153.1557822362">
                                                优惠券
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://order.mi.com/user/address?r=26153.1557822362">
                                                收货地址
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uc-nav-box">
                                <div class="box-hd">
                                    <h3 class="title">
                                        售后服务
                                    </h3>
                                </div>
                                <div class="box-bd">
                                    <ul class="uc-nav-list">
                                        <li>
                                            <a href="//service.order.mi.com/record/list?_r=26153.1557822362">
                                                服务记录
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//service.order.mi.com/apply/front?_r=26153.1557822362">
                                                申请服务
                                            </a>
                                        </li>
                                        <li>
                                            <a href="//service.order.mi.com/user/compensate?_r=26153.1557822362">
                                                领取快递报销
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uc-nav-box">
                                <div class="box-hd">
                                    <h3 class="title">
                                        账户管理
                                    </h3>
                                </div>
                                <div class="box-bd">
                                    <ul class="uc-nav-list">
                                        <li>
                                            <a href="https://account.xiaomi.com/" target="_blank">
                                                个人信息
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://account.xiaomi.com/pass/auth/security/home#service=setPassword"
                                            target="_blank">
                                                修改密码
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://uvip.xiaomi.cn" target="_blank">
                                                社区VIP认证
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                   <div class="span16" >
                            <div id="main" style="margin-left: 10px;margin-top: -7px">
                                <div id="chunjie" class="mb10">
                                </div>
                                <div class="mod-main mod-comm mod-order" id="order01">
                                    <div class="mt">
                                        <h3>
                                            我的订单
                                        </h3>
                                        <div class="extra-r">
                                        </div>
                                    </div>
                                </div>
                                <div class="safety-box hide">
                                </div>
                                <div class="mod-main mod-comm lefta-box" id="order02">
                                    <div class="mt">
                                        <ul class="extra-l">
                                            <li class="fore1">
                                                <a href="https://order.jd.com/center/list.action" class="txt curr">
                                                    全部订单
                                                </a>
                                            </li>
                                            <li class="fore2">
                                                <a href="https://order.jd.com/center/tejiaqingcang.action" id="ordertoTejia"
                                                clstag="click|keycount|orderinfo|tjqc _1">
                                                    <strong>
                                                        特价·清仓
                                                    </strong>
                                                    <span class="new">
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <form action="/home/oindex" method='get'>
                                            <div class="extra-r">
                                                <div class="search">
                                                    <input id="ip_keyword" type="text" class="itxt" placeholder="请输入你的订单号" style="color: rgb(204, 204, 204);height: 25px" name='oid' value="{{$request->oid}}">
                                                    <button>搜索</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="mc">
                                        <div class="top-search hide">
                                            <div class="dl">
                                                <span class="label">
                                                    订单类型：
                                                </span>
                                                <div class="dd">
                                                </div>
                                            </div>
                                            <div class="dl">
                                            </div>
                                        </div>
                                        <table class="td-void order-tb">
                                            <colgroup>
                                                <col class="number-col">
                                                    <col class="consignee-col">
                                                        <col class="amount-col">
                                                            <col class="status-col">
                                                                <col class="operate-col">
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="ordertime-cont">
                                                            <div class="time-txt">
                                                                近三个月订单
                                                            </div>
                                                        </div>
                                                        <div class="order-detail-txt ac">
                                                            订单详情
                                                        </div>
                                                    </th>
                                                    <th>
                                                        收货人信息
                                                    </th>
                                                    <th>
                                                        金额
                                                    </th>
                                                    <th>
                                                        <div class="deal-state-cont" id="orderState">
                                                            <div class="state-txt">
                                                                全部状态
                                                                <span class="blank">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        操作
                                                    </th>
                                                </tr>
                                            </thead>
                                            @foreach ($rs as $k => $v)
                                            @php
                                                $detail = DB::table('detail')->where('oid',$v->oid)->first();
                                                $good = DB::table('goods')->where('id',$detail->gid)->first();
                                                
                                                $gspic = $goodspicture->where('gid',$detail->gid)->select('gpic')->first();
                                            @endphp
                                            <tbody id="tb-43244043248">
                                                <tr class="sep-row">
                                                    <td colspan="5">
                                                    </td>
                                                </tr>
                                                <!-- 头 -->
                                                <tr class="tr-th">
                                                    <td colspan="5">
                                                        <span class="gap">
                                                        </span>
                                                        <span class="dealtime" title="2016-11-01 23:43:57">
                                                            {{date('Y-m-d H:i:s',$v->addtime)}}
                                                        </span>
                                                        <input type="hidden" id="datasubmit-43244043248" value="2016-11-01 23:43:57">
                                                        <span class="number">
                                                            订单号：
                                                            <a name="orderIdLinks" id="idUrl43244043248" target="_blank" href="https://details.jd.com/normal/item.action?orderid=43244043248&amp;PassKey=68914AE9FE98C3F77317E46667ECACC5"
                                                            clstag="click|keycount|orderinfo|order_num">
                                                                {{$v->oid}}
                                                            </a>
                                                        </span>
                                                        <div class="tr-operate">
                                                            <span class="order-shop">
                                                                <span class="shop-txt">
                                                                    mi
                                                                </span>
                                                                <a class="btn-im btn-im-jd" href="" title="联系客服" clstag="click|keycount|orderlist|ziyingchatim">
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="tr-bd" id="track43244043248" oty="0,1,70">
                                                    <td style="padding:0px;">
                                                        <!-- 每一种商品 -->
                                                        <div style="padding:14px 0;border:1px solid #e5e5e5;border-collapse:collapse;">
                                                            <div class="goods-item p-11362614">
                                                                <div class="p-img">
                                                                    <a href="/home/details?id={{$detail->gid}}" clstag="click|keycount|orderinfo|order_product"
                                                                    target="_blank">
                                                                        <img class="" src="{{$gspic->gpic}}" title="{{$detail->gname}}"
                                                                        data-lazy-img="done" width="60" height="60">
                                                                    </a>
                                                                </div>
                                                                <div class="p-msg">
                                                                    <div class="p-name">
                                                                        <a href="/home/details?id={{$detail->gid}}" class="a-link" clstag="click|keycount|orderinfo|order_product"
                                                                        target="_blank" title="{{$detail->gname}}">
                                                                            {{$detail->gname}}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="p-extra">
                                                                    <ul class="o-info">
                                                                        <li><span class="o-match J-o-match" data-sku="11362614"><i></i>
                                                                            <em>单价:{{$detail->price}}</em>
                                                                        </span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="goods-number">
                                                                x{{$detail->num}}
                                                            </div>
                                                            <div class="goods-repair">
                                                            </div>
                                                            <div class="clr">
                                                            </div>

                                                        </div>
                                                    </td>
                                                    <!-- 订单的其它内容 -->
                                                    <td>
                                                        <div class="consignee tooltip">
                                                            <span class="txt">
                                                                {{$v->oname}}
                                                            </span>
                                                            <b>
                                                            </b>
                                                        </div>
                                                        <div class="consignee tooltip">
                                                            <span class="txt">
                                                                电话：{{$v->phone}}
                                                            </span>
                                                        </div>
                                                        <div class="consignee tooltip">
                                                            <span class="txt">
                                                                地址：{{$v->address}}
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="amount">
                                                            <span>
                                                                总额 ￥{{$v->total}}
                                                            </span>
                                                            <br>
                                                            <strong>
                                                                应付
                                                            </strong>
                                                            <br>
                                                            <strong>
                                                                ￥{{$v->total}}
                                                            </strong>
                                                            <br>
                                                            <span class="ftx-13">
                                                                货到付款
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="status">
                                                            <span class="order-status ftx-04">
                                                            @if($v->status == 0)    
                                                                正在出库
                                                            @elseif($v->status == 1) 
                                                                已发货 
                                                            @elseif($v->status == 2)
                                                                已收货
                                                            @elseif($v->status == 3)
                                                                订单以失效
                                                            @endif           
                                                            </span>
                                                            <br>
                                                            <div class="tooltip" _orderid="43244043248" _ordertype="0" _orderstatus="7"
                                                            _orderurl="//details.jd.com/normal/item.action?orderid=43244043248&amp;PassKey=68914AE9FE98C3F77317E46667ECACC5"
                                                            _ordership="70">
                                                                <i class="auto-icon">
                                                                </i>
                                                                跟踪
                                                                <i class="circle-icon">
                                                                </i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="operate">
                                                            <div id="pay-button-43244043248" _baina="0">
                                                            </div>
                                                            <a href="/home/oin/{{$v->id}}">
                                                                取消订单
                                                            </a>
                                                            <br>
                                                            @if($v->status == 0 || $v->status == 1)
                                                            <a class="J-reminder" href="" data-orderid="43244043248">
                                                                催单
                                                            </a>
                                                            @elseif($v->status == 2)
                                                            <a class="J-reminder" href="" data-orderid="43244043248">
                                                                去评论
                                                            </a>
                                                            @elseif($v->status == 3)
                                                             <a class="J-reminder" href="/homes" data-orderid="43244043248">
                                                                去购买
                                                            </a>
                                                            @endif
                                                            <br>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- 其它内容结束 -->
                                            </tbody>
                                            @endforeach
                                        </table>
                                        <div class="clr">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>               
@stop

@section('js')

@stop