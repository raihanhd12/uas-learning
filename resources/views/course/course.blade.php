<style>
form button[type=submit] {
  position: absolute;

  border: 0;
  background: none;
  font-size: 16px;
  
  background: #3d85c8;
  color: #fff;
  transition: 0.3s;
  border-radius: 50px;
  box-shadow: 0px 2px 15px #3d85c8;
}
form button[type=submit]:hover {
  background: #3ac162;
}
</style>
@extends('layouts.main')

@section('tampilan')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2><a style="color: white" href="/home"><b>Home</b> </a>/ <a style="color: white" href="/courses"><b>Course</b> </a>/ Course Details</h2>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Cource Details Section ======= -->
  <section id="course-details" class="course-details">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-8">
          @if ($course->image)
          <div style="max-height : 600px; overflow:hidden;">
            <img src="{{ asset('storage/' . $course->image) }}" alt="..." class="img-fluid">     
          </div>
          @else
          <img src="../../../assets/img/course-1.png" alt="{{ $course->course_category->name }}" class="img-fluid">               
          @endif
          <h3>{{ $course->title }}</h3>
          <p>
            {!! $course->deskripsi !!}
          </p>
        </div>
        <div class="col-lg-4">
          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Created At</h5>
            <p class="text-muted">{{ $course->created_at->diffForHumans()}}</p>
          </div>
          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Instructor</h5>
            <p><a href="/instructor/{{ $course->instructor->id }}">{{ $course->instructor->nama }}</a></p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Course Fee</h5>
            <p>{{ $course->course_price->name }}</p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Lesson </h5>
            <p>{{ $lesson->count() }}</p>
          </div>           

          <form method="POST" action="/course_user/{{ $course->id }}">
            @csrf
            <div class="mb-3">                  
              <input type="hidden" id="course_id" name="course_id" value="{{ $course->id }}">
            </div>
            <button class="course-info d-flex justify-content-between align-items-center" type="submit">Get Enrolled</button>
          </form>               
        </div>
      </div>

    </div>
  </section><!-- End Cource Details Section -->

  <!-- ======= Cource Details Tabs Section ======= -->
  <section id="cource-details-tabs" class="cource-details-tabs">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">What I Will Learn?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                 Course Structure
                </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <p class="fst-italic">{!! $course->learn !!}</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="../assets/img/whatwillilearn.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-2">
              <div class="row">
                <div class="col-lg-6 details order-2 order-lg-1">
                  <ol class="list-group ">
                    @foreach ($section as $section)                      
                    <li class="list-group-item d-flex justify-content-between align-items-start text-white mb-3" style="background-color: rgb(0, 0, 0); border-style: solid; border-color:#3d85c8; border-radius:20px;">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold">Section <span class="badge bg-primary rounded-pill">{{$loop->iteration }} </span> </div>                        
                        Name Section : {{ $section->title }}
                      </div>
                    </li>
                    @endforeach
                  </ol>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Cource Details Tabs Section -->

</main><!-- End #main -->
@endsection