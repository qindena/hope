@extends('common.homes')

@section('title','修改个人中心')
    <link href="/home/lnfo/css/foot.css" rel="stylesheet"  type="text/css" />
    <link href="/home/lnfo/css/jiesuanye.css" rel="stylesheet"  type="text/css" />

    <link type="text/css" rel="stylesheet" href="/home/lnfo/gr/css/alpha1.css" >
    <link type="text/css" rel="stylesheet" href="/home/lnfo/gr/css/alpha2.css" >
    
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
                {{----}}
                    <div class="mod-main">
                        <div class="mt">
                            <ul class="extra-l">
                                <li class="fore-1">
                                    <a class="curr" href="https://i.jd.com/user/info">
                                        基本信息
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mc">
                            <div class="user-set userset-lcol">
                                <div class="form">
                                    <div class="item">
                                        <span class="label">
                                            用户名：
                                        </span>
                                        <div class="fl">
                                            <div>
                                                <strong>
                                                    {{$user->username}}
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="post" action="/home/usrexglnfo/{{$res->id}}" enctype="multipart/form-data">
                                        <div class="item">
                                            <span class="label">
                                                <em>
                                                    *
                                                </em>
                                                昵称：
                                            </span>
                                            <div class="fl">
                                                <input type="text" class="itxt"
                                                maxlength="20" id="nickName" name="mname" value="{{$res->mname}}">
                                                <div class="clr">
                                                </div>
                                                <div class="prompt-06">
                                                    <span id="nickName_msg">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <span class="label">
                                                <em>
                                                    *
                                                </em>
                                                性别：
                                            </span>
                                            <div class="fl">
                                                <select name="sex">
                                                    <option value="0" @if($res->sex==0)selected @endif>女</option>
                                                    <option value="1" @if($res->sex==1)selected @endif>男</option>
                                                    <option value="2" @if($res->sex==2)selected @endif>保密</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <span class="label">
                                                <em>
                                                    *
                                                </em>
                                                邮箱：
                                            </span>
                                            <div class="fl">
                                                <input type="text" class="itxt"
                                                maxlength="20" id="nickName" name="email" value="{{$res->email}}">
                                                <div class="clr">
                                                </div>
                                                <div class="prompt-06">
                                                    <span id="nickName_msg">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <span class="label">
                                                <em>
                                                    *
                                                </em>
                                                家庭住址：
                                            </span>
                                            <div class="fl">
                                                <input type="text" class="itxt"
                                                maxlength="20" id="nickName" name="address" value="{{$res->address}}">
                                                <div class="clr">
                                                </div>
                                                <div class="prompt-06">
                                                    <span id="nickName_msg">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="uid" value="{{$user->id}}">
                                        <div class="item">
                                            <span class="label">
                                                <em>
                                                    *
                                                </em>
                                                修改图片：
                                            </span>
                                            <div class="fl">
                                                <input type="file" name="header" value="{{$res->header}}" class="text-word"
                                                required="">
                                                <div class="clr">
                                                </div>
                                                <div class="prompt-06">
                                                    <span id="nickName_msg">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <span class="label">
                                                &nbsp;
                                            </span>
                                            <div class="fl">
                                                <input id="code" value="850496" style="display:none">
                                                <input name="" type="submit" value="编辑" class="text-but">
                                            </div>
                                        </div>
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                            <div id="user-info">
                                <div class="u-pic">
                                    <img alt="用户头像" src="{{$res->header}}">
                                    <div class="mask">
                                    </div>
                                    <div class="face-link-box">
                                    </div>
                                </div>
                                <div class="info-m">
                                    <div>
                                        <b>
                                            用户名：{{$user->username}}
                                        </b>
                                    </div>
                                    <div>
                                        @if ($user->auth == 0)
                                        会员类型：个人用户
                                        @elseif ($user->auth == 1)
                                        会员类型：vip用户 
                                        @elseif ($user->auth == 2)
                                        会员类型：后台超级管理员
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="clr">
                            </div>
                        </div>
                    </div>     
                {{----}}
            </div>
        </div>
    </div>   
@stop

@section('js')

@stop