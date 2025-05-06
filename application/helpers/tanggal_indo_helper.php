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

    $tgl = $tanggal . ' ' . $bulan[$bulan_en] . ' ' . $tahun . ' ' . $jam;
    return $tgl;
}
