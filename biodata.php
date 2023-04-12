<?php
session_start();
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
    <table class="table">
      <tbody>
        <tr>
          <th>Nama Lengkap</th>
          <td><?php echo isset($_COOKIE['nama']) ? $_COOKIE['nama'] : $_SESSION['nama']; ?></td>
        </tr>
        <