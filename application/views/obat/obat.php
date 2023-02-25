<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Obat</h1>
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Obat <strong>berhasil </strong><?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Data Obat</h6>
                <a href="<?= base_url(); ?>obat/tambah" class="btn btn-outline-primary p-2"><i class="fas fa-plus"></i> Tambah</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Kode Obat</th>
                            <th>Nama Obat</th>
                            <th>Stok</th>
                            <th>Tanggal Masuk</th>
                            <th>Harga Obat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nomor</th>
                            <th>Kode Obat</th>
                            <th>Nama Obat</th>
                            <th>Stok</th>
                            <th>Tanggal Masuk</th>
                            <th>Harga Obat</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody style="text-align: center;">
                        <?php $i = 1; ?>
                        <?php foreach ($obat as $row) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $row['kode_obat']; ?></td>
                                <td class=" text-capitalize"><?= $row['nama_obat']; ?></td>
                                <td><?= $row['stok_obat']; ?></td>
                                <td><?= $row['tgl_masuk']; ?></td>
                                <td><?= "Rp. " . number_format($row['harga_obat'], 0, '.', '.'); ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>obat/edit/<?= $row['id']; ?>" class="btn btn-outline-success">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="<?= base_url(); ?>obat/hapus/<?= $row['id']; ?>" class="btn btn-outline-danger" onclick="return confirm('yakin?');">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->