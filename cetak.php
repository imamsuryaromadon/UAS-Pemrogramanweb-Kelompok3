<?php 
	require 'koneksi.php';
	$id = $_GET['id'];
?>
<html>
<link rel="shortcut icon"  href="covid-19.png">
	<head>
		<title> Data Pasien COVID-19 </title>
		<link rel="stylesheet" href="bootstrap.css">
	</head>
	<body>
		<script>window.print();</script>
		<div class="container">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
		<?php 
		
		$sql = mysqli_query($con,"SELECT * FROM data  WHERE id='$id'");
		while($data = mysqli_fetch_array($sql)){
		?>
					<center>
						<br><br><br><br>
						<p>Rekapitulasi Penerima Bantuan Sosial Covid19 <?php echo $data['nama_wilayah'];?></p>
						<p>per <?php  echo date('d F Y, H:i:s');?></p>
					</center><br>
					<table  border="1" style="width:100%;">
						<tr>
							<td><center><b>NO</b></center></td>
							<td><center><b>Alokasi</b></center></td>
							<td><center><b>Nama lengkap</b></center></td>
							<td><Center><b>Jumlah dana</b></Center></td>
						</tr>
						
							<td><center><?php echo $data['id'];?></center></td>
							<td><center><?php echo $data['jenis_alokasi'];?></center></td>
							<td><center><?php echo $data['jumlah_dana'];?></center></td>
							<td><center><?php echo $data['nama_lengkap'];?></center></td>
						</tr>
					</table>
				<?php
			}
			?>
		</div>
	</body>
</html>
