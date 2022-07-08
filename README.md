# UAS_KELOMPOK_1
UAS Mata Kuliah Pemrograman Web 2 
kelas 06TPLM007
Disusun oleh kelompok 1 :
1.	191011401104 - Afrialdo Yasrul Nantunggal,
2.  191011401069 - Aldi Stiawan
3.  191011401216 - Aldo Bagus Setiawan
4.  191011401207 - Agung Pradopo
5.  181011400815 - Allan Firmansyah
6.  191011401203 - Ade Abdurahman


Berikut link website Aplikasi Data Pasien Covid-19 : http://data.lovestoblog.com/login.php

Username	: admin
Password	: admin

HALAMAN LOGIN
![image](https://user-images.githubusercontent.com/103938879/177808794-0892ad11-735f-4998-b197-2d37430903eb.png)
HALAMAN DASHBOARD
![image](https://user-images.githubusercontent.com/103938879/177808950-01bdf381-a16e-4e12-b7ff-72aabb40ca13.png)
HALAMAN TAMBAH DATA
![image](https://user-images.githubusercontent.com/103938879/177809038-a24104af-7726-42cb-bf71-fb9227a39cdf.png)
HALAMAN EDIT
![image](https://user-images.githubusercontent.com/103938879/177809131-c0c90a28-bafb-4f3a-b499-7f85bab98d26.png)
HALAMAN HAPUS
![image](https://user-images.githubusercontent.com/103938879/177809227-c45695e0-761f-4149-ac71-9181f7ed0df9.png)
HALAMAN CETAK
![image](https://user-images.githubusercontent.com/103938879/177809354-d006951f-89ac-4169-961a-50503d1bbcff.png)
REPORT
![image](https://user-images.githubusercontent.com/103938879/177809422-d866211f-207c-4734-8c96-eaa8283fff77.png)

Aplikasi Data Pasien Covid-19 ini untuk menangani data-data pasien covid-19 
Sistem aplikasi ini adalah web base yang dikembangkan dengan menggunakan bahasa pemrograman PHP, HTML,CSS, JavaScript , ditambahkan  Bootstrap dan basis data dengaan MySQL. 
Aplikasi ini menerapkan operasi operasi CRUD (Create, Read, Update, dan Delete) dengan bahasa PHP dan menyimpan database di MySQL.

Berikut fungsi PHP dari setiap fitur Aplikasi Data Data Pasien Covid-19 :
Index.php

Index.php ini merupakan tampilan halaman website setelah user berhasil login. Pada halamain ini menampilkan data pasien covid-19 dari setiap provinsi di Indonesia, 
data nya meliputi Nama Wilayah, Jumlah Postif, Jumlah  Dirawat, Jumlah Sembuh, Jumlah Meninggal, dengan keterangan Nama Operator dan Nim Mahasiswa sebagai operator.
Pada halaman ini juga, kita dapat melakukan entri data pasien, edit data , menghapus data dan mencetak data pasien dari masing-masing provinsi. 
Serta kolom pencarian untuk memudahkan user mencari data.

koneksi.php

koneksi.php berfungsi untuk mengkoneksikan atau mengubungkan form dengan database MySQL, 
sehingga user dapat melakukan operasi CRUD. Dengan menggunakan fugsi mysqli_connect(), yang didalamnya terdapat komponen host, nama database, username dan password.

tambah.php

tambah.php ini berfungsi untuk menambahkan data jumlah pasien covid-19. Didalam nya terdapat tampilan form data pemantauan covid-19 berupa Nama Wilayah, Jumlah Postif, Jumlah  Dirawat, Jumlah Sembuh, Jumlah Meninggal, dengan keterangan Nama Operator dan Nim Mahasiswa sebagai operator. 
Dan terdapat  <form method="post" action="simpan.php" > untuk menghubungkan ke fungsi simpan , dengan tujuan menyimpan data yang ingin ditambahkan ke dalam database MySQL.
 
simpan.php
 
simpan.php ini berfungsi untuk menyimpan data, terdapat fungsi $input = "INSERT INTO data VALUES(NULL, '$nama_wilayah', '$jumlah_positif', '$jumlah_dirawat', '$jumlah_sembuh', '$jumlah_meninggal', '$nama_operator', '$nim_mahasiswa')";
dimana fungsi tersebut untuk menyompdat data ke dalam database ditambah dengan fungsi  include('koneksi.php');, yang menghubungkan ke database MySQL.

editform.php
 
editform.php ini berfungsi untuk menampilkan form ubah data, yang bertujuan untuk mengubah data yang sudah diinput  sebelumnya dan memperbaharui data. Terdapat sintax <form method="get" action="edit.php"> yang menghubungkan fungsi ke edit.php

edit.php
 
edit.php ini berfungsi untuk mengubah data pasien covid-19 yang sudah diinput dan memperbaharui data yang terdapat didalam database MySQL dengan data yang diinput pada formedit. 
 
Didalam nya terdapat fungsi php $query = "UPDATE data SET nama_wilayah='$nama_wilayah' , jumlah_positif='$jumlah_positif' , jumlah_dirawat='$jumlah_dirawat' , jumlah_sembuh='$jumlah_sembuh', jumlah_meninggal='$jumlah_meninggal', nama_operator='$nama_operator', nim_mahasiswa='$nim_mahasiswa' WHERE id='$id' ";

delete.php
 
hapus.php berfunsgi untuk menghapus data covid-19 yang terdapat pada tampilan data. Terdapat sintax $query = "DELETE FROM data WHERE id = '$id' "; yang berfungsi untuk mengkoneksikan ke database MySQL bahwa data tersebut dihapus.

cetak.php
 
cetak.php adalah file yang digunakan untuk mencetak data pasien covid-19 pada masing-masing provinsi. Terdapat sintax window.print(); yang digunakan untuk mencetak sebuah halaman website. File dokemen hasil cetak dalam format PDF.

logout.php
 
Logout.php adalah file yang digunakan untuk proses keluar dari program aplikasi. Logout ini untuk menjaga keamanan sebuah akun agar tidak digunakan oleh orang lain. Terdapat sintax session_destroy(); yang berfungsi untuk  menghapus semua session data di server. 
Setelah berhasil melakukan logout, user akan diarahkan kembali ke halaman login.php.

BUKTI PEMBAYARAN
![image](https://user-images.githubusercontent.com/103938879/177812556-641e80d5-7a59-47a3-8c34-2431f23639ee.png)
![WhatsApp Image 2022-07-07 at 22 29 54](https://user-images.githubusercontent.com/103938879/177812730-6a76f1d2-097f-4eec-bd0f-f643d21d7fd2.jpeg)
![WhatsApp Image 2022-07-07 at 22 31 10](https://user-images.githubusercontent.com/103938879/177812870-0476be2a-bee7-4d8e-af9a-f8fdfca2ac1a.jpeg)
![WhatsApp Image 2022-07-07 at 22 31 15](https://user-images.githubusercontent.com/103938879/177812947-4ed192e2-a367-46f2-ba45-3a9640250574.jpeg)
![WhatsApp Image 2022-07-07 at 22 31 04 (1)](https://user-images.githubusercontent.com/103938879/177813551-43c141db-4fb7-46a8-b6f8-03037b9e49b6.jpeg)
![WhatsApp Image 2022-07-07 at 22 32 05](https://user-images.githubusercontent.com/103938879/177813083-b8009e1f-7400-4091-abcd-7bb00689c79e.jpeg)

