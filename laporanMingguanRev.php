<?php
include "config.php";
?>

<form method="POST">
        <select name="minggu">
            <option selected  value="">Pilih Minggu ke</option>
            <option value="minggu1">Minggu Ke-1</option>
            <option value="minggu2">Minggu Ke-2</option>
            <option value="minggu3">Minggu Ke-3</option>
            <option value="minggu4">Minggu Ke-4</option>
        </select>

        <input type="submit" value="Kirim" name="submit"/>
</form>





<table width="50%" border="0" align="center">
<tr bgcolor="#00FFFF">
<td width="10%"><div align="center"><strong>No</strong></div></td>
<td width="15%"><div align="center"><strong>Id Transaksi</strong></div></td>
<td width="20%"><div align="center"><strong>NRP</strong></div></td>
<td width="40%"><div align="center"><strong>Id Buku</strong></div></td>
<td width="25%"><div align="center"><strong>Tanggal Peminjaman</strong></div></td>
<td width="15%"><div align="center"><strong>Tanggal Pengembalian</strong></div></td>
</tr>

<?php
//buat isi 
if(isset($_POST['submit'])) {

$minggu = $_POST['minggu'];

    if ($minggu =='minggu1'){
        $query = mysqli_query($kon,"SELECT * FROM tb_trc WHERE WEEKOFYEAR(DATE_PINJAM)=WEEKOFYEAR(NOW());");
    } elseif ($minggu=='minggu2'){
        $query = mysqli_query($kon,"SELECT * FROM tb_trc WHERE WEEKOFYEAR(DATE_PINJAM)=WEEKOFYEAR(NOW())+1;");;
    } else if ($minggu=='minggu3'){
        $query = mysqli_query($kon,"SELECT * FROM tb_trc WHERE WEEKOFYEAR(DATE_PINJAM)=WEEKOFYEAR(NOW())+2;");;
    } else {
        $query = mysqli_query($kon,"SELECT * FROM tb_trc WHERE WEEKOFYEAR(DATE_PINJAM)=WEEKOFYEAR(NOW())+3;");;
    }

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
    header("Content-Type: application/vnd.ms-word");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("content-disposition: attachment;filename=laporanMingguan.doc");
    
}
?>
</table>
