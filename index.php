<?php
// Include query yang ingin ditampilkan pada halaman ini
include('Query/select_mahasiswa.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="Assets/css/master.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
    <center><h1>Daftar Mahasiswa</h1></center>

    <!-- Tabel Daftar Mahasiswa -->
    <table width=80% border=1>
        <tr>
            <th><center>NRP</center></th>
            <th><center>Nama</center></th>
            <th><center>Fakultas</center></th>
            <th><center>Jurusan</center></th>
            <th><center>Tindakan</center></th>
        </tr>

        <!--
            Load data mahasiswa dari array.
            Variable $mahasiswa mengacu pada
            Query\select_mahasiswa.php.
        -->
        <?php
            foreach ($mahasiswa->array as $m) {
                echo "
                    <tr>

                        <!-- Tampilkan data sesuai dengan nama field pada database -->

                        <td>{$m['nrp']}</td>
                        <td>{$m['nama']}</td>
                        <td>{$m['fakultas']}</td>
                        <td>{$m['jurusan']}</td>

                        <!-- Tombol untuk edit dan delete entri -->

                        <td>
                            <center>
                                <a href='edit.php?id={$m['nrp']}' class='button yellow'>Edit</a>
                                <a href='delete.php?id={$m['nrp']}' class='button red'>Delete</a>
                            </center>
                        </td>

                    </tr>
                ";
            }
        ?>
    </table>
    <br>

    <!-- Tombol untuk menambahkan mahasiswa -->
    <center><a href="add.php" class="button green">Tambah Mahasiswa</a></center>

</body>
</html>
