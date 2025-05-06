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