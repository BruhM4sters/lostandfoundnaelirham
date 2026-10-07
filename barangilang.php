<!DOCTYPE html>
<html>
<head>
    <title> LAPORAN BARANG HILANG</title>
<style>
body{
    background-color: aquamarine;
    
}
</style>
</head>
<body>
    <a href="homepage.php">HOME</a>
    <br/>
    <br/>
    <form method="post" action=""
    <card borde="1">
        <tr>
            <th>id</th>
            <th>gambar</th>
            <th>namabarang</th>
            <th>tempatditemukan</th>
            <th>waktuditemukan</th>
            <th>status</th>
        </tr>
        <?php
        include 'koneksi.php';
        $id = 1;
        $lost_and_found= mysqli_query($koneksi,"select * from baranghilang");
        while ($v = mysqli_fetch_array($lost_and_found)) { 
            ?>
            <tr>
                <td><?php echo $id++; ?></td>
                        <td><?php echo $v['gambar']; ?></td>
        <td><?php echo $v['namabarang']; ?></td>
        <td><?php echo $v['tempatditemukan']; ?></td>
        <td><?php echo $v['waktuditemukan']; ?></td>
                <td><?php echo $v['status']; ?></td>
<td>
     <a href="update.php?id=<?php echo $v['id']; ?>"> UPADATE</a>
<a href="delete.php?id=<?php echo $v['id']; ?>" >DELETE</a>
</td>
            </tr>
            <?php
        }
?>
    </card>
</body>
</html>