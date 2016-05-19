<?php
	$home_path ='../homepage - user\Homepage - user.php'; 
	$lessons_path ='Lessons - user.php';  
	$chords_path = '../Chords - user\Chords - user.php';
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Guitarhub</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/Style.css">
	</head>
	<body>
		<header>
			<!-- Modal-Registration -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
    				<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        				<h4 class="modal-title" id="myModalLabel">Registration</h4>
      					</div>
      				<div class="modal-body">
      					<form action="save_user.php" method="post" >
        					<h5>Your Login:</h5>
        					<input name="login"  placeholder="Example" size="15" maxlength="15"></input>
        					<h5>Your password:</h5>
        					<input name="password" type="password" placeholder="Password" size="15" maxlength="15"></input>

        				</form>
      				</div>
      				<div class="modal-footer">
        				<form action="save_user.php" method="post">
        					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
        				</form>
        			</div>
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
					<form action="testreg.php" method="post" class="navbar-form navbar-right">
						<div class="form-group">
							<input type ="text" class="form-control" placeholder="Login" size="15" maxlength="15"></input>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" size="15" maxlength="15"></input>
						</div>
						<button type="submit" name="submit" class="btn btn-primary">Login</button>
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
  							Register
						</button>
					</form>
					<?php 
						$notregistered = '';
						if(empty($_SESSION['login']) or empty($_SESSION['id'])){
							echo "I are not registered yet,thus you can entry as <a href = '#'>guest</a>";
						}
						else{
							echo "You entered as name and surname";
						}
					 ?>
				</div>
			</div>
		</div>
		<!-- title of Lessons -->
		<div class="jumbotron">
			<div class="container">
				<h1>Let's Shake Strings!</h1>
				<hr>
				<h2>Lessons</h2>
			</div>
		</div>
		</header>
