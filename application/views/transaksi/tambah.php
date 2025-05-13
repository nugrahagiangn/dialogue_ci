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
                <?php if ($this->session->flashdata('error_message')): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php foreach ($this->session->flashdata('error_message') as $msg): ?>
                            <div><?= $msg; ?></div>
                        <?php endforeach; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <form action="<?php echo site_url('transaksi/simpan'); ?>" method="post">
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Transaksi</label>
                        <input type="text" class="form-control datepicker" id="tanggal" name="tanggal" placeholder="YYYY-MM-DD" value="<?= isset($old['tanggal']) ? $old['tanggal'] : ''; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="pembeli_id" class="form-label">Pembeli</label>
                        <select name="pembeli_id" class="form-select select2 <?= form_error('pembeli_id') ? 'is-invalid' : '' ?>" id="pembeli_id">
                            <option value="" disabled selected>-- Pilih Pembeli --</option>
                            <?php foreach ($pembeli as $p): ?>
                                <option value="<?= $p->id; ?>" <?= isset($old['pembeli_id']) && $old['pembeli_id'] == $p->id ? 'selected' : ''; ?>><?= $p->nama; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Barang & Jumlah</label>
                        <div id="barangContainer" class="table-responsive">
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
                                <tbody id="barangContainer">
                                    <!-- Baris-baris barang dimuat di sini -->
                                </tbody>
                            </table>
                        </div>


                        <button type="button" id="tambahBarang" class="btn btn-primary btn-sm">Tambah Barang</button>

                    </div>

                    <!-- <div id="barangContainer"></div> -->

                    <!-- <div id="jumlahContainer"></div> -->

                    <div id="totalHargaContainer" class="card mt-3 d-none">
                        <div class="card-body">
                            <h6>Total Harga per Barang</h6>
                            <ul class="list-group mb-3" id="listTotalBarang"></ul>
                            <h5 class="text-end">Subtotal: <span id="subtotalDisplay" class="text-success">Rp 0</span></h5>
                            <div id="jumlahBayarContainer" class="mt-3">
                                <h5 class="text-end">Jumlah Bayar (diskon) : <span id="jumlahBayarDisplay" class="text-info">Rp 0</span></h5>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea name="keterangan" class="form-control" rows="3" placeholder="Contoh: Transaksi untuk keperluan pribadi..."><?= isset($old['keterangan']) ? $old['keterangan'] : ''; ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo site_url('transaksi'); ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

</main>
<?php $this->load->view('layout/footer'); ?>