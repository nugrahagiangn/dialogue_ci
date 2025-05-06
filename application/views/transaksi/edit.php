<?php $this->load->view('layout/header', ['title' => 'Edit Transaksi']); ?>

<main class="bg-light py-5">
    <div class="container ">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">Edit Transaksi</h5>
            </div>
            <div class="card-body">
                <form action="<?php echo site_url('transaksi/update/' . $transaksi->id); ?>" method="post">
                    <div class="mb-3">
                        <label for="id_barang" class="form-label">Barang</label>
                        <select name="id_barang" class="form-select" required>
                            <?php foreach ($barang as $b): ?>
                                <option value="<?php echo $b->id; ?>" <?php echo ($transaksi->barang_id == $b->id) ? 'selected' : ''; ?>>
                                    <?php echo $b->nama; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="id_pembeli" class="form-label">Pembeli</label>
                        <select name="id_pembeli" class="form-select" required>
                            <?php foreach ($pembeli as $p): ?>
                                <option value="<?php echo $p->id; ?>" <?php echo ($transaksi->pembeli_id == $p->id) ? 'selected' : ''; ?>>
                                    <?php echo $p->nama; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" value="<?php echo $transaksi->jumlah; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?php echo site_url('transaksi'); ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</main>
<?php $this->load->view('layout/footer'); ?>