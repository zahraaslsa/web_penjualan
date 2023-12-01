<?php
require 'functions.php';
$supplier = query("select * from supplier");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>Daftar Supplier</h1>
    <button>
        <a href="tambah_supplier.php">tambah supplier</a>
    </button>
    <table border="1" cellpadding="5">
        <tr>
            <th>NO.</th>
            <th>ID. supplier</th>
            <th>Nama Supplier</th>
            <th>No telpon</th>
            <th>Alamat</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($supplier as $spl) { ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $spl['id_supplier']; ?></td>
                <td><?= $spl['nama_supplier']; ?></td>
                <td><?= $spl['no_telp']; ?></td>
                <td><?= $spl['alamat']; ?></td>

            </tr>
            <?php $i++; ?>
        <?php } ?>
    </table>
</body>

</html>