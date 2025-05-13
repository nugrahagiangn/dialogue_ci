<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0"><?= $tableTitle; ?></h2>
    <?php
    $segment = $this->uri->segment(1) ?? 'transaksi';
    ?>
    <a href="<?= site_url($segment . '/tambah'); ?>" class="btn btn-primary">
        + Tambah <?= ucfirst($segment); ?>
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
            <div class="row mb-3">
                <div class="col-md-3">
                    <label>Dari Tanggal</label>
                    <input type="text" id="minDate" class="form-control datepicker" placeholder="YYYY-MM-DD">
                </div>
                <div class="col-md-3">
                    <label>Sampai Tanggal</label>
                    <input type="text" id="maxDate" class="form-control datepicker" placeholder="YYYY-MM-DD">
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