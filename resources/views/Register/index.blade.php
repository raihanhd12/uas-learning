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
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../assets/img/aboutus.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="/register" method="POST">
					@csrf
					<span class="login100-form-title" style="color: #3d85c8">
						REGISTER
						<p style="color: white">Register Akun RHDLearning Kamu Sekarang!</p>
					</span>
					
					<div class="wrap-input100">
						<input class="input100 @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name" id="name" required value="{{ old('name') }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="bi bi-person-fill" aria-hidden="true"></i>	
						</span>
							@error('name')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
					</div>

					<div class="wrap-input100" >
						<input class="input100 @error('username') is-invalid @enderror" type="text" name="username" placeholder="Username" id="username" required value="{{ old('username') }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="bi bi-person-fill" aria-hidden="true"></i>							
						</span>
							@error('username')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
					</div>

					<div class="wrap-input100">
						<input class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" id="email" required value="{{ old('email') }}">
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
						<input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" id="password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						@error('password')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Register
						</button>
					</div>
					<div class="text-center p-t-136">
						<a class="txt2" href="/login">
							Sudah Mempunyai Akun? Login
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
	</script>
<!--===============================================================================================-->
	<script src="../assets/js/login.js"></script>
        </div>
    </section>
</main>
@endsection

