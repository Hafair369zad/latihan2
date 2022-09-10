<?php
include "config.php";
?>

<table width="50%" border="0" align="center">
<tr bgcolor="#CCCCCC">
<td width="10%"><div align="center"><strong>No</strong></div></td>
<td width="15%"><div align="center"><strong>NRP</strong></div></td>
<td width="20%"><div align="center"><strong>Id jurusan</strong></div></td>
<td width="40%"><div align="center"><strong>Nama Mahasiswa</strong></div></td>
<td width="25%"><div align="center"><strong>Alamat</strong></div></td>
<td width="15%"><div align="center"><strong>No HP</strong></div></td>
<td width="15%"><div align="center"><strong>Kelas</strong></div></td>
</tr>

<?php
//buat isi excel
$query = mysqli_query($kon,"select * from tb_mhs");
$no = 1;
while($row = mysqli_fetch_array($query))
{
?>

<tr>
    <td><?php echo $no;?></td>
    <td><?php echo $row['NRP']; ?></td>
    <td><?php echo $row['ID_JURUSAN']; ?></td>
    <td><?php echo $row['NAMA_MHS']; ?></td>
    <td><?php echo $row['ALAMAT']; ?></td>
    <td><?php echo $row['NO_HP']; ?></td>
    <td><?php echo $row['KELAS']; ?></td>
</tr>

<?php
$no++;
}
?>
</table>
<?php
header("Content-Type: application/vnd.ms-word");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=laporan.doc");
?>