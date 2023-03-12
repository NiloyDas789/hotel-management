@extends('layouts.frontend')
@section('title', 'Hill View Hotel - Rooms')
@section('content')
    <!-- PAGE HEADING -->
    <div class="impx-page-heading uk-position-relative rooms">
        <div class="impx-overlay dark"></div>
        <div class="uk-container">
            <div class="uk-width-1-1">
                <div class="uk-flex uk-flex-left">
                    <div class="uk-light uk-position-relative uk-text-left page-title">
                        <h1 class="uk-margin-remove">Rooms</h1><!-- page title -->
                        <p class="impx-text-large uk-margin-remove">Browse &amp; Choose Your Choice</p><!-- page subtitle -->
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
                <!-- main content -->
                <div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s uk-margin-small-top">
                    <div class="uk-position-relative uk-visible-toggle">
                        <!-- Rooms List -->
                        <ul class="uk-child-width-1-2@xl uk-child-width-1-2@l uk-child-width-1-2@m uk-child-width-1-2@s data-uk-grid uk-grid-match uk-margin-large-bottom"
                            data-uk-grid>
                            <li>
                                <!-- room item #1 -->
                                <div class="uk-card uk-card-default uk-card-medium">
                                    <div class="uk-card-media-top uk-position-relative">
                                        <img src="{{ asset('frontend/assets') }}/images/rooms/room-2.jpg" alt="">
                                        <div class="impx-overlay light overlay-squared padding-xwide"></div>
                                    </div>
                                    <div class="uk-card-body impx-padding-medium">
                                        <h4 class="uk-card-title uk-margin-remove-bottom">Single Room</h4>
                                        <span class="uk-label bg-color-aqua">from $50/night</span>
                                        <ul class="uk-list room-fac">
                                            <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>
                                                Beatus in maximarum timore</li>
                                            <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>
                                                Oculis Compensabatur</li>
                                            <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>
                                                Dolorisnos veriusque nihil</li>
                                        </ul>

                                        <div class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
                                            <a href="room-detail.html" class="uk-button uk-button-text impx-text-aqua">Read
                                                more &raquo;</a>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- room item #1 end -->
                            <li>
                                <!-- room item #2 -->
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top uk-position-relative">
                                        <img src="{{ asset('frontend/assets') }}/images/rooms/room-2.jpg" alt="">
                                        <div class="impx-overlay light overlay-squared padding-xwide"></div>
                                    </div>
                                    <div class="uk-card-body impx-padding-medium">
                                        <h4 class="uk-card-title uk-margin-remove-bottom">Double Room</h4>
                                        <span class="uk-label bg-color-aqua">from $80/night</span>
                                        <ul class="uk-list room-fac">
                                            <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>
                                                Beatus in maximarum timore</li>
                                            <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>
                                                Oculis Compensabatur</li>
                                            <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>
                                                Dolorisnos veriusque nihil</li>
                                        </ul>

                                        <div class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
                                            <a href="room-detail.html" class="uk-button uk-button-text impx-text-aqua">Read
                                                more &raquo;</a>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- room item #2 end -->
                            <li>
                                <!-- room item #3 -->
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top uk-position-relative">
                                        <img src="{{ asset('frontend/assets') }}/images/rooms/room-3.jpg" alt="">
                                        <div class="impx-overlay light overlay-squared padding-xwide"></div>
                                    </div>
                                    <div class="uk-card-body impx-padding-medium">
                                        <h4 class="uk-card-title uk-margin-remove-bottom">Premiere Room</h4>
                                        <span class="uk-label bg-color-aqua">from $100/night</span>
                                        <ul class="uk-list room-fac">
                                            <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>
                                                Beatus in maximarum timore</li>
                                            <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>
                                                Oculis Compensabatur</li>
                                            <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>
                                                Dolorisnos veriusque nihil</li>
                                        </ul>

                                        <div class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
                                            <a href="room-detail.html" class="uk-button uk-button-text impx-text-aqua">Read
                                                more &raquo;</a>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- room item #3 end -->
                            <li>
                                <!-- room item #4 -->
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top uk-position-relative">
                                        <img src="{{ asset('frontend/assets') }}/images/rooms/room-4.jpg" alt="">
                                        <div class="impx-overlay light overlay-squared padding-xwide"></div>
                                    </div>
                                    <div class="uk-card-body impx-padding-medium">
                                        <h4 class="uk-card-title uk-margin-remove-bottom">Deluxe Room</h4>
                                        <span class="uk-label bg-color-aqua">from $150/night</span>
                                        <ul class="uk-list room-fac">
                                            <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>
                                                Beatus in maximarum timore</li>
                                            <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>
                                                Oculis Compensabatur</li>
                                            <li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span>
                                                Dolorisnos veriusque nihil</li>
                                        </ul>

                                        <div class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
                                            <a href="room-detail.html" class="uk-button uk-button-text impx-text-aqua">Read
                                                more &raquo;</a>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- room item #4 end -->
                        </ul>
                        <!-- rooms list end -->
                    </div>

                    <!-- rooms paging -->
                    <ul class="uk-pagination uk-flex-center impx-pagination uk-margin-remove-top" data-uk-margin>
                        <li><a href="#"><span data-uk-pagination-previous></span></a></li>
                        <li class="uk-active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><span data-uk-pagination-next></span></a></li>
                    </ul>
                    <!-- rooms paging end -->
                </div>
                <!-- main content end -->

                <!-- sidebar -->
                <div
                    class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-1@s
