<?php
$reg=$_GET['reg'];
$link=mysqli_connect("localhost","id18127422_root","}T-1KH*fT~qck/>T","id18127422_it");

$cer=$_GET['fname'];
$c=$_GET['c_name'];
$tab=$_GET['tab'];
$sql="SELECT file from $tab where reg='$reg' and c_name='$c' and fname='$cer'";
$res=mysqli_query($link,$sql);
$row=mysqli_fetch_array($res);
?>
<center>
<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['file']); ?>"width=100% height=100%/></center>