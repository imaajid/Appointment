@extends('layouts.frontend')
@section('content')
     <!-- Hero Start -->
     <section class="bg-half-170 d-table w-100 home-wrapper overflow-hidden">
        <div class="container">
            <div class="row mt-5 align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="title-heading">
                        <span class="badge rounded-pill bg-soft-primary"><b>Medical</b></span>  
                            <h4 class="heading my-3">Welcome to <br><span class="text-primary">Zeus.</span></h1></h4>
                        <p class="para-desc text-muted mb-0">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>
                        
                        <div class="mt-3">
                            <a href="{{asset('our_services')}}" class="btn btn-primary me-2 mt-2">Find Doctors</a>
                            <a href="javascript:void(0)" class="btn btn-soft-primary mt-2">Book an Appointment</a>
                        </div>

                        <p class="text-muted mb-0 mt-3">Don't have an account yet? <a href="javascript:void(0)" class="text-primary ms-2 h6 mb-0">Signup <i data-feather="arrow-right" class="fea icon-sm"></i></a></p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="ms-lg-4">
                        <img src="{{ asset('frontend/images/doctor/doctor.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card features fea-primary rounded p-4 bg-white position-relative overflow-hidden border-0">
                        <span class="h1 icon2 text-primary">
                            <i class="uil uil-newspaper"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Appointment</h5>
                            <p class="para text-muted mb-0">It is a long established fact that a reader layout.</p>

                            <a href="javascript:void(0)" class="btn btn-pills btn-soft-success mt-4" data-bs-toggle="modal" data-bs-target="#appointment-request">Request</a>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="card features fea-primary rounded p-4 bg-white position-relative overflow-hidden border-0">
                        <span class="h1 icon2 text-primary">
                            <i class="uil uil-clock"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Opening Hour</h5>
                            
                            <h6 class="mb-0">Monday - Friday</h6>
                            <p class="para text-muted">7AM to 11 PM</p>

                            <h6 class="mb-0">Address:</h6>
                            <p class="para text-muted mb-0">C/54 Northwest Freeway</p>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-6 col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                    <div class="card features fea-primary rounded p-4 bg-white position-relative overflow-hidden border-0">
                        <span class="h1 icon2 text-primary">
                            <i class="uil uil-user-md"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Find Doctors</h5>
                            <p class="para text-muted mb-0">It is a long established fact that a reader layout.</p>

                            <a href="javascript:void(0)" class="btn btn-pills btn-soft-success mt-4">Doctors</a>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-6 col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                    <div class="card features fea-primary rounded p-4 bg-white position-relative overflow-hidden border-0">
                        <span class="h1 icon2 text-primary">
                            <i class="uil uil-map-marker"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Find Locations</h5>
                            <p class="para text-muted mb-0">It is a long established fact that a reader layout.</p>

                            <a href="javascript:void(0)" class="btn btn-pills btn-soft-success mt-4">Locations</a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="position-relative">
                        <img src="{{ asset('frontend/images/doctor/we.jpg') }}" class="rounded img-fluid mx-auto d-block shadow rounded" alt="">
                        <div class="play-icon">
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="play-btn lightbox">
                                <i class="mdi mdi-play text-primary rounded-circle bg-white shadow"></i>
                            </a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <span class="badge rounded-pill bg-soft-primary">
                            What We Do</span>
                        <h4 class="title mt-3 mb-4">We provide fast, proven and personalised Men's healthcare solutions</h4>
                        <p class="text-muted para-desc">Founded in 2000 by a team of experts passionate about health and wellness, we are proud of what we have accomplished today. We offer a shopping experience like no other, making it easy for you to find and stock up on your favorite items in minutes. And to top it off, our fair, wallet-friendly prices will always keep you coming back for more. .</p>
                        <p class="text-muted para-desc mb-0">For this reason, dummy text usually consists of a more or less random series of words or syllables.</p>

                        <div class="mt-4">
                            <a href="javascript:void(0)" class="btn btn-primary">More Services</a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-end mb-4 pb-2">
                <div class="col-md-8">
                    <div class="section-title text-center text-md-start">
                        <h6 class="text-primary">Services</h6>
                        <h4 class="title mb-4">Our Medical Services</h4>
                        <p class="text-muted mb-0 para-desc">Start working with <span class="text-primary fw-bold">Appointment</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 mt-sm-0 d-none d-md-block">
                    <div class="text-center text-md-end">
                        <a href="javascript:void(0)" class="text-primary h6">See More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <ul class="nav nav-pills nav-justified flex-column bg-white rounded shadow p-3 mb-0 sticky-bar" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link rounded active" id="dentalcare" data-bs-toggle="pill" href="#dental" role="tab" aria-controls="dental" aria-selected="false">
                                <div class="text-start py-1 px-2">
                                    <h6 class="mb-0">Dental Service</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->
                        
                        <li class="nav-item mt-2">
                            <a class="nav-link rounded" id="cardeography" data-bs-toggle="pill" href="#cardeo" role="tab" aria-controls="cardeo" aria-selected="false">
                                <div class="text-start py-1 px-2">
                                    <h6 class="mb-0">Cardiography Service</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->
                        
                        <li class="nav-item mt-2">
                            <a class="nav-link rounded" id="eyecare" data-bs-toggle="pill" href="#eye" role="tab" aria-controls="eye" aria-selected="false">
                                <div class="text-start py-1 px-2">
                                    <h6 class="mb-0">Eye Care Service</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->
                        
                        <li class="nav-item mt-2">
                            <a class="nav-link rounded" id="general-serve" data-bs-toggle="pill" href="#general" role="tab" aria-controls="general" aria-selected="false">
                                <div class="text-start py-1 px-2">
                                    <h6 class="mb-0">General Checkup</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->
                        
                        <li class="nav-item mt-2">
                            <a class="nav-link rounded" id="medicine" data-bs-toggle="pill" href="#medical" role="tab" aria-controls="medical" aria-selected="false">
                                <div class="text-start py-1 px-2">
                                    <h6 class="mb-0">Medicine Service</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->
                        
                        <li class="nav-item mt-2">
                            <a class="nav-link rounded" id="orthopadic" data-bs-toggle="pill" href="#ortho" role="tab" aria-controls="ortho" aria-selected="false">
                                <div class="text-start py-1 px-2">
                                    <h6 class="mb-0">Orthopadic</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->
                    </ul><!--end nav pills-->
                </div><!--end col-->

                <div class="col-md-8 col-12 mt-4 pt-2">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade bg-white show active p-4 rounded shadow" id="dental" role="tabpanel" aria-labelledby="dentalcare">
                            <img src="{{ asset('frontend/images/medical/dental.jpg') }}" class="img-fluid rounded shadow" alt="">
                            <div class="mt-4">
                                <h5>Dental Service</h5>
                                <p class="text-muted my-3">This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics.</p>
                                <a href="javascript:void(0)" class="text-primary">Learn More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div><!--end teb pane-->
                        
                        <div class="tab-pane fade bg-white p-4 rounded shadow" id="cardeo" role="tabpanel" aria-labelledby="cardeography">
                            <img src="{{ asset('frontend/images/medical/cardio.jpg') }}" class="img-fluid rounded shadow" alt="">
                            <div class="mt-4">
                                <h5>Cardiography Service</h5>
                                <p class="text-muted my-3">This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics.</p>
                                <a href="javascript:void(0)" class="text-primary">Learn More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div><!--end teb pane-->

                        <div class="tab-pane fade bg-white p-4 rounded shadow" id="eye" role="tabpanel" aria-labelledby="eyecare">
                            <img src="{{ asset('frontend/images/medical/eyecare.jpg') }}" class="img-fluid rounded shadow" alt="">
                            <div class="mt-4">
                                <h5>Eye Care</h5>
                                <p class="text-muted my-3">This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics.</p>
                                <a href="javascript:void(0)" class="text-primary">Learn More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div><!--end teb pane-->
                        
                        <div class="tab-pane fade bg-white p-4 rounded shadow" id="general" role="tabpanel" aria-labelledby="general-serve">
                            <img src="{{ asset('frontend/images/medical/general.jpg') }}" class="img-fluid rounded shadow" alt="">
                            <div class="mt-4">
                                <h5>General Body Checkup</h5>
                                <p class="text-muted my-3">This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics.</p>
                                <a href="javascript:void(0)" class="text-primary">Learn More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div><!--end teb pane-->
                        
                        <div class="tab-pane fade bg-white p-4 rounded shadow" id="medical" role="tabpanel" aria-labelledby="medicine">
                            <img src="{{ asset('frontend/images/medical/medicine.jpg') }}" class="img-fluid rounded shadow" alt="">
                            <div class="mt-4">
                                <h5>Medicine Services</h5>
                                <p class="text-muted my-3">This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics.</p>
                                <a href="javascript:void(0)" class="text-primary">Learn More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div><!--end teb pane-->
                        
                        <div class="tab-pane fade bg-white p-4 rounded shadow" id="ortho" role="tabpanel" aria-labelledby="orthopadic">
                            <img src="{{ asset('frontend/images/medical/orthopedic.jpg') }}" class="img-fluid rounded shadow" alt="">
                            <div class="mt-4">
                                <h5>Orthopadic Service</h5>
                                <p class="text-muted my-3">This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics.</p>
                                <a href="javascript:void(0)" class="text-primary">Learn More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div><!--end teb pane-->
                    </div><!--end tab content-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="section pt-0">
        <div class="container">
            <div class="position-relative" style="z-index: 1;">
                <div class="rounded shadow bg-white p-4">
                    <div class="row" id="counter">
                        <div class="col-md-4">
                            <div class="counter-box text-center">
                                <h1 class="mb-0 mt-3"><span class="counter-value" data-target="99">21</span>.00%</h1>
                                <h5 class="counter-head mb-1">Positive feedback</h5>
                                <p class="text-muted mb-0">From Doctors</p>
                            </div><!--end counter box-->
                        </div><!--end col-->
    
                        <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                            <div class="counter-box text-center">
                                <h1 class="mb-0 mt-3"><span class="counter-value" data-target="25">2</span>+</h1>
                                <h5 class="counter-head mb-1">Experienced Clinics</h5>
                                <p class="text-muted mb-0">High Qualified</p>
                            </div><!--end counter box-->
                        </div><!--end col-->
    
                        <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                            <div class="counter-box text-center">
                                <h1 class="mb-0 mt-3"><span class="counter-value" data-target="1100">321</span>+</h1>
                                <h5 class="counter-head mb-1">Questions & Answers</h5>
                                <p class="text-muted mb-0">Your Questions</p>
                            </div><!--end counter box-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div>

                <div class="row justify-content-center pt-4">
                    <div class="col-lg-2 col-md-2 col-6 text-center py-4 pb-md-0">
                        <img src="{{ asset('frontend/images/client/amazon.svg') }}" class="avatar avatar-ex-sm" alt="">
                    </div><!--end col-->

                    <div class="col-lg-2 col-md-2 col-6 text-center py-4 pb-md-0">
                        <img src="{{ asset('frontend/images/client/google.svg') }}" class="avatar avatar-ex-sm" alt="">
                    </div><!--end col-->
                    
                    <div class="col-lg-2 col-md-2 col-6 text-center py-4 pb-md-0">
                        <img src="{{ asset('frontend/images/client/lenovo.svg') }}" class="avatar avatar-ex-sm" alt="">
                    </div><!--end col-->
                    
                    <div class="col-lg-2 col-md-2 col-6 text-center py-4 pb-md-0">
                        <img src="{{ asset('frontend/images/client/paypal.svg') }}" class="avatar avatar-ex-sm" alt="">
                    </div><!--end col-->
                    
                    <div class="col-lg-2 col-md-2 col-6 text-center py-4 pb-md-0">
                        <img src="{{ asset('frontend/images/client/shopify.svg') }}" class="avatar avatar-ex-sm" alt="">
                    </div><!--end col-->
                    
                    <div class="col-lg-2 col-md-2 col-6 text-center py-4 pb-md-0">
                        <img src="{{ asset('frontend/images/client/spotify.svg') }}" class="avatar avatar-ex-sm" alt="">
                    </div><!--end col-->
                </div><!--end row-->
            </div>
            <div class="feature-posts-placeholder bg-primary bg-gradient"></div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-4">Our Qualified Doctors</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Appointment</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

