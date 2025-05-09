<?php $this->load->view('layout/header', ['title' => 'Detail Transaksi']); ?>

<main class="bg-light py-5">
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Detail Transaksi</h5>
            </div>
            <div class="card-body">

                <?php if ($this->session->flashdata('success_message')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('success_message'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <h4>Transaksi ID: <?= $transaksi->id_transaksi; ?></h4>
                <p><strong>Tanggal Transaksi:</strong> <?= $transaksi->tgl; ?></p>
                <p><strong>Pembeli:</strong> <?= $pembeli->nama; ?></p>

                <h5>Detail Barang yang Dibeli</h5>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $subtotal = 0; ?>
                        <?php foreach ($detail as $item): ?>
                            <tr>
                                <td><?= $item->barang->nama; ?></td> <!-- Menampilkan nama barang -->
                                <td>Rp <?= number_format($item->barang->harga, 0, ',', '.'); ?></td> <!-- Menampilkan harga barang -->
                                <td><?= $item->jumlah; ?></td>
                                <td>Rp <?= number_format($item->total, 0, ',', '.'); ?></td>
                            </tr>
                            <?php $subtotal += $item->total; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <h5 class="text-end">Subtotal: Rp <?= number_format($subtotal, 0, ',', '.'); ?></h5>

                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea class="form-control" rows="3" readonly><?= $transaksi->keterangan; ?></textarea>
                </div>

                <a href="<?= site_url('transaksi'); ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view('layout/footer'); ?>