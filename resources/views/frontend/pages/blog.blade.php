@extends('layouts.frontend')
@section('content')
<section class="bg-half bg-light d-table w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title"> Blog </h4>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Appointment</a></li>
                                <li class="breadcrumb-item"><a href="#">Page</a></li>
                                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>  <!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section>
<section class="section">
    <div class="container">
        <div class="row">
            @foreach($posts as $key => $post)
            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                <div class="card blog rounded border-0 shadow overflow-hidden">
                    <div class="position-relative">
                        <img src="{{asset('posts/'. $post->image)}}" class="card-img-top" alt="...">
                        <div class="overlay rounded-top bg-dark"></div>
                    </div>
                    <div class="card-body content">
                        <h5><a href="javascript:void(0)" class="card-title title text-dark">{{$post->title}}</a></h5>
                        <div class="post-meta d-flex justify-content-between mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1">33</i></a></li>
                               
                            </ul>
                            <a href="page-blog-detail.html" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                        </div>
                    </div>
                    <div class="author">
                        <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-success">{{$post->user->name}}</a></li>
                        <small class="text-light date"><i class="uil uil-calendar-alt"></i> {{$post->created_at->diffForHumans()}}</small>
                    </div>
                </div>
            </div><!--end col-->
            @endforeach
       <!--end col-->

            <!-- PAGINATION START -->
            <div class="col-12">
                <ul class="pagination justify-content-center mb-0">
                    <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a></li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next</a></li>
                </ul>
            </div><!--end col-->
            <!-- PAGINATION END -->
        </div><!--end row-->
    </div><!--end container-->
</section>
@endsection