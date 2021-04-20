@extends('layouts.question_frontend')
@section('content')
<section class="bg-profile d-table w-100 bg-primary" style="background: url('images/account/bg.png') center center;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-white text-center">Create an account</h1>
                 <h5 class="text-white text-center">This will be how our doctor will contact you.</h5>
                 <div class="row">
                    <div class="col-lg-6 offset-md-3">
                      <label class="form-label text-white">Email</label>
                      <input type="email" class="form-control ps-5" placeholder="" name="email" required="">
                    </div>
                    
                    <div class="col-lg-6 offset-md-3">
                        <label class="form-label text-white">password</label>
                        <input type="email" class="form-control ps-5" placeholder="" name="email" required="">
                      </div>
                       <div class="col-lg-12 mb-0">
                            <div class="d-grid  mt-4 text-center">
                                <a href="{{asset('audrey')}}"><button class="btn btn-success w-50">Next</button></a>
                            </div>
                        </div><!--end col-->
                                       
                    </div>
                   </div>
               </div><!---->
             </div><!--end col-->
               
     
</section>
@endsection