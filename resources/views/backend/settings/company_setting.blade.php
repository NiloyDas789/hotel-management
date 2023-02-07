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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('company-setting.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="profile-info">
                            <div class="row d-flex">
                                <div class="col-lg-6">
                                    <div class=" align-items-center mb-30">
                                        <div class="profile-image mb-10">
                                            <img src="{{ asset('') }}backend/assets/images/profile/profile-1.png"
                                                alt="">
                                            <div class="update-image">
                                                <input type="file" name="logo" id="logo">
                                                <label for="logo"><i class="lni lni-cloud-upload"></i></label>
                                                @error('logo')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
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
                                                <input type="file" name="footer_logo" id="footer_logo">
                                                <label for="footer_logo"><i class="lni lni-cloud-upload"></i></label>
                                                @error('footer_logo')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
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
                                        <input type="text" name="name" value="{{ $company_setting->name }}"
                                            class="@error('name') is-invalid @enderror" placeholder="Company Name">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Email</label>
                                        <input type="email" name="email" value="{{ $company_setting->email }}"
                                            class="@error('email') is-invalid @enderror" placeholder="Email">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Mobile Number 1</label>
                                        <input type="text" name="mobile1" value="{{ $company_setting->mobile1 }}"
                                            class="@error('mobile1') is-invalid @enderror" placeholder="Mobile Number ">
                                        @error('mobile1')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Mobile Number 2</label>
                                        <input type="text" name="mobile2" value="{{ $company_setting->mobile2 }}"
                                            class="@error('mobile2') is-invalid @enderror" placeholder="Mobile Number ">
                                        @error('mobile2')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Location</label>
                                        <input type="text" name="location" value="{{ $company_setting->location }}"
                                            class="@error('location') is-invalid @enderror" placeholder="Location">
                                        @error('location')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Facebook</label>
                                        <input type="text" name="facebook" value="{{ $company_setting->facebook }}"
                                            class="@error('facebook') is-invalid @enderror" placeholder="Facebook">
                                        @error('facebook')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Twitter</label>
                                        <input type="text" name="twitter" value="{{ $company_setting->twitter }}"
                                            class="@error('twitter') is-invalid @enderror" placeholder="Twitter">
                                        @error('twitter')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Instagram</label>
                                        <input type="text" name="instagram" value="{{ $company_setting->instagram }}"
                                            class="@error('instagram') is-invalid @enderror" placeholder="Instagram">
                                        @error('instagram')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Whatsapp</label>
                                        <input type="text" name="whatsapp" value="{{ $company_setting->whatsapp }}"
                                            class="@error('whatsapp') is-invalid @enderror" placeholder="Whatsapp">
                                        @error('whatsapp')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>About</label>
                                        <textarea name="about" value="{{ $company_setting->about }}" class="@error('about') is-invalid @enderror"
                                            placeholder="Type here" rows="6"></textarea>
                                        @error('about')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Meta Title</label>
                                        <input type="text" name="meta_title"
                                            value="{{ $company_setting->meta_title }}"
                                            class="@error('meta_title') is-invalid @enderror" placeholder="Meta Title">
                                        @error('meta_title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="input-style-1">
                                        <label>Meta Keywords</label>
                                        <input type="text" name="meta_keywords"
                                            value="{{ $company_setting->meta_keywords }}"
                                            class="@error('meta_keywords') is-invalid @enderror"
                                            placeholder="Meta Keywords">
                                        @error('meta_keywords')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Meta Description</label>
                                        <textarea name="meta_description" value="{{ $company_setting->meta_description }}"
                                            class="@error('meta_description') is-invalid @enderror" placeholder="Type here" rows="4"></textarea>
                                        @error('meta_description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>About Footer</label>
                                        <textarea name="about_footer" value="{{ $company_setting->about_footer }}"
                                            class="@error('about_footer') is-invalid @enderror" placeholder="Type here" rows="2"></textarea>
                                        @error('about_footer')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
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
