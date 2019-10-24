@include('includes.contactheader')
<section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="span4">
        <div class="inner-heading">
          <h2>Our Key Staff</h2>
        </div>
      </div>
      <div class="span8">
        <ul class="breadcrumb">
          <li><a href="{{url('/')}}"><i class="icon-home"></i>Home</a><i class="icon-angle-right"></i></li>
          <li><a href="#">About</a><i class="icon-angle-right"></i></li>
          <li class="active">Our Key Staff</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section id="content">
  {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> --}}

  <div class="container">
    <div class="row">
      {{-- <div class="span12">
        <h4>Our Team</h4>
      </div> --}}
      <div class="span3">
        <img src="{{asset('bootstrap_assets/img/dummies/team1.jpg')}}" alt="" class="img-polaroid" />
        <div class="roles">
          <p class="lead">
            <strong>Vincent Austin Jr</strong>
          </p>
          <p>
            CEO - Founder
          </p>
        </div>
      </div>
      <div class="span3">
        <img src="{{asset('bootstrap_assets/img/dummies/team2.jpg')}}" alt="" class="img-polaroid" />
        <div class="roles">
          <p class="lead">
            <strong>Tommy Laugher</strong>
          </p>
          <p>
            Lead designer
          </p>
        </div>
      </div>
      <div class="span3">
        <img src="{{asset('bootstrap_assets/img/dummies/team3.jpg')}}" alt="" class="img-polaroid" />
        <div class="roles">
          <p class="lead">
            <strong>Gabirelle Borowski</strong>
          </p>
          <p>
            Customer support
          </p>
        </div>
      </div>
      <div class="span3">
        <img src="{{asset('bootstrap_assets/img/dummies/team4.jpg')}}" alt="" class="img-polaroid" />
        <div class="roles">
          <p class="lead">
            <strong>Benny Strongton</strong>
          </p>
          <p>
            Coffee maker
          </p>
        </div>
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
            <i class="icon-envelope-alt"></i> telldoneright@donerightsystems.com
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
                </script> donerightsystems.com - All right reserved.</span>
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
<script src="{{asset('bootstrap_assets/contactform/contactform.js')}}"></script>

<!-- Template Custom JavaScript File -->
<script src="{{asset('bootstrap_assets/js/custom.js')}}"></script>

</body>

</html>