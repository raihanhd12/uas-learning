@extends('layouts.main')
@section('tampilan')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>{{ $title }}</h2>
      </div>
    </div><!-- End Breadcrumbs -->   

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
  <div class="container" data-aos="fade-up">

    <div class="row">
      @foreach ($memberships as $membership)        
      
      <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
        <div class="box featured">
          <h3>{{ $membership->title }}</h3>
          <h4><sup>Rp. </sup>{{ $membership->harga }}</h4>
          
          
          <hr class="dropdown-divider" style="border-color: #3d85c8">
          <h4><span>{{ $membership->bulan }} month</span></h4>
          <div class="btn-wrap">
            <a href="/membership/{{ $membership->id }}" class="btn-buy">Beli Sekarang</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section><!-- End Pricing Section -->

<div class="d-flex justify-content-center">
  {{ $memberships->links() }}
 </div>
</main><!-- End #main -->


@endsection
