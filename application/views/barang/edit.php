<?php $this->load->view('layout/header', ['title' => 'Edit Barang']); ?>

<main class="bg-light py-5">
    <div class="container ">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-white">
                <h5 class="mb-0">Edit Barang</h5>
            </div>
            <div class="card-body">
                <form action="<?= site_url('barang/update/' . $barang->id); ?>" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Barang</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $barang->nama; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" name="harga" id="harga" class="form-control" value="<?= $barang->harga; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="1" <?= ($barang->status == '1' || $barang->status == 't') ? 'selected' : ''; ?>>Aktif</option>
                            <option value="0" <?= ($barang->status == '0' || $barang->status == 'f') ? 'selected' : ''; ?>>Tidak Aktif</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= site_url('barang'); ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view('layout/footer'); ?>