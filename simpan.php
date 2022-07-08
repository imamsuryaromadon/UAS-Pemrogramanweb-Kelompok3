<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['simpan'])){
 
 //inlcude atau memasukkan file koneksi ke database
 include('koneksi.php');
 
 //jika tombol tambah benar di klik maka lanjut prosesnya
 $jenis_alokasi  = $_POST['jenis_alokasi']; 
 $jumlah_dana = $_POST['jumlah_dana'];
 $nama_lengkap  = $_POST['nama_lengkap']; 
 $nohp = $_POST['nohp']; 
 $email = $_POST['email'];
 


 //melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
 $input = "INSERT INTO data VALUES(NULL, '$jenis_alokasi', '$jumlah_dana', '$nama_lengkap', '$nohp', '$email')";
 
 //jika query input sukses
 if(mysqli_query($con,$input)){
  
  echo "<script>alert('Data berhasil di tambahkan!');window.location='index.php'</script>";  //Pesan jika berhasil
  
 }else{
  
  echo "Gagal menambahkan data!".mysqli_error($con) ;  //Pesan jika proses tambah gagal
  echo '<a href="index.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
  
 }

}else{ //jika tidak terdeteksi tombol tambah di klik

 //redirect atau dikembalikan ke halaman tambah
 echo '<script>window.history.back()</script>';

}
?>