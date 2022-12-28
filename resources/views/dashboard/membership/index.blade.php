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
    <h1 class="mt-4">Membership</h1>
    {{-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Lorem, ipsum dolor.</li>
    </ol> --}}
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Membership
        </div>
        <div class="card-body ">
            <a class="btn btn-primary mb-3" href="/dashboard/membership/create">Create New Membership</a>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Bulan</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Bulan</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody> 
                    @foreach ($membership as $membership)                        
                    <tr >
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $membership->title }}</td>
                        <td>{{ $membership->bulan }}</td>
                        <td>{{ $membership->harga }}</td>
                        <td>       
                            <a href="/dashboard/membership/{{ $membership->id }}/edit" class="btn btn-warning"><i class="bi bi-eyedropper"></i></a>
                            <form action="/dashboard/membership/{{ $membership->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf                                
                                <button class="btn btn-danger" onclick="return confirm('Delete Membership?')">
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

