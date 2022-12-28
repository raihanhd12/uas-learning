<!--===============================================================================================-->	
    <link rel="icon" type="image/png" href="../assets/img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/ vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
<!--===============================================================================================-->

@extends('layouts.main')
@section('tampilan')
<main id="main">
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
	<div class="limiter">
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

	  @if (session()->has('loginError'))  
          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
          </svg>
          <div class="alert alert-danger d-flex align-items-center mt-5" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
              {{ session('loginError') }}
            </div>
          </div>
          @endif  

	  @if (session()->has('loginAuten'))  
          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
          </svg>
		  <div class="alert alert-warning d-flex align-items-center mt-5" role="alert">
			<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
			<div>
				{{ session('loginAuten') }}
			</div>
		  </div>
          @endif    
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../assets/img/logonavfix2.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="/login" method="POST">
					@csrf
					<span class="login100-form-title" style="color: #3d85c8">
						LOGIN
						<p style="color: white">Masukkan Data Login yang Valid!</p>
					</span>

					<div class="wrap-input100">
						<input class="input100  @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email" id="email" autofocus required value="{{ old('email') }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						@error('email')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>

					<div class="wrap-input100">
						<input class="input100" type="password" name="password" placeholder="Password" id="password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<input class="input100 @error('is_status') is-invalid @enderror" type="hidden" name="is_status" placeholder="is_status" id="is_status" value="0" required>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
					<div class="text-center p-t-136">
						<a class="txt2" href="/register">
							Not Registered? <b>Create Account</b>
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/vendor/bootstrap/js/popper.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
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
	<script src="../assets/js/login.js"></script>
        </div>
    </section>
</main>
@endsection

