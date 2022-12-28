@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <div class="px-4 pt-5 my-5 text-center">
        <h1 class="display-4 fw-bold">Dashboard Admin</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">The wisest rule in investing is: when someone else is selling, buying. When other people buy, sell.<br> ~ Jonathan Sacks ~</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
            <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3"><a style="color: white" class="text-decoration-none" href="/dashboard/users">All User</a></button>
            <button type="button" class="btn btn-dark btn-lg px-4"><a style="color: rgb(255, 255, 255)" class="text-decoration-none" href="/dashboard/courses">All Course</a></button>
          </div>
        </div>
        <div class="overflow-hidden" style="max-height: 80%;">
          <div class="container px-5">
            <img src="../../../assets/img/raihan-hero-bg.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
          </div>
        </div>
      </div>
</div>
@endsection
