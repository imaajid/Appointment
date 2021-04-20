@extends('layouts.question_frontend')
@section('content')
<section class="bg-profile d-table w-100 bg-primary" style="background: url('images/account/bg.png') center center;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <img src="frontend/images/audrey/01.png" height="" alt="" style="margin-left: 10rem;">
                <h2 class="text-white text-center">You're in safe hands, Audrey!</h2>
                 <h6 class="text-white text-center">We'll be asking you a few questions formulated by the best Hair Loss specialists in Australia so our doctors can find the right treatment for you.</h6>
                 <div class="row">
                   
                       <div class="col-lg-12 mb-0">
                            <div class="d-grid  mt-4 text-center">
                                <a href="{{asset('after_login')}}"><button class="btn btn-success w-50">Next</button></a>
                            </div>
                        </div><!--end col-->
                                       
                    </div>
                   </div>
               </div><!---->
             </div><!--end col-->
               
     
</section>
@endsection