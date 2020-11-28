<html>
<head>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#" >SMK TELKOM PURWOKERTO</a>
      <button class="navbar-togler" type="button" data-togle="collapse" data-target="#navbarSupportedContent" arial-controls="navbarSupportedContent " aria-expanded="false" arial-table="Toggler navigasion">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Beranda</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="tambah.php">Tambah</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
<div class="container" style="margin-top: 20px">
    <h2>Daftar Siswa</h2>
    <hr>
<?php
include('koneksi.php');
$id=$_GET['id'];
$show=mysqli_query($koneksi,"SELECT * FROM siswa WHERE id='$id'");
 if(mysqli_num_rows($show)==0){
  echo'<script>window.history.back()</script>';
 }else{
  $data=mysqli_fetch_assoc($show);
 }
?>
<form action="edit_proses.php" method="post">
<input type="hidden" name="id" value="<?php echo $id;?>">
<table cellpadding="3" cellspancing="0">
<tr bgcolor="#FF7F50">
 <tr>
  <td>NIS</td>
  <td>:</td>
  <td><input type="text" name="nis" value="<?php echo $data['nis'];?>"required></td>
 </tr>
 <tr>
  <td>Nama Lengkap</td>
  <td>:</td>
  <td><input type="text" name="nama" size="30" value="<?php echo $data['nama'];?>"required></td>
 </tr>
 <tr>
  <td>Kelas</td>
  <td>:</td>
  <td>
   <select name="kelas" required>
    <option value="">Pilih Kelas</option>
    <option value="X" ><?php if($data['kelas']=='X'){echo'selected';}?>>X</option>
    <option value="XI" ><?php if($data['kelas']=='XI'){echo'selected';}?>>XI</option>
    <option value="XII" ><?php if($data['kelas']=='XII'){echo'selected';}?>>XII</option>
   </select>
  </td>
 </tr>
 <tr>
  <td>Jurusan</td>
  <td>:</td>
  <td>
   <select name="jurusan" required>
    <option value="">Pilih Jurusan</option>
    <option value="RPL" ><?php if($data['jurusan']=='RPL'){echo'selected';}?>>Rekayasa Perangkat Lunak</option>
    <option value="TKJ" ><?php if($data['jurusan']=='TKJ'){echo'selected';}?>>Teknik Komputer dan Jaringan</option>
    <option value="MM" ><?php if($data['jurusan']=='MM'){echo'selected';}?>>Multimedia</option>
   </select>
  </td>
 </tr >
  <td>&nbsp;</td>
  <td><input type="submit" name="simpan" value="Simpan">
  </td>
 </tr>
</table>
</form>
</body>
</html>