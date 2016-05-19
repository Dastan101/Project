<?php 
$home_path="Homepage - user.php";
$lessons_path = "../lessons - user/Lessons - user.php";
$chords_path = "../chords/Chords - user.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Guitarhub</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	    <meta charset="utf8_general_ci">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/Style.css">
	</head>
	<body>
		<header>
			<?php require_once ('connect_db.php');
			require_once ('connect_db_user.php');
			 ?>
			
			<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  				<div class="modal-dialog modal-lg">
    				<div class="modal-content">
    					<center>
      						<?php echo "Hi, ".$login; ?>
      						<a href="create.php" class="btn btn-warning">Create Tutorial</a>
      					</center>
      					<form method="post" enctype="multipart/form-data" action="uploadPhoto1/toUpload.php">
						<input type="file" name="img" />
						<input type="text" name="id" />
						<input type="submit" value="Send photo to db"/>
						</form>
						<hr>
	<form action="uploadPhoto1/toShow.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="ids">
		<input type="submit" value="Show" name="show">
	</form>
	<?php 
		print("arg");
		echo "string";
	 ?>
      					
    				</div>
  				</div>
			</div>
		<!-- Navbar -->
		<div class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#content">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="<?= $home_path; ?>" class="navbar-brand">GuitarHub</a>
				</div>
				<div class="collapse navbar-collapse col-sm-2 col-md-2" id="content">
					<ul class="nav navbar-nav">
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Start here<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="dropdown-header"><a href="<?= $lessons_path; ?>">Lessons</a>
								</li>
								<li class="dropdown-header"><a href="<?= $chords_path ?>">Chords</a></li>
								<li class="dropdown-header"><a href="#">Accessories</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a> 
							<ul class="dropdown-menu">
								<li class="dropdown-header"><a href="#">Guitar</a></li>
								<li class="dropdown-header"><a href="#">Legends</a></li>
								<li class="dropdown-header"><a href="#">Importance</a></li>
							</ul>
						</li>
						<li><a href="#">Gallery</a></li>
					</ul>
				</div>
				<div class="col-sm-7 col-md-7">
					<?php include('connect_db_user.php') ?>
					
				</div>
			</div>
		</div>
		<!-- title of my page -->
		<div class="jumbotron">
			<div class="container">
				<h1>Music for joy</h1>
				<hr>
				<h2>by Beatles</h2>
			</div>
		</header>
