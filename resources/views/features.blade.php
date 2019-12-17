@extends('layouts.land')

<!-- @section('menubar')
        <li><a href="#onsite">Onsite worker</a></li>
	    <li><a href="#design">Design & development</a></li>
	    <li><a href="#maintenance">Support & maintenance</a></li>
@endsection -->
@section('featTitl')
	Features
@endsection

@section('content')

<!-- banner -->
<div class="banner" id="home">
	<div class="container">
		<div class="row banner-text">
			<div class="slider-info col-lg-6">
				<div class="banner-info-grid mt-lg-5">
					<h2>Core Features </h2>
					<p class = "btn mr-2 text-capitalize">Service level is guaranteed with zero risk</p>
                    <span>
                    <hr>
                    <a class = "btn mr-2 text-capitalize" href="#onsite">Onsite worker </a>
                    <a class = "btn mr-2 text-capitalize" href="#design">Design  </a>
                    <a class = "btn mr-2 text-capitalize" href="#maintenance">Maintenance </a>
                    </span>
				</div>
			</div>
			<div class="col-lg-6 col-md-8 mt-lg-0 mt-sm-5 mt-3 banner-image text-lg-center">
				<img src="landing/images/staff.png" alt="" class="img-fluid"/>
			</div>
		</div>
	</div>
</div>
<!-- banner -->

<!-- Features -->
<section class="video py-5" id="features">
	<div class="container">
		<div class="inner-sec-w3ls py-lg-5 py-3">
			<div class="row">
				<div class="col-lg-6 px-lg-5 px-2"  id="onsite">
					<h3 class="tittle-w3">Onsite worker</h3>
					<p class="mt-4">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum.
                    Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum.
                    Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum.
                    </p>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-4">
					<img src="landing/images/st11.png" alt="" class="img-fluid">
				</div>
			</div>
		</div>
    </div>

	

    <div class="container">
	    <div class="inner-sec-w3ls py-lg-5 py-3">
		    <div class="row">
			    <div class="col-lg-6 mt-lg-0 mt-4">
				    <img src="landing/images/about.jpg" alt="" class="img-fluid">
			    </div>
			    <div class="col-lg-6 px-lg-5 px-2"  id="design">
				<h3 class="tittle-w3">Design & development</h3>
				<p class="mt-4">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum.
                    Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum.
                    Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum.
                    </p>
			    </div>
            </div>
		</div>
	</div>



    <div class="container">
	    <div class="inner-sec-w3ls py-lg-5 py-3">
		    <div class="row">
			    <div class="col-lg-6 px-lg-5 px-2"  id="maintenance">
				    <h3 class="tittle-w3">Support & maintenance</h3>
				    <p class="mt-4">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum.
                    Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum.
                    Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum.
                    </p>
			    </div>
			    <div class="col-lg-6 mt-lg-0 mt-4">
				    <img src="landing/images/laravel.png" alt="" class="img-fluid">
			    </div>
            </div>
		</div>
	</div>

</section>
<!-- Features -->

@endsection