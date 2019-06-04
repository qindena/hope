<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <!-- 页面关键字 -->
    <meta name="keywords" content="小米,小米8,小米7,红米5Plus,小米MIX2,小米商城" />
    <!-- 页面的描述 -->
    <meta name="description" content="小米商城直营小米公司旗下所有产品，囊括小米手机系列小米Note 3、小米8、小米MIX 2S，红米手机系列红米5 Plus、红米6 Pro，智能硬件，配件及小米生活周边，同时提供小米客户服务及售后支持。" />
    <!-- 收藏夹图标 -->
    <link rel="shortcut icon" href="/home/images/favicon.ico">

    <!-- 先引入重置的CSS样式文件 -->
    <link rel="stylesheet" href="/home/css/reset.css">

    <!-- 引入字体图标的css文件 -->
    <link rel="stylesheet" href="/home/css/iconfont.css">   

    <!-- 引入当前页面的CSS文件 -->
    <link rel="stylesheet" href="/home/css/index.css">
    <script src="/js/jquery-3.2.1.min.js"></script>
     <style type="text/css">
        .user-auction .user{
            position: relative;
            width: 110px;
            padding: 0;
            white-space: nowrap;
        }


        .user-auction .user .user-name{
            position: relative;
            z-index: 5;
            display: block;
            width: 120px;
            height: 40px;
            text-align: center;
            color: white;
            color: #b0b0b0;
            line-height: 40px;"
        }
        .user-auction .user .user-menu{
            display: none;
            position: absolute;
            z-index: 3;
            width: 120px;
            margin: 0;
            padding: 7px 0;
            list-style-type: none;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.15);
        }


        .user-auction .user .user-menu li{
            text-align:center;
        }


        .user-auction .user .user-menu li a{
            color: #b0b0b0;
            line-height: 40px;
            display: inline-block;
        }
    </style>
    <style type="text/css">
    .filter-box {
    padding: 18px 0;
    padding-top: 18px;
    padding-right: 0px;
    padding-bottom: 18px;
    padding-left: 0px;
    }
    .container {
        width: 1226px;
        margin-right: auto;
        margin-left: auto;
    }
    div {
        display: block;
    }
    .breadcrumbs {
        height: 40px;
        font-size: 12px;
        line-height: 40px;
        background: #f5f5f5;
        color: #616161;
    }
    body {
        font: 14px/1.5 "Helvetica Neue",Helvetica,Arial,"Microsoft Yahei","Hiragino Sans GB","Heiti SC","WenQuanYi Micro Hei",sans-serif;
        color: #333;
        background-color: #fff;
        min-width: 1226px;
    }
    .container:before, .container:after {
        content: " ";
        display: table;
    }
    .container:after {
        clear: both;
    }
    .container:before, .container:after {
        content: " ";
        display: table;
    }
    .content{padding:20px 0 100px;background:#f5f5f5}.filter-box{padding:18px 0}.filter-box .box-hd{padding:15px 0 23px;color:#424242}.filter-box .box-hd .title{margin:0 0 12px;font-size:20px;font-weight:400}.filter-box .box-hd .tip{margin:0 0 20px}.filter-box .box-hd a,.filter-box .box-hd .keyword{color:#ff6700}.filter-box .box-hd .sep{color:#b0b0b0}.filter-list-wrap,.filter-selected-list-wrap,.full-toggle-wrap{border-top:1px solid #e0e0e0}.filter-list-wrap:first-child,.filter-selected-list-wrap:first-child,.full-toggle-wrap:first-child{border-top:0}.filter-list-wrap{position:relative}.filter-list-wrap .more{position:absolute;right:0;top:10px;height:24px;line-height:24px;color:#757575}.filter-list-wrap .more i{font-size:24px;line-height:24px;vertical-align:-4px}.filter-list,.selected-list{position:relative;padding-left:70px;min-height:45px;margin:0}.filter-list dt,.selected-list dt{position:absolute;left:0;top:11px;width:72px;color:#b0b0b0}.filter-list dd,.selected-list dd{float:left;margin:0}.filter-list{width:1032px;height:45px;overflow:hidden;_zoom:1;-webkit-transition:height .3s ease-in;transition:height .3s ease-in}.filter-list dd{width:172px;padding:12px 0}.filter-list dd.active{color:#ff6700}.filter-list a{color:#424242}.filter-list a:hover{color:#ff6700}.selected-list dt{top:26px}.selected-list dd{padding:20px 0;margin-right:14px;font-size:12px}.selected-list a{display:block;position:relative;height:18px;padding:5px 58px 5px 20px;border:1px solid #b0b0b0;color:#424242;-webkit-transition:all .2s;transition:all .2s}.selected-list a:hover{border-color:#e53935;color:#e53935}.selected-list a:hover .iconfont{background-color:#e53935}.selected-list a .iconfont{position:absolute;right:0;top:0;width:28px;height:28px;font-size:24px;line-height:28px;text-align:center;background-color:#b0b0b0;color:#fff;-webkit-transition:all .2s;transition:all .2s}.full-toggle-wrap{height:24px;padding:18px 0 0;text-align:center}.full-toggle-wrap .full-toggle i{font-size:24px;line-height:24px;vertical-align:-4px}.full-toggle-wrap .full-toggle:focus{outline:0}.filter-list-wrap-toggled .filter-list-row-1{height:45px}.filter-list-wrap-toggled .filter-list-row-2{height:90px}.filter-list-wrap-toggled .filter-list-row-3{height:135px}.filter-list-wrap-toggled .filter-list-row-4{height:180px}.filter-list-wrap-toggled .filter-list-row-5{height:225px}.filter-list-wrap-toggled .filter-list-row-6{height:270px}.filter-list-wrap-toggled .filter-list-row-7{height:315px}.filter-list-wrap-toggled .filter-list-row-8{height:360px}.filter-list-wrap-toggled .filter-list-row-9{height:405px}.filter-list-wrap-toggled .filter-list-row-10{height:450px}.filter-list-wrap-toggled .filter-list-row-11{height:495px}.filter-list-wrap-toggled .filter-list-row-12{height:540px}.filter-list-wrap-toggled .filter-list-row-13{height:585px}.filter-list-wrap-toggled .filter-list-row-14{height:630px}.filter-list-wrap-toggled .filter-list-row-15{height:675px}.order-list-box{height:20px;margin:20px 0;overflow:hidden;position:relative;zoom:1}.order-list-box .order-list{float:left;height:20px;margin:0;padding:0;list-style-type:none}.order-list-box .order-list li{float:left;padding:0 30px;border-left:1px solid #e0e0e0;line-height:20px}.order-list-box .order-list li.first{padding-left:0;border-left:0}.order-list-box .order-list li.active a{color:#ff6700}.order-list-box .order-list li a{color:#424242;-webkit-transition:color .2s;transition:color .2s}.order-list-box .order-list li a:hover{color:#ff6700}.order-list-box .order-list i{font-size:16px;line-height:16px;vertical-align:-1px}.order-list-box .type-list{float:right;height:20px;margin:0;padding:0;list-style-type:none}.order-list-box .type-list li{float:left;margin-left:30px}.order-list-box .type-list a{color:#424242;-webkit-transition:color .2s;transition:color .2s}.order-list-box .type-list a:hover{color:#ff6700}.order-list-box .type-list .checkbox{display:inline-block;*zoom:1;*display:inline;width:18px;height:18px;margin-right:8px;border:1px solid #e0e0e0;background-color:#fff;vertical-align:-2px;font-size:16px;line-height:18px;text-align:center}.order-list-box .type-list .checkbox i{visibility:hidden}.order-list-box .type-list .checkbox-checked{background-color:#ff6700;border-color:#ff6700;color:#fff}.order-list-box .type-list .checkbox-checked i{visibility:visible}.goods-list-box{width:1226px}.goods-list{width:1240px;margin:0;list-style-type:none}.goods-item{position:relative;float:left;width:296px;height:383px;padding-top:47px;margin-right:14px;margin-bottom:14px;text-align:center;background:#fff;-webkit-transition:-webkit-box-shadow .5s linear;transition:box-shadow .5s linear}.goods-item:hover{-webkit-box-shadow:0 5px 15px rgba(0,0,0,0.2);box-shadow:0 5px 15px rgba(0,0,0,0.2)}.goods-item:hover .actions .btn-like,.goods-item:hover .actions .btn-buy{opacity:1;filter:alpha(opacity=100)\9}.goods-item .figure-img{width:200px;height:200px;margin:0 auto 16px}.goods-item .figure-img a{display:block}.goods-item .figure-img img{width:200px;height:200px}.goods-item .desc{margin:0 0 3px;height:18px;font-size:12px;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;_zoom:1;color:#b0b0b0}.goods-item .title{margin:0 0 3px;font-size:14px;font-weight:400;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;_zoom:1}.goods-item .title a{color:#424242}.goods-item .price{margin:0 0 15px;color:#ff6700}.goods-item .price del{color:#b0b0b0}.goods-item .price .num{margin-right:.25em}.goods-item .thumbs{width:100%;height:36px;overflow:hidden;_zoom:1}.goods-item .thumb-list{margin:0;padding:0;list-style-type:none;font-size:0}.goods-item .thumb-list li{display:inline-block;*zoom:1;*display:inline;width:34px;height:34px;margin:0 4px;border:1px solid #e0e0e0;cursor:pointer;-webkit-transition:border-color .2s linear;transition:border-color .2s linear}.goods-item .thumb-list li.active,.goods-item .thumb-list li:hover{border-color:#ff6700}.goods-item .thumb-list img{width:34px;height:34px}.goods-item .xm-carousel-container{position:relative}.goods-item .xm-carousel-container .control{position:absolute;top:50%;margin-top:-24px;font-size:16px;line-height:24px}.goods-item .xm-carousel-container .control-prev{left:10px}.goods-item .xm-carousel-container .control-next{right:10px}.goods-item .xm-carousel-wrapper{width:212px;margin:0 auto}.goods-item .xm-carousel-wrapper .thumb-list li{float:left;_display:inline;margin:0 8px 0 0}.goods-item .actions .btn-like,.goods-item .actions .btn-buy{position:absolute;top:20px;z-index:3;height:24px;padding:3px 4px;font-size:12px;color:#424242;opacity:0;filter:alpha(opacity=0)\9;-webkit-transition:all .2s linear;transition:all .2s linear}.goods-item .actions .btn-like:hover,.goods-item .actions .btn-buy:hover{color:#424242}.goods-item .actions .btn-like:hover span,.goods-item .actions .btn-buy:hover span{opacity:1;filter:alpha(opacity=100)\9}.goods-item .actions .btn-like:focus,.goods-item .actions .btn-buy:focus{outline:0}.goods-item .actions .btn-like{left:20px}.goods-item .actions .btn-liked i{color:#e53935}.goods-item .actions .btn-buy{right:20px}.goods-item .actions i{font-size:24px;line-height:24px;vertical-align:-5px;color:#424242}.goods-item .actions span{opacity:0;filter:alpha(opacity=0)\9;-webkit-transition:opacity .2s linear;transition:opacity .2s linear}.goods-item .flags{position:absolute;left:0;bottom:0;z-index:1;width:100%;max-height:40px;font-size:12px;text-align:left;overflow:hidden;_zoom:1}.goods-item .flags .flag{height:18px;padding:1px 20px;color:#fff}.goods-item .flags .flag-new{background-color:#83c44e}.goods-item .flags .flag-saleoff{background-color:#e53935}.goods-item .flags .flag-postfree{background-color:#ffac13}.goods-item .flags .flag-gift{background-color:#2196f3}.goods-item .notice{position:absolute;top:10px;left:10px;z-index:5;width:276px;opacity:0;filter:alpha(opacity=0)\9;-webkit-transform:translate3d(0, -10px, 0);transform:translate3d(0, -10px, 0);-webkit-transition:all .2s linear;transition:all .2s linear}.goods-item .notice .btn{opacity:.95;filter:alpha(opacity=95)\9}.goods-detail-item{position:relative;float:left;width:606px;height:320px;margin-right:14px;margin-bottom:14px;background-color:#fafafa;-webkit-transition:-webkit-box-shadow .5s linear;transition:box-shadow .5s linear}.goods-detail-item:hover{-webkit-box-shadow:0 5px 15px rgba(0,0,0,0.2);box-shadow:0 5px 15px rgba(0,0,0,0.2)}.goods-detail-item:hover .actions .btn-like,.goods-detail-item:hover .actions .btn-buy{opacity:1;filter:alpha(opacity=100)\9}.goods-detail-item .item-main{position:relative;float:right;width:236px;height:250px;padding:40px 30px 30px}.goods-detail-item .item-sub{position:relative;float:left;width:310px;height:320px;background-color:#fff}.goods-detail-item .title{margin:0;font-size:18px;font-weight:400;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;_zoom:1}.goods-detail-item .title a{color:#333}.goods-detail-item .price{margin:0 0 15px;font-size:18px;color:#ff6700}.goods-detail-item .price del{color:#b0b0b0}.goods-detail-item .price .num{margin-right:.25em}.goods-detail-item .thumbs{width:100%;height:36px;overflow:hidden;_zoom:1}.goods-detail-item .thumb-list{margin:0;padding:0;list-style-type:none;font-size:0}.goods-detail-item .thumb-list li{float:left;margin-right:8px;width:34px;height:34px;border:1px solid #e0e0e0;-webkit-transition:border-color .2s linear;transition:border-color .2s linear;cursor:pointer}.goods-detail-item .thumb-list li.active,.goods-detail-item .thumb-list li:hover{border-color:#ff6700}.goods-detail-item .thumb-list img{width:34px;height:34px}.goods-detail-item .xm-carousel-container{position:relative;overflow:visible}.goods-detail-item .xm-carousel-container .control{position:absolute;top:50%;margin-top:-20px}.goods-detail-item .xm-carousel-container .control-prev{left:-15px}.goods-detail-item .xm-carousel-container .control-next{right:-15px}.goods-detail-item .xm-carousel-wrapper{width:212px;margin:0 auto}.goods-detail-item .xm-carousel-wrapper .thumb-list li{float:left;_display:inline;margin:0 8px 0 0}.goods-detail-item .reviews{position:absolute;right:0;bottom:30px;width:236px;padding:0 30px}.goods-detail-item .btn-add{display:inline-block;*zoom:1;*display:inline;width:72px;padding:0 20px 0 8px;font-size:14px;line-height:20px;text-align:center;color:#fff;background:#79909b;border-radius:20px;-webkit-font-smoothing:antialiased}.goods-detail-item .review{font-size:14px;color:#757575}.goods-detail-item .meta{font-size:12px;color:#b0b0b0}.goods-detail-item .meta a{color:#b0b0b0}.goods-detail-item .author{position:relative;float:left;height:18px;margin:0;padding-left:30px}.goods-detail-item .avatar{position:absolute;left:0;top:-4px;width:20px;height:20px;border:1px solid #e0e0e0;border-radius:20px}.goods-detail-item .more{float:right;height:18px}.goods-detail-item .figure-img{width:200px;height:200px;padding:60px 0;margin:0 auto}.goods-detail-item .figure-img a{display:block}.goods-detail-item .figure-img img{width:200px;height:200px}.goods-detail-item .actions .btn-like,.goods-detail-item .actions .btn-buy{position:absolute;top:24px;z-index:3;padding:3px 10px;font-size:12px;color:#424242;opacity:0;filter:alpha(opacity=0)\9;-webkit-transition:opacity .2s linear;transition:opacity .2s linear}.goods-detail-item .actions .btn-like:hover,.goods-detail-item .actions .btn-buy:hover{color:#424242}.goods-detail-item .actions .btn-like:hover span,.goods-detail-item .actions .btn-buy:hover span{opacity:1;filter:alpha(opacity=100)\9}.goods-detail-item .actions .btn-like:focus,.goods-detail-item .actions .btn-buy:focus{outline:0}.goods-detail-item .actions .btn-like{left:20px}.goods-detail-item .actions .btn-liked i{color:#e53935}.goods-detail-item .actions .btn-buy{right:20px}.goods-detail-item .actions i{font-size:24px;line-height:24px;vertical-align:-5px;color:#424242}.goods-detail-item .actions span{opacity:0;filter:alpha(opacity=0)\9;-webkit-transition:opacity .2s linear;transition:opacity .2s linear}.goods-detail-item .flags{position:absolute;left:0;bottom:0;z-index:1;width:310px;max-height:40px;font-size:12px;text-align:left;overflow:hidden;_zoom:1}.goods-detail-item .flags .flag{height:18px;padding:1px 20px;color:#fff}.goods-detail-item .flags .flag-new{background-color:#83c44e}.goods-detail-item .flags .flag-saleoff{background-color:#e53935}.goods-detail-item .flags .flag-postfree{background-color:#ffac13}.goods-detail-item .flags .flag-gift{background-color:#2196f3}.goods-detail-item .notice{position:absolute;top:10px;left:10px;z-index:5;width:290px;opacity:0;filter:alpha(opacity=0)\9;-webkit-transform:translate3d(0, -10px, 0);transform:translate3d(0, -10px, 0);-webkit-transition:all .2s linear;transition:all .2s linear}.goods-detail-item .notice .btn{opacity:.95;filter:alpha(opacity=95)\9}.goods-item-notice .notice{opacity:1;filter:alpha(opacity=100)\9;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}.xm-recommend-container{margin-top:60px}.xm-recommend ul li{margin-right:14px;margin-left:0}@-webkit-keyframes flip{from{-webkit-transform:rotate3d(0, 1, 0, 0);transform:rotate3d(0, 1, 0, 0)}to{-webkit-transform:rotate3d(0, 1, 0, -360deg);transform:rotate3d(0, 1, 0, -360deg)}}@keyframes flip{from{-webkit-transform:rotate3d(0, 1, 0, 0);transform:rotate3d(0, 1, 0, 0)}to{-webkit-transform:rotate3d(0, 1, 0, -360deg);transform:rotate3d(0, 1, 0, -360deg)}}.modal-hongbao{width:281px;height:344px;margin-left:-140px;margin-top:-172px;background:none}.modal-hongbao .modal-body,.modal-hongbao .open-btn{background-image:url("//c1.mifile.cn/f/i/17/hongbao/open-bg.png");background-repeat:no-repeat}.modal-hongbao .modal-body{position:relative;padding:1px 0;height:342px;-webkit-box-shadow:0 7px 71px rgba(156,76,75,0.3);box-shadow:0 7px 71px rgba(156,76,75,0.3);border-radius:20px}.modal-hongbao .open-btn{display:block;width:109px;height:109px;margin:70px auto 0;background-position:0 -345px;text-indent:-9999em}.modal-hongbao .open-btn.active{-webkit-animation:flip 1s ease-in-out infinite;animation:flip 1s ease-in-out infinite}.modal-hongbao .msg{margin-top:40px;text-align:center;color:#ba2120;font-size:16px}.modal-hongbao .msg h3{margin:0;font-weight:normal;font-size:38px;line-height:46px;letter-spacing:2px}.modal-hongbao-result{width:281px;margin-left:-140px;margin-top:-156px;border-radius:0 0 20px 20px;background:url("//c1.mifile.cn/f/i/17/hongbao/result.png") no-repeat}.modal-hongbao-result .close{top:-10px;right:2px;width:28px;height:28px;line-height:28px;background-color:#f54d4c;color:#f8f1df;border-radius:14px;-webkit-box-shadow:0 5px 10px rgba(244,76,75,0.16);box-shadow:0 5px 10px rgba(244,76,75,0.16)}.modal-hongbao-result .close .iconfont{font-size:16px}.modal-hongbao-result .modal-body{max-height:500px;padding:0 0 6px}.modal-hongbao-result .modal-body.win .info-box{background-position:-278px bottom}.modal-hongbao-result .info-box{height:156px;text-align:center;overflow:hidden;_zoom:1;color:#969186}.modal-hongbao-result .info-box .title{margin:45px 0 5px;font-size:20px;font-weight:normal;color:#fb5048}.modal-hongbao-result .info-box .desc{margin:0}.modal-hongbao-result .goods-list{width:254px;margin:0 auto 10px;overflow:hidden;_zoom:1}.modal-hongbao-result .goods-list .item{display:block;height:80px;margin-bottom:6px;background-color:#eee;overflow:hidden;_zoom:1}.modal-hongbao-result .goods-list img{width:254px}.modal-hongbao-result .foot{text-align:center;color:#ba2120;font-size:12px;line-height:1.2}.modal-hongbao-kongtianlie{width:360px;height:525px;margin-top:-263px;margin-left:-180px}.modal-hongbao-kongtianlie .modal-body,.modal-hongbao-kongtianlie .open-btn{background-repeat:no-repeat}.modal-hongbao-kongtianlie .modal-body{height:523px;max-height:525px;background-image:url("//c1.mifile.cn/f/i/17/hongbao/kongtianlie.png?v3");-webkit-box-shadow:none;box-shadow:none}.modal-hongbao-kongtianlie .open-btn{width:120px;height:120px;margin-top:262px;background-image:url("//c1.mifile.cn/f/i/17/hongbao/kongtianlie-btn.png");background-position:0 0}.modal-hongbao-kongtianlie .msg{display:none}.banner-list-box .link-item{display:block;margin-bottom:14px}.banner-list-box img{display:block}



    </style>
</head>
<body>
    <div class="#">
        <!-- 顶部导航 start -->
        <div class="header_bar">
            <div class="header con_width">
                <!-- 左侧菜单 -->
                <div class="header_nav">
                    <ul>
                        <li><a href="/">小米商城</a></li>
                        <li><a href="#">MIUI</a></li>
                        <li><a href="#">IoT</a></li>
                        <li><a href="#">云服务</a></li>
                        <li><a href="#">金融</a></li>
                        <li><a href="#">有品</a></li>
                        <li><a href="#">小爱开放平台</a></li>
                        <li><a href="#">政企服务</a></li>
                        <li><a href="#">Select Region</a></li>
                    </ul>
                </div>
                <!-- 右侧购物车 -->
                <div class="header_shopcart">
                    <div class="shopcart_logo">
                        <a href="/home/cart" >
                            <i class="iconfont icon-cart"></i>
                            @php
                            $cartgs = Session('cart');
                            $cartnums = count($cartgs);
                            @endphp
                            购物车（<span class="homes-cart">{{$cartnums}}</span>）  
                        </a>
                        <div class="shopcart-info">
                            @if($cartgs == null)
                            <p>
                                购物车中还没有商品，赶紧选购吧!
                            </p>
                            @else
                            <p>
                                快去清空购物车吧!
                            </p>
                            @endif
                        </div>
                    </div>
                </div>
                 <!--右侧登录、注册-->
                @php
                    $uid = session('uid');
                    $res = DB::table('users')->where('id',$uid)->first();
                @endphp
                <div class="user-auction">
                    @if(session('uid'))
                        <ul>
                            <li>
                                <span class="user" id="userspan">
                                    <a rel="nofollow" class="user-name" href="/home/geren" target="_blank">
                                        <span class="name">
                                            {{$res->username}}
                                        </span>
                                    </a>
                                    <ul class="user-menu">
                                        <li>
                                            <a rel="nofollow" href="/home/geren" target="_blank">
                                                个人中心
                                            </a>
                                        </li>
                                        <li>
                                            <a rel="nofollow" href="" target="_blank">
                                                评价晒单
                                            </a>
                                        </li>
                                        <li>
                                            <a rel="nofollow" href="/home/collect" target="_blank">
                                                我的喜欢
                                            </a>
                                        </li>
                                        <li>
                                            <a rel="nofollow" href="/home/logout">
                                                退出登录
                                            </a>
                                        </li>
                                    </ul>
                                </span>
                            </li>
                            <li><a href="#">消息通知</a></li>
                            <li><a href="/home/oindex">我的订单</a></li>
                        </ul>
                    @else
                        <ul>
                            <li><a href="/home/login">登录</a></li>
                            <li><a href="/home/regist">注册</a></li>
                            <li><a href="#">消息通知</a></li>
                        </ul>
                    @endif
                </div>
            </div>
        </div>
        <!-- 顶部导航 end -->
        <!-- 主体导航 start -->
        <div class="main_nav con_width">
            <a href="/">
            <div class="logo">
                <img src="/home/images/mi-logo.png" alt="MIlogo" title="小米官网">
            </div>
            </a>
            <div class="nav">
                <ul>
                    @php
                        use App\Http\Controllers\Admin\TypeController;
                        use App\Model\Admin\Type;
                        use App\Model\Admin\Goods;
                        use App\Model\Admin\Goodspicture;
                        $type = new TypeController();
                        // 导航栏的分类
                        $rs = $type->getfenleiMessage(15);
                        $goods = new Goods();
                        $goodspicture = new Goodspicture();
                        //取出条目
                        $typenum = 0;
                    @endphp
                    @foreach($rs as $tk=>$tv)
                    @php
                       if($typenum > 7){
                            break;
                        }
                        $typenum ++;
                        if($tv->status == 0){
                            continue;
                        }
                        $data = $goods->where('tid', $tv->id)->select()->take(6)->get();
                    @endphp
                    <li><a href="#">{{$tv->tname}}</a>
                        <div class="nav_item">
                            <div class="nav_item_con con_width">
                                <ul>
                                    @foreach($data as $key=>$val)
                                    @php
                                        if($val->status == 3){
                                            continue;
                                        }
                                        $gps = $goodspicture->where('gid', $val->id)->select('gpic')->first();
                                    @endphp
                                    <li>
                                        <label>{{status($val->status)}}</label>
                                        <a href="/home/details?id={{$val->id}}" class="nav_item_con_img">
                                            <img src="{{$gps->gpic}}" height="110px" />
                                        </a>
                                        <a href="/home/details?id={{$val->id}}" class="nav_item_con_name">{{$val->gname}}</a>
                                        <p>{{$val->price}}元起</p>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    <li><a href="#">服务</a></li>
                    <li><a href="#">社区</a></li>
                </ul>
            </div>
            <!-- 搜索部分 start -->
            <!-- 搜索部分 start -->
            <div class="search_box">
                <form action="/homes/goodsList" method="post">
                    <input type="search" name="search" class="search" value="@if(empty($gname))  @else {{$gname}} @endif "
                    />
                    {{csrf_field()}}
                    <button>
                        <i class="iconfont icon-sousuo">
                        </i>
                    </button>
                    <!-- 默认搜索内容 -->
                    <div class="search_default">
                        <ul>
                            <li>
                                <a href="#">
                                    小米8
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    小米MIX
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- 下拉列表内容 -->
                    <div class="datalist">
                        <ul>
                            <li>
                                <a href="#">
                                    小米6X
                                    <span>
                                        约有6件
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    小米MIX 2S
                                    <span>
                                        约有5件
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    黑鲨游戏手机
                                    <span>
                                        约有3件
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    红米Note 5
                                    <span>
                                        约有6件
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    红米5A
                                    <span>
                                        约有13件
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    小米电话4C
                                    <span>
                                        约有5件
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    电视32英寸
                                    <span>
                                        约有3件
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
            <!-- 搜索部分 end -->
            <!-- 搜索部分 end -->
        </div>
        <!-- 主体导航 end -->
        @section('home')


        @show  
        <!-- 底部 start -->
        <div class="footer" style="margin-top:200px">
            <!--服务 start-->
            <div class="footer_nav con_width clearfix">
                <ul>
                    <li><a href="#"><i class="iconfont icon-buoumaotubiao46"></i>预约维修服务</a></li>
                    <li><a href="#"><i class="iconfont icon-7"></i>7天无理由退货</a></li>
                    <li><a href="#"><i class="iconfont icon-15"></i>15天免费换货</a></li>
                    <li><a href="#"><i class="iconfont icon-liwu1"></i>满150元包邮</a></li>
                    <li><a href="#"><i class="iconfont icon-dingwei"></i>520余家售后网点</a></li>
                </ul>
            </div>
            <!--服务 end-->
            <!-- 底部列表 start-->
            <div class="footer_item con_width clearfix">
                <div class="footer_item_left">
                    <ul>
                        <li>
                            <p>帮助中心</p>
                            <ul>
                                <li><a href="#">账户管理</a></li>
                                <li><a href="#">购物指南</a></li>
                                <li><a href="#">订单操作</a></li>
                            </ul>
                        </li>
                        <li>
                            <p>服务支持</p>
                            <ul>
                                <li><a href="#">售后政策</a></li>
                                <li><a href="#">自助服务</a></li>
                                <li><a href="#">相关下载</a></li>
                            </ul>
                        </li>
                        <li>
                            <p>线下门店</p>
                            <ul>
                                <li><a href="#">小米之家</a></li>
                                <li><a href="#">服务网点</a></li>
                                <li><a href="#">授权体验店</a></li>
                            </ul>
                        </li>
                        <li>
                            <p>关于小米</p>
                            <ul>
                                <li><a href="#">了解小米</a></li>
                                <li><a href="#">加入小米</a></li>
                                <li><a href="#">投资者关系</a></li>
                            </ul>
                        </li>
                        <li>
                            <p>关注我们</p>
                            <ul>
                                <li><a href="#">新浪微博</a></li>
                                <li><a href="#">官方微信</a></li>
                                <li><a href="#">联系我们</a></li>
                            </ul>
                        </li>
                        <li>
                            <p>特色服务</p>
                            <ul>
                                <li><a href="#">F码通道</a></li>
                                <li><a href="#">礼物码</a></li>
                                <li><a href="#">防伪查询</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="footer_item_right">
                    <p class="phone">400-100-5678</p>
                    <p class="date">周一至周日 8:00-12:00<br/>(仅收市话费)</p>
                    <a href="#" class="btn-relative"><i class="iconfont icon-lianxi1"></i> 联系客服</a>
                </div>
            </div>
            <!-- 底部列表 end-->
            <!-- 底部说明 start -->
            <div class="footer_desc">
                <div class="footer_desc_con con_width">
                    <div class="logo">
                        <img src="/home/images/mi-logo.png" alt="MIlogo" title="小米官网">
                    </div>
                    <div class="desc_con_item">
                        <div class="desc_con_item_detail clearfix">
                            <ul>
                                <li><a href="#">小米商城</a></li>
                                <li><a href="#">MIUI</a></li>
                                <li><a href="#">米家</a></li>
                                <li><a href="#">多看</a></li>
                                <li><a href="#">游戏</a></li>
                                <li><a href="#">路由器</a></li>
                                <li><a href="#">米粉卡</a></li>
                                <li><a href="#">政企服务</a></li>
                                <li><a href="#">小米天猫店</a></li>
                                <li><a href="#">隐私政策</a></li>
                                <li><a href="#">问题反馈</a></li>
                                <li><a href="#">廉正举报</a></li>
                                <li><a href="#">Select Region</a></li>
                                <li><a href="/home/link" style="color:red">友情链接</a></li>
                            </ul>
                        </div>
                        <p class="desc_con_txt">
                            &copy;<a href="#">mi.com</a> 京ICP证110507号 
                            <a href="#">京ICP备10046444号</a>
                            <a href="#">京公网安备11010802020134号 </a>
                            <a href="#">京网文[2017]1530-131号</a>
                            <br/>
                             违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试
                        </p>
                    </div>
                    <div class="desc_con_links">
                        <img src="/home/images/links/truste.png"/>
                        <img src="/home/images/links/v-logo-2.png"/>
                        <img src="/home/images/links/v-logo-1.png"/>
                        <img src="/home/images/links/v-logo-3.png"/>
                        <img src="/home/images/links/ba10428a4f9495ac310fd0b5e0cf8370.png"/>
                    </div>
                </div>
                <div class="slogan ir con_width">探索黑科技，小米为发烧而生</div>
            </div>
            <!-- 底部说明 end -->
        </div>
        <!-- 底部 end -->
    </div>
    <script type="text/javascript" charset="utf-8" src="/home/js/index.js"></script>
</body>
</html>
<script type="text/javascript">
    $('#userspan').mouseover(function(){
        $('.user-menu').css('display','block');
        $('.user-name').css('background-color','white');
        $('.user-name').css('color','#ff6700');


        $('.user-menu li').mouseover(function(){
            $(this).css('background-color','#f5f5f5');
            $(this).css('color','#ff6700');
        });


        $('.user-menu li a').mouseover(function(){
            $(this).css('color','#ff6700');
        });
    });


    $('#userspan').mouseout(function(){
        $('.user-menu').css('display','none');
        $('.user-name').css('background-color','');
        $('.user-name').css('color','#b0b0b0');
        $('.user-menu li').css('background-color','');
        $('.user-menu li a').css('color','');
    });
</script>
@section('js')

@show 