<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Signup Page</title>
	<link rel="stylesheet" href="css/signup.css">
</head>
<body>
	<!-- Sign Up Form -->
	<div class="signup-container">
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
        @endif
		<h1>Sign Up</h1>
        <p>Fill out the form bellow.</p>
		<form action="{{ route('signup') }}" method="POST">
            @csrf
			<input type="text" placeholder="id number: 20000000" id="student_number" name="student_number" required>
			<input type="text" placeholder="Username" id="username" name="username" required>
			<input type="password" placeholder="Password" id="password" name="password" required>
			<button type="submit">Sign Up</button><br>
            <label>Already have an account?</label>
            <a href="login">Login</a>
		</form>
	</div>
</body>
</html>