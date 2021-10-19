<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="col">
        <br>
        <div class="row">

            
               <center> <h2 class="tm-text-title">Jadwal Pertandingan</h2></center>
               <br><br><br>
                
            </div>
            <br>
        </div>

        <div class="row" style="background-color:#f1f1f1" style="padding: 6">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-2-col-left">
                <div class="text-xs-left tm-textbox tm-2-col-textbox">
                   <br><br><br> <br>
                <center><h3>Fiorentina vs Juventus</h3>
                   <p> 28 April 2021</p>
                   <p>Juventus Stadium</p>
                   <p>Live SCTV jam 23.00 WIB</p></center>
                   
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-2-col-right">
                <div class="text-xs-left tm-textbox tm-2-col-textbox">
                <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2815.824398872679!2d7.6390544148846455!3d45.1096275790983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47886c17f7814e37%3A0xe3be8084a88d8da5!2sAllianz%20Stadium!5e0!3m2!1sen!2sid!4v1619611996985!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>


        </div>
  

<?= $this->endSection(); ?>