<!DOCTYPE html>
<html>
<head>
<title>IT Activities</title>
    <link rel="icon" href="ita.jpg" type="image/x-icon" >
    <link rel="stylesheet" href="style3.css">  

<style>
body {
font-family:  arial;
  background: #e6ffff;
}

* {
  box-sizing: border-box;
}

input[type=text],input[type=number] ,select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid black;
  border-radius:15px;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: lightblue;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


.container {
  border-radius: 5px;
  background-color: #e6ffff;
  padding: 10px;
}

.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
   <nav>
     
      <label class="logo"><img src="ita.jpg" height="50" width="50" style="vertical-align:middle"> IT Activities</label>
      <ul>
        <li><a  href="index.html">Home</a></li>
        <li><a   href="co-curricular.html">Co-curricular</a></li>
        <li><a  href="extracurricular.html">Extra curricular</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a class="active" href="feedback.php">Feedback</a></li>
        <li><a href="adminlogin.php">Admin</a></li>
        <li><a href="signup.php">Sign Up</a></li>
        <li><a href="signin.php">Sign In</a></li>
      </ul>
    </nav>


<div class="container">
  <div style="text-align:center">
    <h2>Give us your feedback</h2>

  </div>
  <div class="row">
    <div class="column">
      <img src="feedback.jpg" height=500px style="width:100%">
    </div>
    <div class="column">
      <form  method="POST">
        <label for="fname">First Name</label>
        <input required type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="rollno">Roll No.</label>
        <input required type="number" id="rollno" name="rollno" placeholder="Your roll no..">
        <label for="subject">Feedback</label>
        <textarea required id="subject" name="subject" placeholder="Type your feedback here...." style="height:170px"></textarea>
        <br><br><br>
        <center><input type="submit" name="submit" value="SUBMIT"  style="height: 45px; width: 250px; font-size: 25px; color: white; background-color: black"></center>
      </form>
    </div>
  </div>
</div>
<?php
if(isset($_POST['submit'])){
    $link=mysqli_connect("localhost","id18127422_root","}T-1KH*fT~qck/>T","id18127422_it");
    $fn=$_POST['firstname'];
    $rol=$_POST['rollno'];
    $quer=$_POST['subject'];
    $re=NULL;
    $r=mysqli_query($link,"SELECT * FROM feedback WHERE fname='$fn' AND rollno='$rol' AND comments='$quer'");
    $c=mysqli_num_rows($r);
    if($c==0){
    $sql="INSERT INTO feedback VALUES('$fn',$rol,'$quer')";
    $re=mysqli_query($link,$sql);}
    if($re){
    echo "<script>alert('Thank you for giving your feedback');</script>";}
}

?>

</body>
</html>