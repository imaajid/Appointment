@extends('layouts.question_frontend')
@section('content')
<section class="bg-profile d-table w-100 bg-primary" style="background: url('images/account/bg.png') center center;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h5 class="text-white text-center">What was your sex at birth?</h5>
                 <div class="row">
                    <div class="col-lg-6 offset-md-3 mt-4" >
                     
                      <input type="email" class="form-control ps-5" placeholder="Male" name="email" required="">
                    </div>
                    
                    <div class="col-lg-6 offset-md-3 mt-4">
                       
                        <input type="email" class="form-control ps-5" placeholder="Female" name="email" required="">
                      </div>
                      
                                       
                    </div>
                   </div>
               </div><!---->
             </div><!--end col-->
               
     
</section>
@endsection