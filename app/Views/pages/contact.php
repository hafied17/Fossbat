<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kontak</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/img/fossbat.png" alt="" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    <a class="nav-link" href="/pages/about">Pertandingan</a>
                    <a class="nav-link" href="/pages/gallery">Gallery</a>
                    <a class="nav-link" href="/pages/contact">Kontak</a>
                    <a class="nav-link" href="/komik">Admin</a>

                </div>
                <?php if (logged_in()) : ?>
                    <a class="nav-link" href="/logout">Logout</a>
                <?php else : ?>
                    <a class="nav-link" href="/login">Login</a>
                <?php endif; ?>
            </div>
        </div>

    </nav>
    <!-- Contact Us Section -->
    <section class="contact-us">
        <div class="container">

            <div class="row">
                <div class="col-lg-7">

                    <h3 class="title">FOSSBAT</h3>
                    <p class="text"> Hubungi kami dengan detail berikut. </p>
                    <div class="info">
                        <div class="social-information"> <i class="fa fa-map-marker"></i>
                            <p>Alamat : Jl. Ahmad Yani Batam Kota. Kota Batam. kepulauan Riau. Indonesia</p>
                        </div>
                        <div class="social-information"> <i class="fa fa-envelope-o"></i>
                            <p>Email : info@polibatam.ac.id</p>
                        </div>
                        <div class="social-information"> <i class="fa fa-mobile-phone"></i>
                            <p>Phone : +62-778-469858 </p>
                        </div>
                    </div>
                    <div class="social-media">
                        <p>Connect with us :</p>
                        <div class="social-icons"> <a href="#"> <i class="fa fa-facebook-f"></i> </a> <a href="#"> <i class="fa fa-twitter"></i> </a> <a href="#"> <i class="fa fa-instagram"></i> </a> <a href="#"> <i class="fa fa-linkedin"></i> </a> </div>
                    </div>

                </div>

                <div class="col-lg-5">
                    <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0578708495!2d104.0462533138174!3d1.1186729991840156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98921856ddfab%3A0xf9d9fc65ca00c9d!2sPoliteknik%20Negeri%20Batam!5e0!3m2!1sen!2sid!4v1619611838630!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Us Section -->
</body>

</html>