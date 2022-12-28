@extends('layouts.main')
@section('tampilan')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1 style="color: #3d85c8"><b> RHD LEARNING</b></h1>
      <h5>Web pembelajaran tentang investasi yang dapat diakses<br> kapanpun dan dimanapun,mulai dari kursus gratis maupun berbayar.</h5>
      <form action="/courses">
        @if (request('course_category'))
          <input type="hidden" name="course_category" value="{{ request('course_category') }}">
        @endif
        @if (request('course_level'))
          <input type="hidden" name="course_level" value="{{ request('course_level') }}">
        @endif
        @if (request('course_price'))
          <input type="hidden" name="course_price" value="{{ request('course_price') }}">
        @endif
        @if (request('instructor'))
          <input type="hidden" name="instructor" value="{{ request('instructor') }}">
        @endif
        <div class="input-group mt-4" style="width: 50%">
          <input type="text" class="form-control " placeholder="Search Course" name="search" value="{{ request('search') }}">
          <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
        </div>
      </form>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="../assets/img/raihan-home-bg-removebg.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h2><b>Apa manfaat belajar investasi?</b> </h2>
            <p class="fst-italic">
              Mendapatkan keuntungan yang pada akhirnya bisa digunakan untuk banyak keperluan di kemudian hari. Maka dari itu, belajar investasi merupakan hal yang perlu dilakukan untuk mengelola keuangan lebih baik lagi. <hr><h3>3 Manfaat belajar investasi</h3> 
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Punya Dana Darurat</li>
              <li><i class="bi bi-check-circle"></i> Merdeka Finansial</li>
              <li><i class="bi bi-check-circle"></i> Mempersiapkan Masa Depan yang Lebih Baik</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $alluser->where('is_admin', 0)->where('is_status', 1)->count()}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $allcourse->count() }}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $allblog->count() }}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Blogs</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $allinstructor->count() }}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Instructors</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose RHD Learning?</h3>
              <p>
                RHDL (RHD Learning) merupakan platform pembelajaran investasi secara daring (online learning) bagi member / murid yang sudah memilih berbagai kursus mulai dari yang gratis maupun yang berbayar....
              </p>
              <div class="text-center">
                <a href="aboutus" class="more-btn">Selengkapnya<i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bi bi-journals "></i>
                    <h4 class="mt-5">Beragam Modul Pembelajaran</h4>
                    <p>Beragam modul pembelajaran dan beragam pilihan mulai dari gratis maupun berbayar dengan harga yang relatif murah</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bi bi-key"></i>
                    <h4 class="mt-5">Belajar Mudah, Akses Kapan Saja</h4>
                    <p>Dapat diakses dengan mudah, dimanapun dan kapanpun. Jangan biarkan rasa ingin tahu terbatasi jarak atau waktu</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bi bi-person-check"></i>
                    <h4 class="mt-5">Instructor Terbaik di Bidangnya</h4>
                    <p>RHD Learning memiliki instructor terbaik dengan pembawaan materi secara jelas sehingga dapat mudah di mengerti</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <div class="section-title mt-2">
          <h2>Categories</h2>
          <p>All Course Categories</p>
        </div>
        {{-- ICON
            <i class="ri-store-line" style="color: #ffbb2c;"></i> 
            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
            <i class="ri-anchor-line" style="color: #b2904f;"></i>
            <i class="ri-disc-line" style="color: #b20969;"></i>
            <i class="ri-base-station-line" style="color: #ff5828;"></i>
            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
        --}}

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          @foreach ($categories as $coursecategory)
          <div class="col-lg-3 col-md-4 mt-4 mb-4">
           <a href="/courses?course_category={{ $coursecategory->id }}" style="color: rgb(255, 255, 255)">
            <div class="icon-box">               
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3>{{ $coursecategory->name }}</h3>
            </div>
          </a>
          </div>
          @endforeach 
        </div>
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p>Latest Courses</p>
          <div>
        </div>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          @foreach ($courses as $course)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5">
              <div class="course-item" style="background-color: #000000">
                <div class="position-absolute px-3 py-2" style="background-color:rgba(0,0,0,0.7); color: #3d85c8"><a style="color: #ffffff" href="/courses?course_category={{ $course->course_category->id }}" class="text-decoration-none">{{ $course->course_category->name }}</a></div>
                <a href="/course/{{ $course->id }}">
                  @if ($course->image)
                  <div style="max-height : 210px; max-width : 400px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $course->image) }}" alt="..." class="img-fluid">     
                  </div>
                  @else
                  <img src="../../../assets/img/course-1.png" alt="{{ $course->course_category->name }}" class="img-fluid" style="max-height: 210px; max-width:400px">               
                  @endif</a>
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4><a style="color: #ffffff" href="/courses?course_level={{ $course->course_level->id }}" class="text-decoration-none">{{ $course->course_level->name }}</a></h4>
                    <p class="price"><a style="color: #ffffff" href="/courses?course_price={{ $course->course_price->id }}" class="text-decoration-none">{{ $course->course_price->name }}</a></p>                    
                  </div>  
                  <h3><a href="/course/{{ $course->id }}">{{ $course->excerptitle }}</a></h3>                  
                  <p>{{ $course->excerpt }}</p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                    <a href="/instructor/{{ $course->instructor->id }}">
                      @if ($course->instructor->image)  
                      <img src="{{ asset('storage/' . $course->instructor->image) }}" alt="..." class="img-fluid">  
                    @else      
                    <img src="../assets/img/instructor.png" class="img-fluid" alt="">                    
                    @endif</a>
                      <a href="/courses?instructor={{ $course->instructor->id }}"><span>{{ $course->instructor->nama}}</span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- End Course Item-->
            @endforeach

        </div>
        <section id="features" class="features">
          <a href="/courses" style="color: rgb(255, 255, 255)">
            <div class="icon-box d-flex justify-content-center">  
              <h3>View All</h3>
            </div>
          </a>
          </section>
      </div>
    </section><!-- End Popular Courses Section -->

