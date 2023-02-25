<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2"><?= $title; ?></h6>
            </div>
        </div>
        <div class="card-body" style="color: #000;">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $user['id']; ?>">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Tulis Nama" value="<?= $user['name']; ?>">
                    <small class="form-text text-danger"><?= form_error('name'); ?></small>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Tulis Email" value="<?= $user['email']; ?>">
                    <small class="form-text text-danger"><?= form_error('email'); ?></small>
                </div>
                <button type="submit" name="edit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>