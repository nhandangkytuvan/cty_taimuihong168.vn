<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <meta name="author" content="">
    @yield('keyword')
    <link rel="shortcut icon" href="{{ asset('public/img/'.$setting->web_icon) }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/jssor/jssor.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/home.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/page.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/single.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/archive.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/pagination.css') }}">
	@yield('css')
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.popupoverlay.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jssor/jssor.slider-21.1.5.mini.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jssor/jssor.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/mobile/mobile.js') }}"></script>
	@yield('js')
</head>
<body>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding phone-tuvan">
			<p>
				<span>Điện thoại :</span> 
				<a href="tel:043 393 8899">043 393 8899</a> - <a href="tel:043 376 8899">043 376 8899</a>
			</p>
		</div><!-- .site-branding -->
		<div class="logo">
			<h1><a href="tel:0433938899"><img class="img-responsive" src="{{ asset('public/images/mobile/header.png') }}"></a></h1>
		</div>
	</header>
	<nav class="menu" id="header-menu">
		<a href="{{ url('/') }}" class="icon-home w1"><i class="fa fa-home" aria-hidden="true"></i></a>
		<a href="{{ MyAPI::getUrlPost(1) }}" class="w2">Giới thiệu</a>
		<a href="{{ MyAPI::getUrlTerm(26) }}" class="w2">Kỹ thuật</a>
		<a href="{{ MyAPI::getUrlTerm(27) }}" class="w2">Thiết bị</a>
		<a href="{{ MyAPI::getUrlPost(2) }}" class="w2">Địa chỉ</a>
	</nav>
	<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 640px; height: 245px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url({{ asset('public/js/global/jssor/loading.gif') }}) no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 640px; height: 245px; overflow: hidden;">
            <div data-p="110.625" style="display: none;">
                <a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en" target="_blank">
                    <img data-u="image" src="{{ asset('public/images/mobile/slide/banner-mobile4.png') }}" />
                </a>
            </div>
            <div data-p="110.625" style="display: none;">
                <a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en" target="_blank">
                    <img data-u="image" src="{{ asset('public/images/mobile/slide/banner-mobile3.gif') }}" />
                </a>
            </div>        
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb11" style="bottom:16px;right:16px;">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:11px;height:11px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora19l" style="top:0px;left:8px;width:50px;height:50px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora19r" style="top:0px;right:8px;width:50px;height:50px;" data-autocenter="2"></span>
    </div>
	<div id="content" class="site-content">
		@yield('content')	
        <div class="vi-du-hoi-phuc global-3">
            <div class="tieu-de style1">
                <h2><a href="{{ MyAPI::getUrlTerm(28) }}">VÍ DỤ HỒI PHỤC</a></h2>
            </div>
            <div class="row flex flex-wrap">
                @foreach($post_hoiphucs as $post_hoiphuc)
                    <div class="w50">
                        <a href="{{ url($post_hoiphuc->post_alias.'/'.$post_hoiphuc->id.'.htm') }}">
                            <img src="{{ asset('public/img/'.$post_hoiphuc->post_avatar) }}" class="img-responsive" alt="avuong"></a>
                        <a href="{{ url($post_hoiphuc->post_alias.'/'.$post_hoiphuc->id.'.htm') }}">{{ $post_hoiphuc->post_name }}</a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="img-adv">
            <div class="row" style="display: none;">
                <a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en"><img src="{{ asset('public/images/mobile/img-1.png') }}"></a>
            </div>
            <div class="row">
                <div class="w30">
                    <div class="bg1">
                        <a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en">Tư vấn</a>
                    </div>
                </div>
                <div class="w70">
                    <div class="bg2">
                        <a href="tel:043 393-8899">Số điện thoại ： 043 393-8899</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="thiet-bi-benh-vien">
            <div class="tieu-de style1">
                <h2><a href="{{ MyAPI::getUrlTerm(27) }}">Thiết bị bệnh viện</a></h2>
            </div>
            <div class="row">
                <div class="row">
                    <div class="w50">
                        <a href="{{ MyAPI::getUrlPost(186) }}"><img src="{{ asset('public/images/mobile/maymoc-1.png') }}"></a>
                    </div>
                    <div class="w50">
                        <a href="{{ MyAPI::getUrlPost(192) }}"><img src="{{ asset('public/images/mobile/maymoc-2.png') }}"></a>
                    </div>
                    <div class="w50">
                        <a href="{{ MyAPI::getUrlPost(213) }}"><img src="{{ asset('public/images/mobile/maymoc-3.png') }}"></a>
                    </div>
                    <div class="w50">
                        <a href="{{ MyAPI::getUrlPost(203) }}"><img src="{{ asset('public/images/mobile/maymoc-4.png') }}"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="img-adv">
            <div class="row">
                <a href="{{ MyAPI::getUrlTerm(27) }}"><img class="img-responsive" src="{{ asset('public/images/mobile/img-2.png') }}"></a>
            </div>
        </div>
        <div class="img-adv">
            <div class="row">
                <div class="w30">
                    <div class="bg1">
                        <a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en">Tư vấn</a>
                    </div>
                </div>
                <div class="w70">
                    <div class="bg2">
                        <a href="tel:043 393-8899">Số điện thoại ： 043 393-8899</a>
                    </div>
                </div>
            </div>
        </div>
	</div><!-- .site-content -->
	<footer id="colophon" class="site-footer footer" role="contentinfo">
		<div class="site-info">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 footer">
                        <h2>phòng khám đa khoa 168 hà nội</h2>
                        <h3 class="khoataimuihong">Chuyên Khoa Tai Mũi Họng</h3>
                        <h4 class="address">
                            <a title="Google maps địa chỉ Phòng khám 168 Hà Nội" href="https://www.google.com/maps/place/Ph%C3%B2ng+Kh%C3%A1m+%C4%90a+Khoa+168+H%C3%A0+N%E1%BB%99i/@20.9395622,105.842115,16.75z/data=!4m5!3m4!1s0x3135ad96163b2d43:0xf38bf1e69bcc4a2c!8m2!3d20.937455!4d105.845222">Km 12 , Đường Ngọc Hồi, Huyện Thanh Trì, Hà Nội</a>
                        </h4>
                        <p>
                            Số điện thoại tư vấn :
                            <a title="Gặp tư vấn trực tiếp 7h-22h" href="tel:043 393-8899">043 393-8899</a>
                        </p>
                    </div>
                </div>
            </div>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->
	<div class="footer-bottom" id="footer-bottom">
        <div class="row">
            <div class="w33 comment">
                <a title="Gặp tư vấn trực tiếp 7h-22h" href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en"><i class="fa fa-comments" aria-hidden="true"></i>tư vấn</a>
            </div>
            <div class="w33 phone">
                <a title="043 393-8899" href="tel:043 393-8899"><i class="fa fa-phone" aria-hidden="true"></i>Gọi điện</a>
            </div>
            <div class="w33 calendar2">
                <a title="Gặp tư vấn trực tiếp 7h-22h" href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en"><i class="fa fa-calendar" aria-hidden="true"></i>Đặt lịch hẹn</a>
            </div>
        </div>
    </div>
	<div id="my_popup">
    <p>Bác sỹ đang yêu cầu được chát với bạn</p>
    <a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en">Đồng ý</a>
    <a class="my_popup_close">Từ chối</a>
	</div>
	<script language="javascript" src="http://tv.suckhoe168.com/JS/LsJS.aspx?siteid=MCG56116959&float=1&lng=en"></script>
</body>
</html>