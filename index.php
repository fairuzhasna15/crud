
 <!DOCTYPE html>
 <html>
 <head>
  <title>Daftar Siswa</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
 <body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#" >SMK Telkom Purwokerto</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" arial-controls="navbar-toggler " aria-expanded="false" arial- table="toggler navigasion">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
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
  <table cellpadding="5" cellspacing="0" border="1">
  <tr bgcolor="#FF7F50">
  <th>No.</th>
  <th>NIS</th>
  <th>Nama Lengkap</th>
  <th>Kelas</th>
  <th>Jurusan</th>
  <th>Opsi</th>

<?php
include('koneksi.php');
$query=mysqli_query($koneksi,"SELECT * FROM siswa ORDER BY NIS")or die('');
 if(mysqli_num_rows($query)==0){
  echo'<tr><td colspan="6">Tidak ada data!</td></tr>';
 }else{
  $no=1;
  while($data=mysqli_fetch_assoc($query)){
   echo'<tr>';
   echo"<td><center>$no.</center></td>";
   echo"<td>$data[nis]</td>";
   echo'<td>'.$data['nama'].'</td>';
   echo'<td><center>'.$data['kelas'].'</center></td>';
   echo'<td><center>'.$data['jurusan'].'</center></td>';
   echo'<td><center><a href="edit.php?id='.$data['id'].'">Edit</a> / <a href="hapus.php?id='.$data['id'].'"onclick="return confirm(\'Yakin?\')">Hapus</a></center></td>';
   echo'</tr>';
   $no++;
  }
 }
?>
</table>
</body>
</html>