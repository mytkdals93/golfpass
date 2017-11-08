<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport"
		  content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>골프패스</title>
	<!-- Bootstrap core CSS -->
	<script src="/public/sangmin/js/prefixfree.min.js"></script>
	<link rel="stylesheet" href="/public/sangmin/dist/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
	<link rel="stylesheet" href="/public/css/main.css">

	<style>
		::-webkit-scrollbar {
			display: none;
		}

	</style>
</head>

<body class="">
<div class="menu-container position-fixed">
	<div class="menu-sliders"></div>
	<div class="menu-sliders"></div>
	<div class="menu-sliders"></div>
	<div class="menu">
		<ul class="list-unstyled">
			<li>
				<a>Home</a>
			</li>
			<li>
				<a>About </a>
			</li>
			<li>
				<a>Work</a>
			</li>
			<li>
				<a>Contact</a>
			</li>
		</ul>
	</div>
</div>

<header id="header" class="container-fluid">
	<!--  NOTE mobile -->
	<nav id='sm-nav' class="row no-gutters justify-content align-items-stretch d-sm-none panel-nav">
		<div id="logo" class='col-3 justify-content-center d-flex align-self-center align-items-center'>
			<img src="/public/sangmin/img/icon/logo_mobile.png" class="d-md-none" alt="">
		</div>
		<div id='nav-icon-box' class="offset-2 col-5 d-flex align-items-stretch justify-content-end">
			<div id="search" class="d-flex align-items-center">
				<span><i class="xi xi-search"></i></span>
			</div>
			<div id="login" class="d-flex align-items-center">
				<span><i class="xi xi-lock"></i></span>
			</div>
			<div id="join" class="d-flex align-items-center">
				<span><i class="xi xi-user-plus"></i></span>
			</div>
		</div>
		<div class="col-2 ml-auto toggle"
			 onclick="$('body').toggleClass('menu-open'); $('.carousel-indicators').toggleClass('d-none d-flex');">
			<span><i class="xi xi-bars"></i></span>
		</div>
	</nav>
	<!--NOTE desktop,tablet nav-->
	<nav id='md-nav' class="row no-gutters justify-content align-items-stretch d-none d-sm-flex">
		<div id="logo" class='col-6 d-flex align-items-center'>
			<figure class="mb-0 d-flex align-items-center d-lg-none">
				<img src="/public/sangmin/img/icon/logo_mobile.png" class="" alt="">
			</figure>
			<figure class="mb-0 align-items-center d-none d-lg-flex">
				<img src="/public/sangmin/img/icon/logo.png" class="" alt="">
			</figure>
			<div id="search" class="d-flex align-items-center">
				<i class="xi xi-search"></i>
				<input type="text" placeholder="관심있는 나라나 골프장을 검색해보세요!">
			</div>
		</div>
		<div id='nav-icon-box' class="col  d-flex justify-content-end">
			<div id="login" class="d-flex align-items-center">
				<span><i class="xi xi-lock"></i></span>
				<p class="mb-0">로그인</p>
			</div>
			<div id="join" class="d-flex align-items-center">
				<span><i class="xi xi-user-plus"></i></span>
				<p class="mb-0">회원가입</p>
			</div>
		</div>
		<div class="col ml-auto toggle"
			 onclick="$('body').toggleClass('menu-open'); $('.carousel-indicators').toggleClass('d-none d-flex');">
			<span><i class="xi xi-bars"></i></span>
			<p class="d-none d-lg-block">메뉴</p>
		</div>
	</nav>
