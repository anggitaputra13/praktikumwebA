<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<style>
    .masukan {
	background-color: #c5c4c4;
	border-radius: 5px;
	width: 90%;
    }
    .selek {
        position: relative;
        font-family: Arial;
        background-color: #c5c4c4;
    }
    .btn-tambah {
        border-radius: 10px;
        background-color: #c5c4c4;
    }
    .tabel, td {
        font-weight: bold;
        margin-left: 39%;
    }
    h1 {
        font-family: 'Pacifico', cursive;
        text-align: center;
    }
    .lihat-tabel {
        border-bottom: 1px solid #ff9999;
        margin-left: 26%;
        border-top: 5px solid #ff9999;
        border-top-style: double;
        width: 60%;
    }
    .jarak td {
        padding-left: 2%;
        padding-right: 2%;
        border-top: 1px solid;
        text-align: center;
        color: black;
    }
    .jarak, th {
        width: 16%;
	color: #8000ff;
}
</style>
<body>
	<h1>Daftar</h1>
	<table class="lihat-tabel">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>No. Telp.</th>
			<th class="ket">Keterangan</th>
		</tr>
	<?php
		include 'konek.php';
		$getData = $koneksi->query("SELECT * FROM tb_biodata");
		while($fetchData = $getData->fetch_assoc()){
	?>
		<tr class="jarak">
			<td><?=$fetchData["NIM"]?></td>
			<td><?=$fetchData["Nama"]?></td>
			<td><?=$fetchData["Jenis_kelamin"]?></td>
			<td><?=$fetchData["Tanggal_lahir"]?></td>
			<td><?=$fetchData["Alamat"]?></td>
			<td><?=$fetchData["No_telepon"]?></td>
			<td>
				<a href="edit-data.php?id=<?=$fetchData["NIM"]?>">Edit</a>
				<a href="">/</a>
				<a href="delete-data.php?id=<?=$fetchData["NIM"]?>">Hapus</a>
			</td>
		</tr>
	<?php
		}
	?>
	</table>
	<br>
	<button style="margin-left: 26%; background-color: #0040ff;"><a style="text-decoration: none; color: white; "href="index.php">Insert Data</a></button>
</body>
</html>