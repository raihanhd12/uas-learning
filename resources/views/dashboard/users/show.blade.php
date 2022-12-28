@extends('dashboard.layouts.main')

@section('container')
<main id="main">
    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">        
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="container my-4">  
                <article class="mb-5">
                    <h2 class="mb-3">{{ $blog->title }}</h2>  
                    <a  href="/dashboard/blogs" class="btn btn-success mb-3"><i class="bi bi-arrow-left"></i> Back to All Blogs</a>
                    <a  href="/dashboard/blogs/{{ $blog->id }}/edit" class="btn btn-warning mb-3"><i class="bi bi-eyedropper"></i> Edit</a>                    
                    <form action="/dashboard/blogs/{{ $blog->id }}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf                      
                      <button class="btn btn-danger mb-3" onclick="return confirm('Delete Blog?')">
                      <i class="bi bi-trash"></i>Delete</button>
                  </form>  
                    {{-- https://source.unsplash.com/1440x600?{{ $blog->blog_category->name }} --}}
                    @if ($blog->image)
                    <div style="max-height : 350px; overflow:hidden;">
                      <img src="{{ asset('storage/' . $blog->image) }}" alt="..." class="img-fluid">     
                    </div>
                    @else
                    <img src="../../../assets/img/blog-bg.png" alt="{{ $blog->blog_category->name }}" class="img-fluid">               
                    @endif
                    <article class="my-5">
                    {!! $blog->body !!}
                  </article>
                </article>                
            </div>
          </div>
        </div>            
      </div>
    </section><!-- End Events Section -->
  </main><!-- End #main -->
@endsection
