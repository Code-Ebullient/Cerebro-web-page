@extends('layouts.land')

@section('homeTitl')
  Cerebro | Home
@endsection

@section('others')
	<li><a href="#video">Features</a></li>
	<li><a href="#services">Tech Pool</a></li>
	<li><a href="#process">Process</a></li>
	<li><a href="#price">Price</a></li>
	<li><a href="#partners">Partners</a></li>
@endsection

@section('content')
		
<!-- banner -->
<div class="banner" id="home">
	<div class="container">
		<div class="row banner-text">
			<div class="slider-info col-lg-6">
				<div class="banner-info-grid mt-lg-5">
					<h2>Tech Solutions To People & Businesses </h2>
					<p>Engagement platform that provide much needed tech solutions & short term IT personnels to your businesses.</p>
				</div>
				<a class="btn mr-2 text-capitalize" href="features">Read more </a>
				<a class="btn text-capitalize" href="/form">Engage Us </a>
			</div>
			<div class="col-lg-6 col-md-8 mt-lg-0 mt-sm-5 mt-3 banner-image text-lg-center">
				<img src="landing/images/bannerpng.png" alt="" class="img-fluid"/>
			</div>
		</div>
	</div>
</div>
<!-- banner -->

<!-- Core Features -->
<section class="video py-5" id="video">
	<div class="container">
	<h3 class="heading mb-5"> What we provide | Features</h3>
		<div class="inner-sec-w3ls py-lg-5 py-3">
			<div class="row">
				<div class="col-lg-6 px-lg-5 px-2">
					<h3 class="tittle-w3">Onsite worker</h3>
					<p class="mt-4">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum.</p>
					<a class="btn mr-2 text-capitalize" href="features">Read more </a>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-4">
					<img src="landing/images/st11.png" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	

	<div class="inner-sec-w3ls py-lg-5 py-3">
		<div class="row">
			<div class="col-lg-6 mt-lg-0 mt-4">
				<img src="landing/images/about.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-lg-6 px-lg-5 px-2">
				<h3 class="tittle-w3">Design & development</h3>
				<p class="mt-4">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum.</p>
				<a class="btn mr-2 text-capitalize" href="features">read more </a>
			</div>
		</div>
	</div>

	<div class="inner-sec-w3ls py-lg-5 py-3">
		<div class="row">
			<div class="col-lg-6 px-lg-5 px-2">
				<h3 class="tittle-w3">Support & maintenance</h3>
				<p class="mt-4">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum.</p>
				<a class="btn mr-2 text-capitalize" href="features">read more </a>
			</div>
			<div class="col-lg-6 mt-lg-0 mt-4">
				<img src="landing/images/laravel.png" alt="" class="img-fluid">
			</div>
		</div>
	</div>
	</div>
</section>
<!-- Features -->

<!-- Tech Pool for vetted Tech personnel -->
<section class="choose py-5" id="services">
	<div class="container py-md-3">
		<h3 class="heading mb-5"> Tech pool | <a class="btn mr-2 text-capitalize" href="#popup4">Get Started </a></h3>
		<div class="feature-grids row">
			<div class="col-lg-3 col-sm-6">
				<div class="f1 icon1 p-4">
					<div class="icon">
						<span class="fa fa-bandcamp"></span>
					</div>
					<h3 class="my-3">Register</h3>
					<p>Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
				<div class="f1 icon2 p-4">
					<div class="icon">
						<span class="fa fa-codepen"></span>
					</div>
					<h3 class="my-3">Take a test</h3>
					<p>Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
				<div class="f1 icon3 p-4">
					<div class="icon">
						<span class="fa fa-btc"></span>
					</div>
					<h3 class="my-3">In the pool</h3>
					<p>Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
				<div class="f1 icon4 p-4">
					<div class="icon">
						<span class="fa fa-cloud"></span>
					</div>
					<h3 class="my-3">Get recruited</h3>
					<p>Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Tech Pool -->

