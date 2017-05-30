<?php 
if(isset($_POST['submit']))
 {
  $connect = mysqli_connect ("localhost", "root", "", "userform");
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "INSERT INTO accounttb VALUES('','$username', '$password')";
  mysqli_query($connect, $sql);
  echo '<h2>Hello! '.$username.'</h2> ';
}
else
 echo '<h2>Create Account</h2>'
?>
<!DOCTYPE html>
<html>
<head>
  <!-- <title>User Password Basic Exam</title>   -->
 <meta charset="utf-8">
 <meta name="userform" content="basic-exam">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
 <link rel="stylesheet" type="text/css" href="css/style.css ">
</head>
<body>

  <div class = "container">
      <form class="form-signin action="index.php" method="post" ">     
        <input type="text" id="username" class="form-control" name="username" placeholder="Username" required>
        <input type="password" id="password" class="form-control" name="password" placeholder="Password" minlength="5" required>
        <div class="checkbox">
        <label><input type="checkbox" value="remember-me"> Remember me</label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" value="submit" name="submit">Submit</button>
      </form>
  </div>


<!-- Script Section -->
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src = "js/bootstrap.js"></script>
<!-- End of Script Section -->

</body>
</html>