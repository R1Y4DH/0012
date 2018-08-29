
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
<form action="pros_insert.php" method="post" enctype="multipart/form-data" name="form1">

  <p align="center"><strong>Tambah Rekod Barangan Dan Harga</strong></p>
 <center>
  <table width="467" border="1">
    <tr>
      <td>Nama Produk</td>
      <td><label>
        <input type="text" name="nama" id="nama" />
      </label></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td><label>
        <input type="text" name="umur" id="umur" />
      </label></td>
    </tr>
  </table>
  <p>
    <label>
    <input type="submit" name="submit" id="submit" value="Add" />
    </label>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>