</header>
<div id="bg-div" style=""></div>
<section id="section1" class="main-section scroll-smooth">
	<article class="carousel slide" data-ride="carousel" data-interval="4000" id='section1-slide'>
		<ol class=" carousel-indicators d-flex flex-column align-items-center">
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="/public/sangmin/img/background/bg1.jpg" alt="" class="position-absolute d-block">
				<div class="content-box d-flex flex-column align-items-start justify-content-center justify-content-lg-end">
					<div class='title'>
						<h1><?=$product_main->name?></h1>
						<p>아랍에미레이트, 아부다비 - <?=$product_main->hole_count?>홀 / <?=$product_main->distance?>야드</p>
					</div>
					<div class="content">
						<p><span><i class="xi xi-star"></i><i class="xi xi-star"></i><i class="xi xi-star"></i><i
								class="xi xi-star"></i><i class="xi xi-star-o"></i></span>(리뷰 51개)
						</p>
						<p><?=$product_main->desc?></p>
					</div>
					<div class="btn-box d-flex align-items-center justify-content-center">
					<a href="<?=site_url(shop_product_uri."/get/{$product_main->id}")?>"><button>보러가기
						</button></a>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="/public/sangmin/img/background/bg2.jpg" alt="" class="position-absolute d-block">
				<div class="content-box d-flex flex-column align-items-start justify-content-center justify-content-lg-end">
					<div class='title'>
						<h1>웨이하이 CC</h1>
						<p>아랍에미레이트, 아부다비 - 18홀 / 5,170야드</p>
					</div>
					<div class="content">
						<p><span><i class="xi xi-star"></i><i class="xi xi-star"></i><i class="xi xi-star"></i><i
								class="xi xi-star"></i><i class="xi xi-star-o"></i></span>(리뷰 51개)
						</p>
						<p>청정삼림과 맑은 공기, 시야 가득히 펼쳐지는 태백산맥의 능선과 천혜의 자연환경을 배경으로 조성된 골프장으로서 고원 산악골프 코스가 빚어내는 상쾌한 드라이버 샷과 함께
							하는 라운딩은 이제껏 국내에서는 구경 할 수 없었던 색다른 묘미를 제공합니다.</p>
					</div>
					<div class="btn-box d-flex align-items-center justify-content-center">
						<button>보러가기
						</button>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="/public/sangmin/img/background/bg3.jpg" alt="" class="position-absolute d-block">
				<div class="content-box d-flex flex-column align-items-start justify-content-center justify-content-lg-end">
					<div class='title'>
						<h1>웨이하이 CC</h1>
						<p>아랍에미레이트, 아부다비 - 18홀 / 5,170야드</p>
					</div>
					<div class="content">
						<p><span><i class="xi xi-star"></i><i class="xi xi-star"></i><i class="xi xi-star"></i><i
								class="xi xi-star"></i><i class="xi xi-star-o"></i></span>(리뷰 51개)
						</p>
						<p>청정삼림과 맑은 공기, 시야 가득히 펼쳐지는 태백산맥의 능선과 천혜의 자연환경을 배경으로 조성된 골프장으로서 고원 산악골프 코스가 빚어내는 상쾌한 드라이버 샷과 함께
							하는 라운딩은 이제껏 국내에서는 구경 할 수 없었던 색다른 묘미를 제공합니다.</p>
					</div>
					<div class="btn-box d-flex align-items-center justify-content-center">
						<button>보러가기
						</button>
					</div>
				</div>
			</div>
		</div>
	</article>
	<section id="time-border">
		<div id="bar">
		</div>
		<div id="current"></div>
	</section>
	<section id='scroll-alert' class='d-flex flex-column align-items-center'>
		<span>스크롤을 내려주세요</span>
		<i class="xi xi-angle-down"></i>
	</section>
	<section id='sns-box' class='d-flex align-items-center justify-content-around'>
		<span><i class="xi xi-facebook-official"></i></span>
		<span><i class="xi xi-instagram"></i></span>
		<span><i class="xi xi-naver"></i></span>
	</section>
</section>

