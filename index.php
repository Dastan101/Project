<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Guitarhub</title>
    <meta charset="utf8_general_ci">
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/Style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
  </head>
    <body>
      <header>
      
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <center>
                  <?php echo "Hi, ".$login; ?>
                </center>
                <form method="post" enctype="multipart/form-data" action="./uploadPhoto1/toUpload.php">
              <input type="file" name="img" />
              <input type="text" name="id" />
              <input type="submit" value="Send photo to db"/>
            </form>
            <form action="./uploadPhoto1/toShow.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="ids">
    <input type="submit" value="Show" name="show">
  </form>
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
       
          
        </div>
      </div>
    </div>
   
    </header>
    <div class="container">
      <div class="col-sm-6">
        <h1>Registration</h1>
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Имя</label>
            <div class="col-sm-10">
              <input type="text" name="name" class="form-control" id="inputName" placeholder="Имя">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPhone" class="col-sm-2 control-label">Телефон</label>
            <div class="col-sm-10">
              <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="Телефон">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">Отправить</button>
            </div>
          </div>
        </form>  
      </div>
      <div class="col-sm-6">

      </div>
    </div>





    <script src="vendors/jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/common.js"></script>
  </body>
  <?php require_once('homepage - user/homefooter - user.php'); ?>
</html>