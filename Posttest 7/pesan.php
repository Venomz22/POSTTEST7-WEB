<?php 
    require 'config.php';

    if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $pesan = $_POST['pesan'];
        $tgl = date("Y/m/d");
        $lewat = $_POST['lewat'];
        $bayar = $_POST['bayar'];
        $file = $_FILES["upload"]["name"];
        $temp = $_FILES["upload"]["tmp_name"];
        $folder = "./picturein/" . $file;

        $result = mysqli_query($db,
        "INSERT INTO pesangame (nama, pesan, tanggal, lewat, bayar, files)
        VALUES ('$nama', '$pesan', '$tgl', '$lewat', '$bayar', '$file')");

        if($result) {
            move_uploaded_file($temp, $folder);
            echo "
                <script>
                alert('Data Berhasil Ditambah');
                </script>
            ";
            header('Location: liatform.php');

        } else {
                echo "
                    <script>
                    alert('Data Gagal Ditambah');
                    </script>
                ";
            }
        }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan game</title>
    <link rel="stylesheet" href="css/pesanform.css">

</head>
<body>
    <h3>Pemesanan Game</h3>
    <h1><a href="liatform.php">lihat data</a></h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Nama Game yang pesan : </label>
        <input type="text" name="nama"><br><br>

        <label for="">Pesan berapa game : </label>
        <input type="text" name="pesan"><br><br>

        <label for="">Tipe pengiriman : </label>
        <input type="text" name="lewat"><br><br>

        <label for="">Pembayaran Lewat : </label>
        <input type="text" name="bayar"><br><br>
        <br><br>

        <label for="">Upload Gambar Game </label>
        <input type="file" name="upload" id="upload"><br><br>
        <br><br>

        <input type="submit" name="kirim">
    </form>

</body>
</html>