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
                            <th>Diskon (%)</th>
                            <th>Diskon (Rp)</th>
                            <th>Total Setelah Diskon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total_tanpa_diskon = 0;
                        $total_diskon = 0;
                        $total_bayar = 0;
                        ?>
                        <?php foreach ($detail as $item): ?>
                            <?php
                            $harga = $item->barang->harga;
                            $jumlah = $item->jumlah;
                            $diskon_persen = $item->disc_persen ?? 0;
                            $diskon_rp = $item->disc_rp ?? 0;

                            $total_awal = $harga * $jumlah;
                            $potongan_persen = ($diskon_persen / 100) * $total_awal;
                            $total_diskon_item = $potongan_persen + $diskon_rp;
                            $total_setelah_diskon = $total_awal - $total_diskon_item;

                            $total_tanpa_diskon += $total_awal;
                            $total_diskon += $total_diskon_item;
                            $total_bayar += $total_setelah_diskon;
                            ?>
                            <tr>
                                <td><?= $item->barang->nama; ?></td>
                                <td>Rp <?= number_format($harga, 0, ',', '.'); ?></td>
                                <td><?= $jumlah; ?></td>
                                <td><?= $diskon_persen; ?>%</td>
                                <td>Rp <?= number_format($diskon_rp, 0, ',', '.'); ?></td>
                                <td>Rp <?= number_format($total_setelah_diskon, 0, ',', '.'); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="mt-4">
                    <h5 class="text-end">Total Keseluruhan: <span class="text-dark">Rp <?= number_format($total_tanpa_diskon, 0, ',', '.'); ?></span></h5>
                    <h5 class="text-end">Diskon yang Didapat Dalam Rp: <span class="text-danger">Rp <?= number_format($total_diskon, 0, ',', '.'); ?></span></h5>
                    <h4 class="text-end">Total Bayar Setelah Diskon: <span class="text-success">Rp <?= number_format($total_bayar, 0, ',', '.'); ?></span></h4>
                </div>

                <div class="mb-3 mt-4">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea class="form-control" rows="3" readonly><?= $transaksi->keterangan; ?></textarea>
                </div>

                <a href="<?= site_url('transaksi'); ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view('layout/footer'); ?>