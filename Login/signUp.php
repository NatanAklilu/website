<!DOCTYPE html>
<html>

  <head>
    <title>Create Account</title>
    <link rel="stylesheet" href="main.css">

  <head>

  <body>
    <form method="post" action="signup.php">
      <h1>Login</h1>
      <b>Create username:</b>
      <div class="textBoxdiv">
        <input type="text" placeholder="Username" name="username">
      </div>
      <b>Create password:</b>
      <div class=textBoxdiv>
        <input type="password" placeholder="Password" name="password">
      </div>
      <b>Confirm password:</b>
      &nbsp;
      <div class=textBoxdiv>
        <input type="password" placeholder="Retype password" name="password">
      </div>
      <input type="submit" value="Create" class="loginBtn" name="login_Btn">
    </form>
  </body>

</html>

<!-- Sign Up page that inserts username and password into database -->

<?php
$conn = mysqli_connect("localhost", "root", "");
if(isset($_POST['login_Btn']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM websitelogin.logindetails WHERE username='$username'";
  $result = mysqli_query($conn, $sql);
  while($row=mysqli_fetch_assoc($result)){
    $resultPassword = $row['password'];
    if($resultPassword == $password){
      header('Location:loginGreen.php');
    }else{
      echo "<script>  
          alert('Incorrect username/password. Please try again.');
      </script>";
    }
  }
}
?>