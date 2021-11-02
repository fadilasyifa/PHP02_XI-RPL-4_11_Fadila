<!DOCTYPE html>
<html>
    <head>
        <title>Database Buku - View</title>
        <style>
            body {background-color: aquamarine;}
        </style>
    </head>
    <body>
        <h1>Tampil Data</h1>
    <?php
        include 'koneksi.php';
        echo "<a href= 'masukandata.php'><button>Add Data</button></a><br>";

    $sql = "SELECT * FROM buku";
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        echo "<br>";
        echo "$a";
        echo "<br>";
        echo "NIS           : " . $baris[1] . "<br>";
        echo "Nama Buku    : " . $baris[2] . "<br>";
        echo "Judul : " . $baris[3] . "<br>";
        echo "Genre        : " . $baris[4] . "<br>";
        echo "<a href='UpdateData.php?id_buku=$baris[0]'><button>Update</button></a>";
        echo "<a href='Deletedata.php?id_buku=$baris[0]'><button>Delete</button></a>";
        $a++;
    }
    $conn->close();

?>