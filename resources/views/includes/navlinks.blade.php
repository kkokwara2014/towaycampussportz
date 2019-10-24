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
                            <li class="{{ (request()->is('about/the_founder'))?'active':'' }}"><a
                                    href="{{url('about/the_founder')}}">The Founder</a>
                            </li>
                            <li class="{{ (request()->is('about/our_mission'))?'active':'' }}"><a
                                    href="{{ url('about/our_mission') }}">Our Mission</a></li>
                            <li class="{{ (request()->is('about/our_vision'))?'active':'' }}"><a
                                    href="{{ url('about/our_vision') }}">Our Vision</a></li>
                            <li class="{{ (request()->is('about/key_staff'))?'active':'' }}"><a
                                    href="{{url('about/key_staff')}}">Our Key Staff</a>
                            </li>
                            <li class="{{ (request()->is('about/our_sponsors'))?'active':'' }}"><a
                                    href="{{url('about/our_sponsors')}}">Our Sponsors</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#">Events <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Upcoming Events</a></li>
                            <li><a href="#">Past Events</a></li>
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