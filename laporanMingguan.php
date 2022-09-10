<?php
include "config.php";
?>

<table width="50%" border="0" align="center">
<tr bgcolor="#CCCCCC">
<td width="10%"><div align="center"><strong>No</strong></div></td>
<td width="15%"><div align="center"><strong>Id Transaksi</strong></div></td>
<td width="20%"><div align="center"><strong>NRP</strong></div></td>
<td width="40%"><div align="center"><strong>Id Buku</strong></div></td>
<td width="25%"><div align="center"><strong>Tanggal Peminjaman</strong></div></td>
<td width="15%"><div align="center"><strong>Tanggal Pengembalian</strong></div></td>
</tr>

<?php
//buat isi excel
$query = mysqli_query($kon,"SELECT * FROM tb_trc WHERE WEEKOFYEAR(DATE_PINJAM)=WEEKOFYEAR(NOW())-4;");
$no = 1;
while($row = mysqli_fetch_array($query))
{
?>

<tr>
    <td><?php echo $no;?></td>
    <td><?php echo $row['ID_TRC']; ?></td>
    <td><?php echo $row['NRP']; ?></td>
    <td><?php echo $row['ID_BUKU']; ?></td>
    <td><?php echo $row['DATE_PINJAM']; ?></td>
    <td><?php echo $row['DATE_PENGEMBALIAN']; ?></td>
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