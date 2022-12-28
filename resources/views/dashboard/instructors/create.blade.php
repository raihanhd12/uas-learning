@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Add Instructor</h1>
    {{-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Lorem, ipsum.</li>
    </ol> --}}
    <div class="card mb-4">
        <div class="card-header">
            <a class="btn btn-secondary" href="/dashboard/instructors">
            <i class="bi bi-arrow-left"></i>
            Back</a>
        </div>
        <div class="card-body">
        <form method="POST" action="/dashboard/instructors" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama') }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="keahlihan" class="form-label">Keahlihan</label>
                <input type="text" class="form-control @error('keahlihan') is-invalid @enderror" id="keahlihan" name="keahlihan" value="{{ old('keahlihan') }}">
                @error('keahlihan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="instagram" class="form-label">Instagram</label>
                <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" placeholder="https://www.instagram.com/raaihan.n" name="instagram" value="{{ old('instagram') }}">
                @error('instagram')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>            
            <div class="mb-3">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="text" class="form-control @error('facebook') is-invalid @enderror" id="facebook" placeholder="https://www.facebook.com/RaihanHidayatullahD" name="facebook" value="{{ old('facebook') }}">
                @error('facebook')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>            
            <div class="mb-3">
                <label for="twitter" class="form-label">Twitter</label>
                <input type="text" class="form-control @error('twitter') is-invalid @enderror" id="twitter" placeholder="https://twitter.com/jokowi" name="twitter" value="{{ old('twitter') }}">
                @error('twitter')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>            
            <div class="mb-3">
                <label for="linkedin" class="form-label">LinkedIn</label>
                <input type="text" class="form-control @error('linkedin') is-invalid @enderror" id="linkedin" placeholder="https://www.linkedin.com/in/raihan-d-320a1412a/" name="linkedin" value="{{ old('linkedin') }}">
                @error('linkedin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>            
            <div class="mb-3">
                <label for="image" class="form-label">Instructor Image <label class="text-muted">(600x600px)</label></label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>           
            <div class="mb-3">
                <label for="about" class="form-label">About</label>
                <input id="about" type="hidden" name="about"  value="{{ old('about') }}">
                <trix-editor input="about"></trix-editor>
                @error('about')                    
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add Instructor </button>
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
