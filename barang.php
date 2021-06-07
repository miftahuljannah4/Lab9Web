<?php
include("koneksi.php");
// query untuk menampilkan data
$sql = 'SELECT * FROM barang';
$result = mysqli_query($conn, $sql);
$sq1 = 'SELECT * FROM pelanggan';
$resul = mysqli_query($conn, $sq1);
$sq2 = 'SELECT * FROM penjualan';
$resull = mysqli_query($conn, $sq2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Sistem Penjualan</title>
</head>

<body>
    <div class="container">
        <h1>Sistem Penjualan</h1>
        <div class="main">
            <table class="styled-table">
                <tr>
                    <h2>Table barang</a></h2>
                </tr>
                <tr>
                    <th>id barang</th>
                    <th>Nama barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
                <?php if ($result) : ?>
                    <?php while ($row = mysqli_fetch_array($result)) : ?>
                        <tr>
                            <td><?= $row['id_barang']; ?></td>
                            <td><?= $row['nama_barang']; ?></td>
                            <td><?= $row['harga']; ?></td>
                            <td><?= $row['stok']; ?></td>

                            <td><a href="ubah.php?id=<?php echo $data['id_produk']; ?>" title="edit data"><button>Edit</button></a> |
                                <a href="hapus.php?id=<?php echo $data['id_produk']; ?>" title="edit data"><button>Hapus</button></a>
                            </td>
                        </tr>
                    <?php endwhile;
                else : ?>
                    <tr>
                        <td colspan="7">Belum ada data</td>
                    </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>
</body>

<body>
    <div class="container">
        <h1></h1>
        <div class="main">
            <table class="styled-table">
                <tr>
                    <h2>Table pelanggan</a></h2>
                </tr>
                <tr>
                    <th>id barang</th>
                    <th>Nama</th>
                    <th>email</th>
                    <th>Aksi</th>
                </tr>
                <?php if ($resul) : ?>
                    <?php while ($row = mysqli_fetch_array($resul)) : ?>
                        <tr>
                            <td><?= $row['id_pelanggan']; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['email']; ?></td>

                            <td><a href="ubah.php?id=<?php echo $data['id_produk']; ?>" title="edit data"><button>Edit</button></a> |
                                <a href="hapus.php?id=<?php echo $data['id_produk']; ?>" title="edit data"><button>Hapus</button></a>
                            </td>
                        </tr>
                    <?php endwhile;
                else : ?>
                    <tr>
                        <td colspan="7">Belum ada data</td>
                    </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>
</body>

<body>
    <div class="container">
        <h1></h1>
        <div class="main">
            <table class="styled-table">
                <tr>
                    <h2>Table Penjualan</a></h2>
                </tr>
                <tr>
                    <th>id barang</th>
                    <th>Nama barang</th>
                    <th>harga</th>
                    <th>terjual</th>
                    <th>Aksi</th>
                </tr>
                <?php if ($resull) : ?>
                    <?php while ($row = mysqli_fetch_array($resull)) : ?>
                        <tr>
                            <td><?= $row['id_barang']; ?></td>
                            <td><?= $row['nama_barang']; ?></td>
                            <td><?= $row['harga']; ?></td>
                            <td><?= $row['terjual']; ?></td>

                            <td><a href="ubah.php?id=<?php echo $data['id_produk']; ?>" title="edit data"><button>Edit</button></a> |
                                <a href="hapus.php?id=<?php echo $data['id_produk']; ?>" title="edit data"><button>Hapus</button></a>
                            </td>
                        </tr>
                    <?php endwhile;
                else : ?>
                    <tr>
                        <td colspan="7">Belum ada data</td>
                    </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>
</body>

</html>