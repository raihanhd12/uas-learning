@extends('layouts.main')
@section('tampilan')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2><a style="color: white" href="/home"><b>Home</b> </a>/ Blog All Category</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">        
        <div class="row">
          @foreach ($categories as $category)            
              <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                  <a href="/blogs?blog_category={{ $category->id }}" class="text-decoration-none">
                  <div class="card-img"> 
                    {{-- https://source.unsplash.com/500x500?{{ $category->name }}                    --}}
                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" alt="...">                    
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">{{ $category->name }}</a></h5>             
                  </div>
                </div>
              </div>
                  @endforeach  
                </div>  
            </div> 
            </div>
          
        </div>            
      </div>
    </section><!-- End Events Section -->
  </main><!-- End #main -->
</div>
@endsection
