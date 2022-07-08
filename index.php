<?php
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";
if ($_SESSION['username']) {
?>
 
<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon"  href="covid-19.png">
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
 <script src="js/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
 <title>DASHBOARD</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<nav class='navbar navbar-expand-lg navbar-success bg-success text-light '>
    <div class="container">
        <a href="index.php" class="navbar-brand"></a>
        <button class="navbar-toggler" type="button" data-togle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item ml-6">
                <a href="logout.php" class="nav-link text-light"> Log Out </a>
                
            </li>
        </ul>
    </div>
</nav>
   <div class="col-sm-13">
    <br>
    <h2><center><b>Data Penerima Bantuan COVID-19</b></center></h2>
    </br>
	<body>
<center>
<h5>
<?php
	function tgl ($tanggal) {
        $bulan = array (
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
        $tanda = explode('-', $tanggal);
        return $tanda[2] . ' ' . $bulan[(int)$tanda[1] ] . ' ' . $tanda[0];
}
    date_default_timezone_set('Asia/Jakarta');
    $jam = date('H:i:s');
?>
<?php
    echo "Tanggal  :  " . tgl(date('Y-m-d'));
    echo "  Jam  :  " . $jam . "<br>";
?>
</h5>
	
</body>
<br><br>
            <a href="tambah.php" style="margin-left:0.5pc;" 
              class="btn btn-success btn-md pull-right">
              <i class="fa fa-list"></i>Tambah Data</a>
            <div class="clearfix"></div>
            <br/>
    <center><table class="table table-striped table-hover dtabel "style="right:80;""><center>
     <thead class="table-dark">
      <tr>
       <th>No</th>
       <th>Jenis Alokasi</th>
       <th>Jumlah Dana</th>
       <th>Nama Lengkap</th>
       <th>No HP</th>
       <th>Email</th>
       <th>Aksi</th>
      </tr>
     </thead>
     <tbody> 
      
      <?php
       $no = 1;  
       $result =  mysqli_query($con,"SELECT * FROM data");
       while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <center><tr width="100%"></center>
       <td><?php echo $no++; ?></td>
       <td ><?php echo $row['jenis_alokasi']; ?></td>
       <td ><?php echo $row['jumlah_dana']; ?></td>
       <td ><?php echo $row['nama_lengkap']; ?></td>
       <td ><?php echo $row['nohp']; ?></td>
       <td ><?php echo $row['email']; ?></td>
       <td >
        <a href="editform.php?id=<?php echo $row['id'];?>" class="btn btn-success" role="button">Edit</a>
        <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger" role="button">Hapus</a>
        <a href="cetak.php?id=<?php echo $row['id']?>" class="btn btn-primary" role="button">Cetak</a>
       </td>
      </tr>

      <?php
       }
      ?>
     </tbody>
    </table>
   </div>
  </div>
 </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
 <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
 <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
 <script>
 $(document).ready(function() {
  $('.dtabel').DataTable();
 } );
 </script>

</html>
<?php
} else {
    header("location:login.php");
}
?>