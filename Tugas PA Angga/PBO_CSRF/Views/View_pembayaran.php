<?php 

include '../Controllers/Controller_pembayaran.php';
 // Membuat Object dari Class siswa
$pembayaran = new Controller_pembayaran();
$GetPembayaran = $pembayaran->GetData_All();

// untuk mengecek di object $siswa ada berapa banyak Property
// echo var_dump($GetSiswa);
?>


        <h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
        <h2>CRUD and CSRF</h2>
        <h3>
            <a href="View_siswa.php">| Siswa |</a> 
            <a href="View_kelas.php"> Kelas |</a> 
            <a href="View_petugas.php"> Petugas |</a> 
            <a href="View_spp.php"> SPP |</a> 
            <a href="#"> Pembayaran |</a> 
        </h3>
        <h3>Table Pembayaran</h3> <h3><a href="View_post_pembayaran.php">Add Data</a></h3>


        <table border="1">
            <tr>
                <th>No</th>
                <th>ID Pembayaran</th>
                <th>Nama Petugas</th>
                <th>Nisn</th>
                <th>Tanggal Bayar</th>
                <th>Bulan Bayar</th>
                <th>Tahun Bayar</th>
                <th>ID Spp</th>
                <th>Jumlah Bayar</th>
                <th>Tools</th>

            </tr>
            <?php
                // Decision validation variabel
                if(isset($GetPembayaran))
                {
                        $no = 1;
                        foreach($GetPembayaran as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['id_pembayaran']; ?></td>
                            <td><?php echo $Get['nama_petugas']; ?></td>
                            <td><?php echo $Get['nisn']; ?></td>
                            <td><?php echo $Get['tgl_bayar']; ?></td>
                            <td><?php echo $Get['bulan_dibayar']; ?></td>
                            <td><?php echo $Get['tahun_dibayar']; ?></td>
                            <td><?php echo $Get['id_spp']; ?></td>
                            <td><?php echo $Get['jumlah_bayar']; ?></td>
                            
                            <td>
                                <a href="../Views/View_put_pembayaran.php?id_pembayaran=<?php echo $Get['id_pembayaran'] ?>">
                                <input type="submit" name="proses" value="View"></input></a>
                                <a href="../Config/Routes.php?function=delete_pembayaran&id_pembayaran=<?php echo $Get['id_pembayaran'] ?>" onclick="return konfirmasi(<?php echo $Get['id_pembayaran']?>)">
                                <input type="submit" name="proses" value="Delete"></input></a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>
        <script>
            var a=id_pembayaran;
            function konfirmasi()
            {
                return confirm('Apakah Anda yakin Ingin menghapus Data ini ?');
            }
        </script>