{{-- service --}}
<div class="row">
    <div class="col-lg-4 col-md-6 mt-4 pt-2">
        <div class="card team text-center border-0 p-4 shadow">
            <div class="position-relative">
                <img src="{{ asset('frontend/images/services/s01.jpg') }}" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                <!--end icon-->
            </div>
            <div class="card-body py-3 px-0 content">
                <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">
                    Premature Ejaculation</a></h5>
                <small class="designation text-muted">Evidence based treatments for hair loss, male pattern baldness</small>
            </div>
        </div>
    </div><!--end col-->

    <div class="col-lg-4 col-md-6 mt-4 pt-2">
        <div class="card team text-center border-0 p-4 shadow">
            <div class="position-relative">
                <img src="{{ asset('frontend/images/services/s02.jpg') }}" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                <!--end icon-->
            </div>
            <div class="card-body py-3 px-0 content">
                <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Hair Loss</a></h5>
                <small class="designation text-muted">Evidence based treatments for hair loss, male pattern baldness</small>
            </div>
        </div>
    </div><!--end col-->
    
    <div class="col-lg-4 col-md-6 mt-4 pt-2">
        <div class="card team text-center border-0 p-4 shadow">
            <div class="position-relative">
                <img src="{{ asset('frontend/images/services/s03.jpg') }}" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
               <!--end icon-->
            </div>
            <div class="card-body py-3 px-0 content">
                <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Erectile Dysfunction</a></h5>
                <small class="designation text-muted">Evidence based treatments for hair loss, male pattern baldness</small>
            </div>
        </div>
    </div><!--end col-->
    
        <!--end col-->
