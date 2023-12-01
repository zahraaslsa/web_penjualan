<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
    if ('tambah_supplier'($_POST) > 0) {
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'data_supplier.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan');
        document.location.href = 'data_supplier.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Supplier</title>
</head>

<body>
    <h1>Tambah Supplier</h1>
    <form action="" method="post">
        <div>
            <label for="nama">Nama Supplier :</label>
            <input type="text" name="nama_supplier" id="nama_supplier" required>
        </div>
        <div>
            <label for="no_telp">no_telpon :</label>
            <input type="number" name="no_telpon" id="no_telpon" required>
        </div>
        <div>
            <label for="alamat">alamat :</label>
            <input type="text" name="alamat" id="alamat" required>
        </div>
        <button type="submit" name="tambah">Tambah Data</button>
    </form>
</body>

</html>