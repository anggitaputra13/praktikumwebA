<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tugas CRUD</title>
</head>
<style>
    .tengah{
        position: absolute;	
        width: 500px;	
        height: 500px;
        margin-left:auto;
        margin-right:auto;
        margin-top:auto;
        margin-bottom:auto;
        left:0;
        right:0;
        top:0;
        bottom:0;
        padding: 5px;
        border: 1px solid #000000;
        padding-left: 10px;
    }
    .judul{
        text-align: center;
    }  
    .btn{
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 10px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 13px;
    } 
</style>
<body>
    <div class="tengah">
    <h1 class="judul">Form Inputan</h1><br>
	<form action="insert.php" method="POST">
	<div class="tabel">
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input class="masukan" type="text" name="nim" placeholder="NIM"></input></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input class="masukan" type="text" name="nama" placeholder="Nama Lengkap"></input></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" value="Laki-laki" name="jk">Laki-laki</input> <input type="radio" value="Perempuan" name="jk">Perempuan</input></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="ttl" value="<?php echo date('Y-m-d'); ?>"></input></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea class="masukan" name="alamat" placeholder="Masukan Alamat"></textarea></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td>:</td>
				<td><input class="masukan" type="text" name="telp" placeholder="No. Telp."></input></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				
            </tr>
            <tr>
				<td></td>
				<td></td>
				<td><button class="btn" name="kirim">Input</button></td>
            </tr>
			<tr>
				<td><a href="view.php">Lihat daftar data disini !</a></td>
			</tr>
		</table>
	</div>
	</form>
    </div>
</body>
</html>