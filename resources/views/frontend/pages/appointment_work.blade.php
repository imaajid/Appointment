@extends('layouts.question_frontend')
@section('content')
<section class="bg-profile d-table w-100 bg-primary" style="background: url('images/account/bg.png') center center;">
    <div class="container">

     <div class="row">
       
            <div class="col-md-6 offset-md-3 text-center">
            
           <h4 class="text-white"> How does Pilot work? </h4>
           <div class="rounded shadow">
            <div class="p-4 border" style="background-color:white" >
                 <div class="row">
                  <div class="col-md-3">
                        <a class="pe-3" href="#">
                            <img src="{{('frontend/images/client/01.jpg')}}" class="img-fluid" alt="img">
                        </a>
                    </div>
                    <div class="col-md-9">
                        <div class="mt-3">
                            <p class="text-black mb-0">" Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required when,"</p>
                        </div>
                    </div>
                    
                </div>
                
              
            </div>
            <div class="p-4 border mt-4" style="background-color:white" >
                <div class="row">
                 <div class="col-md-3">
                       <a class="pe-3" href="#">
                           <img src="{{('frontend/images/client/01.jpg')}}" class="img-fluid" alt="img">
                       </a>
                   </div>
                   <div class="col-md-9">
                       <div class="mt-3">
                           <p class="text-black mb-0">" Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required when,"</p>
                       </div>
                   </div>
                   
               </div>
               
             
           </div>
        </div>
         <div class="p-4 border mt-4" style="background-color:white" >
            <div class="row">
                <div class="col-md-3">
                        <a class="pe-3" href="#">
                            <img src="{{('frontend/images/client/01.jpg')}}" class="img-fluid" alt="img">
                        </a>
                    </div>
                    <div class="col-md-9">
                        <div class="mt-3">
                            <p class="text-black mb-0">" Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required when,"</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          
        </div>
        
       <!--end row-->
 </div><!--ed container-->

 <div class="col-md-8 offset-md-2 text-center mt-4">
              <div class="d-grid">
                 <p style="text-align: center" class="text-white">By clicking agree below you confirm you have read our Terms & <br/>Conditions and Privacy Policy</p>
              </div>
            </div>
            <div class="col-md-8 offset-md-2 text-center mt-4">
                    <div class="d-grid">
                        <a href="{{asset('first_name')}}"><button class="btn btn-danger">Login Now</button></a>
                    </div>
            </div>
          
</section>
@endsection