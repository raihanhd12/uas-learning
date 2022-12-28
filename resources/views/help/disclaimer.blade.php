@extends('layouts.main')
@section('tampilan')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2><a style="color: white" href="/home"><b>Home</b> </a>/ Disclaimer</h2>
      </div>
    </div><!-- End Breadcrumbs -->
    

    <!-- ======= Terms Section ======= -->
    <section id="contact" class="contact">
      <div class="container mt-4 py-5" data-aos="fade-up">        
        @foreach ($disclaimer as $disclaimer)      
        {!! $disclaimer->body !!} 
        @endforeach
      </div>
    </section><!-- End Terms Section -->

  </main><!-- End #main -->
@endsection