<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah PS</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah PS</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url('Ps/store'); ?>" method="post">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $inputs = session()->getFlashdata('inputs');
                                $errors = session()->getFlashdata('errors');
                                if (!empty($errors)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        Whoops! Ada kesalahan saat input data, yaitu:
                                        <ul>
                                            <?php foreach ($errors as $error) : ?>
                                                <li><?= esc($error) ?></li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                <?php } ?>



                                <div class="form-group">
                                    <label for="ps_nama">Merk dan Seri PS</label>
                                    <select name="ps_nama" id="ps_nama" class="form-control">
                                        <option value="">merk</option>
                                        <option value="Playstation 5" <?php echo $inputs['ps_nama'] == "Playstation 5" ? "selected" : ""; ?>>Playstation 5</option>
                                        <option value="Playstation 4" <?php echo $inputs['ps_nama'] == "Playstation 4" ? "selected" : ""; ?>>Playstation 4</option>
                                        <option value="Xbox Series X" <?php echo $inputs['ps_nama'] == "Xbox Series X" ? "selected" : ""; ?>>Xbox Series X</option>
                                        <option value="Nintendo Switch Red" <?php echo $inputs['ps_nama'] == "Nintendo Switch Red" ? "selected" : ""; ?>>Nintendo Switch Red</option>
                                        <option value="Nintendo Switch OLED" <?php echo $inputs['ps_nama'] == "Nintendo Switch OLED" ? "selected" : ""; ?>>Nintendo Switch OLED</option>
                                        <option value="Nintendo Switch Lite" <?php echo $inputs['ps_nama'] == "Nintendo Switch Lite" ? "selected" : ""; ?>>Nintendo Switch Lite</option>
                                    </select>
                                    <?php if (isset($errors['ps_nama'])) { ?>
                                        <p class="text-danger"><?php echo $errors['ps_nama']; ?></p>
                                    <?php } ?>
                                </div>

                                <div class="form-group">
                                    <label for="ps_waktu">Waktu Rental</label>
                                    <select name="ps_waktu" id="baju_ukuran" class="form-control">
                                        <option value="">waktu</option>
                                        <option value="1 jam" <?php echo $inputs['ps_waktu'] == "1 jam" ? "selected" : ""; ?>>1 jam</option>
                                        <option value="2 jam" <?php echo $inputs['ps_waktu'] == "2 jam" ? "selected" : ""; ?>>2 jam</option>
                                        <option value="3 jam" <?php echo $inputs['ps_waktu'] == "3 jam" ? "selected" : ""; ?>>3 jam</option>
                                        <option value="4 jam" <?php echo $inputs['ps_waktu'] == "4 jam" ? "selected" : ""; ?>>4 jam</option>
                                        <option value="5 jam" <?php echo $inputs['ps_waktu'] == "5 jam" ? "selected" : ""; ?>>5 jam</option>
                                    </select>
                                    <?php if (isset($errors['ps_waktu'])) { ?>
                                        <p class="text-danger"><?php echo $errors['ps_waktu']; ?></p>
                                    <?php } ?>
                                </div>

                                <div class="form-group">
                                    <label for="ps_kondisi">Kondisi PS</label>
                                    <select name="ps_kondisi" id="ps_kondisi" class="form-control">
                                        <option value="">kondisi</option>
                                        <option value="baik" <?php echo old('ps_kondisi') == 'baik' ? 'selected' : ''; ?>>Baik</option>
                                        <option value="rusak" <?php echo old('ps_kondisi') == 'rusak' ? 'selected' : ''; ?>>Rusak</option>
                                        <option value="mati" <?php echo old('ps_kondisi') == 'mati' ? 'selected' : ''; ?>>Mati</option>
                                    </select>
                                    <?php if (isset($errors['ps_kondisi'])) { ?>
                                        <p class="text-danger"><?php echo $errors['ps_kondisi']; ?></p>
                                    <?php } ?>
                                </div>
                                </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url('ps'); ?>" class="btn btn-outline-info">Back</a>
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo view('_partials/footer'); ?>
