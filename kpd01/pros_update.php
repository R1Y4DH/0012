<?php
include ('link_db.php');
$ud_nomatrik=$_POST["$nomatrik"];
$ud_nama=$_POST["$nama"];
$ud_umur=$_POST["$umur"];

$query="UPDATE pelajar SET ud_nama='$nama',ud_umur='$umur' WHERE ud_nomatrik=$nomatrik";
 (mysql_query($query));
header('Location:http://localhost/kpd01/editdandelete.php');
/*echo "Record update";
echo "<a href=\"editdandelete.php\">list</a>;*/
mysql_close();
?>