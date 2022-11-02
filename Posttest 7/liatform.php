<?php
    require 'config.php';

    $result = mysqli_query($db, "SELECT * FROM pesangame");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="stylesheet" href="css/liatform.css">
</head>
<body>
    <section class="header">
    <h1 class="content">DATA PEMESANAN VENOMZ GAMES</h1>
    </section>
    
<h3>Data Pemesanan Game</h3>
    <a href="pesan.php">Kembali tambah data</a>

    <form action="" method="GET">
        <table>
            <tr>
                <td>
                    <div class="form-outline">
                        <input type="text" name="keyword" id="keyword" placeholder="Cari Nama Game" class="form-control"> 
                    </div>
                </td>
                <td>
                    <button type="submit" class="btn btn-secondary" name="search">
                        <i class="fas fa-search"></i>
                    </button>
                </td>
            </tr>
        </table>

    </form>
    <table class="styled-table" border="1" >
        <tr class="header-table">
            <th>Nomor</th>
            <th>Nama Game</th>
            <th>Pesan Berapa Banyak</th>
            <th>Tanggal Pemesanan</th>
            <th>Pengiriman Berupa</th>
            <th>Metode Pembayaran</th>
            <th>Gambar</th>
            <th colspan='2'>action</th>
        </tr>

        <?php 
            if(isset($_GET['search'])){
                $keyword = $_GET['keyword'];
                $result = mysqli_query($db, "SELECT * FROM pesangame WHERE nama LIKE '%$keyword%' OR bayar LIKE '%$keyword%'");				
            }else{
                $result = mysqli_query($db, "SELECT * FROM pesangame");		
            }
            $i = 1;
            while($row = mysqli_fetch_array($result)){
        ?>

        <tr class="activate-row">
            <td><?=$i; ?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['pesan']?></td>
            <td><?=$row['tanggal']?></td>
            <td><?=$row['lewat']?></td>
            <td><?=$row['bayar']?></td>
            <td><img src="picturein/<?=$row['files']?>" width="150px"></td>
            <td><a href="editform.php?id=<?=$row['id']?>"><img src="image/5589.jpg" alt=""class="logo1"></a></td>
            <td><a href="hapusform.php?id=<?=$row['id']?>"><img src="image/trash-bin.png" alt="" class="logo2"></a></td>
        </tr>
    
            <?php
            
            $i++;
                }
            ?>
    
    </table>

    <table class="styled-table" border="1" >
        <tr class="header-table">
            <th>Nomor</th>
            <th>Nama Game</th>
            <th>Pesan Berapa Banyak</th>
            <th>Tanggal Pemesanan</th>
            <th>Pengiriman Berupa</th>
            <th>Metode Pembayaran</th>
            <th>Gambar</th>
            <th colspan='2'>action</th>
        </tr>

        <?php 
            
            $result = mysqli_query($db, "SELECT * FROM pesangame");
            $i = 1;
            while($row = mysqli_fetch_array($result)){
        ?>

        <tr class="activate-row">
            <td><?=$i; ?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['pesan']?></td>
            <td><?=$row['tanggal']?></td>
            <td><?=$row['lewat']?></td>
            <td><?=$row['bayar']?></td>
            <td><img src="picturein/<?=$row['files']?>" width="150px"></td>
            <td><a href="editform.php?id=<?=$row['id']?>"><img src="image/5589.jpg" alt=""class="logo1"></a></td>
            <td><a href="hapusform.php?id=<?=$row['id']?>"><img src="image/trash-bin.png" alt="" class="logo2"></a></td>
        </tr>
    
            <?php
            
            $i++;
                }
            ?>
    
    </table>
</body>
</html>