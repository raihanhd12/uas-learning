<style>
  body{
      color: #6F8BA4;
      margin-top:20px;
  }
  .section {
      padding: 100px 0;
      position: relative;
  }
  .gray-bg {
      background-color: #000000e5;
  }
  img {
      max-width: 100%;
  }
  img {
      vertical-align: middle;
      border-style: none;
  }
  /* About Me 
  ---------------------*/
  .about-text h3 {
    font-size: 45px;
    font-weight: 700;
    margin: 0 0 6px;
  }
  @media (max-width: 767px) {
    .about-text h3 {
      font-size: 35px;
    }
  }
  .about-text h6 {
    font-weight: 600;
    margin-bottom: 15px;
  }
  @media (max-width: 767px) {
    .about-text h6 {
      font-size: 18px;
    }
  }
  .about-text p {
    font-size: 15px;
    max-width: 450px;
  }
  .about-text p mark {
    font-weight: 600;
    color: #20247b;
  }
  
  .about-list {
    padding-top: 10px;
  }
  .about-list .media {
    padding: 5px 0;
  }
  .about-list label {
    color: #20247b;
    font-weight: 600;
    width: 88px;
    margin: 0;
    position: relative;
  }
  .about-list label:after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    right: 11px;
    width: 1px;
    height: 12px;
    background: #20247b;
    -moz-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -webkit-transform: rotate(15deg);
    transform: rotate(15deg);
    margin: auto;
    opacity: 0.5;
  }
  .about-list p {
    margin: 0;
    font-size: 15px;
  }
  
  @media (max-width: 991px) {
    .about-avatar {
      margin-top: 30px;
    }
  }
  
  .about-section .counter {
    padding: 22px 20px;
    background: #000000;
    border-radius: 10px;
    box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
  }
  .about-section .counter .count-data {
    margin-top: 10px;
    margin-bottom: 10px;
  }
  .about-section .counter .count {
    font-weight: 700;
    color: #3d85c8;
    margin: 0 0 5px;
  }
  .about-section .counter p {
    font-weight: 600;
    margin: 0;
  }
  mark {
      background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
      background-size: 100% 3px;
      background-repeat: no-repeat;
      background-position: 0 bottom;
      background-color: transparent;
      padding: 0;
      color: currentColor;
  }
  .theme-color {
      color: #fc5356;
  }
  .dark-color {
      color: #3d85c8;
  }
  
  </style>
  @extends('layouts.main')
  
  @section('tampilan')
  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2><a style="color: white" href="/home"><b>Home</b> </a>/ <a style="color: white" href="/instructors"><b>Instructor</b> </a>/ About Instructor</h2>
      </div>
    </div><!-- End Breadcrumbs -->

  <section class="section about-section" id="about">
      <div class="container">
          <div class="row align-items-center flex-row-reverse">
              <div class="col-lg-6">
                  <div class="about-text go-to">
                      <h3 class="dark-color">{{ $instructor->nama }}</h3>
                      <h4 class="theme-color lead">Instructor </h4>
                      <h6><u>About Me</u></h6>
                      <p>Keahlihan Saya adalah <mark>{{ $instructor->keahlihan }}.</mark></p> {!! $instructor->about !!}  
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="about-avatar my-5">
                    @if ($instructor->image)   
                    <div style="max-height: 700px; max-width:700px; overflow:hidden;">    
                    <img src="{{ asset('storage/' . $instructor->image) }}" alt="..." class="img-fluid">  
                    </div>                
                  @else      
                  <img src="../assets/img/instructor.png" class="img-fluid" alt="" style="width: 700px; height: 700px">                    
                  @endif  
                  </div>
              </div>
          </div>
          <div class="counter">
              <div class="row">
                  <div class="col-12 col-lg-12">
                      <div class="count-data text-center">
                        <h6 class="count h2" data-to="100" data-speed="1">{{ $coba->where('instructor_id', $instructor->id)->count()}}</h6>
                        <p class="m-0px font-w-600">Total Courses</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="counter mt-5">
            <div class="row">
                <div class="col-3 col-lg-3">
                    <div class="count-data text-center">
                        <a class="icon" href="{{ $instructor->instagram }}"><img src="https://liupurnomo.github.io/resume/icons/Instagram.png" alt="" width="40px"></a>    
                        <p class="m-0px font-w-600 mt-2">Instagram</p>       
                    </div>
                </div>
                <div class="col-3 col-lg-3">
                    <div class="count-data text-center">
                        <a class="icon" href="{{ $instructor->facebook }}"><img src="https://liupurnomo.github.io/resume/icons/Facebook.png" alt="" width="40px"></a>  
                        <p class="m-0px font-w-600 mt-2">Facebook</p>      
                    </div>
                </div>
                <div class="col-3 col-lg-3">
                    <div class="count-data text-center">
                        <a class="icon" href="{{ $instructor->twitter }}"><img src="https://liupurnomo.github.io/resume/icons/Twitter.png" alt="" width="40px"></a>  
                        <p class="m-0px font-w-600 mt-2">Twitter</p>                           
                    </div>
                </div>
                <div class="col-3 col-lg-3">
                    <div class="count-data text-center">
                        <a class="icon" href="{{ $instructor->linkedin }}"><img src="https://liupurnomo.github.io/resume/icons/LinkedIn.png" alt="" width="40px"></a> 
                        <p class="m-0px font-w-600 mt-2">LinkedIn</p>
                    </div>
                </div>
            </div>
        </div>
          </div>
      </div>
  </section>
  </main>
  @endsection