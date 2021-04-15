@extends('layouts.frontend')
@section('content')
<section class="bg-half bg-light d-table w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title"> Shopping Cart </h4>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Appointment</a></li>
                                <li class="breadcrumb-item"><a href="index-shop.html">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cart</li>
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
            <div class="col-12">
                <div class="table-responsive bg-white shadow">
                    <table class="table table-center table-padding mb-0">
                        <thead>
                            <tr>
                                <th class="border-bottom py-3" style="min-width:20px "></th>
                                <th class="border-bottom py-3" style="min-width: 300px;">Product</th>
                                <th class="border-bottom text-center py-3" style="min-width: 160px;">Price</th>
                                <th class="border-bottom text-center py-3" style="min-width: 160px;">Qty</th>
                                <th class="border-bottom text-center py-3" style="min-width: 160px;">Total</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="shop-list">
                                <td class="h6"><a href="javascript:void(0)" class="text-danger">X</a></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="images/shop/product/s1.jpg" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                                        <h6 class="mb-0 ms-3">T-Shirt</h6>
                                    </div>
                                </td>
                                <td class="text-center">$ 255.00</td>
                                <td class="text-center qty-icons">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="btn btn-icon btn-soft-primary minus">-</button>
                                    <input min="0" name="quantity" value="7" type="number" class="btn btn-icon btn-soft-primary qty-btn quantity">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="btn btn-icon btn-soft-primary plus">+</button>
                                </td>
                                <td class="text-center fw-bold">$510.00</td>
                            </tr>

                          
                        </tbody>
                    </table>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        <div class="row">
            <div class="col-lg-8 col-md-6 mt-4 pt-2">
                <a href="javascript:void(0)" class="btn btn-primary">Shop More</a>
                <a href="javascript:void(0)" class="btn btn-soft-primary ms-2">Update Cart</a>
            </div>
            <div class="col-lg-4 col-md-6 ms-auto mt-4 pt-2">
                <div class="table-responsive bg-white rounded shadow">
                    <table class="table table-center table-padding mb-0">
                        <tbody>
                            <tr>
                                <td class="h6">Subtotal</td>
                                <td class="text-center fw-bold">$ 2190</td>
                            </tr>
                            <tr>
                                <td class="h6">Taxes</td>
                                <td class="text-center fw-bold">$ 219</td>
                            </tr>
                            <tr class="bg-light">
                                <td class="h6">Total</td>
                                <td class="text-center fw-bold">$ 2409</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-4 pt-2 text-end">
                    <a href="{{asset('checkout')}}" class="btn btn-primary">Proceed to checkout</a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->  
</section>
@endsection