<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url('img/KIP.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 60% 20%;
        }
    </style>
</head>

<body>
    <p style="margin-top: 40px; margin-left: 100px; position:fixed "><b>Kartu Identitas Pemain</b></p>
    <img src="img/<?= $komik['sampul']; ?>" alt="" width="80" height="80" style="margin-top: 50px; margin-left: 1px; position:fixed">
    <img src="img/fossbat.png" alt="" width="50" height="20" style="margin-top: 150px; margin-left: 1px; position:fixed">
    <img src="img/Logo_PSSI.png" alt="" width="40" height="40" style="margin-top: 150px; margin-left: 50px; position:fixed">
    <img src="img/Barcode.png" alt="" width="40" height="40" style="margin-top: 50px; margin-left: 340px; position:fixed">
    <p style="margin-top: 60px; margin-left: 100px; position:fixed">

        ID : <?= $komik['id']; ?> <br>
        Nama : <?= $komik['judul']; ?> <br>
        Alamat : <?= $komik['penulis']; ?> <br>
        Handphone : <?= $komik['penerbit']; ?> <br>
        Berlaku : 01/04/25 <br>
    </p>





</body>

</html>