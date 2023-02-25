<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2"><?= $title; ?></h6>
            </div>
        </div>
        <div class="card-body">
            <form action="<?= base_url() ?>dashboard/cetaklaporan" method="post" class="form-user">
                <div class="row form-group">
                    <label class="col-sm-2 col-form-label">Tanggal Mulai</label>
                    <div class="col-sm-4">
                        <input type="date" name="tgl_mulai" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-2 col-form-label">Tanggal Akhir</label>
                    <div class="col-sm-4">
                        <input type="date" name="tgl_akhir" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->