uk-margin-small-top">

                    <!-- booking form -->
                    <div class="bg-color-aqua uk-padding impx-padding-medium">
                        <div class="impx-hp-booking-form side-form uk-margin-bottom uk-margin-remove-top">
                            <h6 class="uk-heading-line uk-text-center impx-text-white uk-text-uppercase"><span>Booking
                                    Form</span></h6>
                            <form class="">
                                <div class="uk-margin">
                                    <div class="uk-form-controls">
                                        <div class="uk-inline">
                                            <label class="uk-form-label">Email</label>
                                            <span class="uk-form-icon" data-uk-icon="icon: mail"></span>
                                            <input class="uk-input booking-email uk-border-rounded" type="text"
                                                placeholder="your e-mail">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-form-controls">
                                        <div class="uk-inline">
                                            <label class="uk-form-label">Arrival</label>
                                            <span class="uk-form-icon" data-uk-icon="icon: calendar"></span>
                                            <input class="uk-input booking-arrival uk-border-rounded" type="text"
                                                placeholder="m/dd/yyyy">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-form-controls">
                                        <div class="uk-inline">
                                            <label class="uk-form-label">Departure</label>
                                            <span class="uk-form-icon" data-uk-icon="icon: calendar"></span>
                                            <input class="uk-input booking-departure uk-border-rounded" type="text"
                                                placeholder="m/dd/yyyy">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-form-controls uk-position-relative">
                                        <label class="uk-form-label" for="form-guest-select">Guest</label>
                                        <span class="uk-form-icon select-icon" data-uk-icon="icon: users"></span>
                                        <select class="uk-select uk-border-rounded" id="form-guest-select">
                                            <option value="">Please select...</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-form-controls uk-position-relative">
                                        <label class="uk-form-label" for="form-rooms-select">Rooms</label>
                                        <span class="uk-form-icon select-icon" data-uk-icon="icon: album"></span>
                                        <select class="uk-select uk-border-rounded" id="form-rooms-select">
                                            <option value="">Please select...</option>
                                            <option value="room_1">Single</option>
                                            <option value="room_2">Double</option>
                                            <option value="room_3">Primier</option>
                                            <option value="room_4">Deluxe</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <label class="uk-form-label empty-label">&nbsp;</label>
                                    <button class="uk-button uk-width-1-1">Book Now!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- booking form -->

                    <!-- features -->
                    <div class="bg-color-white uk-padding  impx-padding-medium uk-box-shadow-small">
                        <h4 class="uk-heading-line uk-margin-medium-bottom"><span>Our Key Features</span></h4>
                        <ul class="uk-list uk-list-divider uk-list-large">
                            <li>
                                <div data-uk-grid class="uk-grid-medium">
                                    <div class="uk-width-auto">
                                        <i class="fa fa-cutlery fa-2x impx-text-aqua"></i>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h6 class="uk-margin-remove">In-house Restaurant</h6>
                                        <p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet
                                            agendum esse natos. Quam tu ponis in verbis ego</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div data-uk-grid class="uk-grid-medium">
                                    <div class="uk-width-auto">
                                        <i class="fa fa-asterisk fa-2x impx-text-aqua"></i>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h6 class="uk-margin-remove">Spa</h6>
                                        <p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet
                                            agendum esse natos. Quam tu ponis in verbis ego</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div data-uk-grid class="uk-grid-medium">
                                    <div class="uk-width-auto">
                                        <i class="fa fa-paw fa-2x impx-text-aqua"></i>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h6 class="uk-margin-remove">Outdoor</h6>
                                        <p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet
                                            agendum esse natos. Quam tu ponis in verbis ego</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div data-uk-grid class="uk-grid-medium">
                                    <div class="uk-width-auto">
                                        <i class="fa fa-heart fa-2x impx-text-aqua"></i>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h6 class="uk-margin-remove">Gym</h6>
                                        <p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet
                                            agendum esse natos. Quam tu ponis in verbis</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- features end -->

                </div>
                <!-- sidebar end -->

            </div>
        </div>
    </div>
    <!-- CONTENT END -->
@endsection
