{{-- <style>
.list-menu {
    list-style: none;
    margin: 0;
    padding-left: 0;
}
.list-menu a {
    color: #343a40;
}
</style> --}}
{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://fontawesome.com/v4.7.0/assets/font-awesome/css/font-awesome.css">


<div class="container mt-4" style="color: #ffffff">
<div class="row">
<aside class="col-md-3">
    
<div class="card mt-5" style="background-color: #111111e5;">
    <article class="filter-group">
        <header class="card-header">                
            <i class="icon-control fa fa-chevron-down"></i>
            <h6 class="title">Categories</h6>                
        </header>
        <div class="filter-content collapse show" id="collapse_1" style="">
            <div class="card-body">               
                <ul class="list-menu">
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          All Categories
                        </label>
                    </div> 
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Default radio
                        </label>
                    </div>
                </li>
                </ul>
            </div> <!-- card-body.// -->
        </div>
    </article> <!-- filter-group  .// -->
    <hr class="dropdown-divider" style="border-color: white">
    <article class="filter-group">
        <header class="card-header">
                <i class="icon-control fa fa-chevron-down"></i>
                <h6 class="title" style="color: #ffffff">Price</h6>
        </header>
        <div class="filter-content collapse show" id="collapse_2" style="">
            <div class="card-body">
                <ul class="list-menu">
                    <li>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault3" checked>
                            <label class="form-check-label" for="flexRadioDefault3">
                              All Price
                            </label>
                        </div> 
                    </li>
                    <li>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                              Free
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault5">
                            <label class="form-check-label" for="flexRadioDefault5">
                              Paid
                            </label>
                        </div>
                    </li>
                    </ul>        
    </div> <!-- card-body.// -->
        </div>
    </article> <!-- filter-group .// -->
    <hr class="dropdown-divider" style="border-color: white">
    <article class="filter-group">
        <header class="card-header">
            <i class="icon-control fa fa-chevron-down"></i>
            <h6 class="title" style="color:#ffffff">Level </h6>
        </header>
        <div class="filter-content collapse show" id="collapse_4" style="">
            <div class="card-body">
                <ul class="list-menu">
                    <li>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault6" checked>
                            <label class="form-check-label" for="flexRadioDefault6">
                              All Level
                            </label>
                        </div> 
                    </li>
                    <li>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault7">
                            <label class="form-check-label" for="flexRadioDefault7">
                              Beginner
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault8">
                            <label class="form-check-label" for="flexRadioDefault8">
                            intermediate
                            </label>
                        </div>
                    </li>
                    </ul>
        </div><!-- card-body.// -->
        </div>
    </article> <!-- filter-group .// -->
</div> <!-- card.// -->
    </aside>
    <main class="col-md-9">

<header class="border-bottom mb-4 pb-3">
        <div class="form-inline">
            <span class="mr-md-auto my-2">0 Items found </span>
            <select class="mr-2 form-control" style="background-color: #111111e5;color: rgb(255, 255, 255);">
                <option>Latest items</option>
                <option>Trending</option>
                <option>Most Popular</option>
                <option>Cheapest</option>
            </select>
        </div>
</header><!-- sect-heading --> --}}

{{-- <div class="row">
    <div class="col"> --}}
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
          <div class="course-item">
            <div class="position-absolute px-3 py-2" style="background-color:rgba(0,0,0,0.7); color: #3d85c8"><a style="color: #ffffff" href="/courses?course_category={{ $course->course_category->id }}" class="text-decoration-none">{{ $course->course_category->name }}</a></div>
            <a href="/course/{{ $course->id }}">
            <img src="assets/img/course-1.jpg" class="img-fluid" alt="..."></a>
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4><a style="color: #ffffff" href="/courses?course_level={{ $course->course_level->id }}" class="text-decoration-none">{{ $course->course_level->name }}</a></h4>
                <p class="price"><a style="color: #ffffff" href="/courses?course_price={{ $course->course_price->id }}" class="text-decoration-none">{{ $course->course_price->name }}</a></p>                    
              </div>  
              <h3><a href="/course/{{ $course->id }}">{{ $course->title }}</a></h3>                  
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

     </div> <!-- col.// -->     
</div> <!-- row end.// --> 
    </main>
    </div>
</div>    
</main><!-- End #main --> --}}