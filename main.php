<html>
<head>
<title>Contoh Pengambilan Data Jamak</title>
</head>
<body>
<h2>Daftar Biodata</h2>
<table width="700px" border="1">
	<tr style="background:#ccc">
		<th width="10%">ID</th>
		<th width="25%">Nama</th>
		<th width="45%">Alamat</th>
		<th>Aksi</th>		
	</tr>
	<?php
		include("koneksi.php");
		$sql = "SELECT id,nama,alamat FROM biodata";
		$hasil = mysqli_query($koneksi,$sql) or exit("Error query: <b>".$sql."</b>.");
		while($data = mysqli_fetch_assoc($hasil)){ 
	?>
	<tr>
		<td align="center"><?php echo $data['id']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['alamat']; ?></td>
		<!-- tambahan -->
		<td>
			<a href="latihan06.php?id=<?php echo $data['id']; ?>">
			Detail
			</a>
			<a href="latihan12.php?id=<?php echo $data['id']; ?>">
			Ubah
			</a>
			<a href="latihan14.php?id=<?php echo $data['id']; ?>">
			Hapus
			</a>
		</td>
	</tr>
	<?php
		}
	?>
</table>
</body>
</html>
