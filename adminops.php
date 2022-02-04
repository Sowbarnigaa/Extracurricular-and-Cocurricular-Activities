<html><title>IT Activities</title>
<head>
     <link rel="stylesheet" href="style3.css"> 
     <link rel="icon" href="ita.jpg" type="image/x-icon" >
<style>

.wrapper{
    position: absolute;
    top:50%;
    left:39%;
    transform: translate(-50%, -50%);
    width: fit-content;
    height:auto;
}
.rapper{
 position: absolute;
    top:50%;
    left:64%;
    transform: translate(-50%, -50%);
    width: fit-content;
    height:auto;
}
.b2{
 position: absolute;
    top:200%;
    left:45%;
    transform: translate(-50%, -50%);
    width: fit-content;
    height:auto;
}
.b3{
    position: absolute;
    top:200%;
    left:-120%;
    transform: translate(-50%, -50%);
    width: fit-content;
    height:auto;
}

button{
    width:200px;
    height:70px;
    background: linear-gradient(to left top, #c32c71 50%, #b33771 50%);
    border-style: none;
    color:#fff;
    font-size: 20px;
    letter-spacing: 3px;
    font-family: 'lato';
    font-weight: 600;
    outline: none;
    cursor: pointer;
    position: relative;
    padding: 0px;
    overflow: hidden;
    transition: all .5s;
    box-shadow: 0px 1px 2px rgba(0,0,0,.2);
}
button span{
    position: absolute;
    display: block;
}
button span:nth-child(1){
    height: 3px;
    width:200px;
    top:0px;
    left:-200px;
    background: linear-gradient(to right, rgba(0,0,0,0), #f6e58d);
    border-top-right-radius: 1px;
    border-bottom-right-radius: 1px;
    animation: span1 2s linear infinite;
    animation-delay: 1s;
}
@keyframes span1{
    0%{
        left:-200px
    }
    100%{
        left:200px;
    }
}
button span:nth-child(2){
    height: 70px;
    width: 3px;
    top:-70px;
    right:0px;
    background: linear-gradient(to bottom, rgba(0,0,0,0), #f6e58d);
    border-bottom-left-radius: 1px;
    border-bottom-right-radius: 1px;
    animation: span2 2s linear infinite;
    animation-delay: 2s;
}
@keyframes span2{
    0%{
        top:-70px;
    }
    100%{
        top:70px;
    }
}
button span:nth-child(3){
    height:3px;
    width:200px;
    right:-200px;
    bottom: 0px;
    background: linear-gradient(to left, rgba(0,0,0,0), #f6e58d);
    border-top-left-radius: 1px;
    border-bottom-left-radius: 1px;
    animation: span3 2s linear infinite;
    animation-delay: 3s;
}
@keyframes span3{
    0%{
        right:-200px;
    }
    100%{
        right: 200px;
    }
}

button span:nth-child(4){
    height:70px;
    width:3px;
    bottom:-70px;
    left:0px;
    background: linear-gradient(to top, rgba(0,0,0,0), #f6e58d);
    border-top-right-radius: 1px;
    border-top-left-radius: 1px;
    animation: span4 2s linear infinite;
    animation-delay: 4s;
}
@keyframes span4{
    0%{
        bottom: -70px;
    }
    100%{
        bottom:70px;
    }
}

button:hover{
    transition: all .5s;
    transform: rotate(-3deg) scale(1.1);
    box-shadow: 0px 3px 5px rgba(0,0,0,.4);
}
button:hover span{
    animation-play-state: paused;
}

     
</style>
<body>
<nav>
     
      <label class="logo"><img src="ita.jpg" height="50" width="50" style="vertical-align:middle"> IT Activities</label>
      <ul>
        <li><a  href="index.html">Home</a></li>
        <li><a   href="co-curricular.html">Co-curricular</a></li>
        <li><a  href="extracurricular.html">Extra curricular</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a  href="asignout.php">Signout</a></li>
        <li><a href="signup.php">Sign Up</a></li>
        <li><a href="signin.php">Sign In</a></li>
      </ul>
    </nav>
    
    <?php
session_start();
if(isset($_SESSION['status'])){?>
    <form method='post'>
<div class="wrapper">
  <button name='cocur'>Co-curricular Activity
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </button>
</div>
&nbsp &nbsp &nbsp
<div class="rapper">
  <button name='extracur'>Extra-Curricular Activity
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </button>
<div class="b2">
  <button name='feedback'>Feedback
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </button>
</div>
&nbsp &nbsp &nbsp
<div class="b3">
  <button name='contact'>Contact
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </button>


</div></form>
<?php

if(isset($_POST['cocur'])){
   echo "<script>window.open('disp.php?table=cocurricular','_self')</script>";
}
else if(isset($_POST['extracur'])){
    echo "<script>window.open('disp.php?table=extracur','_self')</script>";
}
else if(isset($_POST['contact'])){
    echo "<script>window.open('disp.php?table=contact','_self')</script>";
}

else if(isset($_POST['feedback'])){
    echo "<script>window.open('disp.php?table=feedback','_self')</script>";
}}
else{
     echo "<center><h1 align='center'>You signed out. Try signing in!!</h1></center>";
}
?>
</body>
</html>