<!-- ======= Trainers Section ======= -->
<section id="trainers" class="trainers">
  <div class="container" data-aos="fade-up">
    
    <div class="row" data-aos="zoom-in" data-aos-delay="100">
        @foreach ($instructors as $instructor) 
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
                <a href="/instructor/{{ $instructor->id}}">
                  @if ($instructor->image)   
                  <div style="max-height: 420px; max-width:420px; overflow:hidden;">    
                  <img src="{{ asset('storage/' . $instructor->image) }}" alt="..." class="img-fluid">  
                  </div>                
                @else 
                <div style="max-height: 420px; max-width:420px; overflow:hidden;">   
                <img src="../assets/img/instructor.png"  alt="" style="width: 420px; height: 420px" class="img-fluid"></div>                      
                @endif  
              <div class="member-content">
                <h4>{{$instructor->nama}}</h4>
              </a>
                <span>{{$instructor->keahlihan}}</span>
                <p>
                    {{$instructor->excerpt}}...
                </p> 
                <div class="social">
                  <a href="{{$instructor->instagram}}"><i class="bi bi-instagram "></i></a>
                  <a href="{{$instructor->facebook}}"><i class="bi bi-facebook"></i></a>
                  <a href="{{$instructor->twitter}}"><i class="bi bi-twitter"></i></a>
                  <a href="{{$instructor->linkedin}}"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <section id="features" class="features">
          <a href="/instructors" style="color: rgb(255, 255, 255)">
            <div class="icon-box d-flex justify-content-center">  
              <h3>View All</h3>
            </div>
          </a>
          </section>
      </div>
    </section><!-- End Trainers Section -->

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
          <div class="container" data-aos="fade-up"> 
            <div class="section-title">
              <h2>Blog</h2>
              <p>Latest Blog</p>
            </div>
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
              @foreach ($blogs as $blog) 
        
              <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                  <div class="card-img">
                    @if ($blog->image)   
                    <div style="max-height: 170px; overflow:hidden;">    
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="..." class="img-fluid">  
                    </div>                
                  @else      
                     <div>            
                    <img src="../assets/img/blog-bg.png" alt="{{ $blog->blog_category->name }}" style="height: 170px" class="img-fluid">    
                     </div>                          
                  @endif                               
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="/blog/{{ $blog->id }}" class="text-decoration-none">{{ $blog->title }}</a></h5>
                    <p class="fst-italic text-center">By. <a href="/blogs?author={{ $blog->author->username }}" class="text-decoration-none">{{ $blog->author->name }}</a> in <a href="/blogs?blog_category={{ $blog->blog_category->id }}" class="text-decoration-none">{{ $blog->blog_category->name }}</a></p><small class="text-muted">{{ $blog->created_at->diffForHumans()}}</small>
                    <p class="card-text">{{ $blog->excerpt }}</p>
                    <a href="/blog/{{ $blog->id }}" class="text-decoration-none">Read more..</a>               
                  </div>
                </div>
              </div>
                @endforeach
            </div>
            <section id="features" class="features">
              <a href="/blogs" style="color: rgb(255, 255, 255)">
                <div class="icon-box d-flex justify-content-center">  
                  <h3>View All</h3>                  
                </div>
              </a>
              </section> 
            </div>         
          </div>
        </section><!-- End Events Section -->   

  </main><!-- End #main -->
  @endsection