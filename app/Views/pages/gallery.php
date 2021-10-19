<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="container">
                <div class="col">
                    <br>
                    <div class="row">


                        <center>
                            <h2 class="tm-text-title">Gallery</h2>
                        </center>
                        <br><br><br>

                    </div>
                    <br>
                </div>

                <div class="row" style="background-color:#f1f1f1" style="height: 10000px;" >
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-2-col-left">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/img/berita1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/img/berita2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/img/berita3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-2-col-right">
                        <div class="text-xs-left tm-textbox tm-2-col-textbox">
                            <div class="map">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yxa7wLLlJks" allowfullscreen width="535px" height="294"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>