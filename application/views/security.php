<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Security</title>
</head>
<body>

<div id="container">
	<h1>Security page</h1>

	<div id="body">
		<form method="POST" action="<?php echo base_url(); ?>SecurityControllers/security">
			<input type="text" name="login">
			<input type="password" name="mp">
			<button>Ok</button>
		</form>
	</div>

	
</div>

</body>
</html>