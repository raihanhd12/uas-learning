@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">USER</h1>
    {{-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Lorem, ipsum.</li>
    </ol> --}}
    <div class="card mb-4">
        <div class="card-header">
            <a class="btn btn-secondary" href="/dashboard/users">
            <i class="bi bi-arrow-left"></i>
            Back</a>
        </div>
        <div class="card-body">
        <form method="POST" action="/dashboard/users">
            @csrf
            <div class="mb-3">
                <label for="is_status" class="form-label">Status</label>
                <select class="form-select" name="is_status">    
                    <option value="1">Active</option>                    
                    <option value="0" selected>Non Active</option>  
                </select>
            </div>
            <div class="mb-3">
                <label for="is_admin" class="form-label">Role</label>
                <select class="form-select" name="is_admin">    
                    <option value="1">Admin</option>                    
                    <option value="0" selected>User</option>  
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username') }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required value="{{ old('password') }}">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add User</button>
            </form>
        </div>
    </div>
</div>
@endsection
