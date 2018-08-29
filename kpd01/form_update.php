<?PHP include ('link_db.php'); 
$nomatrik=$_GET['nomatrik'];
$query=" SELECT * FROM pelajar WHERE nomatrik='$nomatrik'";
$result=mysql_query($query);
$num=mysql_numrows($result);
mysql_close();

$i=0;
while ($i < $num) {
$nomatrik=mysql_result($result,$i,"nomatrik");
$nama=mysql_result($result,$i,"nama");
$umur=mysql_result($result,$i,"umur");
?>

<center>
<form action="pros_update.php" method="post">
  <table width="386" border="1">
  <tr>
    <th scope="row">Nama Produk: </th>
    <td><input name="ud_nama" type="text" value="<?php echo $nama; ?>" maxlength="100" /></td>
  </tr>
  <tr>
    <th scope="row">Harga: </th>
    <td><input type="number" name="ud_umur" value="<?php echo $umur; ?>" /></td>
  </tr>
</table>
  <input name="Submit" type="Submit" value="Update" />
  <br>

</form>
</center>
<?PHP
++$i;
}
?>