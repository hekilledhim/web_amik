<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['username'])){
header ("location:login.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PERPUSTAKAAN AMIK</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #000000}
.style2 {color: #000000}
.style3 {color: #0099ff}
.style4 {color: #0066FF}
.style5 {color: #00CCFF}
.style7 {color: #FFFFFF}
.style8 {color: #EEEEEE}
.style9 {color: #0099FF}
.style10 {color: #D70005}
.style11 {color: #333}
-->
</style>
</head>
<body>
<h3 align="center"><a href="logout.php"><span class="style8">......................<span class="style7">.......</span></span><span class="style7">...........................................................................</span>Logout</a></h3>
</div>
<div id="container">
  <div id="banner">
    <h1 class="style1"><span class="style10">AMIK</span> <span class="style10">BOGOR</span> </h1>
  </div>
  <div id="navcontainer">
    <ul id="navlist">
      <li><a href="#"></a></li>
      <li id="active"><a id="current" href="../admin/sl_index.php">HOME |</a><a href="../admin/sl_location.html">LOCATION |</a></li>
      
      <li><a href="../admin/sl_about.html">ABOUT |</a></li>
      <li class="style1"><a href="../admin/sl_contact.html">CONTACT | </a><span class="style9">............</span></li>
    </ul>
  </div>
  <div id="sidebar">
    <h2>Menu</h2>
    <div class="navlist">
      <ul>
        
        <li><a href="../listkiri/anggota.php">Tambah Anggota</span> </a></li>
        <li><a href="../listkiri/peminjaman.php">Tambah Peminjaman </a></li>
        <li><a href="../listkiri/pengembalian.php">Tambah Pengembalian</a></li>
        <li><a href="../listkiri/pengunjung.php">Tambah Pengunjung</a></li>
      </ul>
    </div>
    <h2>Link</h2>
    <div class="navlist">
      <ul>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Instagram</a></li>
        <li><a href="#">What's App </a></li>
        </ul>
    </div>
  </div>
  <div id="content">
    <h2 class="style4"><span class="style1">SELAMAT</span> <span class="style1">DATANG</span> <span class="style1">DI</span> <span class="style1">PERPUSTAKAAN</span> <span class="style1">AMIK</span> <span class="style1">BOGOR</span> </h2>
    <blockquote>
      <p class="style5">Menyediakan menu yang belum disediakan Dengan Web ini kami bisa tau apa yang belum kami tau dan bisa banyak menambah ilmu </p>
    </blockquote>
    <div>
      <p><?php
error_reporting(0);
//membuat koneksi ke database
include "koneksi1.php";
?> 
MENAMPILKAN BUKU YANG TELAH DI INPUT
<br>
      <table Width='532'  border='1' align="center" >  
<tr>
	<th width="28"> NO </th>
	<th width="88"> Kode Buku </th>
	<th width="87">Judul Buku</th>
	<th width="97">Pengarang</th>
	<th width="98"> Penerbit </th>
	<th width="94"> Tahun </th>
	
</tr>
 
<?php  
// Perintah untuk menampilkan data
$queri="Select * From perpus" ;  //menampikan SEMUA data dari tabel siswa

$hasil=MySQL_query ($queri);    //fungsi untuk SQL

// nilai awal variabel untuk no urut
$i = 1;

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
$id = $data['id'];
 echo "	 
		<tr>
		<td><center>".$i."</center></td> 
		<td>".$data['kode_buku']."</td>
		<td>".$data['judul_buku']."</td>
		<td>".$data['pengarang']."</td>
		<td>".$data['penerbit']."</td>
		<td>".$data['tahun']."</td>
		
		</tr> 
		";
	$i++;	
}

?>

</table>

<p>
  <!-- /////////////////////////////tombol untuk menambah data//////////////////////////////////-->
</p>
<p>&nbsp; </p>
<form action='tambah.php' method='POST'>
<table >
	<tr>
	<td> <input type='submit' name='tambah' value='Tambah Buku'> </td>	
	</tr>
</table>
</form>

&nbsp;</p>
    </div>
    <p>&nbsp;</p>
  </div>
  <div id="container-foot">
    <div id="footer">
      <p align="center"><a href="#" class="style3">homepage</a> | <a href="mailto:denise@mitchinson.net" class="style3">contact</a> | &copy; 2017 | Design by <a href="http://www.amikbogor.ac.id/" class="style3"> www.amikbogor.ac.id</a> | Licensed under a <a href="http://creativecommons.org/licenses/by/3.0/" class="style3" rel="license">Creative Commons Attribution 3.0 License</a></p>
    </div>
  </div>
</div>
</body>
</html>
