<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Pasien</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Edit Data Pasien</h6>
            </div>
        </div>
        <div class="card-body" style="color: #000;">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $pasien['id']; ?>">
                <div class="form-group">
                    <label for="rm">RM</label>
                    <input type="text" name="rm" class="form-control" id="rm" placeholder="Tulis RM" value="<?= $pasien['rm']; ?>">
                    <small class="form-text text-danger"><?= form_error('rm'); ?></small>
                </div>
                <div class="form-group">
                    <label for="nama_pasien">Nama Pasien</label>
                    <input type="text" name="namaPasien" class="form-control" id="nama_pasien" placeholder="Tulis Nama Obat" value="<?= $pasien['nama_pasien']; ?>">
                    <small class="form-text text-danger"><?= form_error('namaPasien'); ?></small>
                </div>
                <div class="form-group">
                    <label for="tgl_daftar">Tanggal Daftar</label>
                    <input type="date" name="tgl_daftar" class="form-control" id="tgl_daftar" value="<?= $pasien['tgl_daftar']; ?>">
                    <small class="form-text text-danger"><?= form_error('tgl_daftar'); ?></small>
                </div>
                <div class="form-group">
                    <label for="nama_pt">Nama PT</label>
                    <input type="text" name="namaPt" class="form-control" id="nama_pt" placeholder="Tulis Stok Obat" value="<?= $pasien['nama_pt']; ?>">
                    <small class="form-text text-danger"><?= form_error('namaPt'); ?></small>
                </div>
                <div class="form-group">
                    <label for="paket">Paket</label>
                    <input type="text" name="paket" class="form-control" id="paket" placeholder="Tulis Stok Obat" value="<?= $pasien['paket']; ?>">
                    <small class="form-text text-danger"><?= form_error('paket'); ?></small>
                </div>
                <div class="form-group">
                    <label for="harga">Harga Obat</label>
                    <input type="text" name="harga" class="form-control" id="harga" placeholder="Tulis Harga Obat" value="<?= $pasien['harga']; ?>">
                    <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                </div>
                <button type="submit" name="edit" class="btn btn-primary">Submit</button>
                <a href="<?= base_url(); ?>dashboard" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>