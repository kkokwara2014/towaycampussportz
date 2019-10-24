@include('includes.contactheader')
<section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="span4">
        <div class="inner-heading">
          <h2>Contact Us</h2>
        </div>
      </div>
      <div class="span8">
        <ul class="breadcrumb">
          <li><a href="{{url('/')}}"><i class="icon-home"></i>Home</a><i class="icon-angle-right"></i></li>
          <li class="active">Contact Us</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section id="content">

  <div class="container">
    <div class="row">
      <div class="span8">
        <h4>Contact us by filling the form below</h4>
        @include('includes.success')

        <form action="{{route('send.message')}}" method="post" class="contactForm">
          {{ csrf_field() }}

          <div class="row">
            <div class="span7 form-group" {{$errors->has('sendername')?'has-error':''}}>
              <input type="text" name="sendername" class="form-control" id="sendername" placeholder="Your Name"
                value="{{ old('sendername') }}" autofocus>
              {!! $errors->first('sendername', '<p style="color: red">:message</p>') !!}
            </div>
            <div class="span7 form-group" {{$errors->has('email')?'has-error':''}}>
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                value="{{ old('email') }}">
              {!! $errors->first('email', '<p style="color: red">:message</p>') !!}
            </div>
            <div class="span7 form-group" {{$errors->has('subject')?'has-error':''}}>
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                value="{{ old('subject') }}">
              {!! $errors->first('subject', '<p style="color: red">:message</p>') !!}
            </div>
            <div class="span7 margintop10 form-group" {{$errors->has('message')?'has-error':''}}>
              <textarea class="form-control" name="message" rows="12" placeholder="Message"
                value="{{ old('message') }}"></textarea>
              {!! $errors->first('message', '<p style="color: red">:message</p>') !!}
            </div>
            <div class="span3 form-group">
              <button class="btn btn-large btn-theme margintop10" type="submit">Send message</button>
            </div>
          </div>

        </form>
      </div>

      <div class="span4">
          <h4>Our Contact Details</h4>
        <p>
          <address>
            <i class="icon-map-marker"></i><strong>Done-Right Systems Inc.,</strong><br>
            Plot 22 Road 5, Gwarinpa, Abuja. Nigeria.<br>
            Flat 18B Afikpo Housing Estate, Afikpo, Ebonyi. Nigeria.<br>
            10 Nuhu Aliyu Crescent, Barnawa, Kaduna. Nigeria.<br>
            12 Utang Street, Off Willington Bassey Road, Uyo. Nigeria.<br>
          </address>
          <i class="icon-phone"></i> (+234) 803-888-3919 <br>
          <i class="icon-envelope-alt"></i> telldoneright@donerightsystems.org
        </p>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <div class="row">
      <div class="span4">
        <div class="widget">
          <h5 class="widgetheading">Browse pages</h5>
          <ul class="link-list">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Our services</a></li>
            <li><a href="#">Our team</a></li>
            <li><a href="#">Our Projects</a></li>
            <li><a href="#">Explore our portfolio</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="span4">
        <div class="widget">
          <h5 class="widgetheading">Important Information</h5>
          <ul class="link-list">
            <li><a href="#">Press release</a></li>
            <li><a href="#">Terms and conditions</a></li>
            <li><a href="#">Privacy policy</a></li>
            <li><a href="#">Career center</a></li>
            {{-- <li><a href="#">Flattern forum</a></li> --}}
          </ul>
        </div>
      </div>

      <div class="span4">
        <div class="widget">
          <h5 class="widgetheading">Contact Us</h5>
          <address>
            <strong>Done-Right Systems Inc.,</strong><br>
            Plot 22 Road 5, Gwarinpa, Abuja. Nigeria.<br>
            Flat 18B Afikpo Housing Estate, Afikpo, Ebonyi. Nigeria.<br>
            10 Nuhu Aliyu Crescent, Barnawa, Kaduna. Nigeria.<br>
            12 Utang Street, Off Willington Bassey Road, Uyo. Nigeria.<br>
          </address>
          <p>
            <i class="icon-phone"></i> (+234) 803-888-3919 <br>
            <i class="icon-envelope-alt"></i> telldoneright@donerightsystems.org
          </p>
        </div>
      </div>
    </div>
  </div>
  <div id="sub-footer">
    <div class="container">
      <div class="row">
        <div class="span6">
          <div class="copyright">
            <p>
              <span>&copy; 2017 - <script>
                  document.write(new Date().getFullYear());
                </script> donerightsystems.org - All right reserved.</span>
            </p>

          </div>
        </div>
        <div class="span6">
          <ul class="social-network">
            <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
            <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>
<a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('bootstrap_assets/js/jquery.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/bootstrap.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/jcarousel/jquery.jcarousel.min.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/jquery.fancybox-media.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/google-code-prettify/prettify.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/portfolio/jquery.quicksand.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/portfolio/setting.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/jquery.flexslider.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/jquery.nivo.slider.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/modernizr.custom.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/jquery.ba-cond.min.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/jquery.slitslider.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/animate.js')}}"></script>

<!-- Contact Form JavaScript File -->
{{-- <script src="{{asset('bootstrap_assets/contactform/contactform.js')}}"></script> --}}

<!-- Template Custom JavaScript File -->
<script src="{{asset('bootstrap_assets/js/custom.js')}}"></script>

</body>

</html>