<section id="section2" class="mb-5 main-section scroll-smooth container-fluid d-flex align-items-center">
	<article class="w-100 p-xl-4">
		<div class="row no-gutters main-section-title">
			<h4>나라별 골프장</h4>
		</div>
		<!--NOTE 나라별 모바일 구간 -->
		<div class="row no-gutters flex-column d-md-none">
			<div class="col-12 d-flex justify-content-center mb-2 bg-dark" style="height: 180px;">
				<!--	<img class="w-100" src="/public/sangmin/img/golf_course_1.jpg" alt="">-->
				<div class="mobile-content position-absolute d-flex flex-column align-items-center justify-content-end">
					<h3>러시아</h3>
					<p>모스크바</p>
				</div>
			</div>
		</div>
		<!--NOTE 나라별 slide 테블릿 ~ 구간 -->
		<div class="row flex-nowrap d-none d-md-flex position-relative pt-5">
			<div id="jssor_1"
				 style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:440px;overflow:hidden;visibility:hidden;">
				<!-- Loading Screen -->
				<div data-u="slides"
					 style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:440px;overflow:hidden;">
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
					<div class="slide-item d-flex">
						<img src="/public/sangmin/img/KakaoTalk_20171107_104842283.jpg" class="w-100"/>
						<div class="position-absolute content d-flex flex-column justify-content-center align-items-center">
							<h3>러시아</h3>
							<p>모스크바</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
</section>
<section id="section3" class="pt-49 pt-xl-0 mb-5 container-fluid align-items-start align-items-md-center">
	<article class="w-100 p-xl-4">
		<div class="row no-gutters main-section-title">
			<h4>골프패스 패널이 추천하는 골프장</h4>
		</div>
		<div class="row position-relative pt-5 items justify-content-around">
			<div class="col-12 col-md-6 col-lg-3 mb-3 d-flex justify-content-center item">
				<figure>
					<div class="position-relative">
						<img class='rounded-top ' src="/public/sangmin/img/background/bg1.jpg" alt="" width="100%">
						<span class="position-absolute text-light price">319,000원</span>
					</div>
					<div class="d-flex align-items-center p-1 text-light rounded-top content">
						<i class="xi-marker-check ml-1 mr-1"></i>
						<p class=" mb-0 ">골프장과 숙박 시설이 함께 있는 상품입니다.</p>
					</div>
					<figcaption class="rounded-bottom d-flex align-items-center justify-content-between p-3 bg-light">
						<div>
							<h3>앙시나 골프텔</h3>
							<p class="mb-0">Angsana golftel</p>
						</div>
						<div class="d-flex flex-column align-items-center">
							<span><i class="xi-star"></i></span>
							<span>4.7</span>
						</div>
					</figcaption>
				</figure>
			</div>
			<div class="col-12 col-md-6 col-lg-3  mb-3 d-flex justify-content-center item">
				<figure>
					<div class="position-relative">
						<img class='rounded-top ' src="/public/sangmin/img/background/bg1.jpg" alt="" width="100%">
						<span class="position-absolute text-light price">319,000원</span>
					</div>
					<div class="d-flex align-items-center p-1 text-light rounded-top content">
						<i class="xi-marker-check ml-1 mr-1"></i>
						<p class=" mb-0 ">골프장과 숙박 시설이 함께 있는 상품입니다.</p>
					</div>
					<figcaption class="rounded-bottom d-flex align-items-center justify-content-between p-3 bg-light">
						<div>
							<h3>앙시나 골프텔</h3>
							<p class="mb-0">Angsana golftel</p>
						</div>
						<div class="d-flex flex-column align-items-center">
							<span><i class="xi-star"></i></span>
							<span>4.7</span>
						</div>
					</figcaption>
				</figure>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mb-3 d-flex justify-content-center item">
				<figure>
					<div class="position-relative">
						<img class='rounded-top ' src="/public/sangmin/img/background/bg1.jpg" alt="" width="100%">
						<span class="position-absolute text-light price">319,000원</span>
					</div>
					<div class="d-flex align-items-center p-1 text-light rounded-top content">
						<i class="xi-marker-check ml-1 mr-1"></i>
						<p class=" mb-0 ">골프장과 숙박 시설이 함께 있는 상품입니다.</p>
					</div>
					<figcaption class="rounded-bottom d-flex align-items-center justify-content-between p-3 bg-light">
						<div>
							<h3>앙시나 골프텔</h3>
							<p class="mb-0">Angsana golftel</p>
						</div>
						<div class="d-flex flex-column align-items-center">
							<span><i class="xi-star"></i></span>
							<span>4.7</span>
						</div>
					</figcaption>
				</figure>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mb-3 d-flex justify-content-center item">
				<figure>
					<div class="position-relative">
						<img class='rounded-top ' src="/public/sangmin/img/background/bg1.jpg" alt="" width="100%">
						<span class="position-absolute text-light price">319,000원</span>
					</div>
					<div class="d-flex align-items-center p-1 text-light rounded-top content">
						<i class="xi-marker-check ml-1 mr-1"></i>
						<p class=" mb-0 ">골프장과 숙박 시설이 함께 있는 상품입니다.</p>
					</div>
					<figcaption class="rounded-bottom d-flex align-items-center justify-content-between p-3 bg-light">
						<div>
							<h3>앙시나 골프텔</h3>
							<p class="mb-0">Angsana golftel</p>
						</div>
						<div class="d-flex flex-column align-items-center">
							<span><i class="xi-star"></i></span>
							<span>4.7</span>
						</div>
					</figcaption>
				</figure>
			</div>
		</div>
		</div>

	</article>
