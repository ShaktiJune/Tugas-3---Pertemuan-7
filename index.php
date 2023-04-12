<?php
session_start();
if(isset($_POST['submit'])) {
  // set cookies
  setcookie('nama', $_POST['nama'], time() + (86400 * 30), "/");
  setcookie('jk', $_POST['jk'], time() + (86400 * 30), "/");
  setcookie('ttl', $_POST['ttl'], time() + (86400 * 30), "/");
  setcookie('agama', $_POST['agama'], time() + (86400 * 30), "/");
  setcookie('alamat', $_POST['alamat'], time() + (86400 * 30), "/");

  // set session
  $_SESSION['nama'] = $_POST['nama'];
  $_SESSION['jk'] = $_POST['jk'];
  $_SESSION['ttl'] = $_POST['ttl'];
  $_SESSION['agama'] = $_POST['agama'];
  $_SESSION['alamat'] = $_POST['alamat'];

  header("Location: biodata.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Biodata</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Biodata</h1>
    <form method="POST" action="">
      <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama" required>
      </div>
      <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <select class="form-control" name="jk" required>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
      <div class="form-group">
        <label for="ttl">Tempat Tanggal Lahir</label>
        <input type="text" class="form-control" name="ttl" required>
      </div>
      <div class="form-group">
        <label for="agama">Agama</label>
        <input type="text" class="form-control" name="agama" required>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat Lengkap</label>
        <textarea class="form-control" name="alamat" rows="3" required></textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</body>
</html>