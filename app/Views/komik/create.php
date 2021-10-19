<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Tambah Data Pemain</h2>
            <form action="/komik/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= old('judul'); ?>">
                        <div id="validationServer05Feedback" class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Kota Kelahiran</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kota" name="kota" value="<?= old('kota'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="ttl" name="ttl" value="<?= old('ttl'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?= old('penulis'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Handphone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">SSB Saat ini</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ssb" name="ssb" value="<?= old('ssb'); ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Nama Ayah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ayah" name="ayah" value="<?= old('ayah'); ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Nama Ibu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ibu" name="ibu" value="<?= old('ibu'); ?>">
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
                            <input class="form-check-input" type="radio" name="administrasi" id="gridRadios3" value="KK">
                            <label class="form-check-label" for="gridRadios3">
                                KK
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="administrasi" id="gridRadios4" value="RAPORT">
                            <label class="form-check-label" for="gridRadios4">
                                RAPORT
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="administrasi" id="gridRadios5" value="PASSPOR">
                            <label class="form-check-label" for="gridRadios5">
                                PASSPOR
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
                            <input class="form-check-input" type="radio" name="goldar" id="gridRadios3" value="AB">
                            <label class="form-check-label" for="gridRadios3">
                                AB
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="goldar" id="gridRadios4" value="O">
                            <label class="form-check-label" for="gridRadios4">
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
                </fieldset>

                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Berat Badan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="bBadan" name="bBadan">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Tinggi Badan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tBadan" name="tBadan">
                    </div>
                </div>
                <div class="row mb-3" style="text-align: center">
                    <p><b>Riwayat Pendidikan</b></p>

                </div>

                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">SD</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sd" name="sd">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">SMP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="smp" name="smp">
                    </div>
                </div>

                <br>
                <h3>Riwayat Sekolah Sepak Bola</h3>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="(Cth: 1. Andi, SSB Persib Batam 2020 Posisi MF)" id="akademi" name="akademi" style="height: 100px"></textarea>
                    <label for="akademi">(Cth: 1. Andi, SSB Persib Batam 2020 Posisi MF)</label>
                </div>
                <br>
                <h3>Riwayat Prestasi</h3>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="(Cth: 1. Andi, Liga 1 U20, Juara 2, SSB Persib Batam 2020 Posisi MF" id="prestasi" name="prestasi" style="height: 100px"></textarea>
                    <label for="prestasi">(Cth: 1. Andi, Liga 1 U20, Juara 2, SSB Persib Batam 2020 Posisi MF)</label>
                </div>
                <br>
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

                <button type="submit" class="btn btn-primary">Tambah Pemain</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>