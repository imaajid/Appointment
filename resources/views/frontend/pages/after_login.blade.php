@extends('layouts.question_frontend')
@section('content')
<section class="bg-profile d-table w-100 bg-primary" style="background: url('images/account/bg.png') center center;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <img src="frontend/images/audrey/02.png" height="250px" alt="" style="margin-left: 10rem;">
                <h2 class="text-white text-center">Online medical assessment!</h2>
                 <h6 class="text-white text-center">Let’s start with some basics about your health, medical history and lifestyle. Your doctor will use this information to assess you, and if appropriate, prescribe a treatment plan.</h6>
                 <div class="row">
                   
                       <div class="col-lg-12 mb-0">
                            <div class="d-grid  mt-4 text-center">
                                <a href="{{asset('gender')}}"><button class="btn btn-success w-50">Next</button></a>
                            </div>
                        </div><!--end col-->
                                       
                    </div>
                   </div>
               </div><!---->
             </div><!--end col-->
               
     
</section>
@endsection