<?php $this->load->view('layout/header', ['title' => 'Edit Pembeli']); ?>
<main class="bg-light py-5">
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-header bg-warning">
                <h5>Edit Pembeli</h5>
            </div>
            <div class="card-body">
                <form action="<?php echo site_url('pembeli/update/' . $pembeli->id); ?>" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Pembeli</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $pembeli->nama; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo $pembeli->alamat; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?php echo site_url('pembeli'); ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</main>
<?php $this->load->view('layout/footer'); ?>