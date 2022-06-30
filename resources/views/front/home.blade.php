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
                    <a href="{{route('service.details' , $item->id)}}"><img src="{{asset('images/'.$item->image)}}" class="img-fluid" alt="PEL"></a></a>
                     
                </div>
            </div>
        </div>     
        @endforeach
      </div>
    </div>
    </section>
    <!--End Sevices Section-->

@endsection