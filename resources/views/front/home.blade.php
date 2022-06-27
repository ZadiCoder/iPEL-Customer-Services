@extends('front.layout.layout')

@section('content')

<!--Start Sevices Section-->
<section class="pricing" id="pricingdiv">
    <div class="container container text-center border-bottom mt-5 pricingdiv" id="Services">
    <h1 class="p-5">Our Services</h1>
     <div class="row mt-5">
     
        @foreach ($category as $item)
        <div class="col-md-4 col-sm-6">
              
            <div class="card shadow-lg ">
                <h4 class="card-title  text-white   p-2" style="background:#4682B4;">{{$item->category_name}}</h4>
                <div class="card-body ">
                    <img src="{{asset('images/'.$item->image)}}" class="img-fluid" alt="PEL"></a> 
                </div>
            </div>
        </div>     
        @endforeach
        <!-- <div class="col-md-4 col-sm-6">
              
            <div class="card shadow-lg ">
                <h4 class="card-title  text-white   p-2" style="background:#4682B4;">AC</h4>
                <div class="card-body ">
                    <img src="{{asset('images/AC.jpg')}}" class="img-fluid" alt="PEL"></a> 
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
              
            <div class="card shadow-lg ">
                <h4 class="card-title  text-white   p-2" style="background:#4682B4;">Washing Mecine</h4>
                <div class="card-body ">
                    <img src="{{asset('images/washing.jpg')}}" class="img-fluid" alt="PEL"></a> 
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
              
            <div class="card shadow-lg ">
                <h4 class="card-title  text-white   p-2" style="background:#4682B4;">Water</h4>
                <div class="card-body ">
                    <img src="{{asset('images/water.jpg')}}" class="img-fluid" alt="PEL"></a> 
                </div>
            </div>
        </div> -->
      </div>
    </div>
    </section>
    <!--End Sevices Section-->

@endsection