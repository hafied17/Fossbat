<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Home</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
  <meta content="Bootstrap News Template - Free HTML Templates" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">

  <!-- CSS Libraries -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="lib/slick/slick.css" rel="stylesheet">
  <link href="lib/slick/slick-theme.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style3.css" rel="stylesheet">
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
          <a class="nav-link" href="/pemain">Data Pemain</a>
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

  <!-- Top News Start-->
  <div class="top-news" >
    <div class="container">
      <div class="row">
        <div class="col-md-6 tn-left">
          <div class="row tn-slider">
            <div class="col-md-6">
              <div class="tn-img">
                <img src="img/berita1.jpg" />
                <div class="tn-title">
                  <a href="">Real Madrid Vs Chelsea: Live Streaming & TV, Prediksi, Susunan Pemain Dan Kabar Terkini</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="tn-img">
                <img src="/img/berita2.jpg" />
                <div class="tn-title">
                  <a href="">Klaim Mauricio Pochettino: Latih Neymar Itu Mudah</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 tn-right">
          <div class="row">
            <div class="col-md-6">
              <div class="tn-img">
                <img src="/img/berita4.jpg" />
                <div class="tn-title">
                  <a href="">Persib Bandung Pastikan Depak Farshad Noor</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="tn-img">
                <img src="/img/berita5.jpg" />
                <div class="tn-title">
                  <a href="/pages/berita">Perez: Cristiano Ronaldo Tidak Akan Kembali Ke Real Madrid</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="tn-img">
                <img src="img/berita6.jpg" />
                <div class="tn-title">
                  <a href="">RESMI: Tottenham Hotspur Pecat Jose Mourinho</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="tn-img">
                <img src="img/berita7.jpg" />
                <div class="tn-title">
                  <a href="">Real Madrid Yakin Bisa Dapatkan Kylian Mbappe</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Top News End-->




  <!-- Tab News Start-->
  <div class="tab-news">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="">
            <p class="h1" style="text-align: center">Hasil Pertandingan</p>
          </div>
          <br>
          <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#featured">Serie A</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#popular">LaLiga</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#latest">Premier League</a>
            </li>
          </ul>

          <div class="tab-content">
            <div id="featured" class="container tab-pane active">
              <div class="tn-news">
                <div class="tn-title">
                  <a href="">Bonavento 2 - 4 Udinese</a>
                </div>
              </div>
              <div class="tn-news">

                <div class="tn-title">
                  <a href="">Fiorentina 1 - 1 Juventus</a>
                </div>
              </div>
              <div class="tn-news">

                <div class="tn-title">
                  <a href="">Internazionale 1 - 0 Hellas Veron</a>
                </div>
              </div>
            </div>
            <div id="popular" class="container tab-pane fade">
              <div class="tn-news">

                <div class="tn-title">
                  <a href="">Villareal 1 - 2 Barcelona</a>
                </div>
              </div>
              <div class="tn-news">

                <div class="tn-title">
                  <a href="">Sevilla 2 - 1 Granada</a>
                </div>
              </div>
              <div class="tn-news">

                <div class="tn-title">
                  <a href="">Athletic Club 2 - 1 Atletico Madrid</a>
                </div>
              </div>
            </div>
            <div id="latest" class="container tab-pane fade">
              <div class="tn-news">

                <div class="tn-title">
                  <a href="">Wolverhampton 0 - 4 Burnley FC</a>
                </div>
              </div>
              <div class="tn-news">

                <div class="tn-title">
                  <a href="">Leeds United 0 - 0 Manchester United</a>
                </div>
              </div>
              <div class="tn-news">

                <div class="tn-title">
                  <a href="">Aston Villa FC 2 - 2 West Bromwich Albion</a>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-6">
          <div class="">
            <p class="h1" style="text-align: center">Jadwal Pertandingan</p>
          </div>
          <br>
          <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#m-viewed">Serie A</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#m-read">LaLiga</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#m-recent">Premier League</a>
            </li>
          </ul>

          <div class="tab-content">
            <div id="m-viewed" class="container tab-pane active">
              <div class="tn-news">

                <div class="tn-title">
                  <a href="/pertandingan">Fiorentina vs Juventus</a>
                </div>
              </div>
              <div class="tn-news">

                <div class="tn-title">
                  <a href="">Bonavento vs Udinese
                  </a>
                </div>
              </div>
              <div class="tn-news">

                <div class="tn-title">
                  <a href="">Internazionale vs Hellas Verona</a>
                </div>
              </div>
            </div>
            <div id="m-read" class="container tab-pane fade">
              <div class="tn-news">

                <div class="tn-title">
                  <a href="">Villareal vs Barcelona</a>
                </div>
              </div>
              <div class="tn-news">

                <div class="tn-title">
                  <a href="">Sevilla vs Granada</a>
                </div>
              </div>
              <div class="tn-news">

                <div class="tn-title">
                  <a href="">Athletic Club vs Athletico Madrid</a>
                </div>
              </div>
            </div>
            <div id="m-recent" class="container tab-pane fade">
              <div class="tn-news">

                <div class="tn-title">
                  <a href="">Wolverhampton vs Burnley FC</a>
                </div>
              </div>
              <div class="tn-news">

                <div class="tn-title">
                  <a href="">Leeds United vs Manchester United</a>
                </div>
              </div>
              <div class="tn-news">

                <div class="tn-title">
                  <a href="">Aston Villa vs West Bromwich Albion</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Back to Top -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/slick/slick.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>