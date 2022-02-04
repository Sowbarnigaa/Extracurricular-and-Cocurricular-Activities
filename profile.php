     
<!DOCTYPE html>
<html lang="en">
<head><title>IT Activities</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Student Profile Page Design Example</title>

    <meta name="author" content="Codeconvey" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

    <link rel="stylesheet" href="demo.css" />
    <link rel="stylesheet" href="style3.css">
	    <link rel="stylesheet" href="style.css">
        <link rel="icon" href="ita.jpg" type="image/x-icon" >

</head>
<style>
    a:hover{
        color:white;
    }
</style>
<body style="background-color: #e6ffff;">
	
    <?php
session_start();
if(isset($_SESSION['reg'])){
$link=mysqli_connect("localhost","id18127422_root","}T-1KH*fT~qck/>T","id18127422_it");
$reg=$_SESSION['reg'];
$sql=mysqli_query($link,"SELECT * FROM student WHERE reg='$reg'");
$row=mysqli_fetch_array($sql);
$_SESSION['fil']=NULL;
?>
<nav>
     
     <label class="logo"><img src="ita.jpg" height="50" width="50" style="vertical-align:middle"> IT Activities</label>
     <ul>
       <li><a  href="home.html">Home</a></li>
       <li><a   href="co-curricular.html">Co-curricular</a></li>
       <li><a  href="extracurricular.html">Extra curricular</a></li>
       <li><a href="contact.php">Contact</a></li>
       <li><a href="feedback.php">Feedback</a></li>
       <li><a  href="adminlogin.php">Admin</a></li>
       <li><a href="signout.php">Sign Out</a></li>
     </ul>
   </nav>	
<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1 style='color:black'>Department of Information Technology</h1>
                <p>Student profile</p>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Student Profile -->
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"  alt="student dp">
            <h3><?php echo $row['name']?></h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Student ID:</strong><?php echo $row['reg']?></p>
            <p class="mb-0"><strong class="pr-1">Batch:</strong>2020-2024</p>
  
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Contact info</h3>
            
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              
              <tr>
                <th width="40%">Email	</th>
                <td width="2%">:</td>
                <td><?php echo $row['email']?></td>
              </tr>
              <tr>
                <th width="30%">Phone</th>
                <td width="2%">:</td>
                <td><?php echo $row['phone']?></td>
              </tr>
              <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td><?php echo $row['gender']?></td>
              </tr>
              <tr>
                <th width="30%">City</th>
                <td width="2%">:</td>
                <td><?php echo $row['city']?></td>
              </tr>
              
              <tr>
                <th width="30%">Date of Birth</th>
                <td width="2%">:</td>
                <td><?php echo $row['dob']?></td>
              </tr>
            </table>
          </div>
        </div>
          <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Your uploads</h3>
            <h4>Co-Curricular</h4>
             <?php
             $sq=mysqli_query($link,"SELECT * FROM cocurricular WHERE reg='$reg'");
             $c=mysqli_num_rows($sq);
             if($c!=0){?>
             <table border='1' class='table table-bordered'>
              <tr>
                 <th>Course Name</th>
                 <th>Oragnisation</th>
                 <th>Certificate upload status</th>
                 <th>Time</th>
              </tr>
            <?php
             while($row=mysqli_fetch_array($sq)){
              echo  "<tr>";
             echo "<td>".$row['c_name']."</td>";
             echo "<td>".$row['org']."</td>";
             
             
             ?>
            <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['file']); ?>"width=300px height=200px/></td><?php
             echo "<td>".$row['time']."</td>";
             echo "</tr>";
            }
            
             }
            else{
              echo "<span align='center' font-size=50px >No Uploads</span>";
            }
            ?>
            </table>
            <h4>Extra-Curricular</h4>
            <?php
             $sq=mysqli_query($link,"SELECT * FROM extracur WHERE reg='$reg'");
             $c=mysqli_num_rows($sq);
             if($c!=0){?>
             <table border='1' class='table table-bordered'>
              <tr>
                 <th>Course Name</th>
                 <th>Oragnisation</th>
                 <th>Certificate upload status</th>
                 <th>Time</th>
              </tr>
            <?php
          
             while($row=mysqli_fetch_array($sq)){
              echo  "<tr>";
             echo "<td>".$row['c_name']."</td>";
             echo "<td>".$row['org']."</td>";
               
             ?>
             <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['file']); ?>" width=300px height=200px/></td><?php
             echo "<td>".$row['time']."</td>";
             echo "</tr>";
            }
            
             }
            else{
              echo "<span align='center' font-size=50px >No Uploads</span>";
            }
            echo"
            </table><br><button><a href='option.php'>Upload</a></button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button><a href='optiond.php'>Delete</a></button>";
}
else{?>
  <nav>
     <link rel="icon" href="ita.jpg" type="image/x-icon" >
      <label class="logo"><img src="ita.jpg" height="50" width="50" style="vertical-align:middle"> IT Activities</label>
      <ul>
        <li><a  href="index.html">Home</a></li>
        <li><a   href="co-curricular.html">Co-curricular</a></li>
        <li><a  href="extracurricular.html">Extra curricular</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a  href="adminlogin.php">Admin</a></li>
        <li><a href="signin.php">Sign in</a></li>
      </ul>
    </nav>	<?php
  echo "<center><h1 align='center'>You signed out. Try signing in!!</h1></center>";

}
            ?>
           
          </div>
          <div class="card-body pt-0">
          <div class="col-rt-2">


</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>       
    		</div>
		</div>
    </div>
    </section>
    
	</body>

</html>
