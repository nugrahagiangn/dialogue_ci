<!DOCTYPE html>
<html lang="id">

<?php
function format_tanggal_indonesia($datetime)
{
    $bulan = [
        'January' => 'Januari',
        'February' => 'Februari',
        'March' => 'Maret',
        'April' => 'April',
        'May' => 'Mei',
        'June' => 'Juni',
        'July' => 'Juli',
        'August' => 'Agustus',
        'September' => 'September',
        'October' => 'Oktober',
        'November' => 'November',
        'December' => 'Desember',
    ];
    $tanggal = date('d', strtotime($datetime));
    $bulan_en = date('F', strtotime($datetime));
    $tahun = date('Y', strtotime($datetime));
    $jam = date('H:i', strtotime($datetime));
    return "$tanggal {$bulan[$bulan_en]} $tahun $jam";
}
?>

<head>
    <meta charset="UTF-8">
    <title><?= isset($title) ? $title : 'Sistem Transaksi'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <!-- flatpickr -->
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">

            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() == 'transaksi' ? 'active' : ''; ?>" href="<?= site_url('transaksi'); ?>">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() == 'barang' ? 'active' : ''; ?>" href="<?= site_url('barang'); ?>">Master Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() == 'pembeli' ? 'active' : ''; ?>" href="<?= site_url('pembeli'); ?>">Master Pembeli</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">