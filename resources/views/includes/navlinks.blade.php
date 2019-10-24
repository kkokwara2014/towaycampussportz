<div class="span8">
    <div class="navbar navbar-static-top">
        <div class="navigation">
            <nav>
                <ul class="nav topnav">
                    <li class="dropdown {{ (request()->is('/'))?'active':'' }}">
                        <a href="{{url('/')}}"><span class="icon-home"></span> Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#">About <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li class="{{ (request()->is('about/our_company'))?'active':'' }}"><a href="{{ url('about/our_company') }}">Our Company</a></li>
                            <li class="{{ (request()->is('about/key_staff'))?'active':'' }}"><a href="{{url('about/key_staff')}}">Our Key Staff</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Services <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Business Software Solution</a></li>
                            <li><a href="#">Software Development</a></li>
                            <li><a href="#">Project Management</a></li>
                            <li><a href="#">Web App Development</a></li>
                            <li><a href="#">Web Hosting</a></li>
                        </ul>
                    </li>

                    <li class="{{ (request()->is('contact'))?'active':'' }}">
                        <a href="{{ url('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- end navigation -->
    </div>
</div>