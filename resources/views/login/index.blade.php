<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<img class="wave" src="../assets/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="../assets/img/bg.svg">
		</div>
		<div class="login-content">
			
			<form action="/login" method="post">
				@csrf
				@if(session()->has('success'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					{{ session('success') }}
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				@endif

				@if(session()->has('loginError'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					{{ session('loginError') }}
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				@endif
				<img src="../assets/img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" class="input @error('email') is-invalid @enderror" name="email" id="email" autofocus required value="{{old('email')}}">
						@error('email')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password" id="password" required>
            	   </div>
            	</div>
				<a href="#">Forgot Password?</a>
				<a href="/register"> Register Now</a>
            	<input type="submit" class="btn" value="Login">
				
            </form>
			
        </div>
    </div>
    <script type="text/javascript" src="../assets/js/main.js"></script>
</body>
</html>
