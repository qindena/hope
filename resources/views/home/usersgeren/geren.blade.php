@extends('common.homes')

@section('title','个人中心')

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
                                        <li class="active">
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
                    @section('user')
       
                    <div class="span16">
                        <div class="protal-content-update hide">
                            <div class="protal-username">
                                Hi, {{$res->mname}}
                            </div>
                            <p class="msg">
                                我们做了一个小升级：你的用户名可以直接修改啦，去换个酷炫的名字吧。
                                <a href="" target="_blank">
                                    立即前往>
                                </a>
                            </p>
                        </div>
                        <div class="uc-box uc-main-box">
                            <div class="uc-content-box portal-content-box">
                                <div class="box-bd">
                                    <div class="portal-main clearfix">
                                        <div class="user-card">
                                            <h2 class="username" style="margin-bottom: 10px">
                                                {{$res->mname}}
                                            </h2>
                                            <p class="tip" style="margin-bottom: 15px">
                                                下午好～
                                            </p>
                                            <a class="link" href="/home/usrexglnfo" target="_blank">
                                                修改个人信息 &gt;
                                            </a>
                                            <img class="avatar" src="{{$res->header}}" width="150" height="150" alt="1275549167" />
                                        </div>
                                        <div class="user-actions">
                                            <ul class="action-list">
                                                <li>
                                                    账户安全：
                                                    <span class="level level-3">
                                                        较高
                                                    </span>
                                                </li>
                                                <li>
                                                    绑定手机：
                                                    <span class="tel">
                                                        {{$user->phone}}
                                                    </span>
                                                </li>
                                                <li>
                                                    绑定邮箱：
                                                    <span class="tel">
                                                        {{$res->email}}
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="portal-sub">
                                        <ul class="info-list clearfix">
                                            <li>
                                                <h3>
                                                    待支付的订单：
                                                    <span class="num">
                                                        0
                                                    </span>
                                                </h3>
                                                <a href="//static.mi.com/order/?type=7">
                                                    查看待支付订单
                                                    <i class="iconfont">
                                                        &#xe623;
                                                    </i>
                                                </a>
                                                <img src="//s01.mifile.cn/i/user/portal-icon-1.png" alt="" />
                                            </li>
                                            <li>
                                                <h3>
                                                    待收货的订单：
                                                    <span class="num">
                                                        0
                                                    </span>
                                                </h3>
                                                <a href="//static.mi.com/order/?type=8">
                                                    查看待收货订单
                                                    <i class="iconfont">
                                                        &#xe623;
                                                    </i>
                                                </a>
                                                <img src="//s01.mifile.cn/i/user/portal-icon-2.png" alt="" />
                                            </li>
                                            <li>
                                                <h3>
                                                    待评价商品数：
                                                    <span class="num">
                                                        0
                                                    </span>
                                                </h3>
                                                <a href="https://order.mi.com/user/comment?filter=1&r=26153.1557822362">
                                                    查看待评价商品
                                                    <i class="iconfont">
                                                        &#xe623;
                                                    </i>
                                                </a>
                                                <img src="//s01.mifile.cn/i/user/portal-icon-3.png" alt="" />
                                            </li>
                                            <li>
                                                <h3>
                                                    喜欢的商品：
                                                    <span class="num">
                                                        0
                                                    </span>
                                                </h3>
                                                <a href="https://order.mi.com/user/favorite?r=26153.1557822362">
                                                    查看喜欢的商品
                                                    <i class="iconfont">
                                                        &#xe623;
                                                    </i>
                                                </a>
                                                <img src="//s01.mifile.cn/i/user/portal-icon-4.png" alt="" />
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @show  
                </div>
            </div>
        </div>               
@stop

@section('js')

@stop