</section>
<section id="section4" class="mb-5 container-fluid d-flex align-items-start align-items-md-center">
	<article class="w-100 p-xl-4">
		<div class="row no-gutters main-section-title mb-5">
			<h4>테마별 골프장</h4>
		</div>
		<div class="row no-gutters flex-column d-sm-none">
			<div class="col-12 d-flex justify-content-center mb-2 bg-dark" style="height: 180px;">
				<!--	<img class="w-100" src="/public/sangmin/img/golf_course_1.jpg" alt="">-->
				<div class="mobile-content position-absolute d-flex flex-column align-items-center justify-content-end">
					<h1>이달의 인기 코스</h1>
					<p>트렌디한 코스를 경험하고 싶다면</p>
				</div>
			</div>
		</div>
		<div class="row no-gutters d-none d-sm-flex">
			<div class="col-12 col-lg-6 position-relative ">
				<img src="/public/sangmin/img/theme_img1.jpg" alt="" width="100%">
				<div class='position-absolute text-light'>
					<h3>이달의 인기 코스</h3>
					<p>
						트렌디한 코스를 경험하고 싶다면
					</p>
				</div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="row no-gutters">
					<div class="col-6 position-relative">
						<img src="/public/sangmin/img/theme_img2.jpg" alt="" width="100%">
						<div class='position-absolute text-light'>
							<h3>골프+숙박 패키지</h3>
							<p>
								원클릭으로 여행 플랜 완성!
							</p>
						</div>
					</div>
					<div class="col-6 position-relative">
						<img src="/public/sangmin/img/theme_img3.jpg" alt="" width="100%">
						<div class='position-absolute text-light'>
							<h3>2인 플레이</h3>
							<p>
								2인 플레이에 딱 맞는 코스
							</p>
						</div>
					</div>
					<div class="col-6 position-relative">
						<img src="/public/sangmin/img/theme_img4.jpg" alt="" width="100%">
						<div class='position-absolute text-light'>
							<h3>시설이 고저스한</h3>
							<p>
								여행은 잠자리가 편해야지
							</p>
						</div>
					</div>
					<div class="col-6 position-relative">
						<img src="/public/sangmin/img/theme_img5.jpg" alt="" width="100%">
						<div class='position-absolute text-light'>
							<h3>토너먼트 개최 코스</h3>
							<p>
								평론가에게 인정받은
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
</section>
<section id="section5" class="mb-5  container-fluid align-items-start align-items-md-center">
	<article class="w-100 p-xl-4">
		<div class="row no-gutters main-section-title mb-5">
			<h4>순위별 골프장</h4>
		</div>
		<div class="d-flex mb-5 category flex-wrap">
			<button class="btn btn-outline-light btn-sm active">#평점이 높은 코스</button>
			<button class="btn btn-outline-light btn-sm">#전략성이 요구되는 코스</button>
			<button class="btn btn-outline-light btn-sm">#식사가 맛있는 코스</button>
			<button class="btn btn-outline-light btn-sm">#가성비 좋은 코스</button>
			<button class="btn btn-outline-light btn-sm">#시설이 화려한 코스</button>
		</div>
		<div class="row no-gutters">
			<div class="col-12 col-lg-6">
				<!--1위부터 3위까지 아래 div.contents반복-->
				<div class="col-12 contents">
					<div class="d-flex align-items-center p-4 mb-3"
						 style="height: 150px; background-image: url(/public/sangmin/img/background/bg1.jpg)">
						<div class='d-flex align-items-center justify-content-center bg-light rounded-circle'>
							<span>1</span>
						</div>
						<div class="d-flex flex-column ml-4 text-light">
							<h1>힐데스 하임 CC</h1>
							<p class="mb-0">언노운 호텔 추석 연휴 패키지</p>
						</div>
					</div>
				</div>
				<div class="col-12 contents">
					<div class="d-flex align-items-center p-4 mb-3"
						 style="height: 150px; background-image: url(/public/sangmin/img/background/bg1.jpg)">
						<div class='d-flex align-items-center justify-content-center bg-light rounded-circle'>
							<span>1</span>
						</div>
						<div class="d-flex flex-column ml-4 text-light">
							<h1>힐데스 하임 CC</h1>
							<p class="mb-0">언노운 호텔 추석 연휴 패키지</p>
						</div>
					</div>
				</div>
				<div class="col-12 contents">
					<div class="d-flex align-items-center p-4 mb-3"
						 style="height: 150px; background-image: url(/public/sangmin/img/background/bg1.jpg)">
						<div class='d-flex align-items-center justify-content-center bg-light rounded-circle'>
							<span>1</span>
						</div>
						<div class="d-flex flex-column ml-4 text-light">
							<h1>힐데스 하임 CC</h1>
							<p class="mb-0">언노운 호텔 추석 연휴 패키지</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-lg-6">
				<ul class="list-unstyled">
					<!--4위부터 ~ li반복 -->
					<li class='p-3 text-light list-after-four'>
						<div class="d-flex justify-content-between align-items-center">
							<div>
								<p class='mb-0'><span class='mr-3 ml-2'>4</span> 힐데스 하임 CC</p>
							</div>
							<div>
								<span>베트남,호치민</span>
							</div>
						</div>
					</li>
					<li class='p-3 text-light list-after-four'>
						<div class="d-flex justify-content-between align-items-center">
							<div>
								<p class='mb-0'><span class='mr-3 ml-2'>4</span> 힐데스 하임 CC</p>
							</div>
							<div>
								<span>베트남,호치민</span>
							</div>
						</div>
					</li>
					<li class='p-3 text-light list-after-four'>
						<div class="d-flex justify-content-between align-items-center">
							<div>
								<p class='mb-0'><span class='mr-3 ml-2'>4</span> 힐데스 하임 CC</p>
							</div>
							<div>
								<span>베트남,호치민</span>
							</div>
						</div>
					</li>
					<li class='p-3 text-light list-after-four'>
						<div class="d-flex justify-content-between align-items-center">
							<div>
								<p class='mb-0'><span class='mr-3 ml-2'>4</span> 힐데스 하임 CC</p>
							</div>
							<div>
								<span>베트남,호치민</span>
							</div>
						</div>
					</li>
					<li class='p-3 text-light list-after-four'>
						<div class="d-flex justify-content-between align-items-center">
							<div>
								<p class='mb-0'><span class='mr-3 ml-2'>4</span> 힐데스 하임 CC</p>
							</div>
							<div>
								<span>베트남,호치민</span>
							</div>
						</div>
					</li>
				</ul>
				<!--전체 순위 보러 가기 -->
				<div class="row justify-content-center align-items-center">
					<a href="#" class="d-flex justify-content-center align-items-center" style='text-decoration: none'>
						<p class="mb-0 text-light mr-3">
							전체 순위 보러가기
						</p>
						<span style='width: 30px;height: 30px'
							  class="rounded-circle bg-light d-flex align-items-center justify-content-center"><i
								class="xi xi-angle-right text-dark"></i></span>
					</a>
				</div>
			</div>

		</div>
	</article>
