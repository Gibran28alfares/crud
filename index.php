<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses.php" method="post">
        <label for="nama_produk">Nama Produk</label>
        <input type="text" name="nama_produk" id="nama_produk">
        <label for="keterangan">Keterangan</label>
        <input type="text" name="keterangan" id="keterangan">
        <label for="harga">Harga</label>
        <input type="text" name="harga" id="harga">
        <label for="jumlah">Jumlah</label>
        <input type="text" name="jumlah" id="jumlah">
        <button type="submit" id="submit">Tambah</button>
    </form>

    <table width='80%' border=1>

    <tr>
        <th>Nama</th> <th>keterangan</th> <th>harga</th> <th>jumlah</th><th>edit</th>
    </tr>
    <?php  
    $result = mysqli_query($mysqli, "SELECT * FROM arkademy");
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['nama_produk']."</td>";
        echo "<td>".$data['keterangan']."</td>";
        echo "<td>".$data['harga']."</td>";   
        echo "<td>".$data['jumlah']."</td>";   
        echo "<td><a href='edit.php?id=$data[id]'>Edit</a> | <a href='delete.php?id=$data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>