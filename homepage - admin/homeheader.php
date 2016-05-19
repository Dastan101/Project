<?php
	$home_path ='Homepage.php'; 
	$lessons_path ='../lessons\Lessons.php';  
	$chords_path = '../Chords\Chords.php';
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
			<!-- Modal -->
			<div class="modal fade" id="myModalmod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
    				<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        					<h4 class="modal-title" id="myModalLabel">Moderator</h4>
      					</div>
      					<div class="modal-body">
        					<ul>
        						<li><input type="checkbox"></input><a href="ForGroupAdmin.php">Group</a></li>
        						<li><input type="checkbox"><a href="ForSingleSingerAdmin.php">Single Singer</a></input></li>
        					</ul>
						</div>
      					<div class="modal-footer">
        					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        					<button type="button" class="btn btn-primary">Save changes</button>
      					</div>
    				</div>
  				</div>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
    				<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
      					</div>
      				<div class="modal-body">
        				<h5>Your FirstName:</h5>
        				<input placeholder="FirstName"></input>
        				<h5>Your LastName:</h5>
        				<input placeholder="LastName"></input>
        				<h5>Your email:</h5>
        				<input placeholder="Example@mail.ru"></input>
        				<h5>Your password:</h5>
        				<input placeholder="Password"></input>
        				<h5>Repeat your password:</h5>
        				<input placeholder="Repeat password"></input>
      				</div>
      				<div class="modal-footer">
        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        				<button type="button" class="btn btn-primary">Save changes</button>
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
					<form action="" class="navbar-form navbar-right">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Name"></input>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password"></input>
					</div>
					<button type="submit" class="btn btn-success"><a href="Login.php">Log in</a></button>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
  							Register
					</button>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalmod">
  							Admin moderator
					</button>
					</form>
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
			</div>
		</header>
