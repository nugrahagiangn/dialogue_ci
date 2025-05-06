<?php $this->load->view('layout/header', ['title' => 'Tambah Pembeli']); ?>

<main class="bg-light py-5">
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Tambah Pembeli</h5>
            </div>
            <div class="card-body">
                <form action="<?= site_url('pembeli/simpan'); ?>" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Pembeli</label>
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="<?= site_url('pembeli'); ?>" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view('layout/footer'); ?>