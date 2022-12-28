@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Create Blog</h1>
    {{-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Lorem, ipsum.</li>
    </ol> --}}
    <div class="card mb-4">
        <div class="card-header">
            <a class="btn btn-secondary" href="/dashboard/membership">
            <i class="bi bi-arrow-left"></i>
            Back</a>
        </div>
        <div class="card-body">
        <form method="POST" action="/dashboard/membership">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>            
            <div class="mb-3">
                <label for="bulan" class="form-label">Bulan</label>
                <input type="text" class="form-control @error('bulan') is-invalid @enderror" id="bulan" name="bulan" required value="{{ old('bulan') }}">
                @error('bulan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>            
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" required value="{{ old('harga') }}">
                @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>            
            <button type="submit" class="btn btn-primary">Create Membership</button>
            </form>
        </div>
    </div>
</div>
@endsection
