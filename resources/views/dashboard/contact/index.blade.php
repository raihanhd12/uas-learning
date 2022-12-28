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
    <h1 class="mt-4">Contact Us</h1>
    {{-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Lorem, ipsum dolor.</li>
    </ol> --}}
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Contact Us
        </div>
        <div class="card-body ">            
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>message</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>message</th>
                    </tr>
                </tfoot>
                <tbody> 
                    @foreach ($contact as $contact)                        
                    <tr >
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $contact->name }}</td>                        
                        <td>{{ $contact->email }}</td>                        
                        <td>{{ $contact->subject }}</td>                        
                        <td>{{ $contact->message }}</td>                        
                        <td>                            
                            <form action="/dashboard/contact/{{ $contact->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf                                
                                <button class="btn btn-danger" onclick="return confirm('Delete Data?')">
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

