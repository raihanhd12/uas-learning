@extends('layouts.main')
@section('tampilan')   

<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2><a style="color: white" href="/home"><b>Home</b> </a>/ Instructors</h2>
      </div>
    </div><!-- End Breadcrumbs -->

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
          <div class="d-flex justify-content-center">
            {{ $instructors->links() }}
           </div>  
        </div>
      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->
@endsection