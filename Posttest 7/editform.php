<?php 
    require 'config.php';

    // menangkap id dari url yang ditampilkan
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    // Tampilkan value inputan dari id
    $result = mysqli_query($db,
        "SELECT *FROM pesangame WHERE id='$id'");
        $row = mysqli_fetch_array($result);

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
        "UPDATE pesangame SET
            nama='$nama',
            pesan='$pesan',
            tanggal='$tgl',
            lewat='$lewat',
            bayar='$bayar',
            files='$file'
        WHERE id='$id'");
        
    if($result) {
        header("Location:liatform.php");
    }
        if($result) {
            move_uploaded_file($temp, $folder);
            echo "
                <script>
                alert('Data Berhasil Diupdate');
                document.location.href = 'index.php';
                </script>
            ";

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
    <title>Edit form</title>
    <link rel="stylesheet" href="css/editform.css">

</head>
<body>
<h3>Edit Pendaftaran Maba</h3>
    <h1><a href="liatform.php">lihat data</a></h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">nama Game yang ingin anda pesan : </label>
        <input type="text" name="nama" value="<?=$row['nama']?>"><br><br>

        <label for="">Pesan berapa game : </label>
        <input type="text" name="pesan" value="<?=$row['pesan']?>"><br><br>

        <label for="">Tanggal pemesanan : </label>
        <input type="text" name="tanggal" value="<?=$row['tanggal']?>"><br><br>

        <label for="">Tipe pengiriman : </label>
        <input type="text" name="lewat" value="<?=$row['lewat']?>"><br><br>

        <label for="">Pembayaran lewat : </label>
        <input type="text" name="bayar" value="<?=$row['bayar']?>"><br><br>
        <br><br>

        Ganti gambar<input type="file" name="upload" id="upload">
        <br><br>

        <input type="submit" name="kirim">
    </form>

</body>
</html>