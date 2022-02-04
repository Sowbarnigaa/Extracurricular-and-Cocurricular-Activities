 <link rel="stylesheet" href="style3.css">   <link rel="icon" href="ita.jpg" type="image/x-icon" >  
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title>IT Activities</title><style>
	body{
background:linear-gradient(to  right,#990033
 0%, #00e6e6 100%);
 background: #e6ffff;
}
	table
	{
  border-collapse: collapse;
  width: 60%;
 border:"10";
padding:"10";
	}
	td {
  text-align: center;
  padding: 8px;
}
th
{
    background:#0099e6;
}
table.center {
  margin-left: auto; 
  margin-right: auto;
}

tr:nth-child(even) {background-color: #b3d9ff;height: 50 px;color:black;font-size:120%}
tr:nth-child(odd) {background-color: #b3d9ff;height: 50 px;color:black;font-size:120%}
caption{
	font-family:arial;
	font-size:150%;
	font-weight: bold;
}
caption{
    color: #ffffff;
	font-family:arial;
	font-size:150%;
	font-weight: bold;
}
h1{
    color: black;
	font-family:arial;
	font-size:150%;
	font-weight: bold;
    text-align:center;
}

</style><nav>
     
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
    <style>
</style>
<?php
session_start();
if(isset($_SESSION['status'])){

$image=$_GET['table'];

$link=mysqli_connect("localhost","id18127422_root","}T-1KH*fT~qck/>T","id18127422_it");
if($image=='cocurricular'){
    $sq1=mysqli_query($link,"SELECT distinct(c_name) FROM cocurricular group by c_name");
             $c=mysqli_num_rows($sq1);
             if($c!=0){?>
                <br><h1>Co-Curricular Activities</h1><br>
             
             
            <?php
            foreach($sq1 as $cat){
            $t=$cat['c_name'];
            ?>
            <br>
            <table border='1' class='center'>
            <?php echo "<h1>".$cat['c_name']."</h1>";?>
              <tr>
                 <th>Register</th>
                 <th>Course Name</th>
                 <th>Oragnisation</th>
                 <th>Certificate Id</th>
                 <th>Certificate upload status</th>
                 <th>Time</th>
                 <th>Delete</th>
              </tr><?php
            $sql=mysqli_query($link,"SELECT * FROM cocurricular where c_name='$t'");
             foreach($sql as $row){
              
             echo  "<tr>";
             echo "<td>".$row['reg']."</td>";
             echo "<td>".$row['c_name']."</td>";
             echo "<td>".$row['org']."</td>";
             echo "<td>".$row['cid']."</td>";
             $reg=$row['reg'];
             $c_name=$row['c_name'];
             $f=$row['fname'];
             $u=$row['time'];
      
             echo "<td><a href='cerdisplay.php?tab=$image&reg=$reg&c_name=$c_name&fname=$f&u=$u'>View</a></td>";
             echo "<td>".$row['time']."</td>";
             echo "<td><a href='delrow.php?tab=$image&reg=$reg&c=$c_name&f=$f&u=$u'><i class='fa fa-trash' style='font-size:40px;color:red'></i></a>";
             echo "</tr>";
            }
            echo "<br>";
            echo "</table>";
          }
             }
            else{
                echo "<h1>Co-Curriular Activities</h1><br>";
                echo "<h2 align='center' font-size=50px >No Uploads</h2>";
            }}
else if($image=='extracur'){
   
           
             $sq1=mysqli_query($link,"SELECT distinct(c_name) FROM extracur group by c_name");
             $c=mysqli_num_rows($sq1);
             if($c!=0){?>
                 <br><h1>Extra-Curricular Activities</h1><br>
                 <?php
            foreach($sq1 as $cat){
            $t=$cat['c_name'];
            ?>
            <table border='1' class='center'>
            <?php echo "<h1>".$cat['c_name']."</h1>";?>
              <tr>
                 <th>Register</th>
                 <th>Course Name</th>
                 <th>Oragnisation</th>
                 <th>Certificate Id</th>
                 <th>Certificate upload status</th>
                 <th>Time</th>
                 <th>Delete</th>
              </tr><?php
            $sql=mysqli_query($link,"SELECT * FROM extracur where c_name='$t'");
             foreach($sql as $row){
              
             echo  "<tr>";
             echo "<td>".$row['reg']."</td>";
             echo "<td>".$row['c_name']."</td>";
             echo "<td>".$row['org']."</td>";
             echo "<td>".$row['cid']."</td>";
             $reg=$row['reg'];
             $c_name=$row['c_name'];
             $f=$row['fname'];
             $u=$row['time'];
      
             echo "<td><a href='cerdisplay.php?tab=$image&reg=$reg&c_name=$c_name&fname=$f&u=$u'>View</a></td>";
             echo "<td>".$row['time']."</td>";
             echo "<td><a href='delrow.php?tab=$image&reg=$reg&c=$c_name&f=$f&u=$u'><i class='fa fa-trash' style='font-size:40px;color:red'></i></a>";
             echo "</tr>";
            }
            echo "<br>";
            echo "</table>";
             }}
            else{
                echo "<h1>Extra-Curriular Activities</h1><br>";
                echo "<h2 align='center' font-size=50px >No Uploads</h2>";
            }
   
          }
           

else if($image=='feedback'){
    $sq=mysqli_query($link,"SELECT * FROM feedback");
    $c=mysqli_num_rows($sq);
    if($c!=0){?>
    <table border='1' class='center'>
    <br><h1>Feedback Data</h1></br>
     <tr>
        <th>Name</th>
        <th>Register no.</th>
        <th>Comments</th>
        <th>Delete</th>
     </tr>
   <?php
    while($row=mysqli_fetch_array($sq)){
     echo  "<tr>";
    echo "<td>".$row['fname']."</td>";
    echo "<td>".$row['Rollno']."</td>";   
    echo "<td>".$row['comments']."</td>";
    $reg=$row['Rollno'];
    $query=$row['comments'];
    echo "<td><a href='delrow.php?tab=$image&reg=$reg&com=$query'><i class='fa fa-trash' style='font-size:40px;color:red'></i></a></td>";
    echo "</tr>";
   }} 
   else{
    echo "<h1>Feedback</h1><br>";
    echo "<h2 align='center' font-size=50px >No Uploads</h2>";
   }
}
else if($image=='contact'){
    $sq=mysqli_query($link,"SELECT * FROM contact");
    $c=mysqli_num_rows($sq);
    if($c!=0){?>
    <table border='1' class='center'>
    <br><h1>Contact details</h1></br>
     <tr>
        <th>Name</th>
        <th>Register no.</th>
        <th>Category</th>
        <th>Query</th>
        <th>Delete</th>
     </tr>
   <?php
 
    while($row=mysqli_fetch_array($sq)){
     echo  "<tr>";
    echo "<td>".$row['fname']."</td>";
    echo "<td>".$row['Rollno']."</td>";
    echo "<td>".$row['Category']."</td>";   
    echo "<td>".$row['Query']."</td>";
    $reg=$row['Rollno'];
    $query=$row['Query'];
    echo "<td><a href='delrow.php?tab=$image&reg=$reg&query=$query'><i class='fa fa-trash' style='font-size:40px;color:red'></i></a></td>";
    echo "</tr>";
   }}
   
    
   else{
    echo "<h1>Contact details</h1><br>";
     echo "<h2 align='center' font-size=50px >No Uploads</h2>";
   }
 
}}
else{
    echo "<center><h1 align='center'>You signed out. Try signing in!!</h1></center>";
}


?>
