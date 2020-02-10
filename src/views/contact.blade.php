<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<body>
	<h1>Contact US</h1>
	<form method="post">
		@csrf
		<input type="name" name="name">
		<input type="email" name="email">
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>