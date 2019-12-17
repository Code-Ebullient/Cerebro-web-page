@extends ('layouts.land')

@section('formTitl')
  Form
@endsection


@section('bussForm')

<!-- banner -->
<div class="banner" id="home">
	<div class="container">
		<div class="row banner-text">
				
		</div>
	</div>
</div>
<!-- banner -->

<nav>
  <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Peoples</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Services</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">

<!-- peoples order -->
<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  <br>

  <form class = "col-xl-10" action="" method="post">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" class="form-control" id="compEmail" placeholder="">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Company name</label>
      <input type="text" class="form-control" id="compName" placeholder="">
    </div>

    <div class="form-group">
      <label for="exampleFormControlSelect1">Category</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>Onsite worker</option>
        <option>Design and development</option>
        <option>Support and maintenance</option>
      </select>
    </div>

    <div class="form-group">
      <label for="exampleFormControlSelect2">Issues</label>
      <select multiple class="form-control" id="exampleFormControlSelect2">
        <option>Logo design</option>
        <option>Website update / maintenance</option>
        <option>Web page design</option>
        <option>Consultation</option>
        <option>Others</option>
      </select>
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">Tell us more</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="form-group row">
      <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">submit</button>
      </div>
    </div>
  </form>
  </div>

  <!-- services order -->
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <br/>
    <br/>
    <br/>
  <form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
  <label for="inputName3" class="col-sm-2 col-form-label">Company name</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="compName" placeholder="Company name">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Category</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Onsite worker</option>
      <option>Design and development</option>
      <option>Support and maintenance</option>
    </select>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">submit</button>
    </div>
  </div>
</form>

</div>

@endsection 



@section('script')
<!-- Script -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection

@section('tab')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endsection
