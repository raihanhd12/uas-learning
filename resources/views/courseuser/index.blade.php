<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900|Open Sans:400,600,800');
h1,
h2,
h3,
h4,
h5,
h6,
div,
input,
p,
a {
    font-family: "Open Sans";
    margin: 0px;
}

a,
a:hover,
a:focus {
    color: inherit;
}
.profile-card-4 {
    max-width: 300px;
    background-color: #FFF;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
}

.profile-card-4 img {
    transition: all 0.25s linear;
}

.profile-card-4 .profile-content {
    position: relative;
    padding: 15px;
    background-color: #FFF;
}

.profile-card-4 .profile-name {
    font-weight: bold;
    position: absolute;
    left: 0px;
    right: 0px;
    top: -70px;
    color: #FFF;
    font-size: 17px;
}

.profile-card-4 .profile-name p {
    font-weight: 600;
    font-size: 13px;
    letter-spacing: 1.5px;
}

.profile-card-4 .profile-description {
    color: #777;
    font-size: 12px;
    padding: 10px;
}

.profile-card-4 .profile-overview {
    padding: 15px 0px;
}

.profile-card-4 .profile-overview p {
    font-size: 10px;
    font-weight: 600;
    color: #777;
}

.profile-card-4 .profile-overview h4 {
    color: #273751;
    font-weight: bold;
}

.profile-card-4 .profile-content::before {
    content: "";
    position: absolute;
    height: 20px;
    top: -10px;
    left: 0px;
    right: 0px;
    background-color: rgb(41, 41, 41);
    z-index: 0;
    transform: skewY(3deg);
}

.profile-card-4:hover img {
    transform: rotate(5deg) scale(1.1, 1.1);
    filter: brightness(110%);
}
button[type=submit] { 
  border: 0;
  background: none;
  font-size: 16px;
  padding: 10px 40px;
  
  background: #3d85c8;
  color: #fff;
  transition: 0.3s;
  border-radius: 50px;
  box-shadow: 0px 2px 15px #3d85c8;
}
button[type=submit]:hover {
  background: #3ac162;
}
</style>
@extends('layouts.main')

@section('tampilan')

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2><a style="color: white" href="/home"><b>Home</b> </a>/ My Courses</h2>
    </div>
  </div><!-- End Breadcrumbs -->
  <div class="container my-4"  data-aos="fade-up">

    
      @if (session()->has('success'))  
      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
      </svg>
      <div class="alert alert-success d-flex align-items-center mt-5" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
          {{ session('success') }}
        </div>
      </div>
    @endif
    @if (session()->has('delete'))  
      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
      </svg>
      <div class="alert alert-danger d-flex align-items-center mt-5" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
          {{ session('delete') }}
        </div>
      </div>
    @endif
	<div class="row">
    @if ($courseusers->count())   
        @foreach ($courseusers as $courseuser)   
        <div class="col-md-3">
        <div class="profile-card-4 text-center">
          @if ($courseuser->course->image)
          <div style="max-height : 210px; max-width : 400px; overflow:hidden;">
            <img src="{{ asset('storage/' . $courseuser->course->image) }}" class="img img-responsive">     
          </div>
          @else
          <img src="../../../assets/img/course-1.png" class="img img-responsive" style="max-height: 210px; max-width:400px">               
          @endif          
            <div class="profile-content">
                <div class="profile-name mb-5">{{ $courseuser->course->title}}
                </div>
                <div class="profile-description">{{ $courseuser->course->course_category->name }}
                </div>
                <form action="/course_user/{{ $courseuser->id }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf                                
                  <button class="btn btn-danger" onclick="return confirm('Delete Course?')">
                  <i class="bi bi-trash"></i></button>
              </form>  
                {{-- <div class="progress my-4">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%; background-color:#3d85c8">20 %</div>
                  </div> --}}
                <div class="row">
                    <div class="col-xs-4">
                        <div class="profile-overview">
              <a style="color: white" href="/lesson/{{ $courseuser->course->id }}">
                <button type="submit">Start Lesson</button>
              </a>
              </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        @endforeach
        
        @else
        <p class="text-center fs-4 my-5 pb-5"><br><br>No Course Found<br><br><br></p>
        @endif
	</div>
    {{-- <div class="d-flex justify-content-center">
        {{ $courseusers->links() }}
       </div>   --}}
</div>
<!--===============================================================================================-->	
	<script src="../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
		window.setTimeout(function() {
      $(".alert").fadeTo(1000, 0).slideUp(200, function(){
        $(this).remove(); 
      });
    }, 2000);
	</script>
<!--===============================================================================================-->	
@endsection