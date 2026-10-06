<!DOCTYPE html>
<html>
    <head>
        <title>Lapor Barang Ilang</title>
        <style>
body{
background: aqua;

        font-family: Arial, sans-serif;
        line-height: 1.5;
        padding-left: 20px;
    
        margin-bottom: 5px;
    
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
</td>
<tr>
<td>
Tempat Ditemukan
</td>
<td>:</td>
<td>
<td><input type="text" name="tempatditemukan"></td>
</td>
</tr>
<tr>
    <td>waktuditemukan</td>
    <td>:</td>
    <td>
    <td><input type="datetime" name="waktuditemukan"></td>
    </td>
</tr>
<td>STATUS BARANG</td>
<td>:</td>
<td>
<td><input type="button" name="status" values="Ditemukan">Ditemukan</td>
<td><input type="button" name="status" values="Hilang">HILANG</td>
</td>
</tr>
<tr>
    <td>Gambar</td>
    <td>:</td>
    <td>
    <td><input type="url" name="gambar">
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