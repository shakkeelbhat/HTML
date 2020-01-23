<!doctype html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Post Email</title>
</head>
<body>
	<?php
		$myEmailAddress='abc&gmail.com';
		$subject='From Website';
		$name=$_POST['Name'];
		$email=$_POST['Email'];
		$message=$_POST['message'];
		$header='from: $name <$email>';

		mail($myEmailAddress,$subject,$message,$header);

	?>
	<p>Thanks for your interest</p>
</body>
</html>