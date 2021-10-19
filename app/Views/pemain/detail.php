<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Pemain</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $komik['sampul']; ?>" alt="..." width="190px">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik['judul']; ?></h5>
                            <p class="card-text">ID : <?= $komik['id']; ?></p>
                            <p class="card-text"><small class="text-muted">Alamat : <?= $komik['penulis']; ?></small></p>
                            <p class="card-text"><small class="text-muted">SSB : <?= $komik['ssb']; ?></small></p>
                            <p class="card-text"><small class="text-muted">Handphone : <?= $komik['penerbit']; ?></small></p>

                            <a href="/pemain/pdf/<?= $komik['slug']; ?>" class="btn btn-success">Formulir</a>
                            <a href="/komik/cardPdf/<?= $komik['slug']; ?>" class="btn btn-success">KIP</a>
                            <!-- <a href="/pemain/edit/<?= $komik['slug']; ?>" class="btn btn-warning">Ubah</a>

                            <form action="/pemain/<?= $komik['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Hapus</button>
                            </form> -->

                            <br><br>
                            <a href="/pemain"> Kembali ke data pemain</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>