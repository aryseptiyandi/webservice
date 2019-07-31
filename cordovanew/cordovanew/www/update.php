<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $Id=$_POST['Id'];
  $nama_pembeli=$_POST['nama_pembeli'];
 $nama_barang=$_POST['nama_barang'];
 $unit=$_POST['unit'];
 $harga=$_POST['harga'];
 $jumlah=$_POST['jumlah'];
 $q=mysqli_query($con,"UPDATE `pembelian` SET `nama_pembeli`='$nama_pembeli',`nama_barang`='$nama_barang',`unit`='$unit',`harga`='$harga',`jumlah`='$jumlah' where `Id`='$Id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>