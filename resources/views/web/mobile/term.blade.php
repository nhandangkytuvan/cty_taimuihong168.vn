@php $setting_web = json_decode($data['setting']->setting_web,true) @endphp
@extends('layout.mobile')
@section('title')
    <title>{{ $data['term']->term_name }} - {{ $setting_web['web_name'] }}"</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ $setting_web['web_logo'] }}">
<meta id="metaDescription" name="description" content="{{ $data['term']->term_name }}">
<meta id="metaKeywords" name="keywords" content="{{ $data['term']->term_keyword }}">
@endsection('keyword')
@section('content')
    <section class="content-area">
        <main class="site-main archive">
            <div class="row tai-mui-hong">
                <div class="w33">
                    <div class="mui">
                        <h2><a href="{{ MyAPI::getUrlTerm(1) }}">Bệnh về mũi</a></h2>
                    </div>
                </div>
                <div class="w33">
                    <div class="tai">
                        <h2><a href="{{ MyAPI::getUrlTerm(9) }}">Bệnh về tai</a></h2>
                    </div>
                </div>
                <div class="w33">
                    <div class="hong">
                        <h2><a href="{{ MyAPI::getUrlTerm(17) }}">Bệnh về họng</a></h2>
                    </div>
                </div>
            </div>
            <div class="benh">
                <div class="row row1">
                    <div class="tieu-de">
                        <i class="fa fa-play-circle left" aria-hidden="true"></i>
                        <h2><a href="{{ url($data['term']->term_alias.'/'.$data['term']->id) }}">{{ $data['term']->term_name }}</a></h2>
                        <p class="right">
                            <a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en">Tìm hiểu chi tiết</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="trieu-chung2">
            @if($data['term']->parent)
                <div class="row">
                    <div class="w33">
                        <div class="trieu-trung">
                            <a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en">Triệu chứng</a>
                        </div>
                    </div>
                    <div class="w33">
                        <div class="nguyen-nhan">
                            <a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en">Nguyên nhân</a>
                        </div>
                    </div>
                    <div class="w33">
                        <div class="nguy-hai">
                            <a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en">Nguy hại</a>
                        </div>
                    </div>
                    <div class="w33">
                        <div class="dieu-tri">
                            <a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en">Điều trị</a>
                        </div>
                    </div>
                    <div class="w33">
                        <div class="chi-phi">
                            <a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en">Chi phí</a>
                        </div>
                    </div>
                    <div class="w33">
                        <div class="kiem-tra">
                            <a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en">Kiểm tra</a>
                        </div>
                    </div>
                </div>
            @endif
            </div>
            <div class="posts">
                @php 
                    $posts = $data['term']->post(); 
                    $posts = $posts->paginate(5);
                @endphp
                @foreach($posts as $post)
                <div class="border">
                    <article>
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="{{ url($post->post_alias.'/'.$post->id.'.htm') }}">{{ $post->post_name }}</a></h2>
                        </header><!-- .entry-header -->
                        <div class="entry-content">
                            <p class="description">
                                {{ $post->post_description }}
                                <a href="{{ url($post->post_alias.'/'.$post->id.'.htm') }}" class="xem-them">[ Chi tiết ]</a>
                            </p>
                            <div class="row">
                                <a class="right" href="{{ url($post->post_alias.'/'.$post->id.'.htm') }}">[ <span>Xem đầy đủ</span> ]</a>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
            <div class="row my_pagination">
                {{ $posts->links() }}
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
    </section><!-- .content-area -->
@endsection('content')