</div>
{{-- service --}}

            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team text-center border-0 p-4 shadow">
                        <div class="position-relative">
                            <img src="{{ asset('frontend/images/medical/01.jpg') }}" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                        <div class="card-body py-3 px-0 content">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Ronny Jofra</a></h5>
                            <small class="designation text-muted">Cardiologist</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team text-center border-0 p-4 shadow">
                        <div class="position-relative">
                            <img src="{{ asset('frontend/images/medical/02.jpg') }}" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                        <div class="card-body py-3 px-0 content">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Micheal Carlo</a></h5>
                            <small class="designation text-muted">Surgeon</small>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team text-center border-0 p-4 shadow">
                        <div class="position-relative">
                            <img src="{{ asset('frontend/images/medical/03.jpg') }}" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                        <div class="card-body py-3 px-0 content">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Aliana Rosy</a></h5>
                            <small class="designation text-muted">Physician</small>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team text-center border-0 p-4 shadow">
                        <div class="position-relative">
                            <img src="{{ asset('frontend/images/medical/04.jpg') }}" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            <ul class="list-unstyled social-icon team-icon mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                        <div class="card-body py-3 px-0 content">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Sofia Razaq</a></h5>
                            <small class="designation text-muted">Chemist</small>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">What Our Patients Says</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Appointment</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4">
                    <div class="tiny-three-item">
                        <div class="tiny-slider">
                            <div class="d-flex client-testi m-2">
                                <img src="{{ asset('frontend/images/client/01.jpg') }}" class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                    <h6 class="text-primary">- Thomas Israel <small class="text-muted">C.E.O</small></h6>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tiny-slider">
                            <div class="d-flex client-testi m-2">
                                <img src="{{ asset('frontend/images/client/02.jpg') }}" class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                    <h6 class="text-primary">- Barbara McIntosh <small class="text-muted">M.D</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slider">
                            <div class="d-flex client-testi m-2">
                                <img src="{{ asset('frontend/images/client/03.jpg') }}" class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                    <h6 class="text-primary">- Carl Oliver <small class="text-muted">P.A</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slider">
                            <div class="d-flex client-testi m-2">
                                <img src="{{ asset('frontend/images/client/04.jpg') }}" class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                                    <h6 class="text-primary">- Christa Smith <small class="text-muted">Manager</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slider">
                            <div class="d-flex client-testi m-2">
                                <img src="{{ asset('frontend/images/client/05.jpg') }}" class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                    <h6 class="text-primary">- Dean Tolle <small class="text-muted">Developer</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slider">
                            <div class="d-flex client-testi m-2">
                                <img src="{{ asset('frontend/images/client/06.jpg') }}" class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                    <h6 class="text-primary">- Jill Webb <small class="text-muted">Designer</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
    
