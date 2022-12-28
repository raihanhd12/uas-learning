@extends('dashboard.layouts.main')

@section('container')
<main id="main">
    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">        
        <div class="row align-items-center flex-row-reverse my-4">
          <div class="col-lg-6">
            <a  href="/dashboard/instructors" class="btn btn-success mb-3"><i class="bi bi-arrow-left"></i> Back to All Instructor</a>
            <a  href="/dashboard/instructors/{{ $instructor->id }}/edit" class="btn btn-warning mb-3"><i class="bi bi-eyedropper"></i> Edit</a>                    
            <form action="/dashboard/instructors/{{ $instructor->id }}" method="POST" class="d-inline">
              @method('delete')
              @csrf                      
              <button class="btn btn-danger mb-3" onclick="return confirm('Delete Instructor?')">
              <i class="bi bi-trash"></i>Delete</button>
          </form>  
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
              <img src="../../../assets/img/instructor.png" class="img-fluid" alt="" style="width: 700px; height: 700px">                    
              @endif  
              </div>
          </div>
      </div>          
      </div>
    </section><!-- End Events Section -->
  </main><!-- End #main -->
@endsection
