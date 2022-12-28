@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Blog</h1>
    {{-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Lorem, ipsum.</li>
    </ol> --}}
    <div class="card mb-4">
        <div class="card-header">
            <a class="btn btn-secondary" href="/dashboard/blogs">
            <i class="bi bi-arrow-left"></i>
            Back</a>
        </div>
        <div class="card-body">
        <form method="POST" action="/dashboard/blogs/{{ $blog->id }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $blog->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="blog_category" class="form-label">Category</label>
                <select class="form-select" name="blog_category_id">
                    @foreach ($categories as $blog_category) 
                    @if (old('blog_category_id', $blog->blog_category_id) == $blog_category->id)                        
                    <option value="{{ $blog_category->id }}" selected>{{ $blog_category->name }}</option>
                    @else  
                    <option value="{{ $blog_category->id }}">{{ $blog_category->name }}</option>
                    @endif
                    @endforeach
                </select>
            </div>            
            <div class="mb-3">
                <label for="image" class="form-label">Blog Image <label class="text-muted">(1440x600px)</label></label>
                <input type="hidden" name="oldImage" value="{{ $blog->image }}">
                @if ($blog->image)
                <img src="{{ asset('storage/' . $blog->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
                <label for="body" class="form-label">Body</label>
                <input id="body" type="hidden" name="body"  value="{{ old('body', $blog->body) }}">
                <trix-editor input="body"></trix-editor>
                @error('body')                    
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Blog</button>
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