{{-- blog start --}}
<div class="row">
    <div class="col-lg-4 col-md-6 mt-4 pt-2">
        <div class="card blog rounded border-0 shadow overflow-hidden">
            <div class="position-relative">
                <img src="{{asset('frontend/images/blog/b01.jpg')}}" class="card-img-top" alt="...">
                <div class="overlay rounded-top bg-dark"></div>
            </div>
            <div class="card-body content">
                <h5><a href="javascript:void(0)" class="card-title title text-dark">Design your apps in your own way</a></h5>
                <div class="post-meta d-flex justify-content-between mt-3">
                    <ul class="list-unstyled mb-0">
                        <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                    </ul>
                    <a href="page-blog-detail.html" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                </div>
            </div>
            <div class="author">
                <small class="text-light user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                <small class="text-light date"><i class="uil uil-calendar-alt"></i> 13th August, 2019</small>
            </div>
        </div>
    </div><!--end col-->
    
    <div class="col-lg-4 col-md-6 mt-4 pt-2">
        <div class="card blog rounded border-0 shadow overflow-hidden">
            <div class="position-relative">
                <img src="{{asset('frontend/images/blog/b02.jpg')}}" class="card-img-top" alt="...">
                <div class="overlay rounded-top bg-dark"></div>
            </div>
            <div class="card-body content">
                <h5><a href="javascript:void(0)" class="card-title title text-dark">How apps is changing the IT world</a></h5>
                <div class="post-meta d-flex justify-content-between mt-3">
                    <ul class="list-unstyled mb-0">
                        <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                    </ul>
                    <a href="page-blog-detail.html" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                </div>
            </div>
            <div class="author">
                <small class="text-light user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                <small class="text-light date"><i class="uil uil-calendar-alt"></i> 13th August, 2019</small>
            </div>
        </div>
    </div><!--end col-->
    
    <div class="col-lg-4 col-md-6 mt-4 pt-2">
        <div class="card blog rounded border-0 shadow overflow-hidden">
            <div class="position-relative">
                <img src="{{asset('frontend/images/blog/b03.jpg')}}" class="card-img-top" alt="...">
                <div class="overlay rounded-top bg-dark"></div>
            </div>
            <div class="card-body content">
                <h5><a href="javascript:void(0)" class="card-title title text-dark">Smartest Applications for Business</a></h5>
                <div class="post-meta d-flex justify-content-between mt-3">
                    <ul class="list-unstyled mb-0">
                        <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                    </ul>
                    <a href="page-blog-detail.html" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                </div>
            </div>
            <div class="author">
                <small class="text-light user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                <small class="text-light date"><i class="uil uil-calendar-alt"></i> 13th August, 2019</small>
            </div>
        </div>
    </div><!--end col-->
</div>
{{-- blog end --}}





    <!-- Start -->
    <div class="container-fluid px-0">
        <div class="py-5 bg-footer">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="section-title">
                            <div class="d-flex">
                                <i class="uil uil-stethoscope-alt display-4 text-white title-dark"></i>
                                <div class="flex-1 ms-md-4 ms-3">
                                    <h4 class="fw-bold text-light title-dark mb-1">Get a free medical</h4>
                                    <p class="text-white-50 mb-0">Build modern looking websites fast and easy using Landflow.</p>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-5 mt-4 mt-sm-0">
                        <div class="text-md-end ms-5 ms-sm-0">
                            <a href="javascript:void(0)" class="btn btn-primary me-2 me-lg-2 me-md-0 my-2" data-bs-toggle="modal" data-bs-target="#appointment-request"><i class="uil uil-file-alt"></i> Book An Appointment</a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div><!--end div-->
    </div><!--end container-->
    <!-- End -->
@endsection