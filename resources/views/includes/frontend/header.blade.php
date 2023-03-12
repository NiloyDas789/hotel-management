<header id="impx-header">
    <div>
        <div class="impx-menu-wrapper style2"
            data-uk-sticky="
            {{ request()->is('/') ? 'top: .impx-slide-container;' : 'top: .impx-page-heading;' }} animation: uk-animation-slide-top">

            <!-- Mobile Nav Start -->
            <div id="mobile-nav" data-uk-offcanvas="mode: push; overlay: true">
                <div class="uk-offcanvas-bar">

                    <ul class="uk-nav uk-nav-default">
                        <li class="uk-parent uk-active">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="uk-parent">
                            <a href="{{ route('rooms') }}">Rooms</a>
                        </li>
                        <li><a href="activities.html">Activities</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a href="testimonial.html">Reviews</a></li>
                        <li><a href="about.html">About Us</a></li>
                    </ul>

                </div>
            </div>
            <a href="#mobile-nav" class="uk-hidden@xl uk-hidden@l uk-hidden@m mobile-nav"
                data-uk-toggle="target: #mobile-nav"><i class="fa fa-bars"></i>Menu</a>
            <!-- Mobile Nav End -->

            <!-- Top Header -->
            <div class="impx-top-header style2">
                <div class="uk-container uk-container-expand">

                    <div class="uk-grid">
                        <!-- header phone -->
                        <div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                            <div class="impx-top-phone">
                                <p><i class="fa fa-phone"></i> Phone : +62 123456789</p>
                            </div>
                        </div><!-- header phone end-->
                        <!-- header social media -->
                        <div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                            <div class="impx-top-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook-f"></i>Facebook</a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                </ul>
                            </div>
                        </div><!-- header social media end -->
                    </div>

                </div>
            </div>
            <!-- Top Header End -->

            <div class="uk-container uk-container-expand">
                <div data-uk-grid>

                    <!-- Header Logo -->
                    <div class="uk-width-auto">
                        <div class="impx-logo">
                            <a href="index.html"><img src="{{ asset('frontend/assets') }}/images/logo.png"
                                    class="" alt="Logo"></a>
                        </div>
                    </div>
                    <!-- Header Logo End-->

                    <!-- Header Navigation -->
                    <div class="uk-width-expand uk-position-relative">
                        <nav class="uk-navbar-container uk-navbar-transparent uk-visible@s uk-visible@m" data-uk-navbar>
                            <div class="uk-navbar-right impx-navbar-right">
                                <ul class="uk-navbar-nav impx-nav style2">
                                    <!-- Navigation Items -->
                                    <li>
                                        <a href="{{ route('home') }}">
                                            <div>
                                                Home<div class="uk-navbar-subtitle">Welcome</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('rooms') }}">
                                            <div>Rooms<div class="uk-navbar-subtitle">Modern Living</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog') }}" class="uk-navbar-nav-subtitle">
                                            <div>
                                                Blog<div class="uk-navbar-subtitle">Travel Insights</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('gallery') }}" class="uk-navbar-nav-subtitle">
                                            <div>
                                                Gallery<div class="uk-navbar-subtitle">Fond Memories</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="activities.html" class="uk-navbar-nav-subtitle">
                                            <div>
                                                Reviews<div class="uk-navbar-subtitle">Guest Feedback</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="activities.html" class="uk-navbar-nav-subtitle">
                                            <div>
                                                About Us<div class="uk-navbar-subtitle">Who We Are</div>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                                <!-- Navigation Items End -->
                            </div>
                        </nav>
                    </div>
                    <!-- Header Navigation End -->

                    <!-- Promo Ribbon -->
                    <div class="uk-width-auto uk-position-relative">
                        <div class="ribbon">
                            <i><span><s></s>30% <span>Off!</span><s></s></span></i>
                        </div>
                    </div>
                    <!-- Promo Ribbon End -->

                </div>
            </div>
        </div>
    </div>

</header>