</section>
<section id="section6" class="mb-5 mt-5 container-fluid align-items-start align-items-md-center">
	<article class="w-100 p-xl-4">
		<div class="row no-gutters main-section-title">
			<h4>골프패스 패널 소개</h4>
		</div>
		<div class="row no-gutters justify-content-start">
			<!--패널 반복 아래 div.panel-item-->
			<div class="col-12 col-lg-6 mb-4 d-flex panel-item">
				<div class="d-none d-md-block">
					<img src="/public/sangmin/img/profile/pic.jpg" class="rounded" alt="" height="110px">
				</div>
				<div class="bg-light rounded d-flex flex-column justify-content-center align-middle position-relative panel-content w-100">
					<div class="position-absolute bg-light trans-box d-none d-md-block">
					</div>
					<h4 class="mb-1">김지윤</h4>
					<p class="mb-0" style='max-width: 400px; font-size: 0.9rem; color:#a5a5a5;'>아동병원을 운영하고 있는 소아과의사입니다.
						인문학을 좋아하여 책을 읽고 글을 써서 나누고 </p>
					<div class="position-absolute review-box">
                            <span>
                                <i class="xi-pen"></i> 273개
                            </span></div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mb-4 d-flex panel-item">
				<div class="d-none d-md-block">
					<img src="/public/sangmin/img/profile/pic.jpg" class="rounded" alt="" height="110px">
				</div>
				<div class="bg-light rounded d-flex flex-column justify-content-center align-middle position-relative panel-content w-100">
					<div class="position-absolute bg-light trans-box d-none d-md-block">
					</div>
					<h4 class="mb-1">김지윤</h4>
					<p class="mb-0" style='max-width: 400px; font-size: 0.9rem; color:#a5a5a5;'>아동병원을 운영하고 있는 소아과의사입니다.
						인문학을 좋아하여 책을 읽고 글을 써서 나누고 </p>
					<div class="position-absolute review-box">
                            <span>
                                <i class="xi-pen"></i> 273개
                            </span></div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mb-4 d-flex panel-item">
				<div class="d-none d-md-block">
					<img src="/public/sangmin/img/profile/pic.jpg" class="rounded" alt="" height="110px">
				</div>
				<div class="bg-light rounded d-flex flex-column justify-content-center align-middle position-relative panel-content w-100">
					<div class="position-absolute bg-light trans-box d-none d-md-block">
					</div>
					<h4 class="mb-1">김지윤</h4>
					<p class="mb-0" style='max-width: 400px; font-size: 0.9rem; color:#a5a5a5;'>아동병원을 운영하고 있는 소아과의사입니다.
						인문학을 좋아하여 책을 읽고 글을 써서 나누고 </p>
					<div class="position-absolute review-box">
                            <span>
                                <i class="xi-pen"></i> 273개
                            </span></div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mb-4 d-flex panel-item">
				<div class="d-none d-md-block">
					<img src="/public/sangmin/img/profile/pic.jpg" class="rounded" alt="" height="110px">
				</div>
				<div class="bg-light rounded d-flex flex-column justify-content-center align-middle position-relative panel-content w-100">
					<div class="position-absolute bg-light trans-box d-none d-md-block">
					</div>
					<h4 class="mb-1">김지윤</h4>
					<p class="mb-0" style='max-width: 400px; font-size: 0.9rem; color:#a5a5a5;'>아동병원을 운영하고 있는 소아과의사입니다.
						인문학을 좋아하여 책을 읽고 글을 써서 나누고 </p>
					<div class="position-absolute review-box">
                            <span>
                                <i class="xi-pen"></i> 273개
                            </span></div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mb-4 d-flex panel-item">
				<div class="d-none d-md-block">
					<img src="/public/sangmin/img/profile/pic.jpg" class="rounded" alt="" height="110px">
				</div>
				<div class="bg-light rounded d-flex flex-column justify-content-center align-middle position-relative panel-content w-100">
					<div class="position-absolute bg-light trans-box d-none d-md-block">
					</div>
					<h4 class="mb-1">김지윤</h4>
					<p class="mb-0" style='max-width: 400px; font-size: 0.9rem; color:#a5a5a5;'>아동병원을 운영하고 있는 소아과의사입니다.
						인문학을 좋아하여 책을 읽고 글을 써서 나누고 </p>
					<div class="position-absolute review-box">
                            <span>
                                <i class="xi-pen"></i> 273개
                            </span></div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mb-4 d-flex panel-item">
				<div class="d-none d-md-block">
					<img src="/public/sangmin/img/profile/pic.jpg" class="rounded" alt="" height="110px">
				</div>
				<div class="bg-light rounded d-flex flex-column justify-content-center align-middle position-relative panel-content w-100">
					<div class="position-absolute bg-light trans-box d-none d-md-block">
					</div>
					<h4 class="mb-1">김지윤</h4>
					<p class="mb-0" style='max-width: 400px; font-size: 0.9rem; color:#a5a5a5;'>아동병원을 운영하고 있는 소아과의사입니다.
						인문학을 좋아하여 책을 읽고 글을 써서 나누고 </p>
					<div class="position-absolute review-box">
                            <span>
                                <i class="xi-pen"></i> 273개
                            </span></div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mb-4 d-flex panel-item">
				<div class="d-none d-md-block">
					<img src="/public/sangmin/img/profile/pic.jpg" class="rounded" alt="" height="110px">
				</div>
				<div class="bg-light rounded d-flex flex-column justify-content-center align-middle position-relative panel-content w-100">
					<div class="position-absolute bg-light trans-box d-none d-md-block">
					</div>
					<h4 class="mb-1">김지윤</h4>
					<p class="mb-0" style='max-width: 400px; font-size: 0.9rem; color:#a5a5a5;'>아동병원을 운영하고 있는 소아과의사입니다.
						인문학을 좋아하여 책을 읽고 글을 써서 나누고 </p>
					<div class="position-absolute review-box">
                            <span>
                                <i class="xi-pen"></i> 273개
                            </span></div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mb-4 d-flex panel-item">
				<div class="d-none d-md-block">
					<img src="/public/sangmin/img/profile/pic.jpg" class="rounded" alt="" height="110px">
				</div>
				<div class="bg-light rounded d-flex flex-column justify-content-center align-middle position-relative panel-content w-100">
					<div class="position-absolute bg-light trans-box d-none d-md-block">
					</div>
					<h4 class="mb-1">김지윤</h4>
					<p class="mb-0" style='max-width: 400px; font-size: 0.9rem; color:#a5a5a5;'>아동병원을 운영하고 있는 소아과의사입니다.
						인문학을 좋아하여 책을 읽고 글을 써서 나누고 </p>
					<div class="position-absolute review-box">
                            <span>
                                <i class="xi-pen"></i> 273개
                            </span></div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mb-4 d-flex panel-item">
				<div class="d-none d-md-block">
					<img src="/public/sangmin/img/profile/pic.jpg" class="rounded" alt="" height="110px">
				</div>
				<div class="bg-light rounded d-flex flex-column justify-content-center align-middle position-relative panel-content w-100">
					<div class="position-absolute bg-light trans-box d-none d-md-block">
					</div>
					<h4 class="mb-1">김지윤</h4>
					<p class="mb-0" style='max-width: 400px; font-size: 0.9rem; color:#a5a5a5;'>아동병원을 운영하고 있는 소아과의사입니다.
						인문학을 좋아하여 책을 읽고 글을 써서 나누고 </p>
					<div class="position-absolute review-box">
                            <span>
                                <i class="xi-pen"></i> 273개
                            </span></div>
				</div>
			</div>
			<div class="col-12 col-lg-6 mb-4 d-flex panel-item">
				<div class="d-none d-md-block">
					<img src="/public/sangmin/img/profile/pic.jpg" class="rounded" alt="" height="110px">
				</div>
				<div class="bg-light rounded d-flex flex-column justify-content-center align-middle position-relative panel-content w-100">
					<div class="position-absolute bg-light trans-box d-none d-md-block">
					</div>
					<h4 class="mb-1">김지윤</h4>
					<p class="mb-0" style='max-width: 400px; font-size: 0.9rem; color:#a5a5a5;'>아동병원을 운영하고 있는 소아과의사입니다.
						인문학을 좋아하여 책을 읽고 글을 써서 나누고 </p>
					<div class="position-absolute review-box">
                            <span>
                                <i class="xi-pen"></i> 273개
                            </span></div>
				</div>
			</div>

		</div>

		<div class="row justify-content-center align-items-center">
			<a href="#" class="d-flex justify-content-center align-items-center" style='text-decoration: none'>
				<p class="mb-0 text-light mr-3">
					전체 패널 보러가기
				</p>
				<span style='width: 30px;height: 30px'
					  class="rounded-circle bg-light d-flex align-items-center justify-content-center"><i
						class="xi xi-angle-right text-dark"></i></span>
			</a>
		</div>
	</article>
