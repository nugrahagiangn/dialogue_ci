<?php $this->load->view('layout/header', ['title' => 'Tambah transaksi']); ?>
<main class="bg-light py-5">
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Tambah Transaksi</h5>
            </div>
            <div class="card-body">

                <?php if ($this->session->flashdata('success_message')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('success_message'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <form action="<?php echo site_url('transaksi/simpan'); ?>" method="post">
                    <div class="mb-3">
                        <label for="id_barang" class="form-label">Barang</label>
                        <div class="input-group">
                            <select name="id_barang" class="form-select" required>
                                <option value="" disabled selected>-- Pilih Barang --</option>
                                <?php foreach ($barang as $b): ?>
                                    <option value="<?php echo $b->id; ?>"><?php echo $b->nama; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#modalBarang">+</button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="id_pembeli" class="form-label">Pembeli</label>
                        <div class="input-group">
                            <select name="id_pembeli" class="form-select" required>
                                <option value="" disabled selected>-- Pilih Pembeli --</option>
                                <?php foreach ($pembeli as $p): ?>
                                    <option value="<?php echo $p->id; ?>"><?php echo $p->nama; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#modalPembeli">+</button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo site_url('transaksi'); ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Barang -->
    <div class="modal fade" id="modalBarang" tabindex="-1" aria-labelledby="modalBarangLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="<?= site_url('barang/simpan'); ?>" method="post">
                <input type="hidden" name="redirect_to" value="<?= current_url(); ?>">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalBarangLabel">Tambah Barang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="harga_barang" class="form-label">Harga Barang</label>
                            <input type="number" name="harga" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Tambah Pembeli -->
    <div class="modal fade" id="modalPembeli" tabindex="-1" aria-labelledby="modalPembeliLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="<?= site_url('pembeli/simpan'); ?>" method="post">
                <input type="hidden" name="redirect_to" value="<?= current_url(); ?>">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalPembeliLabel">Tambah Pembeli</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
<?php $this->load->view('layout/footer'); ?>