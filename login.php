<html>
<head>
	<title>login page</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="./login_check.php">
		<div>
			<label for="id">ID </label>
			<input type="text" name="id"/>
		</div>
		<div>
			<label for="pw">PW</label>
			<input type="password" name="pw"/>
		</div>

		<div class="button">
			<button type="submit"> login </button>
		</div>
	</form>
	<button onclick="location.href='signup.php'"> sign up </button>
</body>
<html>