<html>
<head>
    <link rel="stylesheet" href="style3.css">
     <link rel="icon" href="ita.jpg" type="image/x-icon" >
<title>IT Activities</title>
<?php
 session_start();
 $reg=$_SESSION['reg'];
?>
<script type="text/javascript">

window.onload = function () {
       
        var tyear = document.getElementById("t1year");
 
     
        var currentYear = (new Date()).getFullYear();
 
        for (var i = 2000; i <= currentYear; i++) {
            var option = document.createElement("OPTION");
            option.innerHTML = i;
            option.value = i;
            tyear.appendChild(option);
        }
     var syear = document.getElementById("t2year");
 
     
        var currentYear = (new Date()).getFullYear();
 
        for (var i = 2000; i <= currentYear; i++) {
            var option = document.createElement("OPTION");
            option.innerHTML = i;
            option.value = i;
            syear.appendChild(option);
        }
    };

</script>
<style>
body{

font-family:arial;
}
h2{
 font-family: arial;
 font-size: 35px;    
 font-style: normal;
 font-weight: bold;
 color: #d279a6;
 text-align: center;
 
}
table{
 font-family: arial;
 color:black;
border-spacing: 40px;
 font-size: 20px;
 font-style: normal;
 font-weight: bold;
}
.box{
background: #b3d9ff;
width:60%;
margin-left:20%;
}
table.inner{
 border: 10px
}
input[type=text],input[type=number]{
 width: 325px;
height:45px;
 padding: 6px 12px;
 margin: 5px 0;
 box-sizing: border-box;
border-radius:15px;
}
input[type=submit], input[type=reset]{
 width: 15%;
 padding: 8px 12px;
 margin: 5px 0;
 box-sizing: border-box;
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
        <li><a href="feedback.php">Feedback</a></li>
        <li><a  href="adminlogin.php">Admin</a></li>
        <li><a href="signout.php">Sign Out</a></li>
      </ul>
    </nav>
<h2></h2>
<br>
<h2><b>Add Co-Curricular Activity</b></h3><br><br>
<div class="box">
<form method="post"  enctype="multipart/form-data">
<table align="center" cellpadding = "10">
<tr>
<td>Course Name</td>
<td><input required type="text" name="coursename" maxlength="50" placeholder="Enter course name" />
</td>
</tr>
<tr>
<td>Oragnization</td>
<td><input required type="text" name="organization" maxlength="50" placeholder="Course conducted by..."/>
</td>
<tr>
<td>Period</td>
<td>
<select name="fmonth" id="fmonth">
<option value="">Month</option>
<option value="January">Jan(1)</option>
<option value="February">Feb(2)</option>
<option value="March">Mar(3)</option>
<option value="April">Apr(4)</option>
<option value="May">May(5)</option>
<option value="June">Jun(6)</option>
<option value="July">Jul(7)</option>
<option value="August">Aug(8)</option>
<option value="September">Sep(9)</option>
<option value="October">Oct(10)</option>
<option value="November">Nov(11)</option>
<option value="December">Dec(12)</option>
</select>
<select name="t1year" id="t1year">
<option value="">Year</option>
</select>
&nbsp;to&nbsp;
<select name="tmonth" id="tmonth">
<option value="">Month</option>
<option value="January">Jan(1)</option>
<option value="February">Feb(2)</option>
<option value="March">Mar(3)</option>
<option value="April">Apr(4)</option>
<option value="May">May(5)</option>
<option value="June">Jun(6)</option>
<option value="July">Jul(7)</option>
<option value="August">Aug(8)</option>
<option value="September">Sep(9)</option>
<option value="October">Oct(10)</option>
<option value="November">Nov(11)</option>
<option value="December">Dec(12)</option>
</select>
<select name="t2year" id="t2year">
<option value="">Year</option>
</select>
</td>

</tr>
<tr>
<td>Certificate ID</td>
<td><input type="text" name="cid" maxlength="100" placeholder="Enter certificate ID"/></td>
</tr>
<tr>
<td>Upload Certificate</td>
<td>
<input required type="file" id="files" name="files"><br><h6 style="font-family: arial;color: red ">(.jpg .jpeg .jfif .png <700kb)</h6>
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>
<div>
<?php
if(isset($_POST['submit'])){
$cn=$_POST['coursename'];
$or=$_POST['organization'];
$spm=$_POST['fmonth'];
$spf=$_POST['t1year'];
$epm=$_POST['tmonth'];
$epf=$_POST['t2year'];
$sp=$spm." ".$spf;
$ep=$epm." ".$epf;
$cid=$_POST['cid'];
$im_m=$_FILES['files']['name'];
$im=$_FILES['files']['tmp_name'];
$imgContent = addslashes(file_get_contents($im));
$link=mysqli_connect("localhost","id18127422_root","}T-1KH*fT~qck/>T","id18127422_it");
$sql=mysqli_query($link,"SELECT * FROM cocurricular WHERE reg='$reg' and c_name='$cn' and org='$or' and cid='$cid'");
$c=mysqli_num_rows($sql);
if($c==0){
  $query="INSERT into cocurricular(c_name,org,s_p,e_p,cid,file,fname,reg,time) VALUES ('$cn','$or','$sp','$ep','$cid','$imgContent','$im_m','$reg',NOW())";
  mysqli_query($link,$query);
  echo "<script>alert('Uploaded successfully')</script>";
}
else{
    echo "<script>alert('This is id already registered!!')</script>";
}
}
?>
</body>
</html>