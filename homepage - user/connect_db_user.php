
<?php 
  if(isset($_POST["loginButton"])){
      $login = $_POST["login"];
      $password1 = $_POST["password1"];
      $sql = "SELECT * FROM users WHERE login = '$login' and password1 = '$password1'";
      $result = $connect->query($sql);
      if (isset($result->num_rows)) {
            if ($result->num_rows>0) {
                 echo "<!-- Large modal -->
                 <div class='navbar-form navbar-right'>
                 <button type='button' class='btn btn-warning' data-toggle='modal' data-target='.bs-example-modal-lg'>Your profile</button></div>";
                 @$_SESSION["login"] === TRUE;
            }else{
                echo "string";
             }
      }
        

    }else{
 ?>
<form method="post" class="navbar-form navbar-right">
  <div class="form-group">
    <input id="user" name="login" type ="text" class="form-control" placeholder="Login" size="15" maxlength="15">
  </div>
  <div class="form-group">
    <input id = "password1" name="password1" type="password" class="form-control" placeholder="Password" size="15" maxlength="15">
  </div>
  <button name="loginButton" type="submit" class="btn btn-primary" onsubmit="login()">Login</button>
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
              Register
          </button>
</form>

<?php } ?>
<script type="text/javascript">
    function login(){
     var user = document.getElementById('user').value;
     var pass = document.getElementById('password1').value;
     if(user == 'Login' && pass == 'Password'){
        window.open("Reguser.php");
     }
     else{
        alert("NO!");
     }
    }
</script>