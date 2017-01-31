@extends('layouts.app')
@section('content')
<div class="ms-hero-page-override ms-hero-img-team ms-hero-bg-primary">
    <div class="container">
      <div class="text-center">
        <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Contact Us</h1>
        <p class="lead lead-lg color-light text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">Do you need a boost in your project?
          <br>Contact us we will help you to finish your dream.</p>
      </div>
    </div>
</div>		
<div class="container">
	
        <div class="card card-hero animated fadeInUp animation-delay-7">
          <div class="card-block">
            <form class="form-horizontal">
              <fieldset>
                <div class="form-group">
                  <label for="inputName" class="col-md-2 control-label">Name</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="inputName" placeholder="Name"> </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-md-2 control-label">Email</label>
                  <div class="col-md-9">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email"> </div>
                </div>
                <div class="form-group">
                  <label for="inputSubject" class="col-md-2 control-label">Subject</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="inputSubject" placeholder="Subject"> </div>
                </div>
                <div class="form-group">
                  <label for="textArea" class="col-md-2 control-label">Message</label>
                  <div class="col-md-9">
                    <textarea class="form-control" rows="5" id="textArea" placeholder="Your message..."></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-9 col-md-offset-2">
                    <button type="submit" class="btn btn-raised btn-primary">Submit</button>
                    <button type="button" class="btn btn-danger">Cancel</button>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
        <div class="card card-primary">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-5">
              <div class="card-block wow fadeInUp">
                <div class="mb-2">
                  <span class="ms-logo ms-logo-sm mr-1">M</span>
                  <h3 class="no-m ms-site-title">Material
                    <span>Style</span>
                  </h3>
                </div>
                <address class="no-mb">
                  <p>
                    <i class="color-danger-light zmdi zmdi-pin mr-1"></i> 795 Folsom Ave, Suite 600</p>
                  <p>
                    <i class="color-warning-light zmdi zmdi-map mr-1"></i> San Francisco, CA 94107</p>
                  <p>
                    <i class="color-info-light zmdi zmdi-email mr-1"></i>
                    <a href="mailto:joe@example.com">example@domain.com</a>
                  </p>
                  <p>
                    <i class="color-royal-light zmdi zmdi-phone mr-1"></i>+34 123 456 7890 </p>
                  <p>
                    <i class="color-success-light fa fa-fax mr-1"></i>+34 123 456 7890 </p>
                </address>
              </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-7">
              <iframe width="100%" height="340" src="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=central%2Bpark&ie=UTF8&z=12&t=m&iwloc=near&output=embed"></iframe>
            </div>
          </div>
        </div>
      
</div>
@stop