@extends('layouts.frontend')
@section('content')
<section class="bg-half bg-light d-table w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title"> Frequently Asked Questions </h4>

                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Appointment</a></li>
                                <li class="breadcrumb-item"><a href="helpcenter-overview.html">Help Center</a></li>
                                <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section>
<section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-5 col-12 d-none d-md-block">
                        <div class="rounded shadow p-4 sticky-bar">
                            <ul class="list-unstyled sidebar-nav mb-0 py-0" id="navmenu-nav">
                                <li class="navbar-item my-2 px-0"><a href="#tech" class="h6 text-dark navbar-link">Buying Questions</a></li>
                                <li class="navbar-item my-2 px-0"><a href="#general" class="h6 text-dark navbar-link">General Questions</a></li>
                                <li class="navbar-item my-2 px-0"><a href="#payment" class="h6 text-dark navbar-link">Payments Questions</a></li>
                                <li class="navbar-item my-2 px-0"><a href="#support" class="h6 text-dark navbar-link">Support Questions</a></li>
                            </ul>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="section-title" id="tech">
                            <h4>Buying Product</h4>
                        </div>

                        <div class="accordion mt-4 pt-2" id="buyingquestion">
                            <div class="accordion-item rounded">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How does it work ?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne" data-bs-parent="#buyingquestion">
                                    <div class="accordion-body text-muted bg-white">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item rounded mt-2">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Do I need a designer to use Appointment ?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo" data-bs-parent="#buyingquestion">
                                    <div class="accordion-body text-muted bg-white">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded mt-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What do I need to do to start selling ?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree" data-bs-parent="#buyingquestion">
                                    <div class="accordion-body text-muted bg-white">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded mt-2">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        What happens when I receive an order ?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour" data-bs-parent="#buyingquestion">
                                    <div class="accordion-body text-muted bg-white">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-title mt-5" id="general">
                            <h4>General Questions</h4>
                        </div>

                        <div class="accordion mt-4 pt-2" id="generalquestion">
                            <div class="accordion-item rounded">
                                <h2 class="accordion-header" id="headingfive">
                                    <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
                                        How does it work ?
                                    </button>
                                </h2>
                                <div id="collapsefive" class="accordion-collapse border-0 collapse show" aria-labelledby="headingfive" data-bs-parent="#generalquestion">
                                    <div class="accordion-body text-muted bg-white">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item rounded mt-2">
                                <h2 class="accordion-header" id="headingsix">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                        Do I need a designer to use Appointment ?
                                    </button>
                                </h2>
                                <div id="collapsesix" class="accordion-collapse border-0 collapse" aria-labelledby="headingsix" data-bs-parent="#generalquestion">
                                    <div class="accordion-body text-muted bg-white">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded mt-2">
                                <h2 class="accordion-header" id="headingseven">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                        What do I need to do to start selling ?
                                    </button>
                                </h2>
                                <div id="collapseseven" class="accordion-collapse border-0 collapse" aria-labelledby="headingseven" data-bs-parent="#generalquestion">
                                    <div class="accordion-body text-muted bg-white">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded mt-2">
                                <h2 class="accordion-header" id="headingeight">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                        What happens when I receive an order ?
                                    </button>
                                </h2>
                                <div id="collapseeight" class="accordion-collapse border-0 collapse" aria-labelledby="headingeight" data-bs-parent="#generalquestion">
                                    <div class="accordion-body text-muted bg-white">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-title mt-5" id="payment">
                            <h4>Payments Questions</h4>
                        </div>

                        <div class="accordion mt-4 pt-2" id="paymentquestion">
                            <div class="accordion-item rounded">
                                <h2 class="accordion-header" id="headingnine">
                                    <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="true" aria-controls="collapsenine">
                                        How does it work ?
                                    </button>
                                </h2>
                                <div id="collapsenine" class="accordion-collapse border-0 collapse show" aria-labelledby="headingnine" data-bs-parent="#paymentquestion">
                                    <div class="accordion-body text-muted bg-white">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item rounded mt-2">
                                <h2 class="accordion-header" id="headingten">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                                        Do I need a designer to use Appointment ?
                                    </button>
                                </h2>
                                <div id="collapseten" class="accordion-collapse border-0 collapse" aria-labelledby="headingten" data-bs-parent="#paymentquestion">
                                    <div class="accordion-body text-muted bg-white">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded mt-2">
                                <h2 class="accordion-header" id="headingeleven">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeleven" aria-expanded="false" aria-controls="collapseeleven">
                                        What do I need to do to start selling ?
                                    </button>
                                </h2>
                                <div id="collapseeleven" class="accordion-collapse border-0 collapse" aria-labelledby="headingeleven" data-bs-parent="#paymentquestion">
                                    <div class="accordion-body text-muted bg-white">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded mt-2">
                                <h2 class="accordion-header" id="headingtwelve">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwelve" aria-expanded="false" aria-controls="collapsetwelve">
                                        What happens when I receive an order ?
                                    </button>
                                </h2>
                                <div id="collapsetwelve" class="accordion-collapse border-0 collapse" aria-labelledby="headingtwelve" data-bs-parent="#paymentquestion">
                                    <div class="accordion-body text-muted bg-white">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-title mt-5" id="support">
                            <h4>Support Questions</h4>
                        </div>

                        <div class="accordion mt-4 pt-2" id="supportquestion">
                            <div class="accordion-item rounded">
                                <h2 class="accordion-header" id="headingthirteen">
                                    <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethirteen" aria-expanded="true" aria-controls="collapsethirteen">
                                        How does it work ?
                                    </button>
                                </h2>
                                <div id="collapsethirteen" class="accordion-collapse border-0 collapse show" aria-labelledby="headingthirteen" data-bs-parent="#supportquestion">
                                    <div class="accordion-body text-muted bg-white">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item rounded mt-2">
                                <h2 class="accordion-header" id="headingfourteen">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefourteen" aria-expanded="false" aria-controls="collapsefourteen">
                                        Do I need a designer to use Appointment ?
                                    </button>
                                </h2>
                                <div id="collapsefourteen" class="accordion-collapse border-0 collapse" aria-labelledby="headingfourteen" data-bs-parent="#supportquestion">
                                    <div class="accordion-body text-muted bg-white">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded mt-2">
                                <h2 class="accordion-header" id="headingfifteen">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefifteen" aria-expanded="false" aria-controls="collapsefifteen">
                                        What do I need to do to start selling ?
                                    </button>
                                </h2>
                                <div id="collapsefifteen" class="accordion-collapse border-0 collapse" aria-labelledby="headingfifteen" data-bs-parent="#supportquestion">
                                    <div class="accordion-body text-muted bg-white">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded mt-2">
                                <h2 class="accordion-header" id="headingsixteen">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesixteen" aria-expanded="false" aria-controls="collapsesixteen">
                                        What happens when I receive an order ?
                                    </button>
                                </h2>
                                <div id="collapsesixteen" class="accordion-collapse border-0 collapse" aria-labelledby="headingsixteen" data-bs-parent="#supportquestion">
                                    <div class="accordion-body text-muted bg-white">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="d-flex align-items-center features feature-clean shadow rounded p-4">
                            <div class="icons text-primary text-center">
                                <i class="uil uil-envelope-check d-block rounded h3 mb-0"></i>
                            </div>
                            <div class="flex-1 content ms-4">
                                <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Get in Touch !</a></h5>
                                <p class="text-muted mb-0">This is required when, for text is not yet available.</p>
                                <div class="mt-2">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Submit a Request</a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-6 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="d-flex align-items-center features feature-clean shadow rounded p-4">
                            <div class="icons text-primary text-center">
                                <i class="uil uil-webcam d-block rounded h3 mb-0"></i>
                            </div>
                            <div class="flex-1 content ms-4">
                                <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Start a Meeting</a></h5>
                                <p class="text-muted mb-0">This is required when, for text is not yet available.</p>
                                <div class="mt-2">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Start Video Chat</a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>
@endsection