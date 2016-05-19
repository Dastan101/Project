<?php 
    
    $connect = mysqli_connect("localhost","root","","guitarhub");
    if (mysqli_connect_error()) {
        echo "Failed to connect".mysqli_connect_error();
    }

    if (isset($_POST["submit"])) {
        $login = $_POST['login'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        if(strlen($login)==0 || strlen($name)==0 || strlen($surname)==0 || strlen($email)==0){
            echo "Fill your info";
          }
       else if(strlen($password1)==0 || strlen($password2)==0)
          echo "Fill password1 ";
      else if ($password1 != $password2) 
          echo "Not right password";
      else{
            $sql = "INSERT INTO users(login,name,surname,email,password1,password2) VALUES ('" . $login . "','" . $name . "','" . $surname . "','" . $email . "','" . $password1 . "','" . $password2 ."')";
            if ($connect->query($sql) === TRUE) {
                echo "<p class='par'>Hey</p>
                      <script>
                        document.getElementById('par').innerHTML='hok';  
                      </script>";
            }
            else{
                echo ("Error:" . $sql . "<br>" . mysql_error());
            }
            $connect -> close();
        }
    }
    else{ 
?>
  <!-- Modal-Registration -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
             <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Registration</h4>
             </div>
      <div class="modal-body">
         <form method="post">
              <div class="form-group">
              <label for = "login" class="cos-sm-2 control-label">Your Login:</label><br>
              <input id="login" name="login" type="text" placeholder="Login"><br>
              </div>
              <div class="form-group">
              <label for = "name" class="cos-sm-2 control-label">Your Name:</label><br>
              <input id="name" name="name" type="text" placeholder="Name"><br>
              </div>
              <div class="form-group">
              <label for = "surname" class="cos-sm-2 control-label">Your Surname:</label><br>
              <input id="surname" name="surname" type="text" placeholder="Surname"><br>
              </div>
              <div class="form-group">
              <label for = "email" class="cos-sm-2 control-label">Your Email:</label><br>
              <input id="email" name="email" type="email" placeholder="Email"><br> 
              </div>
              <div class="form-group">
              <label for = "password1" class="cos-sm-2 control-label">Your Password:</label><br>
              <input id="password1" name="password1" type="text" placeholder="Password"><br>
              </div>
              <div class="form-group">         
              <label for = "password2" class="cos-sm-2 control-label">Re-Password:</label><br>
              <input id="password2" name="password2" type="text" placeholder="Re-password"><br>
              </div>
              <input type="file" name = "img"/><br>
              <input type="text" name ="id" /><br>
              <input type="submit" value="Send photo" />
      </div>
      <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
               <button  type="submit" class="btn btn-success" name="submit">
                    Submit
               </button>
          </form>
        </div>
    </div>
  </div>
</div>

<?php }?>