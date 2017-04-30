<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script type="text/javascript" src="bootstrap/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<title>Navigation</title>
</head>
<body>
	<div class="login">
		<h1>Login</h1>
		<form method="POST" role="form" action=" {{ route('login') }}">
            {{ csrf_field() }}
			<input id="username" type="text" name="username" placeholder="Username" required autofocus>
			<input id="password" type="password" name="password" placeholder="Password" required="required">
			<button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
		</form>
	</div>
</body>
</html>