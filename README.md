# UAS_KELOMPOK_3
UAS Mata Kuliah Pemrograman Web 2 
kelas 06TPLM007

Disusun oleh kelompok 3 :
1. IMAM SURYA ROMADON - 191011401083
2. M. BAGAS JULIYANTO - 191011401177
3. Katarina Radu Pala – 191011401102
4. Khasanatun – 191011401212
5. Ikang Fauzi - 00000000

Berikut link website Aplikasi : 


Aplikasi php sederhana untuk menangani pasien covid19 disimpan kedalam database mysql
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
![bagas UAS](https://user-images.githubusercontent.com/103942647/177918729-0391f005-4103-4983-9b2e-0658d15adb09.png)
![imam pembayaran](https://user-images.githubusercontent.com/103942647/177918734-5aa337fc-df72-4541-a394-e75241a75568.png)
![katun pembayaran](https://user-images.githubusercontent.com/103942647/177918724-13258909-25eb-468d-a97d-6217259c40b2.jpg)
![karin pembayaran](https://user-images.githubusercontent.com/103942647/177918736-4be47483-f8ec-4113-a079-843b480b5f6b.jpg)


