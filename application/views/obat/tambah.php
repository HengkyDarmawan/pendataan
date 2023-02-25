<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Obat</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Tambah Data Obat</h6>
            </div>
        </div>
        <div class="card-body" style="color: #000;">
            <form action="" method="post">
                <div class="form-group">
                    <label for="kode_obat">Kode Obat</label>
                    <input type="text" name="kodeObat" class="form-control" id="kode_obat" placeholder="Tulis Kode Obat">
                    <small class="form-text text-danger"><?= form_error('kodeObat'); ?></small>
                </div>
                <div class="form-group">
                    <label for="nama_obat">Nama Obat</label>
                    <input type="text" name="namaObat" class="form-control" id="nama_obat" placeholder="Tulis Nama Obat">
                    <small class="form-text text-danger"><?= form_error('namaObat'); ?></small>
                </div>
                <div class="form-group">
                    <label for="stok_obat">Stok Obat</label>
                    <input type="text" name="stokObat" class="form-control" id="stok_obat" placeholder="Tulis Stok Obat">
                    <small class="form-text text-danger"><?= form_error('stokObat'); ?></small>
                </div>
                <div class="form-group">
                    <label for="tgl_masuk">Tanggal Obat Masuk</label>
                    <input type="date" name="tgl_masuk" class="form-control" id="tgl_masuk">
                    <small class="form-text text-danger"><?= form_error('tgl_masuk'); ?></small>
                </div>
                <div class="form-group">
                    <label for="hrg_obat">Harga Obat</label>
                    <input type="text" name="hrgObat" class="form-control" id="hrg_obat" placeholder="Tulis Harga Obat">
                    <small class="form-text text-danger"><?= form_error('hrgObat'); ?></small>
                </div>
                <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
                <a href="<?= base_url(); ?>obat" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>