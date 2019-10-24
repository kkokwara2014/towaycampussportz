@include('includes.aboutheader')
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span7">
            <h2>Done-Right Systems Inc.,</h2>
            <p>
              Ei mel semper vocent persequeris, nominavi patrioque vituperata id vim, cu eam gloriatur philosophia deterruisset. Meliore perfecto repudiare ea nam, ne mea duis temporibus. Id quo accusam consequuntur, eum ea debitis urbanitas. Nibh reformidans vim ne.
            </p>
            <p>
              Iudico definiebas eos ea, dicat inermis hendrerit vel ei, legimus copiosae quo at. Per utinam corrumpit prodesset te, liber praesent eos an. An prodesset neglegentur qui, usu ancillae posidonium in, mea ex eros animal scribentur. Et simul fabellas sit.
              Populo inimicus ne est.
            </p>
            <p>
              Alii wisi phaedrum quo te, duo cu alia neglegentur. Quo nonumy detraxit cu, viderer reformidans ut eos, lobortis euripidis posidonium et usu. Sed meis bonorum minimum cu, stet aperiam qualisque eu vim, vide luptatum ei nec. Ei nam wisi labitur mediocrem.
              Nam saepe appetere ut, veritus graecis minimum no vim. Vidisse impedit id per.
            </p>
          </div>
          <div class="span5">
            <!-- start flexslider -->
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <img src="{{asset('bootstrap_assets/img/works/full/image-01-full.jpg')}}" alt="" />
                </li>
                <li>
                  <img src="{{asset('bootstrap_assets/img/works/full/image-02-full.jpg')}}" alt="" />
                </li>
                <li>
                  <img src="{{asset('bootstrap_assets/img/works/full/image-03-full.jpg')}}" alt="" />
                </li>
              </ul>
            </div>
            <!-- end flexslider -->
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        
        {{-- our team --}}
        @include('includes.ourteam')

        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <div class="row">
          <div class="span12">
            <h4>More about Done-Right Systems Inc.,</h4>
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
							1. What do we do? </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <p>
                      Diam alienum oporteat ad vis, latine intellegebat cu his. Ei eros dicam commodo duo, an assum meliore eam. In sed albucius dissentiet. Sit laudem graece malorum ne, at eam omnesque expetenda pertinacia, tale meliore vim ea. Dolore legere deleniti ius
                      at, mea nibh discere perfecto ex. Mea ea iuvaret eripuit, eos no vivendo intellegat definiebas, patrioque eloquentiam eos et.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
							2. How do we work? </a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      Nihil suscipit posidonium eos id. An cetero fierent insolens mel, ex sit rebum falli erroribus. Ius in nemore dolorum officiis. Et vel harum dicant, vix eius persius an. Ex eam malis postea, erat nihil consulatu nam ea. Ex quem dolores euripidis eum,
                      tempor aperiam voluptaria has ad. Ea est persecuti dissentiet voluptatibus, at illum malorum minimum usu eum aeterno tritani.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
							3. Our Quality assurance </a>
                </div>
                <div id="collapseThree" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      Vel purto oportere principes ne, ut mel graeco omnesque. Habeo justo congue mei cu, eu est molestie sensibus, oratio tibique ad mei. Admodum consetetur cu eam, nec cu doming prompta inciderint, ne vim ceteros mnesarchum scriptorem. Ex eam malis postea,
                      erat nihil consulatu nam ea. Ex quem dolores euripidis eum, tempor aperiam voluptaria has ad. Et vel harum dicant vix.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
							4. What we can deliver? </a>
                </div>
                <div id="collapseFour" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      Diam alienum oporteat ad vis, latine intellegebat cu his. Ei eros dicam commodo duo, an assum meliore eam. In sed albucius dissentiet. Sit laudem graece malorum ne, at eam omnesque expetenda pertinacia, tale meliore vim ea. Dolore legere deleniti ius
                      at, mea nibh discere perfecto ex. Mea ea iuvaret eripuit, eos no vivendo intellegat definiebas, patrioque eloquentiam eos et.
                    </p>
                  </div>
                </div>
              </div>
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

  <!-- Template Custom JavaScript File -->
  <script src="{{asset('bootstrap_assets/js/custom.js')}}"></script>

</body>

</html>
