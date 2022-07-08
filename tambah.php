<?php

 if(isset($_POST['simpan'])){
     header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon"  href="covid-19.png">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>TAMBAH-DATA</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css">
 
</head>
<body>
<nav class='navbar navbar-expand-lg navbar-dark bg-dark text-light '>
    <div class="container">
        <a href="index.php" class="navbar-brand"></a>
        <button class="navbar-toggler" type="button" data-togle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-auto pt-2 pb-2">
            <li class="nav-item ml-4">
                <a href="logout.php" class="nav-link text-light"> Log Out </a>
            </li>
        </ul>
    </div>
</nav>
<style>
            body{
            background-image: url(./1.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
        }
        .title{
            text-align: center;
            font-size: 2.5em;
            color: #000;
        }
 
         
    </style>
<div class=" " style="height:90vh">
  <div class="container">
    <h1 align="center"><b><br><br>TAMBAH DATA PEMANTAUAN COVID-19</b></h1>
        <div class="content" ><br><br><br>
        <form method="post" action="simpan.php" >
        <table>
            <tr><td><b> Jenis Alokasi</b></td><td>
                <select name="jenis_alokasi">
                    <option value="Alat Pelindung diri">Alat Pelindung diri</option>
                    <option value="Logistik Mahasiswa">Logistik Mahasiswa</option>
                    <option value="Bantuan Kuota Mahasiswa">Bantuan Kuota Mahasiswa</option>
                    <option value="Handsanitizer">Handsanitizer</option>
                    <option value="Sembako Masyarakat">Sembako Masyarakat</option>
                    
                </select>
            </td></tr>
            <tr><td><b> Jumlah Dana </b></td><td><input type="text" size="24" name="jumlah_dana"></td></tr>
            <tr><td><b> Nama Lengkap </b></td><td><input type="text" size="24" name="nama_lengkap"></td></tr>
            <tr><td><b> NO HP  </b></td><td><input type="text" size="24" name="jumlah_sembuh"></td></tr>
            <tr><td><b> Email </b></td><td><input type="text" size="24" name="nohp"></td></tr>
            <tr><td colspan="5"><button type="submit" name="simpan" value="simpan" style="margin-left:4pc;">Simpan</button>
            <a href="index.php" style="margin-left:2pc;">Kembali</a></td></tr>

        </table>
    </div>
    </form>
  </div>
</div> 
</body>
 <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
 <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
 <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
 <script>
 $(document).ready(function() {
  $('.dtabel').DataTable();
 } );
 </script>
</html>
