@extends('layouts.land')

@section('prizTitl')
  price
@endsection

@section('content')

<!-- banner -->
<div class="banner" id="home">
	<div class="container">
		<div class="row banner-text">
				
		</div>
	</div>
</div>
<!-- banner -->

<!-- Price page -->

<div class="wrapper">
        <h1>Pricing</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Tempora placeat fuga provident, nam, 
            dolor ex quibusdam nulla ducimus dignissimos error earum porro et est? 
            Ab aspernatur nisi nobis magnam porro.</p>

        <div class="pricing_wrapper">

            <div class="pricing_item">
                <h3>Starter</h3>
                <p class="money">$9 <br> <span>per day</span></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Cum nam natus fuga laudantium et accusamus reprehenderit harum exercitationem in error consectetur assumenda quisquam doloremque, 
                eveniet voluptatem unde eaque veritatis similique.
                </p>
                <a href="#" class="btn">Select Plan</a>
            </div>
            
            <div class="pricing_item">
                <h3>Basic</h3>
                <p class="money">$9 <br> <span>per week</span></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Cum nam natus fuga laudantium et accusamus reprehenderit harum exercitationem in error consectetur assumenda quisquam doloremque, 
                eveniet voluptatem unde eaque veritatis similique.
                </p>
                <a href="#" class="btn">Select Plan</a>
            </div>

            <div class="pricing_item">
                <h3>Starter</h3>
                <p class="money">$9 <br> <span>per week</span></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Cum nam natus fuga laudantium et accusamus reprehenderit harum exercitationem in error consectetur assumenda quisquam doloremque, 
                eveniet voluptatem unde eaque veritatis similique.
                </p>
                <a href="#" class="btn">Select Plan</a>
            </div>
                
            <div class="pricing_item">
                <h3>Basic</h3>
                <p class="money">$9 <br> <span>per year</span></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Cum nam natus fuga laudantium et accusamus reprehenderit harum exercitationem in error consectetur assumenda quisquam doloremque, 
                    eveniet voluptatem unde eaque veritatis similique.
                </p>
                <a href="#" class="btn">Select Plan</a>
            </div>
        </div>
    </div>

<!-- Price page -->
@endsection