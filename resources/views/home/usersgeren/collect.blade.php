@extends('common.homes')

@section('title','个人收藏')

    <link rel="stylesheet" href="/home/css/main.min.css">
    <link rel="stylesheet" href="/home/css/base.min.css">
    <script src="/home/js/jquery.statData.min.js"></script>
    <script src="/home/js/mstr.js"></script>
    <script src="/home/js/user.min.js"></script>
    <script src="/home/js/xmst.js"></script>
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
                    个人收藏
                </span>
            </div>
        </div>
        <div class="page-main user-main">
            <div class="container">
                <div class="row">
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
                                        <li>
                                            <a href="/home/oindex">
                                                我的订单
                                            </a>
                                        </li>
                                        <!-- <li><a href="//service.order.mi.com/insurance/payServiceList?_r=26153.1557822362">意外保</a></li>
                                        -->
                                       <li>
                                            <a href="/home/ss">
                                                团购订单
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/home/ss">
                                                评价晒单
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/home/ss">
                                                话费充值订单
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/home/ss">
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
                                            <a href="/home/ss">
                                                消息通知
                                                <i class="J_miMessageTotal">
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/home/ss">
                                                购买资格
                                                <i class="J_miInviteTotal">
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/home/ss">
                                                现金账户
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/home/ss">
                                                小米礼品卡
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/home/ss">
                                                现金券
                                            </a>
                                        </li>
                                        <li   class="active">
                                            <a href="/home/ss">
                                                喜欢的商品
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/home/ss">
                                                优惠券
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/home/ss">
                                                收货地址
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
                                            <a href="/home/ss">
                                                个人信息
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/home/xgm">
                                                修改密码
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                         <div class="span16">
                        <div class="uc-box uc-main-box">
                            <div class="uc-content-box">
                                <div class="box-hd">
                                    <h1 class="title">
                                        喜欢的商品
                                    </h1>
                                </div>
                                @if(count($co))
                                <div class="box-bd">
                                    <div class="xm-goods-list-wrap">
                                        <ul class="xm-goods-list clearfix">
                                            @foreach ($co as $v => $k)
                                            <li class="xm-goods-item">
                                                <div class="figure figure-img">
                                                    <a href="" target="_blank" data-stat-id="e22ebed05e37a84d">
                                                        <img src="{{$k->gpic}}">
                                                    </a>
                                                </div>
                                                <h3 class="title">
                                                    <a href="" target="_blank" data-stat-id="bc14d64f0cb5f422">
                                                        {{$k->gname}}
                                                    </a>
                                                </h3>
                                                <p class="price">
                                                    {{$k->price}} 元
                                                </p>
                                                <p class="rank">
                                                </p>
                                                <div class="actions">
                                                    <a id="1184300036_favorite" class="btn btn-small btn-line-gray J_delFav"
                                                    href="/home/colls/{{$k->id}}" data-stat-id="c24d67dcce2a1fcc">
                                                        删除
                                                    </a>
                                                    <a class="btn btn-small btn-primary" target="_blank" href="/home/details?id={{$k->gid}}" data-stat-id="b910a46cd8d8d08a">
                                                    
                                                        查看详情
                                                    </a>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="xm-pagenavi">
                                    </div>
                                </div>
                               @else
                               <div class="box-bd">
                                    <p class="empty">您暂未收藏任何商品。</p>
                                    <div class="xm-pagenavi"></div>
                                </div>
                               @endif
                            </div>
                        </div>
                    </div>  


                </div>
            </div>
        </div>               
@stop

@section('js')

@stop