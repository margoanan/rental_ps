<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Pelanggan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Pelanggan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url('Pelanggan/update'); ?>" method="post">
                        <div class="card">
                            <div class="card-body">
                                <?php
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

                                <input type="hidden" name="PSPelanggan_id" value="<?php echo $pelanggan['PSPelanggan_id']; ?>">

                                <div class="form-group">
                                    <label for="PSPelanggan_Nama">Nama Pelanggan</label>
                                    <input type="text" value="<?= $pelanggan['PSPelanggan_Nama'] ?>" class="form-control" name="PSPelanggan_Nama" placeholder="nama">
                                </div>

                                <div class="form-group">
                                    <label for="PSPelanggan_Alamat">Alamat Pelanggan</label>
                                    <input type="text" value="<?= $pelanggan['PSPelanggan_Alamat'] ?>" class="form-control" name="PSPelanggan_Alamat" placeholder="alamat">
                                </div>

                                <div class="form-group">
                                <label for="PSPelanggan_Tgl">Tanggal</label>
                                <input type="date" value="<?= $pelanggan['PSPelanggan_Tgl'] ?>" class="form-control" name="PSPelanggan_Tgl" placeholder="tanggal">
                            </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url('pelanggan'); ?>" class="btn btn-outline-info">Back</a>
                                <button type="submit" class="btn btn-primary float-right">update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo view('_partials/footer'); ?>
