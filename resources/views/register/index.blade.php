<!DOCTYPE html>
<html>
<head>
	<title>{{$title}}</title>
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
			<form action="/register" method="post">
                @csrf
				<img src="../assets/img/avatar.svg">
				<h2 class="title">Form Register</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Name</h5>
           		   		<input type="text" name="name"  class="input @error('name')
                        is-invalid @enderror" id="name" required> 
           		   </div>
                   @error('name')
                   <div class="invalid-feedback">
                    {{$message}}
                   </div>
                   @enderror
           		</div>
                <div class="input-div email">
                    <div class="i"> 
                         <i class="fas fa-heart"></i>
                    </div>
                    <div class="div">
                         <h5>Email</h5>
                         <input type="text" name="email"  class="input @error('email')
                        is-invalid @enderror" id="email" required > 
                 </div>
                 @error('email')
                 <div class="invalid-feedback">
                    {{$message}}
                   </div>
                 @enderror
              </div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password"  class="input @error('password')
                        is-invalid @enderror" id="password" required> 
            	   </div>
                   @error('password')
                   <div class="invalid-feedback">
                    {{ $message }}
                   </div>
                   @enderror
            	</div>
                Already Register?<a href="/login"> Go login</a>
            	<input type="submit" class="btn" value="Sign Up">
				
            </form>
			
        </div>
    </div>
    <script type="text/javascript" src="../assets/js/main.js"></script>
</body>
</html>
