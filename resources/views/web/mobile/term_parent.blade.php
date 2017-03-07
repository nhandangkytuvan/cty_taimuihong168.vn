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
					<p class="right"><a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en">Tìm hiểu chi tiết</a></p>
				</div>
			</div>
		</div>
		<div class="table">
			<div class="tab-link">
				<table>
					@php
						$term_childrens = $data['term']->children;
					@endphp
					@foreach($term_childrens as $key=> $term_children)
						@if($key%4==0)
						<tr>
						@endif
						<td data-tab-id="{{ $term_children->id }}" {{ $key==0 ? 'class="active"' : '' }}>{{ $term_children->term_name }}</td>
						@if($key%4==3||$key==count($term_childrens))
						</tr>
						@endif
					@endforeach
				</table>
			</div>
		</div>
		<?php foreach ($term_childrens as $key => $term_children): ?>
		<div data-tab-content="{{ $term_children->id }}" class="tab-content {{ $key == 0 ? 'active' : '' }}">
			<div class="trieu-chung">
				<div class="row">
					<div class="w20">
						<a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en"><img src="{{ asset('public/images/mobile/archive-1.png') }}"></a>
						<a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en">Triệu chứng</a>
					</div>
					<div class="w20">
						<a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en"><img src="{{ asset('public/images/mobile/archive-2.png') }}"></a>
						<a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en">Nguy hại</a>
					</div>
					<div class="w20">
						<a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en"><img src="{{ asset('public/images/mobile/archive-3.png') }}"></a>
						<a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en">Nguyên nhân</a>
					</div>
					<div class="w20">
						<a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en"><img src="{{ asset('public/images/mobile/archive-4.png') }}"></a>
						<a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en">Điều trị</a>
					</div>
					<div class="w20">
						<a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en"><img src="{{ asset('public/images/mobile/archive-5.png') }}"></a>
						<a href="http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en">Chi phí</a>
					</div>
				</div>
			</div>
			<div class="posts">
				<div class="border">
                    <article>
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="#">Lorem ipsum dolor sit.</a></h2>
                        </header><!-- .entry-header -->
                        <div class="entry-content">
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates error itaque corporis fuga sint, esse sed sit ipsam porro rem quidem, cupiditate.
                                <a href="#" class="xem-them">[ Chi tiết ]</a>
                            </p>
                            <div class="row">
                                <a class="right" href="#">[ <span>Xem đầy đủ</span> ]</a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="border">
                    <article>
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="#">Lorem ipsum dolor sit.</a></h2>
                        </header><!-- .entry-header -->
                        <div class="entry-content">
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates error itaque corporis fuga sint, esse sed sit ipsam porro rem quidem, cupiditate.
                                <a href="#" class="xem-them">[ Chi tiết ]</a>
                            </p>
                            <div class="row">
                                <a class="right" href="#">[ <span>Xem đầy đủ</span> ]</a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="border">
                    <article>
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="#">Lorem ipsum dolor sit.</a></h2>
                        </header><!-- .entry-header -->
                        <div class="entry-content">
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates error itaque corporis fuga sint, esse sed sit ipsam porro rem quidem, cupiditate.
                                <a href="#" class="xem-them">[ Chi tiết ]</a>
                            </p>
                            <div class="row">
                                <a class="right" href="#">[ <span>Xem đầy đủ</span> ]</a>
                            </div>
                        </div>
                    </article>
                </div>
			</div>
			<div class="row my_pagination">
				<ul class="pagination">
				    <li>
				      	<a href="#" aria-label="Previous">
				        	<span aria-hidden="true">&laquo;</span>
				      	</a>
				    </li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				    <li>
				      	<a href="#" aria-label="Next">
				        	<span aria-hidden="true">&raquo;</span>
				      	</a>
				    </li>
				</ul>
			</div>
		</div>
		<?php endforeach ?>
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
	</main>
</section>
@endsection('content')
