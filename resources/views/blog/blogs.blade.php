@extends('layouts.main')
@section('tampilan')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2><a style="color: white" href="/home"><b>Home</b> </a>/ {{ $title }}</h2>
      </div>
    </div><!-- End Breadcrumbs -->


    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up"> 
        <form action="/blogs">
          @if (request('blog_category'))
            <input type="hidden" name="blog_category" value="{{ request('blog_category') }}">
          @endif
          @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
          <div class="input-group mb-5">
            <input type="text" class="form-control" placeholder="Search Blog" name="search" value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Search</button>
          </div>
        </form>
        <div class="row">
          @if ($blogs->count())
          <div class="card">
            <div class="card-img">              
              {{-- https://source.unsplash.com/1440x600?{{ $blogs[0]->blog_category->name }} --}}
              @if ($blogs[0]->image)  
              <div style="max-height: 400px; overflow:hidden;">    
                <img src="{{ asset('storage/' . $blogs[0]->image) }}" alt="..." class="img-fluid"> 
              </div>                  
              @else 
                  <div style="max-height: 400px; overflow:hidden;">     
                  <img src="../assets/img/blog-bg.png" alt="{{ $blogs[0]->blog_category->name }}" class="img-fluid">
                </div>                               
              @endif
              
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="/blog/{{ $blogs[0]->id }}">{{ $blogs[0]->title }}</a></h5>
              <p class="fst-italic text-center">By. <a href="/blogs?author={{ $blogs[0]->author->username }}" >{{ $blogs[0]->author->name }}</a> in <a href="/blogs?blog_category={{ $blogs[0]->blog_category->id }}">{{ $blogs[0]->blog_category->name }}</a></p><small class="text-muted">{{ $blogs[0]->created_at->diffForHumans()}}</small>
              <p class="card-text">{{ $blogs[0]->excerpt }}</p>                            
              <a href="/blog/{{ $blogs[0]->id }}" >Read more..</a>
            </div>
          </div>
        @foreach ($blogs->skip(1) as $blog) 
        
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                {{-- <div class="position-absolute px-3 py-2" style="background-color:rgba(0,0,0,0.7); color: #3d85c8">{{ $blog->blog_category->name }}</div> --}}
                {{-- https://source.unsplash.com/500x300?{{ $blog->blog_category->name }} --}}
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
        <div class="d-flex justify-content-center">
        {{ $blogs->links() }}
       </div>          
      </div>
    </section><!-- End Events Section -->   
    @else
    <p class="text-center fs-4 my-5 pb-2">No Blog Found</p>
    @endif
  </main><!-- End #main -->
  
@endsection
