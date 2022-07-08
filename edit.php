<?php

include('koneksi.php');


 $id = $_GET['id'];
 $jenis_alokasi  = $_GET['jenis_alokasi']; 
 $jumlah_dana = $_GET['jumlah_dana'];
 $nama_lengkap  = $_GET['nama_lengkap']; 
 $nohp = $_GET['nohp']; 
 $email = $_GET['email'];

//query update
$query = "UPDATE data SET jenis_alokasi='$jenis_alokasi' , jumlah_dana='$jumlah_dana' , nama_lengkap='$nama_lengkap' , nohp='$nohp', email='$email' WHERE id='$id' ";

if (mysqli_query($con, $query)) {
 # credirect ke page index
	 echo "<script>alert('Data berhasil diupdate..');window.location='index.php'</script>";
 header("location:index.php");
 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($con);
 echo '<a href="editform.php">Kembali</a>'; 
}
mysqli_close($con);
?>