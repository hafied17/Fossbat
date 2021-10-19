<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Ubah Data Pemain</h2>
            <form action="/komik/update/<?= $komik['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $komik['slug']; ?>">
                <input type="hidden" name="sampulLama" value="<?= $komik['sampul']; ?>">
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= (old('judul')) ? old('judul') : $komik['judul'] ?>">
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Kota Kelahiran</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kota" name="kota" value="<?= (old('kota')) ? old('kota') : $komik['kota'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="ttl" name="ttl" value="<?= (old('ttl')) ? old('ttl') : $komik['ttl'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?= (old('penulis')) ? old('penulis') : $komik['penulis'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Handphone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= (old('penerbit')) ? old('penerbit') : $komik['penerbit'] ?>">
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">SSB Saat ini</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ssb" name="ssb" value="<?= (old('ssb')) ? old('ssb') : $komik['ssb'] ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Nama Ayah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ayah" name="ayah" value="<?= (old('ayah')) ? old('ayah') : $komik['ayah'] ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Nama Ibu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ibu" name="ibu" value="<?= (old('ibu')) ? old('ibu') : $komik['ibu'] ?>">
                    </div>
                </div>
                <fieldset class="row mb-3" id="administrasi">
                    <legend class="col-form-label col-sm-2 pt-0">Administrasi Pemain</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="administrasi" id="gridRadios1" value="AKTE" checked>
                            <label class="form-check-label" for="gridRadios1">
                                AKTE
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="administrasi" id="gridRadios2" value="NISN">
                            <label class="form-check-label" for="gridRadios2">
                                NISN
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="administrasi" id="gridRadios2" value="KK">
                            <label class="form-check-label" for="gridRadios2">
                                KK
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="administrasi" id="gridRadios2" value="RAPORT">
                            <label class="form-check-label" for="gridRadios2">
                                Raport
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="administrasi" id="gridRadios2" value="PASSPOR">
                            <label class="form-check-label" for="gridRadios2">
                                Passpor
                            </label>
                        </div>
                    </div>
                </fieldset>


                <fieldset class="row mb-3" id="goldar">
                    <legend class="col-form-label col-sm-2 pt-0">Golongan Darah</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="goldar" id="gridRadios1" value="A" checked>
                            <label class="form-check-label" for="gridRadios1">
                                A
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="goldar" id="gridRadios2" value="B">
                            <label class="form-check-label" for="gridRadios2">
                                B
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="goldar" id="gridRadios2" value="AB">
                            <label class="form-check-label" for="gridRadios2">
                                AB
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="goldar" id="gridRadios2" value="O">
                            <label class="form-check-label" for="gridRadios2">
                                O
                            </label>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="row mb-3" id="kelamin">
                    <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kelamin" id="gridRadios1" value="Laki-Laki" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kelamin" id="gridRadios2" value="Perempuan">
                            <label class="form-check-label" for="gridRadios2">
                                Perempuan
                            </label>
                        </div>

                    </div>

                    <div class="row mb-3">
                        <label for="penerbit" class="col-sm-2 col-form-label">Berat Badan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="bBadan" name="bBadan" value="<?= (old('bBadan')) ? old('bBadan') : $komik['bBadan'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="penerbit" class="col-sm-2 col-form-label">Tinggi Badan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tBadan" name="tBadan" value="<?= (old('tBadan')) ? old('tBadan') : $komik['tBadan'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="penerbit" class="col-sm-2 col-form-label">SD</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sd" name="sd" value="<?= (old('sd')) ? old('sd') : $komik['sd'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="penerbit" class="col-sm-2 col-form-label">SMP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="smp" name="smp" value="<?= (old('smp')) ? old('smp') : $komik['smp'] ?>">
                        </div>
                    </div>
                    <h4>Riwayat Sekolah Sepak Bola</h4>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="(Cth: 1. Andi, SSB Persib Batam 2020 Posisi MF)" id="akademi" name="akademi" style="height: 100px"><?= (old('akademi')) ? old('akademi') : $komik['akademi'] ?></textarea>
                        <label for="akademi">(Cth: 1. Andi, SSB Persib Batam 2020 Posisi MF)</label>
                    </div>
                    <br>
                    <h4>Riwayat Prestasi</h4>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="(Cth: 1. Andi, Liga 1 U20, Juara 2, SSB Persib Batam 2020 Posisi MF" id="prestasi" name="prestasi" style="height: 100px"><?= (old('prestasi')) ? old('prestasi') : $komik['prestasi'] ?></textarea>
                        <label for="prestasi">(Cth: 1. Andi, Liga 1 U20, Juara 2, SSB Persib Batam 2020 Posisi MF)</label>
                    </div>

                    <div class="row mb-3">
                        <label for="sampul" class="col-sm-2 col-form-label ">Foto</label>
                        <div class="col-sm-10">

                            <div class="input-group mb-3">
                                <label class="input-group-text" for="sampul">Upload</label>
                                <input type="file" class="form-control  <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" onchange="previewImg()">
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    <?= $validation->getError('sampul'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Ubah Data Pemain</button>
        </div>
    </div>
    </form>
</div>
</div>
</div>

<?= $this->endSection(); ?>