@extends('layouts.frontend')
@section('title', 'Hill View Hotel - Home')
@section('content')
    <!-- PAGE HEADING -->
    <div class="impx-page-heading uk-position-relative blog">
        <div class="impx-overlay dark"></div>
        <div class="uk-container">
            <div class="uk-width-1-1">
                <div class="uk-flex uk-flex-left">
                    <div class="uk-light uk-position-relative uk-text-left page-title">
                        <h1 class="uk-margin-remove">Blog</h1><!-- page title -->
                        <p class="impx-text-large uk-margin-remove">Our Latest News</p><!-- page subtitle -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE HEADING END -->

    <!-- CONTENT -->
    <div class="uk-padding uk-padding-remove-horizontal">
        <div class="uk-container">
            <div data-uk-grid>

                <!-- ARTICLES LIST -->
                <div
                    class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s uk-margin-top impx-margin-top-small">

                    <div class="uk-card uk-card-default uk-margin-medium-bottom impx-article">
                        <!-- article #1 -->
                        <div class="uk-card-body impx-padding-medium">
                            <article class="uk-article impx-article-item">
                                <h3 class="uk-article-title"><a class="uk-link-reset" href="single-post.html">Quem Tiberina
                                        descensio festo illo die tanto gaudio</a></h3>

                                <p class="uk-article-meta uk-margin-remove-top"><i class="fa fa-user"></i> <a href="#"
                                        class="impx-text-aqua">Super User</a> | <i class="fa fa-calendar"></i> 12 April
                                    2018. | <i class="fa fa-tags"></i> <a href="#" class="impx-text-aqua">Blog</a> |
                                    <i class="fa fa-commenting"></i> <a class="uk-button uk-button-text impx-text-aqua"
                                        href="#">5 Comments</a>
                                </p>

                                <img src="{{ asset('frontend/assets') }}/images/slideshow/slide-4.jpg"
                                    class="uk-margin-small-bottom" alt="">

                                <p class="uk-dropcap">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.
                                    Quasi ego id curem, ludus esset. Nam et a te perfici istam disputationem volo, nec tua
                                    mihi oratio longa <a class="uk-button uk-button-text impx-text-aqua"
                                        href="#">...Read more &raquo;</a></p>

                            </article>
                        </div>
                    </div><!-- article #1 end -->

                    <div class="uk-card uk-card-default uk-margin-medium-bottom impx-article">
                        <!-- article #2 -->
                        <div class="uk-card-body impx-padding-medium impx-article-item">
                            <article class="uk-article">
                                <h3 class="uk-article-title"><a class="uk-link-reset" href="single-post.html">Sed tamen
                                        omne, quod de re bona dilucide, mihi praeclare dici videtur haec uberiora certe
                                        sunt</a></h3>

                                <p class="uk-article-meta"><i class="fa fa-user"></i> <a href="#"
                                        class="impx-text-aqua">Super User</a> | <i class="fa fa-calendar"></i> 12 April
                                    2018. | <i class="fa fa-tags"></i> <a href="#" class="impx-text-aqua">Blog</a> |
                                    <i class="fa fa-commenting"></i> <a class="uk-button uk-button-text impx-text-aqua"
                                        href="#">5 Comments</a>
                                </p>

                                <img src="{{ asset('frontend/assets') }}/images/slideshow/slide-1.jpg"
                                    class="uk-margin-small-bottom" alt="">

                                <p class="uk-dropcap">Sarem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.
                                    Quasi ego Nam et a te perfici istam disputationem volo, nec tua mihi oratio longa videri
                                    potest <a class="uk-button uk-button-text impx-text-aqua" href="#">...Read more
                                        &raquo;</a></p>

                            </article>
                        </div>
                    </div><!-- article #2 end -->

                    <div class="uk-card uk-card-default uk-margin-medium-bottom impx-article">
                        <!-- article #3 -->
                        <div class="uk-card-body impx-padding-medium impx-article-item">
                            <article class="uk-article">
                                <h3 class="uk-article-title"><a class="uk-link-reset" href="single-post.html">Mihi praeclare
                                        dici videtur haec uberiora certe sunt</a></h3>

                                <p class="uk-article-meta"><i class="fa fa-user"></i> <a href="#"
                                        class="impx-text-aqua">Super User</a> | <i class="fa fa-calendar"></i> 12 April
                                    2018. | <i class="fa fa-tags"></i> <a href="#" class="impx-text-aqua">Blog</a> |
                                    <i class="fa fa-commenting"></i> <a class="uk-button uk-button-text impx-text-aqua"
                                        href="#">5 Comments</a>
                                </p>

                                <div class="uk-cover-container uk-height-large">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/OSKJXPLQXzw"
                                        allowfullscreen data-uk-cover></iframe>
                                </div>

                                <p class="uk-dropcap">Karem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Quasi ego
                                    id curem, quid ille aiat aut neget. Ita enim vivunt quidam, ut eorum vita refellatur
                                    oratio. Cum praesertim illa perdiscere ludus esset. Nam et a te perfici istam
                                    disputationem <a class="uk-button uk-button-text impx-text-aqua" href="#">...Read
                                        more &raquo;</a></p>

                            </article>
                        </div>
                    </div><!-- article #3 end -->

                    <!-- blog paging -->
                    <ul class="uk-pagination uk-flex-center impx-pagination" data-uk-margin>
                        <li><a href="#"><span data-uk-pagination-previous></span></a></li>
                        <li class="uk-active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><span data-uk-pagination-next></span></a></li>
                    </ul>
                    <!-- blog paging end -->

                </div>
                <!-- ARTICLES LIST -->

                <!-- SIDEBAR -->
                <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-1@s  uk-margin-top">

                    <!-- Search Widget -->
                    <div class="impx-sidebar uk-margin-medium-bottom">
                        <form class="uk-search uk-search-default">
                            <a href="#" class="uk-search-icon-flip" data-uk-search-icon></a>
                            <input class="uk-search-input" type="search" placeholder="Search...">
                        </form>
                    </div>
                    <!-- Search Widget End -->

                    <!-- Popular Posts Widget -->
                    <div class="impx-sidebar uk-margin-large-bottom">
                        <h4 class="uk-heading-line uk-heading-bullet"><span>Most Popular</span></h4>
                        <ul class="impx-popular-news uk-list uk-list-divider uk-list-large">
                            <li>
                                <div class="uk-grid-small" data-uk-grid>
                                    <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-6@s">
                                        <div class="impx-popular-thumb">
                                            <img src="{{ asset('frontend/assets') }}/images/rooms/room-2.jpg"
                                                alt="Popular Thumbnail" />
                                        </div>
                                    </div>
                                    <div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-5-6@s">
                                        <h6 class="uk-margin-small-bottom"><a href="single-post.html"
                                                class="uk-link-reset">Maximus dolor, inquit, brevis est. Et non ex maxima
                                                parte</a></h6>
                                        <ul class="impx-post-meta">
                                            <li><i class="fa fa-commenting-o"></i> <a href="#">10 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-grid-small" data-uk-grid>
                                    <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-6@s">
                                        <div class="impx-popular-thumb">
                                            <img src="{{ asset('frontend/assets') }}/images/rooms/room-2.jpg"
                                                alt="Popular Thumbnail" />
                                        </div>
                                    </div>
                                    <div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-5-6@s">
                                        <h6 class="uk-margin-small-bottom"><a href="single-post.html"
                                                class="uk-link-reset">At iam decimum annum in spelunca iacet</a></h6>
                                        <ul class="impx-post-meta">
                                            <li><i class="fa fa-commenting-o"></i> <a href="#">8 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-grid-small" data-uk-grid>
                                    <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-6@s">
                                        <div class="impx-popular-thumb">
                                            <img src="{{ asset('frontend/assets') }}/images/rooms/room-3.jpg"
                                                alt="Popular Thumbnail" />
                                        </div>
                                    </div>
                                    <div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-5-6@s">
                                        <h6 class="uk-margin-small-bottom"><a href="single-post.html"
                                                class="uk-link-reset">Sin autem est in ea, quod quidam volunt</a></h6>
                                        <ul class="impx-post-meta">
                                            <li><i class="fa fa-commenting-o"></i> <a href="#">7 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-grid-small" data-uk-grid>
                                    <div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-6@s">
                                        <div class="impx-popular-thumb">
                                            <img src="{{ asset('frontend/assets') }}/images/rooms/room-4.jpg"
                                                alt="Popular Thumbnail" />
                                        </div>
                                    </div>
                                    <div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-5-6@s">
                                        <h6 class="uk-margin-small-bottom"><a href="single-post.html"
                                                class="uk-link-reset">Sin autem est in ea, quod quidam volunt, nihil
                                                impedit</a></h6>
                                        <ul class="impx-post-meta">
                                            <li><i class="fa fa-commenting-o"></i> <a href="#">7 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Popular Posts Widget End -->

                    <!-- Categories Widget -->
                    <div class="impx-sidebar uk-margin-large-bottom">
                        <h4 class="uk-heading-line uk-heading-bullet"><span>Categories</span></h4>
                        <ul class="uk-list uk-list-divider impx-cat-list">
                            <li><a href="#">Restaurant</a></li>
                            <li><a href="#">Foods</a></li>
                            <li><a href="#">Hotel</a></li>
                            <li><a href="#">Travelling</a></li>
                            <li><a href="#">Oriental Spa</a></li>
                        </ul>
                    </div>
                    <!-- Categories Widget End -->

                    <!-- Tags Cloud Widget -->
                    <div class="impx-sidebar">
                        <h4 class="uk-heading-line uk-heading-bullet"><span>Tags</span></h4>
                        <ul class="impx-tags-widget">
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Drink</a></li>
                            <li><a href="#">Coffee</a></li>
                            <li><a href="#">Meat</a></li>
                            <li><a href="#">Vegetarian</a></li>
                            <li><a href="#">Dinner</a></li>
                            <li><a href="#">Breafast</a></li>
                            <li><a href="#">Recipes</a></li>
                            <li><a href="#">Lunch</a></li>
                            <li><a href="#">Desserts</a></li>
                            <li><a href="#">Chef</a></li>
                            <li><a href="#">Recommendation</a></li>
                        </ul>
                    </div>
                    <!-- Tags Cloud Widget End -->

                </div>
                <!-- SIDEBAR -->

            </div>
        </div>
    </div>
    <!-- CONTENT END -->

@endsection
