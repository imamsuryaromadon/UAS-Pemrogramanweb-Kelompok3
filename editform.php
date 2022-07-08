<?php 
$id = $_GET['id']; 
//koneksi database
include('koneksi.php');
//query
$query = "SELECT * FROM data WHERE id='$id'";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<link rel="shortcut icon"  href="covid-19.png">
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>EDIT-DATA</title>
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
<div class="" style="height:90vh">
  <div class="container">
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
    <h1 align="center"><b><br><br>EDIT DATA PENERIMA BANTUAN COVID-19</b></h1>
        <div class="content">
        <form method="get" action="edit.php">
        	<?php
			 while ($row = mysqli_fetch_assoc($result)) {
                $wilayah = $row['jenis_alokasi'];
 			?>
 			 <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <table><br><br><br>
            <tr><td><b> Jenis Alokasi </b></td><td>
                <select name="jenis_alokasi" value="<?php echo $row['jenis_alokasi']; ?>">
                    <option value="Alat Pelindung diri" <?php if ($alokasi == "Alat Pelindung diri") { echo "selected";} ?>>Alat Pelindung diri</option>
                    <option value="Logistik Mahasiswa" <?php if ($alokasi == "Logistik Mahasiswa") { echo "selected";} ?>>Logistik Mahasiswa</option>
                    <option value="Bantuan Kuota Mahasiswa" <?php if ($alokasi == "Bantuan Kuota Mahasiswa") { echo "selected";} ?>>Bantuan Kuota Mahasiswa</option>
                    <option value="Handsanitizer" <?php if ($alokasi == "Handsanitizer") { echo "selected"; } ?>>Handsanitizer</option>
                    <option value="Sembako Masyarakat" <?php if ($alokasi == "Sembako Masyarakat") { echo "selected"; } ?>>Sembako Masyarakat</option>
                   
                </select>
            </td></tr>
            <tr><td><b> Jumlah Dana </b></td><td><input type="text" size="24" name="jumlah_dana" value="<?php echo $row['jumlah_dana']; ?>"></td></tr>
            <tr><td><b> nama lengkap </b></td><td><input type="text" size="24" name="nama_lengkap" value="<?php echo $row['nama_lengkap']; ?>"></td></tr>
            <tr><td><b> no hp  </b></td><td><input type="text" size="24" name="nohp" value="<?php echo $row['nohp']; ?>"></td></tr>
            <tr><td><b> email </b></td><td><input type="text" size="24" name="email" value="<?php echo $row['email']; ?>"></td></tr>
            <tr><td colspan="5"><button type="submit" name="" value="edit" style="margin-left:2pc;">Update</button>
            <a href="index.php" style="margin-left:2pc;">Kembali</a></td></tr>

        </table>
    </div>
    </form>
    <?php
	}
	?>

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
