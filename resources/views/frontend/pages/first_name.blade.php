@extends('layouts.question_frontend')
@section('content')
<section class="bg-profile d-table w-100 bg-primary" style="background: url('images/account/bg.png') center center;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h1 class="text-white text-center">Firstly, what's your name?</h1>
                 <h5 class="text-white text-center">The doctor will need your full name to prescribe the right treatment for you.</h5>
                 <div class="row">
                    <div class="col-lg-6">
                      <label class="form-label text-white">First Name</label>
                      <input type="email" class="form-control ps-5" placeholder="" name="email" required="">
                    </div>
                    
                    <div class="col-lg-6">
                        <label class="form-label text-white">First Name</label>
                        <input type="email" class="form-control ps-5" placeholder="" name="email" required="">
                      </div>
                       <div class="col-lg-12 mb-0">
                            <div class="d-grid  mt-4">
                                <a href="{{asset('email_address')}}"><button class="btn btn-success">Next</button></a>
                            </div>
                        </div><!--end col-->
                                       
                    </div>
                   </div>
               </div><!---->
             </div><!--end col-->
               
     
</section>
@endsection