</section>
<section id="section7" class="mb-lg-5 container-fluid d-flex">
	<!--유투브 영상-->
	<article class="w-100">
		<div class="row d-flex justify-content-center">
			<iframe width="90%" height="100%" src="https://www.youtube.com/embed/-2U0Ivkn2Ds" frameborder="0"
					gesture="media" allowfullscreen style="min-height: 450px;"></iframe>
		</div>
	</article>
</section>
<footer id='main-footer' class='container-fluid'>
	<div id="partner">
		<div class="row">
			<div class="w-100">
				<h6 >PARTNERS</h6>
			</div>
			<div class="d-flex flex-wrap">
				<figure>
					<img src="/public/sangmin/img/partner/partner_google.png" alt="">
				</figure>
				<figure>
					<img src="/public/sangmin/img/partner/partner_facebook.png" alt="">
				</figure>

				<figure>
					<img src="/public/sangmin/img/partner/partner_instar.png" alt="">
				</figure>
				<figure>
					<img src="/public/sangmin/img/partner/partner_naver.png" alt="">
				</figure>
				<figure>
					<img src="/public/sangmin/img/partner/partner_daum.png" alt="">
				</figure>
			</div>
		</div>

	</div>

	<div class="row d-flex">
		<ul>
			<li class="title">ABOUT US</li>
			<li><a href="#">회사 소개</a></li>
			<li><a href="#">이용약관</a></li>
			<li><a href="#">개인 정보 취급 방침</a></li>
		</ul>
		<ul>
			<li class="title">OFFICE</li>
			<li><span>TEL</span>
				<p>1500-1500</p>
			</li>
		</ul>
		<ul>
			<li class="title">CONTACT US</li>
			<li><span>상호</span>
				<p>PLAY SEVEN</p>
			</li>
			<li><span>대표</span>
				<p>홍길동</p>
			</li>
			<li><span>사업자등록번호</span>
				<p>000-00-00000</p>
			</li>
			<li><span>등록판매업신고번호</span>
				<p>2017-서울강서-0000호</p>
			</li>
			<li><span>개인정보관리책임자</span>
				<p>홍길동</p>
			</li>
		</ul>
		<ul>
			<li class="title">NEWS LETTER</li>
			<li class="mb-20"><input type="text" placeholder="E-mail을 입력해주세요"></li>
			<li><strong>골프패스</strong>
				<p>에서 제공하는 유용한 소식</p>
			</li>
		</ul>
		<p class='align-self-end mr-auto ml-auto'>© 2017 <strong>GOLFPASS.</strong> All Rights Reserved.</p>
	</div>

</footer>


<script src="/public/sangmin/js/jquery-3.2.1.min.js"></script>
<script>
	$('#jssor_1').width($('#section2').width()).children('div').width($('#section2').width());
	$(window).resize(function () {
		$('#jssor_1').width($('#section2').width()).children('div').width($('#section2').width());
	});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
		integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
		crossorigin="anonymous"></script>
<script src="/public/sangmin/dist/bootstrap/bootstrap.bundle.min.js"></script>
<script src="/public/sangmin/js/jssor.slider-26.5.0.min.js"></script>
<script src="/public/sangmin/js/custom.js"></script>
<script src="/public/sangmin/js/main_section2.js"></script>
<script src="/public/sangmin/js/main_section3.js"></script>


</body>

</html>
