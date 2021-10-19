<!doctype html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .center{
        margin-left: auto;
        margin-right: auto;
        
    }
    .center2{
        text-align: center;
    }
    
        table,
        th,
        td {
            border-collapse: collapse;
        }

        td {
            border: 1px solid;
            width: 500px;
        }

        a {
            color: white;
        }

        /* th {
            width: 150px;
        } */

        th,
        td {
            text-align: left;
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <center>
        <title>Formulir Data Diri Pemain</title>
    </center>
</head>

<body>
    <div>
        <center>
            <h1>Formulir Data Diri Pemain</h1>
        </center>
    </div>
    <center> <img src="img/<?= $komik['sampul']; ?>" width="100px"></center>
    <br>
    <table cellpadding="6">
        <tr>
            <th width: 150px;>Nama Lengkap&emsp;&emsp;:</th>
            <td><?= $komik['judul']; ?></td>
        </tr>
        <tr>
            <th width: 150px;>Kota Kelahiran&emsp;&emsp;:</th>
            <td><?= $komik['kota']; ?></td>
        </tr>
        <tr>
            <th width: 150px;>Tanggal Lahir&emsp;&emsp;:</th>
            <td><?= $komik['ttl']; ?></td>
        </tr>
        <tr>
            <th width: 150px;>Alamat&emsp;&emsp;&emsp;&emsp;:</th>
            <td><?= $komik['penulis']; ?></td>
        </tr>
        <tr>
            <th width: 150px;>SSB Saat ini&emsp;&emsp;:</th>
            <td><?= $komik['ssb']; ?></td>
        </tr>
        <tr>
            <th width: 150px;>Nama Ayah&emsp;&emsp;&emsp;:</th>
            <td><?= $komik['ayah']; ?></td>
        </tr>
        <tr>
            <th width: 150px;>Nama Ibu&emsp;&emsp;&emsp;:</th>
            <td><?= $komik['ibu']; ?></td>
        </tr>
        <tr>
            <th width: 150px;>Administrasi Pemain :</th>
            <td><?= $komik['administrasi']; ?></td>
        </tr>
        <tr>
            <th width: 150px;>Golongan Darah&emsp;&emsp;:</th>
            <td><?= $komik['goldar']; ?></td>
        </tr>
        <tr>
            <th width: 150px;>Jenis Kelamin&emsp;&emsp;:</th>
            <td><?= $komik['kelamin']; ?></td>
        </tr>
        <tr>
            <th width: 150px;>Berat Badan&emsp;&emsp;:</th>
            <td><?= $komik['bBadan']; ?></td>
        </tr>
        <tr>
            <th width: 150px;>Tinggi Badan&emsp;&emsp;:</th>
            <td><?= $komik['tBadan']; ?></td>
        </tr>
        <tr>
            <th width: 150px;>SD&emsp;&emsp;:</th>
            <td><?= $komik['sd']; ?></td>
        </tr>
        <tr>
            <th width: 150px;>SMP&emsp;&emsp;:</th>
            <td><?= $komik['smp']; ?></td>
        </tr>

    </table>

   <br>
        <table class="center">
            <tr>
                <th class="center2">Riwayat Pendidikan Sepak Bola</th>
            </tr>
            <tr>
                <td class="center2"><?= $komik['akademi']; ?></td>
            </tr>
        </table>
        <table class="center" >
            <tr>
                <th class="center2">Riwayat Prestasi</th>
            </tr>
            <tr>
                <td class="center2"><?= $komik['prestasi']; ?></td>
            </tr>
        </table>
    
    <br>
    <center>
        <p>Dengan ini setuju untuk ikut serta dalam LIGA U13 FOSSBAT</p>
    </center>
    <center>
        <p>Batam,........................2021</p>
    </center>
    <br>
    <br>
    <br>


    <center>
        (...................................)<a>aaaaaaaaaa</a> (..................................)<a>aaaaaaaaaa</a> (...................................)
    </center>

    <center>
        <a>aa</a> (Pemain)<a>aaaaaaaaaaaaaaaaaaaaa</a> (Manager Tim)<a>aaaaaaaaaaaaaaaaaa</a>(Orang Tua/Wali)
    </center>


</body>

</html>