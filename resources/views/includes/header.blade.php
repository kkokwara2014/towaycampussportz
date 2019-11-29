<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Toway Campus Sportz</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <!-- css -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700"
            rel="stylesheet">
        <link href="{{asset('bootstrap_assets/css/bootstrap.css')}}" rel="stylesheet" />
        <link href="{{asset('bootstrap_assets/css/bootstrap-responsive.css')}}" rel="stylesheet" />
        <link href="{{asset('bootstrap_assets/css/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
        <link href="{{asset('bootstrap_assets/css/jcarousel.css')}}" rel="stylesheet" />
        <link href="{{asset('bootstrap_assets/css/flexslider.css')}}" rel="stylesheet" />
        <link href="{{asset('bootstrap_assets/css/style.css')}}" rel="stylesheet" />
        <!-- Theme skin -->
        <link href="{{asset('bootstrap_assets/skins/default.css')}}" rel="stylesheet" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144"
            href="{{asset('bootstrap_assets/ico/apple-touch-icon-144-precomposed.png')}}" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114"
            href="{{asset('bootstrap_assets/ico/apple-touch-icon-114-precomposed.png')}}" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72"
            href="{{asset('bootstrap_assets/ico/apple-touch-icon-72-precomposed.png')}}" />
        <link rel="apple-touch-icon-precomposed"
            href="{{asset('bootstrap_assets/ico/apple-touch-icon-57-precomposed.png')}}" />
        <link rel="shortcut icon" href="{{asset('bootstrap_assets/ico/favicon.png')}}" />

    </head>

    <body>
        <div id="wrapper">
            <!-- toggle top area -->
            <div class="hidden-top">
                <div class="hidden-top-inner container">
                    <div class="row">
                        <div class="span12">
                            <ul>
                                <li><strong>We are available for software solution development, setup, and
                                        support.</strong></li>
                                <li>Main office: Springville center X264, Park Ave S.01</li>
                                <li>Call us <i class="icon-phone"></i> (+234) 803-888-3919</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end toggle top area -->
            <!-- start header -->
            <header>
                <div class="container ">
                    <!-- hidden top area toggle link -->
                    {{-- <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div> --}}
                    <!-- end toggle link -->
                    @include('includes.myform')
                    <div class="row">
                        <div class="span4">
                            <div class="logo">
                                <a href="index.html"><img src="{{asset('bootstrap_assets/img/logo.png')}}" alt=""
                                        class="logo" /></a>
                                <h1>...managing sportz in campuses</h1>
                            </div>
                        </div>

                        {{-- nav links --}}
                        @include('includes.navlinks')
                    </div>
                </div>
            </header>
            <!-- end header -->