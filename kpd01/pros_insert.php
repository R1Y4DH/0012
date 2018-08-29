
<?php
include ('link_db.php');
$nomatrik=$_POST['nomatrik'];
$nama=$_POST['nama'];
$umur=$_POST['umur'];

$query="insert into pelajar values('$nomatrik','$nama','$umur')";
if (mysql_query($query)){
echo "record added";
echo"-->";
echo "<a href=\"form.php\"> list</a> ";}
else
echo "something went wrong";
?>

