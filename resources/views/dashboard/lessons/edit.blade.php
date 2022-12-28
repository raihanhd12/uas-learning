@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Lesson</h1>
    {{-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Lorem, ipsum.</li>
    </ol> --}}
    <div class="card mb-4">
        <div class="card-header">
            <a class="btn btn-secondary" href="/dashboard/lesson">
            <i class="bi bi-arrow-left"></i>
            Back</a>
        </div>
        <div class="card-body">
        <form method="POST" action="/dashboard/lesson/{{ $lesson->id }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="course" class="form-label">Course</label>
                <select class="form-select" name="course_id">
                    @foreach ($course as $course) 
                    @if (old('course_id', $lesson->course_id) == $course->id)                        
                    <option value="{{ $course->id }}" selected>{{ $course->title }}</option>
                    @else  
                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                    @endif
                    @endforeach
                </select>
            </div>   
            <div class="mb-3">
                <label for="section" class="form-label">Section</label>
                <select class="form-select" name="section_id">
                    @foreach ($section as $section) 
                    @if (old('section_id', $section->id) == $section->id)                        
                    <option value="{{ $section->id }}" selected>Section Title : {{ $section->title }} | Course Title : {{ $section->course->title }}</option>
                    @else  
                    <option value="{{ $section->id }}">Section Title : {{ $section->title }} | Course Title : {{ $section->course->title }}</option>
                    @endif
                    @endforeach
                </select>
            </div> 
            <div class="mb-3">
                <label for="pdf" class="form-label">PDF</label>                
                <input class="form-control @error('pdf') is-invalid @enderror" type="file" id="pdf" name="pdf">
                @error('pdf')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="videotitle" class="form-label">Video Title</label>
                <input type="text" class="form-control @error('videotitle') is-invalid @enderror" id="videotitle" name="videotitle" required autofocus value="{{ old('videotitle', $lesson->videotitle) }}">
                @error('videotitle')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="video" class="form-label">Video</label>
                <input type="text" class="form-control @error('video') is-invalid @enderror" id="video" name="video" value="{{ old('video', $lesson->video) }}">
                @error('video')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div> 
            <div class="mb-3">
                <label for="body" class="form-label">Rangkuman Video</label>
                <input id="body" type="hidden" name="body"  value="{{ old('body', $lesson->body) }}">
                <trix-editor input="body"></trix-editor>
                @error('body')                    
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>    
            <div class="mb-3">
                <label for="file" class="form-label">File</label>                
                <input class="form-control @error('file') is-invalid @enderror" type="file" id="file" name="file">
                @error('file')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>            
            <button type="submit" class="btn btn-primary">Edit Lesson</button>
            </form>
        </div>
    </div>
</div>
@endsection