<?php 
$tab=$_GET['tab'];
$id=$_GET['id'];
$link=mysqli_connect("localhost","id18127422_root","}T-1KH*fT~qck/>T","id18127422_it");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " .mysqli_connect_error();
}
if($tab=='cocurricular'){
mysqli_query($link,"DELETE FROM cocurricular WHERE c_name='$id'");
mysqli_close($link);
header("Location: delcocur.php");}
if($tab=='extracur'){
    mysqli_query($link,"DELETE FROM extracur WHERE c_name='$id'");
    mysqli_close($link);
    header("Location: delextra.php");}
?>