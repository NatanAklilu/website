<!DOCTYPE html>
<html>

  <head>
    <title>Login</title>
    <link rel="stylesheet" href="main2.css">

  <head>

  <body>
    <form method="post" action="loginGreen.php">
      <h1>Login</h1>
      <div class="textBoxdiv">
        <input type="text" placeholder="Username" name="username">
      </div>
      <div class=textBoxdiv>
        <input type="password" placeholder="Password" name="password">
      </div>
      <input type="submit" value="Login" class="loginBtn" name="login_Btn">
      <div class="success">
        Login Successful!
        <br> 
        Redirecting to home page...
      <div>
    </form>
  </body>

</html>

<!-- This portion redirects user to homepage -->

<script>
  setTimeout(function(){
    window.location.href = "Website/homepage.php?page=home";
  }, 2000);
</script>

<!-- Old code that checks for user and pass again -->

<!-- <?php
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
      header('Location:website/homepage.php');
    }else{
      echo "<script>  
          alert('Incorrect username/password. Please try again.');
      </script>";
    }
  }
}
?> -->