<!-- Business Processes -->
<section class="process py-5" id="process">
	<div class="container py-md-3">
		<h3 class="heading mb-5">Process | <a class="btn mr-2 text-capitalize" href="#techForm">Get Started </a></h3>
		<div class="row process-grids">
			<div class="col-lg-3 col-md-6 my-lg-4 w3pvt-ab position-relative">
				<div class="cerebro-process">
					<img src="landing/images/unique.png" alt="" class="img-fluid">
				</div>
				<h4 class="feed-title my-md-3 mb-3">Our uniqueness</h4>
				<p> Excepteur ut occaecat proident, sunt in culpa quis. Phasellus lacinia id erat risus quis.</p>
			</div>
			<div class="col-lg-3 col-md-6 my-lg-4 mt-md-0 mt-4 w3pvt-ab position-relative">
				<div class="cerebro-process">
					<img src="landing/images/engage.png" alt="" class="img-fluid">
				</div>
				<h4 class="feed-title my-md-3 mb-3">Engage us</h4>
				<p> Excepteur ut occaecat proident, sunt in culpa quis. Phasellus lacinia id erat risus quis.</p>
			</div>
			<div class="col-lg-3 col-md-6 my-lg-4 mt-sm-5 mt-4 w3pvt-ab position-relative">
				<div class="cerebro-process">
					<img src="landing/images/Pprocess.png" alt="" class="img-fluid">
				</div>
				<h4 class="feed-title my-md-3 mb-3">Planning the process</h4>
				<p> Excepteur ut occaecat proident, sunt in culpa quis. Phasellus lacinia id erat risus quis.</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-lg-4 mt-sm-5 mt-4 w3pvt-ab">
				<div class="cerebro-process">
					<img src="landing/images/Mprocess.png" alt="" class="img-fluid">
				</div>
				<h4 class="feed-title my-md-3 mb-3">Mangage the process</h4>
				<p> Excepteur ut occaecat proident, sunt in culpa quis. Phasellus lacinia id erat risus quis.</p>
			</div>
		</div>
	</div>
</section>
<!-- Processes -->

<!-- Price -->
<section class="choose py-5" id="price">
	<div class="container py-md-3">
		<h3 class="heading mb-5"> Pricing | <a class="btn mr-2 text-capitalize" href="form">Order</a></h3>
		<div class="feature-grids row">
			<div class="col-lg-3 col-sm-6">
				<div class="text-center f1 icon1 p-4">
					<div class="icon">
						<span class="fa fa-dollar"></span>
					</div>
					<h3 class="my-3">Starter Pack</h3>
					<P> $9 Per Day
					</P>
					<a href="form" class="btn">Select Plan</a>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
				<div class="text-center f1 icon1 p-4">
					<div class="icon">
						<span class="fa fa-dollar"></span>
					</div>
					<h3 class="my-3">Basic Pack</h3>
					<P> $13 Per Week
					</P>
					<a href="form" class="btn">Select Plan</a>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
				<div class="text-center f1 icon1 p-4">
					<div class="icon">
						<span class="fa fa-dollar"></span>
					</div>
					<h3 class="my-3">Pro Pack</h3>
					<P> $49 Per Month
					</P>
					<a href="form" class="btn">Select Plan</a>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
				<div class="text-center f1 icon1 p-4">
					<div class="icon">
						<span class="fa fa-dollar"></span>
					</div>
					<h3 class="my-3">Premium Pack</h3>
					<P> $100 Per Year
					</P>
					<a href="form" class="btn">Select Plan</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Price -->


<!-- //video -->
<section class="content-info py-5" id="about">
        <div class="container py-md-5">
            <div class="text-center px-lg-5 col-12">
                <div class="title-desc text-center px-lg-5">
                    <p class="px-lg-5">Praesent ullamcorper dui turpis.At vero eos et accusam et justo duo dolores et ea rebum.Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.
                        Praesent ullamcorper dui turpis.At vero eos et accusam et justo duo dolores et ea rebum.Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
                    <a class="btn mt-lg-4 mt-3" href="https://www.youtube.com/watch?v=ks-jFAbhzag&rel=0" role="button"><span class="fa fa-play" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- //video -->

<!--Partners-->
<section class="partners py-5" id="partners">
	<div class="container py-md-3">
		<h3 class="heading mb-5">Partners</h3>
		<div class="inner-sec-w3ls">
			<div class="sponsers-icon text-center">
				<ul class="list-unstyled partners-icon row">
					<li class="col-md-2 col-4">
						<span class="fa fa-codepen" aria-hidden="true"></span>
					</li>
					<li class="col-md-2 col-4 border-left border-right">
						<span class="fa fa-lastfm" aria-hidden="true"></span>
					</li>
					<li class="col-md-2 col-4 border-right">
						<span class="fa fa-codiepie" aria-hidden="true"></span>
					</li>
					<li class="col-md-2 col-4 border-right mt-md-0 mt-3">
						<span class="fa fa-drupal" aria-hidden="true"></span>
					</li>
					<li class="col-md-2 col-4 border-right mt-md-0 mt-3">
						<span class="fa fa-dashcube" aria-hidden="true"></span>
					</li>
					<li class="col-md-2 col-4 mt-md-0 mt-3">
						<span class="fa fa-skyatlas" aria-hidden="true"></span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- //Partners -->
	
@endsection