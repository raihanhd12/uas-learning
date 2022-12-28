@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit User</h1>
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
        <form method="POST" action="/dashboard/users/{{ $user->id }}">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="is_status" class="form-label">Status</label>
                @if (old('is_status', $user->is_status))
                <select class="form-select" name="is_status">    
                    <option value="0" >Non Active</option> 
                    <option value="1" selected>Active</option> 
                </select> 
                @else  
                <select class="form-select" name="is_status">        
                    <option value="0" selected>Non Active</option>       
                    <option value="1" >Active</option>   
                </select>
                @endif
            </div>
            <div class="mb-3">
                <label for="is_admin" class="form-label">Role</label>
                @if (old('is_admin', $user->is_admin))
                <select class="form-select" name="is_admin">    
                    <option value="0" >User</option> 
                    <option value="1" selected>Admin</option> 
                </select> 
                @else  
                <select class="form-select" name="is_admin">        
                    <option value="0" selected>User</option>       
                    <option value="1" >Admin</option>   
                </select>
                @endif
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $user->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username', $user->username) }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email', $user->email) }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update User</button>
            </form>
        </div>
    </div>
</div>
@endsection