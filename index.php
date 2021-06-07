<?php
include("koneksi.php");

// query untuk menampilkan data 
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Data Barang</title>
    <style>
        .table1 {
            font-family: sans-serif;
            color: #444;
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #f2f5f7;
        }

        .table1 tr th {
            background: #35A9DB;
            color: #fff;
            font-weight: normal;
        }

        .table1,
        th,
        td {
            padding: 8px 20px;
            text-align: left;
        }

        .table1 tr:hover {
            background-color: #f5f5f5;
        }

        .table1 tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <?php require('header.php'); ?>
    <div class="container">
        <h1>Data Barang</h1>
        <hr />
        <a href="tambah.php">+ Tambah Barang</a><br /><br /right>
        <div class="main">
            <table style="width:100%" class="table1">
                <tr>
                    <th>Id</th>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Katagori</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th colspan=2>
                        <center>Aksi</center>
                    </th>
                </tr>
                <?php if ($result) : ?>
                    <?php while ($row = mysqli_fetch_array($result)) : ?>
                        <tr>
                            <td><?= $row['id_barang']; ?></td>
                            <td><img src="gambar/<?= $row['gambar']; ?>" alt="<?= $row['nama']; ?>"></td>

                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['kategori']; ?></td>
                            <td><?= $row['harga_beli']; ?></td>
                            <td><?= $row['harga_jual']; ?></td>
                            <td><?= $row['stok']; ?></td>
                            <td align=right width=50px><a href="ubah.php?id=<?= $row['id_barang']; ?>">EDIT</a></td>
                            <td align=right width=50px><a href="hapus.php?id=<?= $row['id_barang']; ?>">Hapus</a></td>
                        </tr>
                    <?php endwhile;
                else : ?>

                <?php endif; ?>
            </table>
        </div>
    </div>
</body>
<?php require('footer.php'); ?>

</html>
© 