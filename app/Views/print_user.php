<?php
 global $mysqli;
 $host="localhost";
 $user="root";
 $pass="";
 $database="dbadminlte";
 $mysqli=new mysqli($host,$user,$pass,$database);
 if (mysqli_connect_errno()) {
   trigger_error('Koneksi ke database gagal: '  . mysqli_connect_error(), E_USER_ERROR); 
 }
?>
<style>
    table{
        border-collapse : collapse;
        table-layout:fixed;
        width :483px;

    }
    table td{
        width:15%;
    }
</style>
<html>
<body>

<!-- kop surat -->
<table border="1" cellpading="1">
    <tr>
        <td style="width:20%; align=center;">
            <img src="../../Gambar JWP/logo fossbat.png" width = "320" height="100" alt=""> 
        </td colspan="">
        <td style="width:40%;">
          <h3 style="text-align: center;">
          Laporan Data Pemain
        </h3>
        </td>
        <td style="align=center;width:35%;">
            jl. Fosbat Batam
        </td>
      </tr>
    </table>
    <br><br>
<!-- isi report -->
<table  border="1" cellpading="1">
<thead>
    <tr>
        <th>NO</th>
        <th>QR CODE</th>
        <th>IDUSER</th>
        <th>NAMA USER</th>
        <th>STATUS</th>
    </tr>
</thead>
<tbody>
    <?php
        $no = 0;
        
        if(isset($_GET['kode'])){
            $iduser    =$_GET['kode'];
        }
        else {
            die ("Error. No ID Selected!");    
        }

        $admin=$mysqli->query("SELECT * FROM tbuser WHERE iduser='$iduser'");
        while($m=mysqli_fetch_array($admin)){
        $no++;  
    ?>
    <tr>

            
        <td style="width:10%;"><?php echo $no ; ?></td>
        <td style="width:10%;"> 
        
        <?php
                            $kode = "fossbat/".$m['iduser']."/".$m['namauser']."";
                            require_once('assets/qrcode/qrlib.php');
                            QRcode::png("$kode","kode".$no.".png","M", 2,2);
                          ?>
                          <img src="kode<?= $no ?>.png" alt="">
    
                          </td>    
        <td style="width:20%;"><?php echo $m['iduser']; ?></td>
        <td style="width:40%;"><?php echo $m['namauser']; ?></td>
        <td style="width:30%;"><?php echo $m['setatus']; ?></td>        
    </tr>
    <?php } ?>
</tbody>

</table>
</body>
</html>

<?php
    $html = ob_get_contents();
    ob_end_clean();
    
    require_once('../../assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en');
    $pdf->WriteHTML($html);
    $pdf->Output('report_user.pdf','D');
?>