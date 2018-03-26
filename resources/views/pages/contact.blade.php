@extends('layouts.app')
@section('content')
<div class="ms-hero-page-override ms-hero-img-team ms-hero-bg-primary">
    <div class="container">
      <div class="text-center">
        <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">{{ trans('navbar.contact') }}</h1>
      </div>
    </div>
</div>		
<div class="container">
	
        <div class="card card-hero animated fadeInUp animation-delay-7">
          <div class="card-block">
            <form class="form-horizontal" action="{{ route('mail.contact') }}" method="post">
            {{ csrf_field() }}
              <fieldset>
                <div class="form-group">
                  <label for="inputName" class="col-md-2 control-label">Név</label>
                  <div class="col-md-9">
                    <input name="name" type="text" class="form-control" id="inputName" placeholder="Név" required> </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-md-2 control-label">Email</label>
                  <div class="col-md-9">
                    <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email" required> </div>
                </div>
                <div class="form-group">
                  <label for="textArea" class="col-md-2 control-label">Üzenet</label>
                  <div class="col-md-9">
                    <textarea name="message" class="form-control" rows="5" id="textArea" placeholder="Üzenet" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-9 col-md-offset-2">
                    <button type="submit" class="btn btn-raised btn-primary">Küldés</button>
                    <button type="button" class="btn btn-danger">Mégse</button>
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
                  <span class="ms-logo ms-logo-sm mr-1">S</span>
                  <h3 class="no-m ms-site-title">Soltész <span>Szilárd</span></h3>
                </div>
                <address class="no-mb">
                  <p>
                    <i class="color-danger-light zmdi zmdi-pin mr-1"></i>6000 Kecskemét, Jégvirág utca 6.</p>
                  <p>
                    <i class="color-warning-light zmdi zmdi-map mr-1"></i>1133 Budapest, Cézár Ház</p>
                  <p>
                    <i class="color-info-light zmdi zmdi-email mr-1"></i>
                    <a href="mailto:szilard.soltesz@gmail.com">szilard.soltesz@gmail.com</a>
                  </p>
                  <p>
                    <i class="color-royal-light zmdi zmdi-phone mr-1"></i>
                    <a href="tel:+36 30 231 1240">+36 30 231 1240</a>
                  </p>
                </address>
              </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-7">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2063.4434046756555!2d19.05861727786231!3d47.522478733434404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dbf6a893c861%3A0x7ddd214fecbf826f!2sBudapest%2C+Tutaj+u.%2C+1133!5e0!3m2!1shu!2shu!4v1521541383885" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>    
            </div>
          </div>
        </div>
      
</div>
@stop
