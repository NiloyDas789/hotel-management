@extends('layouts.backend')

@section('title', 'Company Setting')


@section('content')
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="titlemb-30">
                        <h2>Settings</h2>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#0">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#0">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Settings
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- ========== title-wrapper end ========== -->

        <div class="row">
            <div class="col-lg-10">
                <div class="card-style settings-card-1 mb-30">
                    <div class="title mb-30 d-flex justify-content-between align-items-center">
                        <h6>My Profile</h6>
                        <button class="border-0 bg-transparent">
                            <i class="lni lni-pencil-alt"></i>
                        </button>
                    </div>
                    <form action="{{ route('company-setting.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="profile-info">
                            <div class="row d-flex">
                                <div class="col-lg-6">
                                    <div class=" align-items-center mb-30">
                                        <div class="profile-image mb-10">
                                            <img src="{{ asset('') }}backend/assets/images/profile/profile-1.png"
                                                alt="">
                                            <div class="update-image">
                                                <input type="file">
                                                <label for=""><i class="lni lni-cloud-upload"></i></label>
                                            </div>
                                        </div>
                                        <div class="profile-meta">
                                            <h5 class="text-bold text-dark mb-10">Main Logo</h5>
                                            {{-- <p class="text-sm text-gray">Web &amp; UI/UX Design</p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class=" align-items-center mb-30">
                                        <div class="profile-image mb-10">
                                            <img src="{{ asset('') }}backend/assets/images/profile/profile-1.png"
                                                alt="">
                                            <div class="update-image">
                                                <input type="file">
                                                <label for=""><i class="lni lni-cloud-upload"></i></label>
                                            </div>
                                        </div>
                                        <div class="profile-meta">
                                            <h5 class="text-bold text-dark mb-10">Footer Logo</h5>
                                            {{-- <p class="text-sm text-gray">Web &amp; UI/UX Design</p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <br />


                            <div class="row">

                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Company Name</label>
                                        <input type="text" placeholder="Company Name">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Email</label>
                                        <input type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Mobile 1</label>
                                        <input type="text" placeholder="Mobile Number ">
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Mobile 2</label>
                                        <input type="text" placeholder="Mobile Number ">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Location</label>
                                        <input type="text" placeholder="Location">
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Facebook</label>
                                        <input type="text" placeholder="Facebook">
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Twitter</label>
                                        <input type="text" placeholder="Twitter">
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Instagram</label>
                                        <input type="text" placeholder="Instagram">
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Whatsapp</label>
                                        <input type="text" placeholder="Whatsapp">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>About Me</label>
                                        <textarea placeholder="Type here" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Meta Title</label>
                                        <input type="text" placeholder="Meta Title">
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Meta Keywords</label>
                                        <input type="text" placeholder="Meta Keywords">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Meta Description</label>
                                        <textarea placeholder="Type here" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>About Footer</label>
                                        <textarea placeholder="Type here" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="main-btn primary-btn btn-hover">
                                        Update Settings
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
@endsection
{{-- @push('script')
<script src="{{ asset('') }}backend/assets/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js">
</script>
<script src="backend/assets/js/pages/form-validation.init.js"></script>
@endpush

@push('style')
<link href="{{ asset('') }}backend/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
@endpush --}}
