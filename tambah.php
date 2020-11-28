<html>
<head>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#" >SMK TELKOM PURWOKERTO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" arial-controls="navbarSupportedContent " aria-expanded="false" arial- table="Toggler navigasion">
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
    <h2>Tambah Siswa</h2>
    <hr>

<form action="tambah_proses.php" method="post">
 <table cellpadding="3" cellspacing="0">
  <tr bgcolor="#FF7F50">
  <tr>
   <td>NIS</td>
   <td>:</td>
  
   <td><input type="text" name="nis" required></td>
  </tr>
  <tr>
   <td>Nama Lengkap</td>
   <td>:</td>
   <td><input type="text" name="nama" size="30" required></td>
  </tr>
  <tr>
   <td>Kelas</td>
  <td>:</td>
   <td>
    <select name="kelas" required>
    <option value="">Pilih Kelas</option>
    <option value="X">X</option>
    <option value="XI">XI</option>
    <option value="XII">XII</option>
    </select>
   </td>
  </tr>
  <tr>
   <td>Jurusan</td>
   <td>:</td>
   <td>
    <select name="jurusan" required>
     <option value="">Pilih Jurusan</option>
     <option value="RPL">Rekayasa Perangkat Lunak</option>
     <option value="TKJ">Teknik Komputer dan Jaringan</option>
     <option value="MMM">Multimedia</option>
    </select>
   </td>
  </tr>

  <tr>
   <td>&nbsp;</td>
   <td></td>
   <td>
    <input type="submit" name="tambah" value="Simpan">
  </td>
  </tr>
 </table>
</form>
</body>
</html>