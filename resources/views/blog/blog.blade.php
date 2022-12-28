@extends('layouts.main')

@section('tampilan')


<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2><a style="color: white" href="/home"><b>Home</b> </a>/ <a style="color: white" href="/blogs"><b>Blog</b> </a>/ Blog Details</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">        
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="container my-4">  
                <article class="mb-5">
                    <h2 class="mb-3">{{ $blog->title }}</h2>  
                    <p>By.<a href="/blogs?author={{ $blog->author->username }}" class="text-decoration-none">{{ $blog->author->name }}</a> in <a href="/blogs?blog_category={{ $blog->blog_category->id }}">{{ $blog->blog_category->name }}</a></p>                      
                    {{-- https://source.unsplash.com/1440x600?{{ $blog->blog_category->name }} --}}
                    @if ($blog->image)  
                    <div style="max-height: 400px; overflow:hidden;">    
                      <img src="{{ asset('storage/' . $blog->image) }}" alt="..." class="img-fluid"> 
                    </div>                  
                    @else 
                        <div style="max-height: 400px; overflow:hidden;">     
                        <img src="../assets/img/blog-bg.png" alt="{{ $blog->blog_category->name }}" class="img-fluid">
                      </div>                               
                    @endif                                      
                    <article class="my-5">
                    {!! $blog->body !!}
                  </article>
                </article>
                <a href="/blogs" class="d-block mt-3">Back to Blog</a>
            </div>
          </div>
        </div>            
      </div>
    </section><!-- End Events Section -->
  </main><!-- End #main -->
@endsection
