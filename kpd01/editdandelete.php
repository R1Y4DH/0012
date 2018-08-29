
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="nav.php">Home</a></li>
  <li><a href="form.php">Daftar Produk</a></li>
  <li><a href="editdandelete.php">Senarai Produk</a></li>
  <li style="float:right"><a href="logout.php">Logout</a></li>
</ul>
<body>
<?php
include('link_db.php');
$sql="SELECT*from pelajar ORDER BY nomatrik ASC";
$result=mysql_query($sql,$conn) or die (mysql_error());
?>
<center><table>
<p><strong><center>Senarai Barangan Dan Harga</strong></center>
<table border="1" width="849" align="center" cellspacing="2" cellpadding="2">
<tr>
<td align="center" bgcolor="#fffff"><strong>Bil</strong></td>
<td align="center" bgcolor="#fffff"><strong>Nama Produk</strong></td>
<td align="center" bgcolor="#fffff"><strong>Harga</strong></td>
<td align="center" bgcolor="#fffff"><strong>Edit</strong></td>
<td align="center" bgcolor="#fffff"><strong>Tindakan</strong></td>
</tr>

<?php
while ($row=mysql_fetch_array($result))
{
echo "<tr>";
$id=$row["nomatrik"];
echo "<br><td>" .$row["nomatrik"]."</td>";
echo "<td>" .$row["nama"]."</td>";
echo "<td>" .$row["umur"]."</td>";echo "<td>","<a href=\"form_update.php?nomatrik=$id\">Edit</a>";
echo "<td>","<a href=\"pros_delete.php?nomatrik=$id\">Delete</a>";
}
echo"</table>";
echo"<center>";
echo"</br>";

?>
<a href="form.php"> Tambah Produk</a>
<a href="logout.php">logout</a>

