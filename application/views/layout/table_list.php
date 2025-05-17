<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0"><?= $tableTitle; ?></h2>
    <?php
    $segment = $this->uri->segment(1) ?? 'transaksi';
    ?>
    <a href="<?= site_url($segment . '/tambah'); ?>" class="btn btn-primary">
        <i class="bi bi-plus-circle me-1"></i> Tambah <?= ucfirst($segment); ?>
    </a>
</div>

<?php if ($this->session->flashdata('success_message')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('success_message'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<div class="card shadow-sm">
    <div class="card-body">
        <?php if ($segment === 'transaksi'): ?>
            <div class="row align-items-end mb-3">
                <div class="col-md-3">
                    <label for="minDate" class="form-label">Dari Tanggal</label>
                    <input type="text" id="minDate" class="form-control datepicker" placeholder="DD-MM-YYYY" value="<?= htmlspecialchars($min_date ?? '') ?>">
                </div>
                <div class="col-md-3">
                    <label for="maxDate" class="form-label">Sampai Tanggal</label>
                    <input type="text" id="maxDate" class="form-control datepicker" placeholder="DD-MM-YYYY" value="<?= htmlspecialchars($max_date ?? '') ?>">
                </div>
                <div class="col-md-2">
                    <label class="form-label d-block">&nbsp;</label>
                    <button id="btnFilter" class="btn btn-success w-100">
                        <i class="bi bi-search me-1"></i> Cari
                    </button>
                </div>
                <div class="col-md-2 offset-md-2 text-end">
                    <label class="form-label d-block">&nbsp;</label>
                    <div class="dropdown">
                        <button class="btn btn-info w-100" type="button">
                            <a class="dropdown-item" href="#" id="btnExport">
                                <i class="bi bi-file-earmark-text me-1"></i> Export
                            </a>
                        </button>
                        <!-- <ul class="dropdown-menu w-100" aria-labelledby="dropdownExport">
                            <li>
                                <a class="dropdown-item" href="#" id="btnExport">
                                    <i class="bi bi-file-earmark-text me-1"></i> Export Ringkasan
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" id="btnExportDtl">
                                    <i class="bi bi-file-earmark-spreadsheet me-1"></i> Export Detail
                                </a>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="table-responsive">
            <table id="datatable" class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <?php foreach ($thead as $th): ?>
                            <th><?= $th; ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?= $tbody ?>
                </tbody>
            </table>
        </div>
    </div>
</div>