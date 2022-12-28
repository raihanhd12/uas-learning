
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      {{-- <h1 class="logo me-auto"><a href="index.html">Mentor</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="/home" class="logo me-auto">
        <img src="/assets/img/logonavfix2.png" alt="" class="img-fluid "></a>
      
      

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="{{ Request::is('home') ? 'active' : '' }}"href="/home">Home</a></li> 
          <li class="dropdown"><a class="{{ Request::is('courses') ? 'active' : '' }} {{ Request::is('coursecategories') ? 'active' : '' }}" href="courses"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @can('active')                
              <li><a class="{{ Request::is('course_user') ? 'active' : '' }}" href="/course_user">My Courses</a></li>            
              <li><hr class="dropdown-divider" style="border-color: white"></li>
              @endcan
              <li class="dropdown"><a><span>All</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a class="{{ Request::is('coursecategories') ? 'active' : '' }}" href="/coursecategories">All Categories</a></li>
                  <li><a class="{{ Request::is('courses') ? 'active' : '' }}" href="/courses">All Courses</a></li>
                </ul>
              </li>  
            </ul>
          </li>
          <li><a class="{{ Request::is('instructors*') ? 'active' : '' }}" href="/instructors">Instructor</a></li>
          <li class="dropdown"><a class="{{ Request::is('blogs') ? 'active' : '' }} {{ Request::is('categories') ? 'active' : '' }}"  href="/blogs">Blog <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="{{ Request::is('blogs') ? 'active' : '' }} "  href="/blogs">All Blog</a></li>   
               <li><hr class="dropdown-divider" style="border-color: white"></li>
              <li><a class="{{ Request::is('categories') ? 'active' : '' }}" href="/categories">All Categories</a></li>
            </ul>
          </li>          
          <li><a class="{{ Request::is('memberships*') ? 'active' : '' }}" href="/memberships">Membership</a></li> 
            @can('active')                         
            <div class="dropdown text-end">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="../assets/img/profileuser.png" alt="RHDLearning" width="52" height="52" class="rounded-circle">
              </a>
              <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1"> 
                  <li><a style="color: #90c8fc"><b>{{ auth()->user()->username }}</b></a></li>  
                  @can('admin')                    
                  <li><a href="/dashboard">Dashboard</a></li>
                  @endcan
                  <li><hr class="dropdown-divider" style="border-color: white"></li>                  
                  <li>
                    <form action="/logout" method="POST">
                      @csrf
                      <button class="dropdown-item" type="submit"><h6 style="color: rgb(255, 255, 255); font-size:14px"><i class="bi bi-box-arrow-right"></i><b> Logout</b> </h6></button>
                    </form>
                  </li>                    
              </ul>
              </div> 
            @else
            <a href="/login"><span class="btn btn-outline-light pe-3"><i class="bi bi-person"> Login</i></span></a>
            @endcan
            {{-- <a href="/register" class=""><span class="btn btn-outline-light pe-3 " style="background-color: #3d85c8; border-color:black"><i class="bi bi-box-arrow-up"> Sign Up</i></span></a> --}}
        </ul>        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->   
    </div>
  </header><!-- End Header -->