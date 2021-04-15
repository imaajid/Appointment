@extends('layouts.frontend')
@section('content')

<section class="bg-half bg-light d-table w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title"> Checkouts </h4>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Appoitment</a></li>
                                <li class="breadcrumb-item"><a href="index-shop.html">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkouts</li>
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
            <div class="col-lg-7 col-md-6">
                <div class="rounded shadow-lg p-4">
                    <h5 class="mb-0">Billing Details :</h5>

                    <form class="mt-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                    <input name="name" id="firstname" type="text" class="form-control" placeholder="First Name :">
                                </div>
                            </div><!--end col-->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                    <input name="name" id="lastname" type="text" class="form-control" placeholder="Last Name :">
                                </div>
                            </div><!--end col-->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Company Name <span class="text-muted">(Optional)</span></label>
                                    <input name="name" id="companyname" type="text" class="form-control" placeholder="Company Name :">
                                </div>
                            </div><!--end col-->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Street address <span class="text-danger">*</span></label>
                                    <input type="text" name="address1" id="address1" class="form-control" placeholder="House number and street name :">
                                </div>
                            </div><!--end col-->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Apartment, suite, unit etc. <span class="text-muted">(Optional)</span></label>
                                    <input type="text" name="address2" id="address2" class="form-control" placeholder="Apartment, suite, unit etc. :">
                                </div>
                            </div><!--end col-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Town / City <span class="text-danger">*</span></label>
                                    <input type="text" name="city" id="city" class="form-control" placeholder="City Name :">
                                </div>
                            </div><!--end col-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Postal Code <span class="text-danger">*</span></label>
                                    <input type="text" name="postcode" id="postcode" class="form-control" placeholder="Zip :">
                                </div>
                            </div><!--end col-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">State <span class="text-danger">*</span></label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder="State Name :">
                                </div>
                            </div><!--end col-->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Country <span class="text-danger">*</span></label>
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option selected="">India</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">Åland Islands</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                    </select>
                                </div>
                            </div><!--end col-->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Phone <span class="text-danger">*</span></label>
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="State Name :">
                                </div>
                            </div><!--end col-->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Your email :">
                                </div> 
                            </div><!--end col-->
                        </div><!--end row-->
                    </form><!--end form-->
                </div>

                <div class="form-check form-check-inline my-4">
                    <div class="mb-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="creataccount">
                            <label class="form-check-label" for="creataccount">Create an account ?</label>
                        </div>
                    </div>
                </div>

                <div class="rounded shadow-lg p-4">
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="addresscheck">
                            <label class="form-check-label" for="addresscheck">Ship to a different address ?</label>
                        </div>
                    </div>

                    <div>
                        <label class="form-label">Comments</label>
                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Notes about your order :"></textarea>
                    </div> 
                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="rounded shadow-lg p-4 sticky-bar">
                    <div class="d-flex mb-4 justify-content-between">
                        <h5>4 Items</h5>
                        <a href="shop-cart.html" class="text-muted h6">Show Details</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-center table-padding mb-0">
                            <tbody>
                                <tr>
                                    <td class="h6 border-0">Subtotal</td>
                                    <td class="text-end fw-bold border-0">$ 2409</td>
                                </tr>
                                <tr>
                                    <td class="h6">Shipping Charge</td>
                                    <td class="text-end fw-bold">$ 0.00</td>
                                </tr>
                                <tr class="bg-light">
                                    <td class="h5 fw-bold">Total</td>
                                    <td class="text-end text-primary h4 fw-bold">$ 2409</td>
                                </tr>
                            </tbody>
                        </table>

                        <ul class="list-unstyled mt-4 mb-0">
                            <li>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" checked="" type="radio" name="flexRadioDefault" id="banktransfer">
                                        <label class="form-check-label" for="banktransfer">Bank Transfer</label>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-3">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="chequepay">
                                        <label class="form-check-label" for="chequepay">Cheque Payment</label>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-3">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="cashdelivery">
                                        <label class="form-check-label" for="cashdelivery">Cash on Delivery</label>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-3">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="paypalpay">
                                        <label class="form-check-label" for="paypalpay">Paypal <a href="https://www.paypal.com/uk/webapps/mpp/paypal-popup" target="_blank" class="ms-2 text-primary">What is paypal?</a></label>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="mt-4 pt-2">
                            <div class="d-grid">
                                <a href="shop-checkouts.html" class="btn btn-primary">Place Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->
    </div><!--end container-->
</section>
@endsection