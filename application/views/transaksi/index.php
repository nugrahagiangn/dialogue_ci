<?php
$this->load->view('layout/header', ['title' => 'Daftar Transaksi']);

// Isi <thead>
$thead = [
    'No',
    'ID Transaksi',
    'Nama Pembeli',
    'Tanggal Transaksi',
    'Total',
    'Diskon ',
    'Jumlah Bayar',
    'Keterangan',
    'Aksi'
];

// Isi <tbody>
$tbody = '';
$no = 1;
if (!empty($transaksi)) {
    foreach ($transaksi as $row) {
        // URL detail (encode dulu)
        $detail_url = site_url('transaksi/detail/' . urlencode(base64_encode($row->id_transaksi)));

        // Tambahkan atribut style cursor pointer dan atribut onclick ke <tr>
        $tbody .= '<tr style="cursor:pointer" onclick="window.location=\'' . $detail_url . '\'">';
        $tbody .= '<td>' . $no++ . '</td>';
        $tbody .= '<td>' . $row->id_transaksi . '</td>';
        $tbody .= '<td>' . $row->nama_pembeli . '</td>';
        $tbody .= '<td data-filter="' . $row->tgl_iso . '">' . $row->tgl . '</td>';
        $tbody .= '<td>Rp. ' . number_format($row->total_bayar, 0, ',', '.') . '</td>';
        $tbody .= '<td>Rp. ' . number_format($row->total_diskon, 0, ',', '.') . '</td>';
        $tbody .= '<td>Rp. ' . number_format($row->total_setelah_diskon, 0, ',', '.') . '</td>';
        $tbody .= '<td>' . $row->keterangan . '</td>';

        // Hilangkan tombol Edit, tapi tetap tombol Hapus (atau bisa disesuaikan)
        $tbody .= '<td>
    <a href="' . site_url('transaksi/edit/' . urlencode(base64_encode($row->id_transaksi))) . '" class="btn btn-sm btn-warning" onclick="event.stopPropagation()"><i class="bi bi-pencil me-1"></i></a>
    <a href="' . site_url('transaksi/hapus/' . $row->id_transaksi) . '" class="btn btn-sm btn-danger" onclick="event.stopPropagation(); return confirm(\'Yakin ingin menghapus?\')"><i class="bi bi-trash me-1"></i></a>
</td>';


        $tbody .= '</tr>';
    }
}


$this->load->view('layout/table_list', [
    'tableTitle' => 'Daftar transaksi',
    'thead' => $thead,
    'tbody' => $tbody
]);

$this->load->view('layout/footer');
