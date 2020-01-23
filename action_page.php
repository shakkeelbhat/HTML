<html>
	<head>
		<title>PHP Action</title>
	</head>

	<body>
		<?php
		$myFile=fopen('newfile.txt','a+') or die('Unable to store name');
		fwrite($myFile,$_POST['Name']);
		fwrite($myFile,',');
		fwrite($myFile,$_POST['Email']);
		fwrite($myFile,'\n');
		fclose($myFile);
		?>
		<p>Thanks for your Submission</p>
	</body>
</html>