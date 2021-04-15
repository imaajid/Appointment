
@extends('layouts.question_frontend')
@section('content')
<section class="bg-profile d-table w-100 bg-primary" style="background: url('images/account/bg.png') center center;">
    <div class="container">

     <div class="row">
     @foreach ($services as $service)
       
   
       <div class="col-md-3">
        <img src="{{asset('services/'. $service->image)}}" class="img-fluid"  alt=""/>
       </div>
       @endforeach
     </div>
     
      
      <!--end row-->
    </div><!--ed container-->
</section>
@endsection