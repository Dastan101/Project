<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD PHOTO</title>
</head>
<body>
<form method="post" enctype="multipart/form-data" action="toUpload.php">
	<input type="file" name="img" />
	<input type="text" name="id" />
	<input type="submit" value="Send photo to db"/>
</form>
	<hr>
	<form action="toShow.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="ids">
		<input type="submit" value="Show" name="show">
	</form>
	<?php 
		print("arg");
		echo "string";
	 ?>
</body>
</html>