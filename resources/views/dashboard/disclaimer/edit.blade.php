@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Disclaimer</h1>
    {{-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Lorem, ipsum.</li>
    </ol> --}}
    <div class="card mb-4">
        <div class="card-header">
            <a class="btn btn-secondary" href="/dashboard/disclaimer">
            <i class="bi bi-arrow-left"></i>
            Back</a>
        </div>
        <div class="card-body">
        <form method="POST" action="/dashboard/disclaimer/{{ $disclaimer->id }}">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input id="body" type="hidden" name="body"  value="{{ old('body', $disclaimer->body) }}">
                <trix-editor input="body"></trix-editor>
                @error('body')                    
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>  
            <button type="submit" class="btn btn-primary">Update Disclaimer</button>
            </form>
        </div>
    </div>
</div>
@endsection
