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

@yield('content') 

 



@include('front.layout.footer')

<!-- Java Script -->

 <!-- Ajax Call Customer Requests-->
 <script type="text/javascript" src="{{asset('js/Ajaxrequests.js')}}"></script>
    <!-- jQuery -->
    <script src="{{asset('admin_theme/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('admin_theme/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('admin_theme/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{asset('admin_theme/build/js/custom.min.js')}}"></script>
    @stack('footer-script')
 </body>
</html>