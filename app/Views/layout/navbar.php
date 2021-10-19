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