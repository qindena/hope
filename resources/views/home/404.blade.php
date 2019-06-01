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
                                        <li>
                                            <a href="/home/oinde">
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
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="span16">
                        <img src="/timg.gif" style="width: 103%">
                    </div>
                </div>
            </div>
        </div>               
@stop

@section('js')

@stop