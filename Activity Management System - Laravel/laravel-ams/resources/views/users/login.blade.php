<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" href="/css/login.css">
</head>
<body>
	<!-- Login Form -->
	<div class="login-container">
        @if(Session::has('error'))
            <div class="alert alert-danger" role="alert" >
                {{ Session::get('error') }}
            </div>
        @endif
		<h1>Login</h1>
        <p>Input your login details.</p>
		<form action="{{ route('login') }}" method="POST">
        @csrf
			<input type="text" placeholder="Username" id="username" name="username" required>
			<input type="password" placeholder="Password" id="password" name="password" required>
			<button type="submit">Login</button><br>
            <label>Dont have an account yet?</label>
            <a href="signup">Signup</a>
		</form>
	</div>
</body>
</html>