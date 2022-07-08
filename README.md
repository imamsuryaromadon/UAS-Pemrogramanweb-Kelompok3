# UAS_KELOMPOK_3
UAS Mata Kuliah Pemrograman Web 2 
kelas 06TPLM007

Disusun oleh kelompok 3 :

1. IMAM SURYA ROMADON - 191011401083
2. M. BAGAS JULIYANTO - 191011401177
3. Katarina Radu Pala – 191011401102
4. Khasanatun – 191011401212
5. Ikang Fauzi - 171011402351


link Hosting :	http://pemrowebimam.infinityfreeapp.com/ atau https://imamsurya17.000webhostapp.com/ di hosting oleh Imam surya romadon & M Bagas Juliyanto,

Sebagai mana hasil kerja UAS ini saya disini untuk menginfokan kepada bapak dosen, kontribusi dalam pengerjaan hanya saya dengan imam mohon untuk dibedakan hasil penilaian dari bapak dosen. 
TerimaKasih banyak pak

(Mohon maaf sebelumnya pak kami Masih mengalami kendala saat drop ke Webhost Segera kami Benarkan di alamat webhost tersebut)


Aplikasi php sederhana yang disimpan kedalam database mysql
Sistem aplikasi ini adalah web base yang dikembangkan dengan menggunakan bahasa pemrograman PHP, HTML,CSS, JavaScript , ditambahkan  Bootstrap dan basis data dengaan MySQL. 
Aplikasi ini menerapkan operasi operasi CRUD (Create, Read, Update, dan Delete) dengan bahasa PHP dan menyimpan database di MySQL.

Berikut fungsi PHP dari setiap fitur Aplikasi Data :
Index.php

Index.php ini merupakan tampilan halaman website setelah user berhasil login. Pada halamain ini menampilkan Alat Pelindung Diri, Logistik Mahasiswa, Bantuan kuota Mahasiswa, Hand Sanitizer, Sembako masyarakat. Pada halaman ini juga, kita dapat melakukan entri Jumlah dana dalam Rp.
• Nama Lengkap.
• No HP.
• Email.
• Menampilkan data penerimaan bantuan sosial covid19 yang sudah diinput cetak format pdf.

koneksi.php

koneksi.php berfungsi untuk mengkoneksikan atau mengubungkan form dengan database MySQL, 
sehingga user dapat melakukan operasi CRUD. Dengan menggunakan fugsi mysqli_connect(), yang didalamnya terdapat komponen host, nama database, username dan password.

simpan.php
 
simpan.php ini berfungsi untuk menyimpan data, terdapat fungsi $input = "I "INSERT INTO data VALUES(NULL, '$jenis_alokasi', '$jumlah_dana', '$nama_lengkap', '$nohp', '$email')"; dimana fungsi tersebut untuk menyompdat data ke dalam database ditambah dengan fungsi  include('koneksi.php');, yang menghubungkan ke database MySQL.

edit.php
 
edit.php ini berfungsi untuk mengubah data penerima Bantuan covid-19 yang sudah diinput dan memperbaharui data yang terdapat didalam database MySQL dengan data yang diinput pada formedit. 
 
Didalam nya terdapat fungsi php $query = "UPDATE data SET jenis_alokasi='$jenis_alokasi' , jumlah_dana='$jumlah_dana' , nama_lengkap='$nama_lengkap' , nohp='$nohp', email='$email' WHERE id='$id' ";
delete.php
 
hapus.php berfunsgi untuk menghapus data covid-19 yang terdapat pada tampilan data. Terdapat sintax $query = "DELETE FROM data WHERE id = '$id' "; yang berfungsi untuk mengkoneksikan ke database MySQL bahwa data tersebut dihapus.

cetak.php
 
cetak.php adalah file yang digunakan untuk mencetak data pasien covid-19 pada masing-masing provinsi. Terdapat sintax window.print(); yang digunakan untuk mencetak sebuah halaman website. File dokemen hasil cetak dalam format PDF.

logout.php
 
Logout.php adalah file yang digunakan untuk proses keluar dari program aplikasi. Logout ini untuk menjaga keamanan sebuah akun agar tidak digunakan oleh orang lain. Terdapat sintax session_destroy(); yang berfungsi untuk  menghapus semua session data di server. 
Setelah berhasil melakukan logout, user akan diarahkan kembali ke halaman login.php.


INI HASIL DARI OUTPUT KELOMPOK 3 
![WhatsApp Image 2022-07-08 at 15 50 27](https://user-images.githubusercontent.com/103942647/177962866-638981bf-37f2-4d03-9b4d-09ea40336b7f.jpeg)
![WhatsApp Image 2022-07-08 at 15 51 21](https://user-images.githubusercontent.com/103942647/177962877-21d79d69-219c-4197-a6e7-15cac5def4a9.jpeg)
![WhatsApp Image 2022-07-08 at 15 52 20](https://user-images.githubusercontent.com/103942647/177962881-0d29060a-8c57-45c8-8f23-581e6c4f0429.jpeg)
![WhatsApp Image 2022-07-08 at 15 52 51](https://user-images.githubusercontent.com/103942647/177962885-70ede979-eef9-4818-9c1c-3a1b0522a056.jpeg)
![WhatsApp Image 2022-07-08 at 15 53 55 (1)](https://user-images.githubusercontent.com/103942647/177962888-c24f33f0-1021-4fb0-9f20-7d1e53a4aa8d.jpeg)
![WhatsApp Image 2022-07-08 at 15 53 55](https://user-images.githubusercontent.com/103942647/177962892-921a6eb9-7f65-49fd-a454-50046f0627c5.jpeg)
![WhatsApp Image 2022-07-08 at 15 54 06](https://user-images.githubusercontent.com/103942647/177962897-96e6787e-301f-4a52-9a07-eceed891014d.jpeg)
![WhatsApp Image 2022-07-08 at 15 56 19](https://user-images.githubusercontent.com/103942647/177962902-33602be8-d395-46ef-8f9c-2d2daac0c794.jpeg)
![WhatsApp Image 2022-07-08 at 15 57 48](https://user-images.githubusercontent.com/103942647/177962909-520f1c89-9d79-43e0-8cc9-8bd9ce96465a.jpeg)



BUKTI PEMBAYARAN
![bagas UAS](https://user-images.githubusercontent.com/103942647/177918729-0391f005-4103-4983-9b2e-0658d15adb09.png)
![imam pembayaran](https://user-images.githubusercontent.com/103942647/177918734-5aa337fc-df72-4541-a394-e75241a75568.png)
![katun pembayaran](https://user-images.githubusercontent.com/103942647/177918724-13258909-25eb-468d-a97d-6217259c40b2.jpg)
![karin pembayaran](https://user-images.githubusercontent.com/103942647/177918736-4be47483-f8ec-4113-a079-843b480b5f6b.jpg)


