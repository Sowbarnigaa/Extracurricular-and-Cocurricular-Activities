<html>
<head><title>IT Activities</title>
  
    <link rel="icon" href="ita.jpg" type="image/x-icon" >
<link href="deleteExtracurricular.css"rel="stylesheet"></link> 
<link rel="stylesheet" href="style3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style type="text/css">
      table, th, td {
  border: 3px solid black;
  border-collapse: collapse;
  padding:4px;
}
th{
  font-size: 20px;
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


<?php
  session_start();
  $reg=$_SESSION['reg'];
$link=mysqli_connect("localhost","id18127422_root","}T-1KH*fT~qck/>T","id18127422_it");
             $sq=mysqli_query($link,"SELECT * FROM extracur WHERE reg='$reg'");
             $c=mysqli_num_rows($sq);
             if($c!=0){?>
              <br>
             <center><table border='1' class='table table-bordered'>
              <tr>
                 <th>Course Name</th>
                 <th>Oragnisation</th>
                 <th>Certificate Id</th>
                 <th>Certificate upload status</th>
                 <th>Time</th>
              </tr>
              <form method='post'>
            <?php
             while($row=mysqli_fetch_array($sq)){
               $cid=$row['cid'];
              echo  "<tr>";
             echo "<td>".$row['c_name']."</td>";
             echo "<td>".$row['org']."</td>";
             echo "<td>".$row['cid']."</td>";
             $c_name=$row['c_name'];
             $t='extracur';
             ?>
            <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['file']); ?>"width=300px height=200px/></td><?php
             echo "<td><a href='deletecir.php?tab=$t&id=$c_name'><i class='fa fa-trash' style='font-size:40px;color:red'></i></td>";
             
             echo "</tr>";
      
            }
            
             }
            else{
              echo "<h1 align='center'>Extra-Curriular Activities</h1><br>";
              echo "<h2 align='center' font-size=50px >No Uploads</h2>";
            }
           
?>
</form>
</table>
</body></html>