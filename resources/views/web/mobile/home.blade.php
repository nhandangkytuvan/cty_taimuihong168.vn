@php $setting_web = json_decode($data['setting']->setting_web,true) @endphp
@extends('layout.mobile')
@section('title')
    <title>{{ $setting_web['web_name'] }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ asset('public/img/'.$setting_web['web_logo']) }}">
<meta id="metaDescription" name="description" content="{{ $setting_web['web_description'] }}">
<meta id="metaKeywords" name="keywords" content="{{ $setting_web['web_keyword'] }}">
@endsection('keyword')
@section('css')
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/home.css') }}">
@endsection('css')
@section('content')
    <div class="content-area">
        <main class="site-main">
            <div class="benh benh-ve-mui">
                <div class="row row1">
                    <div class="tieu-de" style="margin-top:10px;">
                        <h2><a href="{{ MyAPI::getUrlTerm(1) }}">Bệnh về mũi</a></h2>
                        <p class="right"><i class="fa fa-comments" aria-hidden="true"></i><a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en">Tìm hiểu chi tiết</a></p>
                    </div>
                </div>
                <div class="row row2">
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(2) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-3.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(2) }}">Viêm mũi</a>
                        </div>
                    </div>
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(3) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-4.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(3) }}">Viêm xoang <br> mũi</a>
                        </div>
                    </div>
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(8) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-3.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(8) }}">Viêm mũi <br> dị ứng</a>
                        </div>
                    </div>
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(6) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-4.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(6) }}">Polyp mũi </a>
                        </div>
                    </div>
                </div>
                <div class="row row3">
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(5) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-4.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(5) }}">Phì đại <br>cuốn mũi</a>
                        </div>
                    </div>
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(4) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-3.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(4) }}">Xuất huyết <br> mũi</a>
                        </div>
                    </div>
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(7) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-4.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(7) }}">Lệch vách <br> ngăn mũi</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="benh benh-ve-tai">
                <div class="row row1">
                    <div class="tieu-de">
                        <h2><a href="{{ MyAPI::getUrlTerm(9) }}">Bệnh về tai</a></h2>
                        <p class="right"><i class="fa fa-comments" aria-hidden="true"></i><a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en">Tìm hiểu chi tiết</a></p>
                    </div>
                </div>
                <div class="row row2">
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(10) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-3.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(10) }}">Điếc tai</a>
                        </div>
                    </div>
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(11) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-4.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(11) }}">Ù tai</a>
                        </div>
                    </div>
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(14) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-3.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(14) }}">Viêm tai <br>ngoài</a>
                        </div>
                    </div>
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(13) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-4.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(13) }}">Viêm tai<br>giữa</a>
                        </div>
                    </div>
                </div>
                <div class="row row3">
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(12) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-4.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(12) }}">Thủng màng<br>nhĩ</a>
                        </div>
                    </div>
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(15) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-3.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(15) }}">Giảm thính<br>lực</a>
                        </div>
                    </div>
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(16) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-4.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(16) }}">Viêm tai<br>xương chũm</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="benh benh-ve-hong">
                <div class="row row1">
                    <div class="tieu-de">
                        <h2><a href="{{ MyAPI::getUrlTerm(17) }}">Bệnh về họng</a></h2>
                        <p class="right"><i class="fa fa-comments" aria-hidden="true"></i><a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en">Tìm hiểu chi tiết</a></p>
                    </div>
                </div>
                <div class="row row2">
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(18) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-3.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(18) }}">Viêm họng</a>
                        </div>
                    </div>
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(19) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-4.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(19) }}">Viêm họng <br> hạt</a>
                        </div>
                    </div>
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(20) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-3.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(20) }}">Viêm amindan</a>
                        </div>
                    </div>
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(23) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-4.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(23) }}">Viêm VA</a>
                        </div>
                    </div>
                </div>
                <div class="row row3">
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(22) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-4.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(22) }}">Viêm họng<br>mãn tính</a>
                        </div>
                    </div>
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(24) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-3.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(24) }}">Polyp thanh<br>quản</a>
                        </div>
                    </div>
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(25) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-4.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(25) }}">Hạt xơ dây <br> thanh</a>
                        </div>
                    </div>
                    <div class="w25 left">
                        <div class="circle">
                            <a href="{{ MyAPI::getUrlTerm(21) }}" class="txt-ngan"><img class="img-responsive" src="{{ asset('public/images/mobile/bg-3.png') }}"></a>
                            <a href="{{ MyAPI::getUrlTerm(21) }}">Viêm thanh quản cấp</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="trieu-chung">
                <div class="tieu-de style1">
                    <h2>Tự kiểm tra bệnh</h2>
                </div>
                <div class="row row1">
                    <div class="w25">
                        <a href="{{ MyAPI::getUrlPost(3097) }}"><img class="img-responsive" src="{{ asset('public/images/mobile/icon-2.png') }}"></a>
                        <a href="{{ MyAPI::getUrlPost(3097) }}">Chảy nước mũi</a>
                    </div>
                    <div class="w25">
                        <a href="{{ MyAPI::getUrlPost(3070) }}"><img class="img-responsive" src="{{ asset('public/images/mobile/icon-3.png') }}"></a>
                        <a href="{{ MyAPI::getUrlPost(3070) }}">Tắc mũi</a>
                    </div>
                    <div class="w25">
                        <a href="{{ MyAPI::getUrlPost(3053) }}"><img class="img-responsive" src="{{ asset('public/images/mobile/icon-4.png') }}"></a>
                        <a href="{{ MyAPI::getUrlPost(3053) }}">Hắt xì hơi</a>
                    </div>
                    <div class="w25">
                        <a href="{{ MyAPI::getUrlPost(3144) }}"><img class="img-responsive" src="{{ asset('public/images/mobile/icon-5.png') }}"></a>
                        <a href="{{ MyAPI::getUrlPost(3144) }}">Xuất huyết trong mũi</a>
                    </div>
                </div>
                <div class="row row2">
                    <div class="w25">
                        <a href="{{ MyAPI::getUrlPost(3043) }}"><img class="img-responsive" src="{{ asset('public/images/mobile/icon-6.png') }}"></a>
                        <a href="{{ MyAPI::getUrlPost(3043) }}">Đau tai</a>
                    </div>
                    <div class="w25">
                        <a href="{{ MyAPI::getUrlPost(3094) }}"><img class="img-responsive" src="{{ asset('public/images/mobile/icon-7.png') }}"></a>
                        <a href="{{ MyAPI::getUrlPost(3094) }}">Tai chảy mủ</a>
                    </div>
                    <div class="w25">
                        <a href="{{ MyAPI::getUrlPost(1136) }}"><img class="img-responsive" src="{{ asset('public/images/mobile/icon-8.png') }}"></a>
                        <a href="{{ MyAPI::getUrlPost(1136) }}">Trong tai có âm thanh</a>
                    </div>
                    <div class="w25">
                        <a href="{{ MyAPI::getUrlPost(3054) }}"><img class="img-responsive" src="{{ asset('public/images/mobile/icon-9.png') }}"></a>
                        <a href="{{ MyAPI::getUrlPost(3054) }}">Suy giảm thính lực</a>
                    </div>
                </div>
                <div class="row row3">
                    <div class="w25">
                        <a href="{{ MyAPI::getUrlPost(3014) }}"><img class="img-responsive" src="{{ asset('public/images/mobile/icon-10.png') }}"></a>
                        <a href="{{ MyAPI::getUrlPost(3014) }}">Họng có dị vật</a>
                    </div>
                    <div class="w25">
                        <a href="{{ MyAPI::getUrlPost(3051) }}"><img class="img-responsive" src="{{ asset('public/images/mobile/icon-11.png') }}"></a>
                        <a href="{{ MyAPI::getUrlPost(3051) }}">Sưng đau họng</a>
                    </div>
                    <div class="w25">
                        <a href="{{ MyAPI::getUrlPost(3125) }}"><img class="img-responsive" src="{{ asset('public/images/mobile/icon-12.png') }}"></a>
                        <a href="{{ MyAPI::getUrlPost(3125) }}">Khô ngứa họng</a>
                    </div>
                    <div class="w25">
                        <a href="{{ MyAPI::getUrlPost(3099) }}"><img class="img-responsive" src="{{ asset('public/images/mobile/icon-13.png') }}"></a>
                        <a href="{{ MyAPI::getUrlPost(3099) }}">Khàn tiếng</a>
                    </div>
                </div>
            </div>
            <div class="ky-thuat-tien-tien">
                <div class="tieu-de style1">
                    <h2><a href="{{ MyAPI::getUrlTerm(27) }}">Kỹ thuật tiên tiến</a></h2>
                </div>
                <div class="thu-thuat">
                    <div class="row">
                        <div class="w50">
                            <div class="bg bg1">
                                <a href="{{ MyAPI::getUrlPost(688) }}">
                                    Thủ thuật xóa bỏ xâm lấn tối thiểu JCIC của Mỹ
                                </a>
                            </div>
                        </div>
                        <div class="w50">
                            <div class="bg bg2">
                                <a href="{{ MyAPI::getUrlPost(390) }}">
                                    Thủ thuật hình thành vách ngăn mũi STORZ của Đức
                                </a>
                            </div>
                        </div>
                        <div class="w50">
                            <div class="bg bg2">
                                <a href="{{ MyAPI::getUrlPost(396) }}">
                                    Phương pháp xâm lấn tối thiểu CWC của Mỹ
                                </a>
                            </div>
                        </div>
                        <div class="w50">
                            <div class="bg bg4">
                                <a href="{{ MyAPI::getUrlPost(368) }}">
                                    Hệ thống xâm lấn tối thiểu động lực xoay tròn IPC Mỹ
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img-adv">
                <div class="row">
                    <a href="{{ MyAPI::getUrlTerm(27) }}"><img class="img-responsive" src="{{ asset('public/images/mobile/img-1.png') }}"></a>
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
                            <a href="tel:(043) 393 88 99">Số điện thoại ： 043 393 8899</a>
                        </div>
                    </div>
                </div>
            </div>
        </main><!-- .site-main -->
    </div><!-- .content-area -->
@endsection('content')