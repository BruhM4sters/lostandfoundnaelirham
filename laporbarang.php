<!DOCTYPE html>
<html>
    <head>
        <title>Lapor Barang Ilang</title>
        <style>
body{
background: aqua;

}
        </style>
    </head>
    <body>
<h1>LAPOR BARANG HILANG</h1>
<a href="homepage.php">HOME</a>
<br/>
<br/>
<card>
<tr>
<td>
    NAMA BARANG
</td>
<td>:</td>
<td>
<td><input type="text" name="namabarang"></td>
</tr>
<tr>
<td>
Tempat Ditemukan
</td>
<td>:</td>
<td>
<td><input type="text" id="tempatditemulan" name="tempatditemukan"></td>
</tr>
<tr>
    <td>waktuditemukan</td>
    <td>:</td>
    <td>
    <td><input type="datetime" id="waktuditemukan" name="waktuditemukan"></td>
</tr>
<tr>
<td>STATUS BARANG</td>
<td>:</td>
<td>
<td><input type="radio" name="status" values="Ditemukan">Ditemukan</td>
<td><input type="radio" name="status" values="Hilang">HILANG</td>
</td>
</tr>
</tr>
<tr>
    <td>Gambar</td>
    <td>:</td>
    <td>
    <td><input type="file"  id="gambar" name="gambar">
    </td>
</tr>
<tr>
    <td>
            <td><input type="submit" value="SAVE"></td>
    </td>
</tr>
</tr>
</card>
    </body>
</html>