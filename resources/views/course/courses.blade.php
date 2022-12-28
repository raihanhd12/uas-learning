@extends('layouts.main')
@section('tampilan')

<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2><a style="color: white" href="/home"><b>Home</b> </a>/ {{ $title }}</h2>
      </div>
    </div><!-- End Breadcrumbs -->
    @if (session()->has('success'))  
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
      </symbol>
    </svg>
    <div class="alert alert-success d-flex align-items-center mt-5" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>
        {{ session('success') }}
      </div>
    </div>
  @endif
    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">
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
          <div class="input-group mb-5">
            <input type="text" class="form-control" placeholder="Search Course" name="search" value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
          </div>
        </form>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          @if ($courses->count())          
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
          <div class="d-flex justify-content-center">
            {{ $courses->links() }}
           </div>   
        </div>
      </section><!-- End Courses Section -->
    </div>    
    @else
    <p class="text-center fs-4 my-5 pb-2">No Course Found</p>
    @endif
  </main><!-- End #main -->  
  <!--===============================================================================================-->	
	<script src="../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
		window.setTimeout(function() {
      $(".alert").fadeTo(1000, 0).slideUp(200, function(){
        $(this).remove(); 
      });
    }, 2000);
	</script>
<!--===============================================================================================-->	     
@endsection

