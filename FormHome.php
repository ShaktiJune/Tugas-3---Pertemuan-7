<!DOCTYPE html>
<html>
<head>
    <title>Biodata Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Biodata Form</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="name">Nama Lengkap:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="gender">Jenis Kelamin:</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="">- Pilih Jenis Kelamin -</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="dob">Tempat Tanggal Lahir:</label>
                <input type="text" class="form-control" id="dob" name="dob" placeholder="Contoh: Jakarta, 01 Januari 1990" required>
            </div>
            <div class="form-group">
                <label for="religion">Agama:</label>
                <input type="text" class="form-control" id="religion" name="religion" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat Lengkap:</label>
                <textarea class="form-control" id="address" name="address" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>