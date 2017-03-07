@php $setting_web = json_decode($data['setting']->setting_web,true) @endphp
@extends('layout.mobile')
@section('title')
	<title>{{ $data['post']->post_name }} - {{ $setting_web['web_name'] }}</title>
@endsection('title')
@section('keyword')
@if($data['post']->post_avatar)
<meta property="og:image" content="{{ asset('public/img/'.$data['post']->post_avatar) }}">
@else
<meta property="og:image" content="{{ asset('public/img/'.$setting_web['web_logo']) }}">
@endif
<meta id="metaDescription" name="description" content="{{ $data['post']->post_description }}">
<meta id="metaKeywords" name="keywords" content="{{ $data['post']->post_keyword }}">
@endsection('keyword')
@section('css')
@endsection('css')
@section('content')
	<div class="content-area">
		<main class="site-main archive single">
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
			<div class="crud">
				@if($term = $data['post']->term)
					<a href="{{ url($term->term_alias.'/'.$term->id) }}">{{ $term->term_name }}</a>
				@endif			
			</div>
			<div class="content-single">
				<h1 class="entry-title">{{ $data['post']->post_name }}</h1>
				{!! $data['post']->post_detail !!}
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
			<div class="list-post-quan-tam">
				<div class="tieu-de style1">
					<h2><a>Bạn đọc lên quan tâm.</a></h2>
				</div>
				<div>
					<ul>
						<li>
							<a href="#">
								<img src="{{ asset('public/images/mobile/icon-next.png') }}">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quas porro impedit.
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('public/images/mobile/icon-next.png') }}">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quas porro impedit.
							</a>
						</li>
						<li>
							<a href="#">
								<img src="{{ asset('public/images/mobile/icon-next.png') }}">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quas porro impedit.
							</a>
						</li>
					</ul>
				</div>
			</div>
		</main>
	</div>
@endsection('content')