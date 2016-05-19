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
		<link rel="stylesheet" type="text/css" href="css/Style.css">


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
        				<h4>The information of group:</h4>
        				<ul>
        					<p>Put pictures for slide show here</p>
        					<li>The name of group<br><input placeholder="Name of group"></input></li>
        					<li>Group participant's biography:
        					<ul>
        						<li>Participant #1<br>
        						<p>Put picture of P#1</p>
        						<input type="text" placeholder="Biography"></input></li>
        						<li>Participant #2<br>
        						<p>Put picture of P#2</p>
        						<input type="text" placeholder="Biography"></input></li></li>
        						<li>Participant #3<br>
        						<p>Put picture of P#3</p>
        						<input type="text" placeholder="Biography"></input></li></li>
        						<li>Participant #4<br>
        						<p>Put picture of P#4</p>
        						<input type="text" placeholder="Biography"></input></li></li>
        					</ul>
        					</li>
        					<li>Album<br><p>Put image</p></li>
        					<li>Song<br>Put songs</li>
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
				<a href="Guitarlesson1.php" class="navbar-brand">GuitarHub</a>
			</div>
			<div class="collapse navbar-collapse col-sm-2 col-md-2" id="content">
				
				<ul class="nav navbar-nav">
					
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Start here<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="dropdown-header"><a href="Lessons.php">Lessons</a></li>
							<li class="dropdown-header"><a href="Chords.php">Chords</a></li>
							<li class="dropdown-header"><a href="#">Accessories</a></li>
						</ul>
					</li>
					
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a> <ul class="dropdown-menu">
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
				<button type="submit" class="btn btn-primary"><a href="Login.php">Log in</a></button>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
  						Register
				</button>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalmod">
  						Admin moderator
				</button>
			</form>
			<!-- Button trigger modal -->



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

	<!-- carousel -->
	<div class="container">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			   <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="Beatles.jpg" alt="image">
			      <div class="carousel-caption">
			        ...
			      </div>
			    </div>
			    <div class="item">
			      <img src="Beatles1.jpg" alt="image">
			      <div class="carousel-caption">
			        ...
			      </div>
			    </div>
			    <div class="item">
			      <img src="Beatles2.jpg" alt="image">
			      <div class="carousel-caption">
			        ...
			      </div>
			    </div>
			    ...
			  </div>
				<!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			<!-- \\\\\\\\\\\\\\\\\\\ -->
			<div class="row">
				<div class="col-md-3">
					<div class="well">
						The Beatles were an English rock band, formed in Liverpool in 1960. With members John Lennon, Paul McCartney, George Harrisson and Ringo Starr, they became widely regarded as the foremost and most influential act of the rock era.[1] Rooted in skiffle, beat, and 1950s rock and roll, the Beatles later experimented with several genres, ranging from pop ballads and Indian music to psychedelia and hard rock, often incorporating classical elements in innovative ways. In the early 1960s, their enormous popularity first emerged as "Beatlemania", but as the group's music grew in sophistication, led by primary songwriters Lennon and McCartney, they came to be perceived as an embodiment of the ideals shared by the counterculture of the 1960s.
					</div>
				</div>

				<div class="col-md-9">
					<div class="well">
						<img src="Betconcert.jpg" class="img-responsive img-rounded">
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="well">
					<p>John Lennon</p>
					<img src="JN.jpg" class="img-responsive img-rounded">
					</div>
				</div>

				<div class="col-md-9">
					<div class="well">
						<p>John Winston Ono Lennon, MBE (born John Winston Lennon; 9 October 1940 – 8 December 1980) was an English singer and songwriter who rose to worldwide fame as a co-founder of the band the Beatles, the most commercially successful band in the history of popular music. With fellow member Paul McCartney, he formed a celebrated songwriting partnership.
							Born and raised in Liverpool, Lennon became involved in the skiffle craze as a teenager; his first band, the Quarrymen, evolved into the Beatles in 1960. When the group disbanded in 1970, Lennon embarked on a solo career that produced the critically acclaimed albums John Lennon/Plastic Ono Band and Imagine, and iconic songs such as "Give Peace a Chance", "Working Class Hero", and "Imagine". After his marriage to Yoko Ono in 1969, he changed his name to John Ono Lennon. Lennon disengaged himself from the music business in 1975 to raise his infant son Sean, but re-emerged with Ono in 1980 with the new album Double Fantasy. He was murdered three weeks after its release.Lennon revealed a rebellious nature and acerbic wit in his music, writing, drawings, on film and in interviews. Controversial through his political and peace activism, he moved to Manhattan in 1971, where his criticism of the Vietnam War resulted in a lengthy attempt by Richard Nixon's administration to deport him, while some of his songs were adopted as anthems by the anti-war movement and the larger counterculture.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="well">
						<p>Paul Mccartney</p>
						<img src="PM.jpg" class="img-responsive img-rounded">
					</div>
				</div>
				<div class="col-md-9">
					<div class="well">
						<p>Sir James Paul McCartney, MBE (born 18 June 1942) is an English singer-songwriter, multi-instrumentalist, and composer. With John Lennon, George Harrison, and Ringo Starr, he gained worldwide fame as the bassist of the rock band the Beatles, one of the most popular and influential groups in the history of pop music; his songwriting partnership with Lennon is one of the most celebrated of the 20th century. After the band's break-up, he pursued a solo career and formed Wings with his first wife, Linda, and Denny Laine.
						McCartney has been recognised as one of the most successful composers and performers of all time, with 60 gold discs and sales of over 100 million albums and 100 million singles of his work with the Beatles and as a solo artist.[2] More than 2,200 artists have covered his Beatles song "Yesterday", more than any other copyrighted song in history. Wings' 1977 release "Mull of Kintyre" is one of the all-time best-selling singles in the UK. A two-time inductee into the Rock and Roll Hall of Fame (as a member of the Beatles in 1988, and as a solo artist in 1999),[3] and a 21-time Grammy Award winner (having won both individually and with the Beatles), McCartney has written, or co-written 32 songs that have reached number one on the Billboard Hot 100, and as of 2014 he has sold more than 15.5 million RIAA-certified units in the United States. McCartney, Lennon, Harrison and Starr received MBEs in 1965, and in 1997, McCartney was knighted for his services to music.</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-3">
					<div class="well">
						<p>Ringo Starr</p>
						<img src="RS.jpg" class="img img-responsive">
					</div>
				</div>
				<div class="col-md-9">
					<div class="well">
						<p>Richard Starkey,[2] MBE (born 7 July 1940), known professionally as Ringo Starr, is an English musician, singer, songwriter and actor who gained worldwide fame as the drummer for the Beatles. He occasionally sang lead vocals, usually for one song on an album, including "With a Little Help from My Friends", "Yellow Submarine" and their cover of "Act Naturally". He also wrote the Beatles' songs "Don't Pass Me By" and "Octopus's Garden", and is credited as a co-writer of others, including "What Goes On" and "Flying".
						Starr was twice afflicted by life-threatening illnesses during childhood, and as a result of prolonged hospitalisations fell behind in school. In 1955, he entered the workforce and briefly held a position with British Rail before securing an apprenticeship at a Liverpool equipment manufacturer. Soon afterwards, he became interested in the UK skiffle craze, developing a fervent admiration for the genre. In 1957, he cofounded his first band, the Eddie Clayton Skiffle Group, which earned several prestigious local bookings before the fad succumbed to American rock and roll by early 1958.
						When the Beatles formed in 1960, Starr was a member of another Liverpool group, Rory Storm and the Hurricanes. After achieving moderate success with that band in the UK and Hamburg, he quit the Hurricanes and joined the Beatles in August 1962, replacing Pete Best. Starr played key roles in the Beatles' films and appeared in numerous others. After the band's break-up in 1970, he released several successful singles including the US number four hit "It Don't Come Easy", and number ones "Photograph" and "You're Sixteen". </p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-3">
					<div class="well">
						<p>George Harrison</p>
						<img src="GH.jpg" class="img img-responsive">
					</div>
				</div>

				<div class="col-md-9">
					<div class="well">
						<p>George Harrison,[nb 1] MBE (25 February 1943 – 29 November 2001) was an English guitarist, singer, songwriter, and music and film producer who achieved international fame as the lead guitarist of the Beatles. Often referred to as "the quiet Beatle",[3][4] Harrison embraced Indian mysticism and helped broaden the horizons of his fellow Beatles as well as their Western audience by incorporating Indian instrumentation in their music.[5] Although the majority of the Beatles' songs were written by John Lennon and Paul McCartney, most Beatles albums from 1965 onwards contained at least two Harrison compositions. His songs for the group included "Taxman", "Within You Without You", "While My Guitar Gently Weeps", "Here Comes the Sun" and "Something", the last of which became the Beatles' second-most covered song.
						Harrison's earliest musical influences included George Formby and Django Reinhardt; Carl Perkins, Chet Atkins and Chuck Berry were subsequent influences. By 1965 he had begun to lead the Beatles into folk rock through his interest in the Byrds and Bob Dylan, and towards Indian classical music through his use of the sitar on "Norwegian Wood (This Bird Has Flown)". Having initiated the band's embracing of Transcendental Meditation in 1967, he subsequently developed an association with the Hare Krishna movement. After the band's break-up in 1970, Harrison released the triple album All Things Must Pass, a critically acclaimed work that produced his most successful hit single, "My Sweet Lord", and introduced his signature sound as a solo artist, the slide guitar. He also organised the 1971 Concert for Bangladesh with Indian musician Ravi Shankar, a precursor for later benefit concerts such as Live Aid. In his role as a music and film producer, Harrison produced acts signed to the Beatles' Apple record label before founding Dark Horse Records in 1974 and co-founding HandMade Films in 1978.</p>
					</div>
				</div>
			</div>
			
	

				
	
	
	
	<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>