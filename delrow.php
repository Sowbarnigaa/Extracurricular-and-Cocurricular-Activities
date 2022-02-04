<?php
$link=mysqli_connect("localhost","id18127422_root","}T-1KH*fT~qck/>T","id18127422_it");
$tab= $_GET['tab'];
if($tab=='cocurricular'){
    $reg=$_GET['reg'];
    $c_name=$_GET['c'];
    $f=$_GET['f'];
    $up=$_GET['u'];
    mysqli_query($link,"DELETE FROM cocurricular WHERE reg='$reg' and c_name='$c_name' and fname='$f' and time='$up'");
    header("Location:disp.php?table=cocurricular");
}
if($tab=='extracur'){
    $reg=$_GET['reg'];
    $c_name=$_GET['c'];
    $f=$_GET['f'];
    $up=$_GET['u'];
    mysqli_query($link,"DELETE FROM extracur WHERE reg='$reg' and c_name='$c_name' and fname='$f' and time='$up'");
    header("Location:disp.php?table=extracur");
}
if($tab=='contact'){
$reg= $_GET['reg'];
$query= $_GET['query'];
mysqli_query($link,"DELETE FROM contact WHERE Rollno='$reg' and Query='$query'");
header("Location:disp.php?table=contact");
}
if($tab=='feedback'){
    $reg= $_GET['reg'];
    $query= $_GET['com'];
    mysqli_query($link,"DELETE FROM feedback WHERE Rollno='$reg' and comments='$query'");
    header("Location:disp.php?table=feedback");
    }
    
    ?>