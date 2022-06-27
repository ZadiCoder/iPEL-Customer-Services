<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
h2,#Link {
  color: white;
  text-shadow: 2px 2px 4px #000000;
}
h1{
  
  text-shadow: 2px 1px 2px #000000;
}

</style>
     
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    
    <!--Bootstrap Awesome CSS-->

    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')}}">
    <!--Google Font-->
    <link href= "{{asset('https://fonts.googleaois.com/css?family=Ubuntu&display=swap')}}" rel="stylesheet">


    <!--Custom CSS-->
     <link rel="stylesheet" href="{{asset('css/custom.css')}}">
     <link rel="stylesheet" href="{{asset('stylesheet.css')}}">

    <title>iPEL</title>
</head>
<body style="background-color:#C8F6FE;">
@include('front.layout.header')

@include('front.layout.slider')

@include('front.layout.serviceProvide')


@yield('content') 



<!--Start Happy Customer-->
<div class="jumbotron " style="background:#4682B4;">
    <div class="container">
        <h2 class="text-center text-white">Happy Customers</h2>
      
        <div class="row mt-5">
        
            <!--Card 1-->
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
               
                        <img src="{{asset('images/zahidd.jpg')}}" class="card-img-top" alt="zahid"
                        style="border-radius:100px;">
                     
                    <div class="card-body text-center">
                        <h4 class="card-title">Zahid Mughal</h4>
                        <p class="card-text">Software engineering is the process of analyzing user needs and designing,
                             constructing, and testing.</p>
                    </div>
                </div>
            </div>
            <!--Card 2-->
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                <img src="{{asset('images/amna.jpg')}}" class="card-img-top" alt="amna"
                        style="border-radius:100px;">
                    <div class="card-body text-center">
                        <h4 class="card-title">Amna Ashfaq</h4>
                        <p class="card-text">Software engineering is the process of analyzing user needs and designing,
                             constructing, and testing.</p>
                    </div>
                </div>
            </div>
            <!--Card 3-->
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                <img src="{{asset('images/gill.jpg')}}" class="img-fluid" alt="gill"
                        style="border-radius:100px;">
                    <div class="card-body text-center">
                        <h4 class="card-title">Usman Gill</h4>
                        <p class="card-text">Software engineering is the process of analyzing user needs and designing,
                             constructing, and testing.</p>
                    </div>
                </div>
            </div>
            <!--Card 4-->
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                <img src="{{asset('images/afaq.jpg')}}" class="img-fluid" alt="afaq"
                        style="border-radius:100px;">
                    <div class="card-body text-center">
                        <h4 class="card-title">Malik Afaq</h4>
                        <p class="card-text">Software engineering is the process
                             of analyzing user needs and designing,
                             constructing, and testing.</p>
                    </div>
                </div>
            </div><!--end cards-->
  
      </div>
    </div>
</div><!--End Happy Customer-->

<!--Start Content Us-->
<div class="container" id="contact">
    <h1 class="text-center mb-4">Contact Us</h1>
    <div class="row">
<!--Start 1st Colum-->
@include('front.layout.contactUs')
<!--End 1st Colum-->
        <div class="col-md-4 stripe text-center text-white"><!--Start 2nd colum-->
            <strong>Headquarter:</strong><br>
            <p> iPEL pvt Ltd <br>
            DHA Phase 3rd, Lahore <br>
            Punjab - 22123345 <br>
            Phone: +9211223341 <br>
            <a href="#" target="_blank">www.ipel.com</a><br>
            </p>
        </div><!--End 2nd colum-->
    </div>
</div><!--End Content Us-->

@include('front.layout.footer')




<!-- Java Script -->
<script src="js/Jquery.js"></script>

<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')}}"></script>
  <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js')}}"></script>
 <!-- Ajax Call Customer Requests-->
 <script type="text/javascript" src="{{asset('js/Ajaxrequests.js')}}"></script>

 </body>
</html>