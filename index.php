<!DOCTYPE html>
<html>
<head>
        <!-- data pengunjung  -->
    <title>DATA PENGUNJUNG PERPUSTAKAAN</title>
    <style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>
<body>
    <h2>DATA PENGUNJUNG PERPUSTAKAAN</h2>
    <table>
        <thead>
            <tr>
                <td>NO</td>
                <td>NRP</td>
                <td>ID JURUSAN</td>
                <td>NAMA MAHASISWA</td>
                <td>ALAMAT</td>
                <td>NO HP</td>
                <td>KELAS</td>                
            </tr>
        </thead>
        <?php
        include "config.php";
        $no = 1;
        $query = mysqli_query($kon, 'SELECT * FROM tb_mhs');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['NRP'] ?></td>
                <td><?php echo $data['ID_JURUSAN'] ?></td>
                <td><?php echo $data['NAMA_MHS'] ?></td>
                <td><?php echo $data['ALAMAT'] ?></td>
                <td><?php echo $data['NO_HP'] ?></td>
                <td><?php echo $data['KELAS'] ?></td>
            </tr>
        <?php } ?>
    </table>

            <!-- data buku -->
    <h2>Data Buku</h2>
    <table>
        <thead>
            <tr>
                <td>NO</td>
                <td>ID BUKU</td>
                <td>NAMA BUKU</td>
                <td>NAMA PENERBIT</td>
                <td>TAHUN TERBIT</td>
                <td>JUMLAH HALAMAN</td>               
            </tr>
        </thead>
        <?php
        include "config.php";
        $no = 1;
        $query = mysqli_query($kon, 'SELECT * FROM tb_buku');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['ID_BUKU'] ?></td>
                <td><?php echo $data['NAMA_BUKU'] ?></td>
                <td><?php echo $data['NAMA_PENERBIT'] ?></td>
                <td><?php echo $data['TAHUN_TERBIT'] ?></td>
                <td><?php echo $data['JUMLAH_HALAMAN'] ?></td>
            </tr>
        <?php } ?>
    </table>

            <!-- Data Jurusan  -->
    <h2>Data Jurusan</h2>
    <table>
        <thead>
            <tr>
                <td>NO</td>
                <td>ID JURUSAN</td>
                <td>NAMA JURUSAN</td>              
            </tr>
        </thead>
        <?php
        include "config.php";
        $no = 1;
        $query = mysqli_query($kon, 'SELECT * FROM tb_jurusan');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['ID_JURUSAN'] ?></td>
                <td><?php echo $data['NAMA_JURUSAN'] ?></td>
            </tr>
        <?php } ?>
    </table>



</body>
</html>