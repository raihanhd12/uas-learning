@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Create Course Category</h1>
    {{-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Lorem, ipsum.</li>
    </ol> --}}
    <div class="card mb-4">
        <div class="card-header">
            <a class="btn btn-secondary" href="/dashboard/course_category">
            <i class="bi bi-arrow-left"></i>
            Back</a>
        </div>
        <div class="card-body">
        <form method="POST" action="/dashboard/course_category">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create Course Category</button>
            </form>
        </div>
    </div>
</div>
@endsection
