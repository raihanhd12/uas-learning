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
    <h1 class="mt-4">Section Lesson</h1>
    {{-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Lorem, ipsum dolor.</li>
    </ol> --}}
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Section Lesson
        </div>
        <div class="card-body ">
            <a class="btn btn-primary mb-3" href="/dashboard/section/create">Create New Section</a>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Section Name</th>
                        <th>Course Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Section Name</th> 
                        <th>Course Name</th>                       
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody> 
                    @foreach ($section as $section)                        
                    <tr >
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $section->title }}</td>                        
                        <td>{{ $section->course->title }}</td>                        
                        <td>                            
                            <a href="/dashboard/section/{{ $section->id }}/edit" class="btn btn-warning"><i class="bi bi-eyedropper"></i></a>
                            <form action="/dashboard/section/{{ $section->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf                                
                                <button class="btn btn-danger" onclick="return confirm('Delete Section?')">
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

