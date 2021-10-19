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

                    <h3 class="title">Cristiano Ronaldo Menuju PSG Atau Manchester United</h3>
                    <img src="/img/berita5.jpg" alt="" height="340">

                    <div class="info">
                        <br>
                        <p style="text-align: justify">
                            Ronaldo Menuju PSG Atau United
                            Cristiano Ronaldo akan mempertimbangkan untuk pindah ke Paris Saint-Germain atau Manchester United musim panas ini jika Juventus gagal lolos ke Liga Champions musim depan.
                            Raksasa Turin itu berada di urutan keempat Serie A dan bisa kehilangan tempat di UCL di tengah hasil yang mengecewakan. Tuttosport mengatakan Ronaldo akan mendengarkan tawaran dari PSG dan United untuk memastikan dia masih bisa bermain di Eropa.
                            Conte Ingin Boyong De Paul Ke Inter

                            Antonio Conte ingin membawa Rodrigo De Paul ke Inter dari Udinese ketika jendela transfer musim panas dibuka, menurut Calcio Mercato.
                            Aston Villa buka pembicaraan transfer Pereira

                            Aston Villa dikabarkan siap menebus gelandang West Bromwich Albion Matheus Pereira.
                            Leeds United masih berminat datangkan gelandang Cagliari

                            Leeds United Masih Ingin Mendatangkan Gelandang Serie A: Ia Bisa Menjadi Pembelian Cerdas Untuk Si Putih.
                        </p>
                    </div>


                </div>

                <div class="col-lg-5">
                    <p style="text-align: justify">
                        Conte Ingin Boyong De Paul Ke Inter

                        Antonio Conte ingin membawa Rodrigo De Paul ke Inter dari Udinese ketika jendela transfer musim panas dibuka, menurut Calcio Mercato.
                        Aston Villa buka pembicaraan transfer Pereira

                        Aston Villa dikabarkan siap menebus gelandang West Bromwich Albion Matheus Pereira.
                        Leeds United masih berminat datangkan gelandang Cagliari

                        Leeds United Masih Ingin Mendatangkan Gelandang Serie A: Ia Bisa Menjadi Pembelian Cerdas Untuk Si Putih.

                        Menurut CentoTrentuno, Leeds United adalah tujuan yang memungkinkan bagi Nahitan Nandez. Gelandang Cagliari menghadapi masa depan yang tidak pasti di klub, dengan pemain tersebut dilaporkan memiliki klausul pelepasan € 36 juta yang tertulis dalam kontraknya. Nandez dikaitkan dengan kepindahan ke Elland Road musim panas lalu, dan tampaknya Cagliari sekarang bisa terbuka untuk mempertimbangkan kembali € 30 juta yang ditawarkan Leeds terakhir kali.
                        Manchester United incar pemuda berusia 19 tahun

                        Manchester United dilaporkan memantau penyerang Slavia Praha, Abdallah Sima sebagai bagian dari perubahan strategi transfer mereka yang sedang berlangsung.

                        Sima dikaitkan dengan Setan Merah oleh Manchester Evening News, yang mencatat bahwa klub baru-baru ini mulai menargetkan pemain yang lebih muda, sebagaimana dibuktikan dengan penandatanganan baru-baru ini adalah Amad Diallo dan Facundo Pellistri.
                        Eric Bailly Sepakati Kontrak Baru Sampai 2024

                        Bek Manchester United baru saja menandatangani kontrak baru bersama Si Setan Merah yang membuatnya akan tinggal di Old Trafford hingga 2024
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Us Section -->
</body>

</html>