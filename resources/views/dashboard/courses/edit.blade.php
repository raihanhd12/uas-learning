@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Course</h1>
    {{-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Lorem, ipsum.</li>
    </ol> --}}
    <div class="card mb-4">
        <div class="card-header">
            <a class="btn btn-secondary" href="/dashboard/courses">
            <i class="bi bi-arrow-left"></i>
            Back</a>
        </div>
        <div class="card-body">
        <form method="POST" action="/dashboard/courses/{{ $course->id }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $course->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="course_category" class="form-label">Category</label>
                <select class="form-select" name="course_category_id">
                    @foreach ($categories as $course_category) 
                    @if (old('course_category_id', $course->course_category_id) == $course_category->id)                        
                    <option value="{{ $course_category->id }}" selected>{{ $course_category->name }}</option>
                    @else  
                    <option value="{{ $course_category->id }}">{{ $course_category->name }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="course_level" class="form-label">Level</label>
                <select class="form-select" name="course_level_id">
                    @foreach ($course_levels as $course_level) 
                    @if (old('course_level_id', $course->course_level_id) == $course_level->id)                        
                    <option value="{{ $course_level->id }}" selected>{{ $course_level->name }}</option>
                    @else  
                    <option value="{{ $course_level->id }}">{{ $course_level->name }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="course_price" class="form-label">Price</label>
                <select class="form-select" name="course_price_id">
                    @foreach ($course_prices as $course_price) 
                    @if (old('course_price_id', $course->course_price_id) == $course_price->id)                        
                    <option value="{{ $course_price->id }}" selected>{{ $course_price->name }}</option>
                    @else  
                    <option value="{{ $course_price->id }}">{{ $course_price->name }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="instructor" class="form-label">Instructor</label>
                <select class="form-select" name="instructor_id">
                    @foreach ($instructors as $instructor) 
                    @if (old('instructor_id', $course->instructor_id) == $instructor->id)                        
                    <option value="{{ $instructor->id }}" selected>{{ $instructor->nama }}</option>
                    @else  
                    <option value="{{ $instructor->id }}">{{ $instructor->nama }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Course Image <label class="text-muted">(800x400px)</label></label>
                <input type="hidden" name="oldImage" value="{{ $course->image }}">
                @if ($course->image)
                <img src="{{ asset('storage/' . $course->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @endif                
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input id="deskripsi" type="hidden" name="deskripsi"  value="{{ old('deskripsi',$course->deskripsi) }}">
                <trix-editor input="deskripsi"></trix-editor>
                @error('deskripsi')                    
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="learn" class="form-label">What will learn?</label>
                <input id="learn" type="hidden" name="learn"  value="{{ old('learn',$course->learn) }}">
                <trix-editor input="learn"></trix-editor>
                @error('learn')                    
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Course</button>
            </form>
        </div>
    </div>
</div>
@endsection
<script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
