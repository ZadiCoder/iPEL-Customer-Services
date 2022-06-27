<!-- Start Navigation -->
<nav class="navbar navbar-expand-sm navbar-dark  pl-5 fixed-top" style="background:#4682B4;">
    <i class="fa fa-cog fa-spin fa-2x fa-fw text-white" id="Link"></i>
        <a href="{{route('iPEL')}}" class="navbar-brand"><h2>iPEL</h2></a>
        <span class="navbar-text">Customer Services</span>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id = "myMenu">
            <ul class="navbar-nav pl-5 custom-nav">
            <li class="nav-item"><a href="{{route('iPEL')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
          <!-- Button trigger modal -->
        
         <!-- <li class="nav-item"><a href="Requester/CustomerRegister.php" class="nav-link">Registration</a></li> 
            <li class="nav-item"><a href="Requester/CustomerLogin.php" class="nav-link">Login</a></li>-->
          
            @if (Route::has('login'))
                @auth
                <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                    
                    @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                    @if (Route::has('register'))
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Registration</a></li>
                    @endif
                @endauth
        @endif
    
            
          <!--  <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link">Logout</a></li>
          -->
            <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
    
            </ul>
        </div>
    
    </nav><!-- End Navigation-->
    