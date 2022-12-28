@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4">
    @if (session()->has('success'))  
    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
      <strong><i class="bi bi-check2-circle"></i> {{ session('success') }}</strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
    @if (session()->has('delete'))  
    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
      <strong><i class="bi bi-check2-circle"></i> {{ session('delete') }}</strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
    <h1 class="mt-4">USER</h1>
    {{-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Lorem, ipsum dolor.</li>
    </ol> --}}
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable User
        </div>
        <div class="card-body ">
            <a class="btn btn-primary mb-3" href="/dashboard/users/create">Add New User</a>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Status</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Status</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody> 
                    @foreach ($users as $user)                        
                    <tr >
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>                        
                        <td>{{ $user->email }}</td>                        
                        <td>{{ $user->username }}</td>                        
                        <td>
                            @if ($user->is_status)                        
                            <p>Active</p>
                            @else  
                            <p>Non Active</p>
                            @endif
                        </td>   
                        <td>
                            @if ($user->is_admin)                        
                            <p>Admin</p>
                            @else  
                            <p>User</p>
                            @endif
                        </td>   
                        <td>
                            <a href="/dashboard/users/{{ $user->id }}/edit" class="btn btn-warning"><i class="bi bi-eyedropper"></i></a>
                            <form action="/dashboard/users/{{ $user->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf                                
                                <button class="btn btn-danger" onclick="return confirm('Remove User?')">
                                <i class="bi bi-trash"></i></button>
                            </form>                                          
                        </td>
                    </tr>                  
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

