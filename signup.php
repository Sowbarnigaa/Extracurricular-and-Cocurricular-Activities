<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head><title>IT Activities</title>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="signup2.css">
    <link rel="stylesheet" href="style3.css">  
      <link rel="icon" href="ita.jpg" type="image/x-icon" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.google.com/icons?selected=Material%20Icons%20Outlined%3Avisibility%3A">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
<script>


$("body").on('click', '.toggle-password', function() {
      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $("#pass_log_id");
      if (input.attr("type") === "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    
    });
    function visibility3() {
      var x = document.getElementById('login_password');
      if (x.type === 'password') {
        x.type = "text";
        $('#eyeShow').show();
        $('#eyeSlash').hide();
      }else {
        x.type = "password";
        $('#eyeShow').hide();
        $('#eyeSlash').show();
      }
    }

    function visibility4() {
      var x = document.getElementById('c_login_password');
      if (x.type === 'password') {
        x.type = "text";
        $('#eyeShow').show();
        $('#eyeSlash').hide();
      }else {
        x.type = "password";
        $('#eyeShow').hide();
        $('#eyeSlash').show();
      }
    }

    var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };

function check()
{

    var mobile = document.getElementById('mobile');
    var message = document.getElementById('message');


  
    if(mobile.value.length!=10){
       
        message.style.color = "crimson";
        message.innerHTML = "Enter a valid 10 digit mobile number"
    }

    else{
       
        message.style.color = "crimson";
        message.innerHTML = ""
    }
    
}
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

function check_pwd()
{

    var pwd = document.getElementById('login_password').value;
    var c_pwd = document.getElementById('c_login_password').value;
    var pass=document.getElementById("pass");
    if(pwd!=c_pwd)
    {
        pass.style.color = "crimson";
        pass.innerHTML = "Passwords do not match"
    }
    else{
      pass.style.color = "crimson";
        pass.innerHTML = ""
    }
    
}
 
</script>

   </head>
<body>
<nav>
     
      <label class="logo"><img src="ita.jpg" height="50" width="50" style="vertical-align:middle"> IT Activities</label>
      <ul>
        <li><a  href="index.html">Home</a></li>
        <li><a   href="co-curricular.html">Co-curricular</a></li>
        <li><a  href="extracurricular.html">Extra curricular</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="adminlogin.php">Admin</a></li>
        <li><a class="active" href="signup.php">Sign Up</a></li>
        <li><a href="signin.php">Sign In</a></li>
      </ul>
    </nav>
    <br><br>
  <div class="container">
    <div class="title">Sign Up</div>
    <div class="content">
      <form  method="post"  enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="fname" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" id="un" name="uname" onkeyup="em()"placeholder="Enter your University e-mail" required><span id="mes"></span>
          </div>
          <div class="input-box">
            <span class="details">Register Number</span>
            <input type="number" placeholder="Enter your register number" name="reg" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" id="mobile" onkeyup="check()" placeholder="Enter your number" name="phone" required><span id="message"></span>
          </div>
          <div class="input-box">
            <span class="details">DOB</span>
            <input type="date" name="date" required>
          </div>
          <div class="input-box">
            <span class="details">City</span>
            <input type="text" placeholder="Enter your city"  name="city" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" class="form-control pwd" id="login_password" placeholder="Enter your password" name="password" required>
           <i style="cursor:pointer;" onclick="visibility3()" class="material-icons">visibility</i>
                Show password</div>
            
          <div style="margin-left:27px;" class="input-box">
            <span class="details">Confirm Password</span>
            <input onkeyup="check_pwd()" class="form-control pwd" type="password" id="c_login_password" placeholder="Confirm your password" required>
            <i style="cursor:pointer;" onclick="visibility4()" class="material-icons">visibility</i>
            Show password</div>
          <span id="pass"></span>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="Male" id="dot-1">
          <input type="radio" name="gender" value="Female" id="dot-2">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
         </div>
          </div>
          <div class="input-box">
            <span class="details">Upload profile picture</span>
          <input required type="file" class="choose"  name="files" onchange="loadFile(event)">
          
          </div>
        <div class="button">
          <input type="submit"  name="submit" value="Sign Up">
        </div>
      </form>
      <div>
        Already have an account? <a style="color:blue;" href="signin.php">Login</a>
      </div>
    </div>
  </div>
 </div>
<?php
if(isset($_POST['submit'])){
  $reg=$_POST['reg'];
  $name=$_POST['fname'];
  $un=$_POST['uname'];
  $ph=$_POST['phone'];
  $dob=$_POST['date'];
  $cty=$_POST['city'];
  $pas=$_POST['password'];
  $gen=$_POST['gender'];
  $image=$_FILES['files']['tmp_name'];
  $link=mysqli_connect("localhost","id18127422_root","}T-1KH*fT~qck/>T","id18127422_it");
  $imgContent = addslashes(file_get_contents($image));
  $sql=mysqli_query($link,"SELECT * FROM student WHERE reg='$reg'");
$c=mysqli_num_rows($sql);
if($c==0){
  $query="INSERT INTO student(reg,name,email,phone,dob,city,password,gender,image,uploaded) VALUES ('$reg','$name','$un','$ph','$dob','$cty','$pas','$gen','$imgContent',NOW());";
  mysqli_query($link,$query);
  echo "<script>alert('Registered successfully!!!')</script>";
  echo "<script>window.open('signin.php','_self');</script>";
}

else{
  echo "<script>alert('You already have a account!! Try logging in..')</script>";
  
}
}
?>
</body>
</html> 