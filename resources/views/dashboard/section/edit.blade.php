@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Section</h1>
    {{-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Lorem, ipsum.</li>
    </ol> --}}
    <div class="card mb-4">
        <div class="card-header">
            <a class="btn btn-secondary" href="/dashboard/section">
            <i class="bi bi-arrow-left"></i>
            Back</a>
        </div>
        <div class="card-body">
        <form method="POST" action="/dashboard/section/{{ $section->id }}">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $section->title) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>  
            <div class="mb-3">
                <label for="course" class="form-label">Course</label>
                <select class="form-select" name="course_id">
                    @foreach ($course as $course) 
                    @if (old('course_id', $section->course_id) == $course->id)                        
                    <option value="{{ $course->id }}" selected>{{ $course->title }}</option>
                    @else  
                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                    @endif
                    @endforeach
                </select>
            </div> 
            <button type="submit" class="btn btn-primary">Update Section</button>
            </form>
        </div>
    </div>
</div>
@endsection
