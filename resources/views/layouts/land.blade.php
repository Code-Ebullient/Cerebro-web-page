<!DOCTYPE html>
<html lang="en">
<head>
<title>
@yield('homeTitl')
@yield('contTitl')
@yield('featTitl')
@yield('formTitl')
@yield('prizTitl')
</title>

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
	<link href="landing/css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->


	@yield('tab')

	<link href="landing/css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="landing/css/style1.css" rel='stylesheet' type='text/css'>
    <link href="landing/css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>
<!-- //header -->
<header class="py-4">
	<div class="container">
			<div id="logo">
				<h1> <a href="/"><span class="navbar-brand" tabindex="1" aria-hidden="true" 
				<img src ="/landing/images/cerebro-logo-dark.png" alt="cerebro" data-preload> </span> Cerebro
				</a></h1>
			</div>
		<!-- nav -->
		<nav class="d-lg-flex">

			<label for="drop" class="toggle"><span class="fa fa-bars" aria-hidden="true"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-2 ml-auto">
				<li><a href="/">Home</a></li>
				@yield('others')
				<li><a href="contact">Contact</a></li>
			</ul>
			<div class="login-icon ml-lg-2">
				<a class="user" href="{{ route('login') }}"> Login</a>
			</div>
		</nav>
		<div class="clear"></div>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

@yield('content')
@yield('bussForm')
@yield('price')

<!-- footer -->
<footer class="footer-emp-w3ls py-5">
	<div class="container pt-lg-3">
		<div class="row footer-top">
			<div class="col-lg-4 col-sm-6 footer-grid-wthree">
				<h4 class="footer-title text-uppercase mb-4">Who We Are</h4>
				<div class="contact-info">
					<p>Engagement platform to provide much needed short term IT personnels to your businesses,onsisting of well vetted IT persons that will solve your tech related issues with zero risk.</p>
					<h4 class="mt-3">Trusted by more than 1000+ people</h4>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 footer-grid-wthree mt-sm-0 mt-4">
				<h3 class="footer-title text-uppercase mb-4">Latest News</h3>
				<div class="contact-info">
					<div class="footer-style-w3ls">
						<h4 class="mb-2"><span class="fa mr-1 fa-twitter"></span> Cerebro freelancer</h4>
						<p>Incorporating learning platform....</p>
						<p class="date">23 Nov 2019.</p>
					</div>
					<div class="footer-style-w3ls mt-3">
						<h4 class="mb-2"><span class="fa mr-1 fa-twitter"></span> Business price</h4>
						<p>Reduction in hourly payment....</p>
						<p class="date">24 Nov 2019.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 footer-grid-wthree mt-lg-0 mt-sm-5 mt-4">
				<h3 class="footer-title text-uppercase mb-4">Contact Us</h3>
				<div class="contact-info">
					<div class="footer-style-w3ls">
						<h4 class="mb-2"> <span class="fa mr-1 fa-map-marker"></span> Location</h4>
						<p>50 Awolowo road, VI Lagos.</p>
					</div>
					<div class="footer-style-w3ls my-3">
						<h4 class="mb-2"><span class="fa mr-1 fa-phone"></span> Phone</h4>
						<p>+234 098 8907 9987</p>
					</div>
					<div class="footer-style-w3ls">
						<h4 class="mb-2"><span class="fa mr-1 fa-envelope-open"></span> Email</h4>
						<p><a href="ekoicenter@gmail.com">cerebro@gmail.com</a></p>
					</div>
				</div>
			</div>

		<!--- Query these icons --->
			<div class="col-lg-2 col-sm-6 footer-grid-wthree mt-lg-0 mt-sm-5 mt-4">
				<h3 class="footer-title text-uppercase mb-4">Quick Links</h3>
				<ul class="links list-unstyled">
					<li>
						<a class="" href="/"> Home</a>
					</li>

                    <li>
						<a class="" href="#video">Features</a>
					</li>

					<li>
						<a class="" href="#services"> Tech pool</a>
					</li>

					<li>
						<a class="" href="#process"> Process</a>
					</li>

					<li>
						<a class="" href="#price"> Price</a>
					</li>
					
					<li>
						<a class="" href="#partners">Partners</a>
					</li>
                    
					<li>
						<a class="" href="contact">Contact us</a>
					</li>
				</ul>
			</div>
		</div>

		 <!-- social icon-->
		 <div class="footer-social-icon">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="active fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>

	</div>
</footer>
<!-- //footer -->


<!-- copyright -->
<div class="copy-right-top border-top">
	<p class="copy-right text-center py-4">&copy; 2019 Cerebro. All Rights Reserved | Design by
		<a href=""> Newchassis </a>
	</p>
</div>
<!-- //copyright -->	
	
<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->

<!-- popup -->
<div id="popup1" class="popup-effect">
	<div class="popup">
		<img src="landing/images/banner.png" alt="Popup Image" class="img-fluid" />
		<p class="mt-4 ">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
			laudantium, totam rem aperiam, eaque ipsa quae ab illo quasi architecto beatae vitae dicta
			sunt explicabo.</p>
		<a class="close" href="#">&times;</a>
	</div>
</div>
<!-- //popup -->

<!-- popup -->
<div id="popup2" class="popup-effect">
	<div class="popup">
		<iframe src="https://www.youtube.com/watch?v=ks-jFAbhzag&rel=0"></iframe>
		<p class="mt-4 ">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
			laudantium, totam rem aperiam, eaque ipsa quae ab illo quasi architecto beatae vitae dicta
			sunt explicabo.</p>
		<a class="close" href="#">&times;</a>
	</div>
</div>
<!-- //popup -->

<!-- popup for login -->
<div id="popup3" class="popup-effect">
	<div class="popup">
		<div class="login px-sm-4 mx-auto mw-100">
			<h5 class="text-center mb-4">Login</h5>
			<form action="#" method="post">
				<div class="form-group">
					<label class="mb-2">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
					<small id="emailHelp" class="form-text text-muted">Confidential.</small>
				</div>
				<div class="form-group">
					<label class="mb-2">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
				</div>
				<button type="submit" class="btn btn-primary submit mt-2">Login</button>
				<p class="text-center mt-2">
					<a href="#popup4"> Don't have an account?</a>
				</p>
			</form>
		</div>

		<a class="close" href="#">&times;</a>
	</div>
</div>
<!-- //popup for login -->

<!-- popup for register -->
<div id="popup4" class="popup-effect">
	<div class="popup">
		<div class="login px-sm-4 mx-auto mw-100">
			<h5 class="text-center mb-4">Register</h5>
			<form action="register_action" method="post">
				<div class="form-group">
					<label>Full Name</label>
					<input type="text" class="form-control" name="name" id="validationDefault01" placeholder="" required="">
				</div>
				<div class="form-group">
					<label>Email Address</label>
					<input type="email" class="form-control" name="compName" id="validationDefault02" placeholder="" required="">
				</div>
				<div class="form-group">
					<label class="mb-2">Password</label>
					<input type="password" class="form-control" name="pass1" id="password1" placeholder="" required="">
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" class="form-control" name="pass2" id="password2" placeholder="" required="">
				</div>

				<button type="submit" class="btn btn-primary submit">Register</button>
				<p class="text-center mt-3">
					<a href="">By clicking Register, I agree to your terms</a>
				</p>
			</form>
		</div>
		<a class="close" href="#">&times;</a>
	</div>
</div>
<!-- //popup for register -->

@yield('script')
	
</body>
</html>