<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Admin!</span></a>
      </div>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_pic">
          <img src="{{asset('images/zahidd.jpg')}}" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Welcome</span>
          <h2>Zahid</h2>
        </div>
      </div>
      <!-- /menu profile quick info -->

      <br />

      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
            <li><a href="#"><i class="fa fa-home">
              </i> Dashboard <span class="fa fa-chevron-down"></span></a>
            </li>
            <li class=""><a><i class="fa fa-home"></i> Category Manager <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu" style="display: none;">
                <li><a href="{{route('category.list')}}">List</a></li>
                <li><a href="{{route('category.create')}}">Create</a></li>
              </ul>
            </li>
            <li class=""><a><i class="fa fa-home"></i> Service Manager <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu" style="display: none;">
                <li><a href="{{route('service.list')}}">List</a></li>
                <li><a href="{{route('service.create')}}">Create</a></li>
              </ul>
            </li>

          </ul>
        </div>
      </div>
      <!-- /sidebar menu -->
    </div>
  </div>
