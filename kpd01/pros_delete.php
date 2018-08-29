
<?php
include ('link_db.php');

$nomatrik=$_GET['nomatrik'];
$query="delete from pelajar where nomatrik='$nomatrik'";
$result=mysql_query($query);
 header("Location:editdandelete.php");
?>

