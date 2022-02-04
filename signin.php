
<!DOCTYPE html>
<title>IT Activities</title>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style3.css"> 
      <link rel="icon" href="ita.jpg" type="image/x-icon" >
    <script>
      function em()
{

    var un=document.getElementById("un").value;
  var n = un.includes(".");
  var m = un.includes("@");
 var mes = document.getElementById('mes');

if (n.toString()=="true" && m.toString()=="true"){
mes.style.color = "crimson";
mes.innerHTML = ""}

if (n.toString()=="false" || m.toString()=="false"){
mes.style.color = "crimson";
mes.innerHTML = "Invalid email id"}

}
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Login Form | CodingLab</title> -->
    <link rel="stylesheet" href="signin2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body >
    <nav>
     
      <label class="logo"><img src="ita.jpg" height="50" width="50" style="vertical-align:middle"> IT Activities</label>
      <ul>
        <li><a  href="index.html">Home</a></li>
        <li><a   href="co-curricular.html">Co-curricular</a></li>
        <li><a  href="extracurricular.html">Extra curricular</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="adminlogin.php">Admin</a></li>
        <li><a href="signup.php">Sign Up</a></li>
        <li><a class="active"  href="signin.php">Sign In</a></li>
      </ul>
    </nav>
    <div class="container">
      <div class="wrapper">
        <div class="title" style="background:#0073e6"><span>Login</span></div>
        <form method="post"  enctype="multipart/form-data">
          <div class="row">
            <i class="fas fa-user" style="background:#0073e6"></i>
            <input type="text" id="un" onkeyup="em()" name="uname" placeholder="Enter University email" required>
          </div>
          
          <div class="row">
            <i class="fas fa-lock" style="background:#0073e6"></i>
            <input type="password" name="password" placeholder="Password" required>
          </div>
          <!--<div class="pass"><a href="#">Forgot password?</a></div>-->
          <div class="row button">
            <input type="submit" style="background:#0073e6" name="submit" value="Login">
          </div>
          <span id="mes"></span>
          <div class="signup-link">Don't have an account? <a href="signup.php">Sign Up</a></div>
        </form>
      </div>
    </div>
<?php
if(isset($_POST['submit'])){
 $un=$_POST['uname'];
 $pw=$_POST['password'];
 $link=mysqli_connect("localhost","id18127422_root","}T-1KH*fT~qck/>T","id18127422_it");
 $sql=mysqli_query($link,"SELECT * FROM student WHERE email='$un'");
 $c=mysqli_num_rows($sql);
 if($c==0){
    echo "<script>alert('Username not found!!!')</script>";
 }
 else {
  $row=mysqli_fetch_array($sql);
  if($row['password']!=$pw){
     echo "<script>alert('Invalid password')</script>";
 }
else{
  session_start();
   $_SESSION['reg']=$row['reg'];
   #echo "<script>window.open('profile.php')</script>";
   header('location: profile.php');
}}
 
}

exit;
 ?>
</body>
</html>