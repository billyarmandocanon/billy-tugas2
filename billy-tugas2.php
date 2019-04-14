<?php
//identifikasikan semua nilai dari variable
$NamaLengkap = "Billy Armando Canon";
$Nim = "1514321018";
$Jurusan = "Teknik Informatika";
$Angkatan = "2015";
$TanggalLahir = "Surabaya, 23 November 1997";
?>
<table>
<tr>
<td><?php echo "Nama Lengkap";?>/td>
<td><?php echo ":"; ?></td>
<td><?php echo $NamaLengkap ?>></td>
<td rowspan="9">
<img src="WIN_20181121_21_57_15_Pro.jpg" width="130" height="200">
</td>
</tr>

<tr>
<td><?php echo "NIM"; ?></td>
<td><?php echo ":"; ?></td>
<td><?php echo $Nim ;?></td>
</tr>

<tr>
<td><?php echo "Jurusan"; ?></td>
<td><?php echo ":"; ?></td>
<td><?php echo $Jurusan ;?></td>
</tr>

<tr>
<td><?php echo "Angkatan"; ?></td>
<td><?php echo ":"; ?></td>
<td><?php echo $Angkatan ;?></td>
</tr>

<tr>
<td><?php echo "Tempat,Tanggal Lahir"; ?></td>
<td><?php echo ":"; ?></td>
<td><?php echo $TanggalLahir ;?></td>
</tr>

</table>