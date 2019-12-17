@extends('layouts.land')

@section('contTitl')
  Contact
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

   <!-- //banner-botttom -->
   <section class="content-info py-5">
        <div class="container py-md-5">
            <div class="text-center px-lg-5">
                <h3 class="title-w3pvt mb-5">Contact Us</h3>
                <div class="title-desc text-center px-lg-5">
                    <p class="px-lg-5 sub-wthree">Praesent ullamcorper dui turpis.At vero eos et accusam et justo duo dolores et ea rebum.Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.
                        Praesent ullamcorper dui turpis.</p>
                </div>
            </div>
            <div class="contact-w3pvt-form mt-5">
                <form action="{{url()}}" class="" method="post">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="Name" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="Email" placeholder="" required="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Write Message</label>
                                <textarea class="form-control" name="Message" placeholder="" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group mx-auto mt-3">
                            <button type="submit" class="btn submit">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
    <!-- //banner-botttom -->

@endsection