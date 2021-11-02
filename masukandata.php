<?php
    session_start()
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            body {background-color: aquamarine;}
        </style>
        <title>Database Buku - Create</title>
    </head>

        <body>
        <h1>Masukan Data Buku</h1>
        <form action="simpandata.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>NIS Siswa</td>
                    <td>:</td>
                    <td><input type="text" name="nis"></td>
                </tr>
                <tr>
                    <td>Nama Buku</td>
                    <td>:</td>
                    <td><input type="text" name="nama_buku"></td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td>:</td>
                    <td><input type="text" name="judul"></td>
                </tr>
                <tr>
                    <td>Genre</td> 
                    <td>:</td>
                    <td><textarea type="text" name="genre"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    
                    <td><button>Simpan Data</button></td>
                </tr>
            </table>
        </form>

        <?php
            if(isset($_SESSION["message"])){
                echo $_SESSION["message"];
                unset($_SESSION["message"]);
            }
        ?>
    </body>
</html>