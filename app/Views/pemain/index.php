<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col-3">
            <h1 class="mt-2">Data Pemain</h1>
            <!-- <a href="/pemain/create" class="btn btn-primary mt-3">Tambah Data Pemain</a> -->
            <p></p>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Pencarian..." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <!-- <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif ?> -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <?= $i = 1; ?> -->
                    <?php foreach ($komik as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $k['sampul']; ?>" alt="" class="cover"></td>
                            <td><?= $k['id']; ?></td>
                            <td><?= $k['judul']; ?></td>
                            <td>
                                <a href="/pemain/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>