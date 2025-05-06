<?php $this->load->view('layout/header', ['title' => 'Tambah Barang']); ?>

<main class="bg-light py-5">
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Tambah Barang</h5>
            </div>
            <div class="card-body">
                <form action="<?php echo site_url('barang/simpan'); ?>" method="post">
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" name="harga" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="" disabled selected>-- Pilih Status --</option>
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>

                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo site_url('barang'); ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view('layout/footer'); ?>