<?php $this->load->view('layout/header', ['title' => 'Edit Transaksi']); ?>
<main class="bg-light py-5">
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Edit Transaksi</h5>
            </div>
            <div class="card-body">

                <?php if ($this->session->flashdata('success_message')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('success_message'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <?php if (!empty($error_message)): ?>
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            <?php foreach ($error_message as $msg): ?>
                                <li><?= $msg ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="<?= site_url('transaksi/update/' . $transaksi->id_transaksi); ?>" method="post">
                    <div class="mb-3">
                        <label class="form-label">Kode Transaksi : <span><?= $transaksi->id_transaksi; ?></span></label>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Transaksi</label>
                        <input type="text" class="form-control datepicker" id="tanggalEdit" name="tanggal" value="<?= format_tanggal_indonesia($transaksi->tanggal); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="pembeli_id" class="form-label">Pembeli</label>
                        <select name="pembeli_id" class="form-select select2">
                            <option value="" disabled>-- Pilih Pembeli --</option>
                            <?php foreach ($pembeli as $p): ?>
                                <option value="<?= $p->id; ?>" <?= ($p->id == $transaksi->pembeli_id) ? 'selected' : ''; ?>>
                                    <?= $p->nama; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Barang & Jumlah</label>
                        <table class="table table-bordered align-middle text-center" id="barangTable" style="table-layout: fixed; width: 100%;">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 5%;">No</th>
                                    <th style="width: 30%;">Nama Barang</th>
                                    <th style="width: 15%;">Jumlah</th>
                                    <th style="width: 15%;">Disc. %</th>
                                    <th style="width: 15%;">Disc. Rp</th>
                                    <th style="width: 20%;">Aksi</th>
                                </tr>
                            </thead>
                        </table>
                        <tbody>
                            <tr>
                                <?php foreach ($detail as $index => $detail): ?>
                                    <div class="barang-item row g-2 mb-2 align-items-end">
                                        <div class="col-md-1 text-center">
                                            <span class="badge bg-secondary form-number"><?= $index + 1; ?></span>
                                        </div>
                                        <div class="col-md-3">
                                            <select name="barang_ids[]" class="form-select barang_id select2">
                                                <option value="">-- Pilih Barang --</option>
                                                <?php foreach ($barang as $b): ?>
                                                    <option value="<?= $b->id; ?>"
                                                        <?= ($b->id == $detail->barang_id) ? 'selected' : ''; ?>
                                                        data-harga="<?= $b->harga ?>" data-nama="<?= $b->nama ?>">
                                                        <?= $b->nama; ?> (Rp <?= number_format($b->harga, 0, ',', '.'); ?>)
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="number" name="jumlahs[]" class="form-control jumlah" value="<?= $detail->jumlah; ?>" min="1">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="number" name="persens[]" class="form-control persen" value="<?= $detail->disc_persen; ?>" min="0">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="number" name="rps[]" class="form-control rp" value="<?= $detail->disc_rp ?? 0; ?>" min="0">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="hidden" name="hargas[]" class="harga" value="0">
                                            <button type="button" class="btn btn-danger btn-sm hapusBarang"><i class="bi bi-trash me-1"></i>Hapus</button>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </tr>
                            <tr>
                                <div id="barangContainerEdit"></div>
                            </tr>
                        </tbody>

                        <button type="button" class="btn btn-outline-primary mt-2" id="tambahBarang"><i class="bi bi-plus-circle me-1"></i> Barang</button>

                        <div id="totalHargaContainer" class="card mt-3 d-none">
                            <div class="card-body">
                                <h6>Total Harga per Barang</h6>
                                <ul class="list-group mb-3" id="listTotalBarang"></ul>
                                <h5 class="text-end">Subtotal: <span id="subtotalDisplay" class="text-success">Rp 0</span></h5>
                                <div id="jumlahBayarContainer" class="mt-3">
                                    <h5 class="text-end">Jumlah Bayar: <span id="jumlahBayarDisplay" class="text-info">Rp 0</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea name="keterangan" class="form-control" rows="3"><?= $transaksi->keterangan; ?></textarea>
                    </div>

                    <input type="hidden" name="id_transaksi" value="<?= $transaksi->id_transaksi ?>">

                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?= site_url('transaksi'); ?>" class="btn btn-secondary">Kembali</a>
                </form>

            </div>
        </div>
    </div>
</main>

<?php $this->load->view('layout/footer'); ?>