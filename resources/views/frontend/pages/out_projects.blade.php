@extends('layouts.frontend')
@section('content')
<section class="bg-half bg-light d-table w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title"> Company Story </h4>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Appointments</a></li>
                                <li class="breadcrumb-item"><a href="#">Company</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Projects</li>
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
            <div class="col-lg-9">
                <div class="main-icon rounded-pill text-primary text-center mt-4 pt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fea icon-md-sm"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                </div>
                <div class="timeline-page pt-2 position-relative">
                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">2002</div>
                            </div><!--end col-->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-start">
                                    <img src="{{('frontend/images/blog/01.jpg')}}" class="img-fluid" alt="">
                                    <div class="card-body">
                                        <h5 class="mb-0 text-capitalize">Founding</h5>
                                        <p class="mt-3 mb-0 text-muted">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end timeline item-->
    
                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-start">
                                    <img src="{{('frontend/images/blog/02.jpg')}}" class="img-fluid" alt="">
                                    <div class="card-body">
                                        <h5 class="mb-0 text-capitalize">Partnership</h5>
                                        <p class="mt-3 mb-0 text-muted">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-start">2006</div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end timeline item-->

                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">2012</div>
                            </div><!--end col-->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-start">
                                    <img src="{{('frontend/images/blog/03.jpg')}}" class="img-fluid" alt="">
                                    <div class="card-body">
                                        <h5 class="mb-0 text-capitalize">Secuirty</h5>
                                        <p class="mt-3 mb-0 text-muted">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end timeline item-->
    
                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-start">
                                    <img src="{{('frontend/images/blog/04.jpg')}}" class="img-fluid" alt="">
                                    <div class="card-body">
                                        <h5 class="mb-0 text-capitalize">Branch</h5>
                                        <p class="mt-3 mb-0 text-muted">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-start">2013</div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end timeline item-->

                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="duration date-label-left border rounded p-2 px-4 position-relative shadow">2016</div>
                            </div><!--end col-->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="card event event-description-right rounded shadow border-0 overflow-hidden float-start">
                                    <img src="{{('frontend/images/blog/05.jpg')}}" class="img-fluid" alt="">
                                    <div class="card-body">
                                        <h5 class="mb-0 text-capitalize">Global</h5>
                                        <p class="mt-3 mb-0 text-muted">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end timeline item-->
    
                    <div class="timeline-item mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2">
                                <div class="card event event-description-left rounded shadow border-0 overflow-hidden float-start">
                                    <img src="{{('frontend/images/blog/06.jpg')}}" class="img-fluid" alt="">
                                    <div class="card-body">
                                        <h5 class="mb-0 text-capitalize">Branches</h5>
                                        <p class="mt-3 mb-0 text-muted">The generated injected humour, or non-characteristic words etc. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                                <div class="duration duration-right rounded border p-2 px-4 position-relative shadow text-start">2018</div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end timeline item-->
                </div><!--end timeline page-->
                <!-- TIMELINE END -->
            </div><!--end col-->
        </div><!--end row-->
    </div>
</section>
@endsection