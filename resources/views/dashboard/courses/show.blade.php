@extends('dashboard.layouts.main')

@section('container')
<main id="main" class="my-5">
  
  <!-- ======= Cource Details Section ======= -->
  <section id="course-details" class="course-details">
    <div class="container" data-aos="fade-up">
      <h2 class="mb-3">{{ $course->title }}</h2>  
      <a  href="/dashboard/courses" class="btn btn-success mb-3"><i class="bi bi-arrow-left"></i> Back to All Courses</a>
      <a  href="/dashboard/courses/{{ $course->id }}/edit" class="btn btn-warning mb-3"><i class="bi bi-eyedropper"></i> Edit</a>                    
      <form action="/dashboard/courses/{{ $course->id }}" method="POST" class="d-inline">
        @method('delete')
        @csrf                      
        <button class="btn btn-danger mb-3" onclick="return confirm('Delete Blog?')">
        <i class="bi bi-trash"></i>Delete</button>
    </form>  
      <div class="row">
        <div class="col-lg-8">
          @if ($course->image)
          <div style="max-height : 350px; overflow:hidden;">
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
            <h5>Instructor</h5>
            <p>{{ $course->instructor->nama }}</></p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Course Fee</h5>
            <p>{{ $course->course_price->name }}</p>
          </div>

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
                  <img src="../../../assets/img/course-details-tab-1.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Cource Details Tabs Section -->

</main><!-- End #main -->
@endsection
