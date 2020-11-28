<?php
//karena diform menggunakan POST jadi disini kita menggunakan $_POST
if(isset($_POST['tambah'])){
 //include artinya memanggil file koneksi.php
 include('koneksi.php');
 $nis=$_POST['nis'];
 $nama=$_POST['nama'];
 $kelas=$_POST['kelas'];
 $jurusan=$_POST['jurusan'];
 //kode untuk inputan supaya apa yang diketik diform halaman tambah tadi bisa terinput ke database siswa
 $input=mysqli_query($koneksi,"INSERT INTO siswa VALUES(NULL,'$nis','$nama','$kelas','$jurusan')")or
 die(mysqli_error());
 //jika inputan berhasil akan tampil teks berhasil
 if($koneksi){
  echo'Data berhasil ditambahkan! ';
  echo'<a href="index.php">Kembali</a>';
 //jika inputan gagal akan tampil teks gagal
 }else{
  echo'Gagal menambahkan data! ';
  echo'<a href="index.php">Kembali</a>';
 }
 //jika terjadi kesalahan dalam menambah maka akan kembali ke halaman sebelumnya
}else{
 echo'<script>window.history.back()</script>';
}
?>