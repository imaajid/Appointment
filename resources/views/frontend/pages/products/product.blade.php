@extends('layouts.frontend')
@section('content')

@foreach($products as $key => $product)

@endforeach
<section class="bg-half bg-light d-table w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title"> All Products </h4>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Appointment</a></li>
                                <li class="breadcrumb-item"><a href="index-shop.html">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Products</li>
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
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="card border-0 sidebar sticky-bar">
                    <div class="card-body p-0">
                        <!-- SEARCH -->
                        <div class="widget">
                            <form role="search" method="get">
                                <div class="input-group mb-3 border rounded">
                                    <input type="text" id="s" name="s" class="form-control border-0" placeholder="Search Keywords...">
                                    <button type="submit" class="input-group-text bg-white border-0" id="searchsubmit"><i class="uil uil-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- SEARCH -->

                        <!-- Categories -->
                        <div class="widget mt-4 pt-2">
                            <h5 class="widget-title">Categories</h5>
                            <ul class="list-unstyled mt-4 mb-0 blog-categories">
                                <li><a href="jvascript:void(0)">Men</a></li>
                                <li><a href="jvascript:void(0)">Women</a></li>
                                <li><a href="jvascript:void(0)">Electronics</a></li>
                                <li><a href="jvascript:void(0)">Jewellery</a></li>
                                <li><a href="jvascript:void(0)">Shoes</a></li>
                                <li><a href="jvascript:void(0)">Kid’s Wear</a></li>
                                <li><a href="jvascript:void(0)">Sports</a></li>
                                <li><a href="jvascript:void(0)">Toys</a></li>
                                <li><a href="jvascript:void(0)">Gift Corners</a></li>
                            </ul>
                        </div>
                        <!-- Categories -->

                        <!-- color -->
                        <div class="widget mt-4 pt-2">
                            <h5 class="widget-title">Color</h5>
                            <ul class="list-unstyled mt-4 mb-0">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><span class="d-none">.</span></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-danger"><span class="d-none">.</span></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-success"><span class="d-none">.</span></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-info"><span class="d-none">.</span></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-secondary"><span class="d-none">.</span></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-warning"><span class="d-none">.</span></a></li>
                            </ul>
                        </div>
                        <!-- COlor -->
                      
                        <!-- Top Products -->
                        <div class="widget mt-4 pt-2">
                            <h5 class="widget-title">Top Products</h5>
                            <ul class="list-unstyled mt-4 mb-0">
                                <li class="d-flex align-items-center">
                                      
                                    <a href="javascript:void(0)">
                                        <img src="{{('frontend/images/shop/product/s1.jpg')}}" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                                    </a>
                                    <div class="flex-1 content ms-3">
                                        <a href="javascript:void(0)" class="text-dark h6">T-Shirt</a>
                                        <h6 class="text-muted small fst-italic mb-0 mt-1">$18.00 <del class="text-danger ms-2">$22.00</del> </h6>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mt-2">
                                    <a href="javascript:void(0)">
                                        <img src="{{('frontend/images/shop/product/s3.jpg')}}" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                                    </a>
                                    <div class="flex-1 content ms-3">
                                        <a href="javascript:void(0)" class="text-dark h6">Watch</a>
                                        <h6 class="text-muted small fst-italic mb-0 mt-1">$18.00 <del class="text-danger ms-2">$22.00</del> </h6>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mt-2">
                                    <a href="javascript:void(0)">
                                        <img src="{{('frontend/images/shop/product/s6.jpg')}}" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                                    </a>
                                    <div class="flex-1 content ms-3">
                                        <a href="javascript:void(0)" class="text-dark h6">Coffee Cup</a>
                                        <h6 class="text-muted small fst-italic mb-0 mt-1">$18.00 <del class="text-danger ms-2">$22.00</del> </h6>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mt-2">
                                    <a href="javascript:void(0)">
                                        <img src="{{('frontend/images/shop/product/s8.jpg')}}" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                                    </a>
                                    <div class="flex-1 content ms-3">
                                        <a href="javascript:void(0)" class="text-dark h6">Wooden Stools</a>
                                        <h6 class="text-muted small fst-italic mb-0 mt-1">$18.00 <del class="text-danger ms-2">$22.00</del> </h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-9 col-md-8 col-12 mt-5 pt-2 mt-sm-0 pt-sm-0">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-7">
                        <div class="section-title">
                            <h5 class="mb-0">Showing 1–15 of 47 results</h5>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-5 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="d-flex justify-content-md-between align-items-center">
                            <div class="form custom-form">
                                <div class="mb-0">
                                    <select class="form-select form-control" aria-label="Default select example" id="Sortbylist-job">
                                        <option selected="">Sort by latest</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by rating</option>
                                        <option>Sort by price: low to high</option>
                                        <option>Sort by price: high to low</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mx-2">
                                <a href="shop-grids.html" class="h5 text-muted"><i class="uil uil-apps"></i></a>
                            </div>

                            <div>
                                <a href="shop-lists.html" class="h5 text-muted"><i class="uil uil-list-ul"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                @foreach($products as $key => $product)
                {{-- {{dd($product)}} --}}
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                      
                        <div class="card shop-list border-0 position-relative">
                            <ul class="label list-unstyled mb-0">
                                <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-success">Featured</a></li>
                            </ul>
                      
                            <div class="shop-image position-relative overflow-hidden rounded shadow">
                             
                                <a href="{{url('product_detail') . '/' . $product->id}}">

                                    <img src="{{asset('products/'. $product->image)}}" class="img-fluid" alt=""/></a>
                                <a href="{{url('product_detail') . '/' . $product->id}}" class="overlay-work">
                                   
                                  
                                  
                                </a>
                                <ul class="list-unstyled shop-icons">
                                    <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icons"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a></li>
                                    <li class="mt-2"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></li>
                                    <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart icons"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></a></li>
                                </ul>
                            </div>
                            <div class="card-body content pt-4 p-2">
                                <a href="{{asset('product_detail')}}" class="text-dark product-name h6">{{$product->name}}</a>
                                <div class="d-flex justify-content-between mt-1">
                                    <h6 class="text-muted small fst-italic mb-0 mt-1">{{$product->price}}<del class="text-danger ms-2">$21.00</del> </h6>
                                    <ul class="list-unstyled text-warning mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                </div>
                            </div>
                           
                        </div>
                    </div><!--end col-->
                  
                   
                   <!--end col-->
                   
                   <!--end col-->
                    @endforeach
              <!--end col--> 
                    <!-- PAGINATION END -->
                </div><!--end row-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
@endsection