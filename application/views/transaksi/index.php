<?php
$this->load->view('layout/header', ['title' => 'Daftar Transaksi']);


// Isi <thead>
$thead = ['No', 'ID Transaksi', 'Nama Pembeli', 'Tanggal Transaksi', 'Total Dibayar', 'keterangan', 'Aksi'];

// Isi <tbody>
$tbody = '';
$no = 1;
if (!empty($transaksi)) {
    foreach ($transaksi as $row) {
        $tbody .= '<tr>';
        $tbody .= '<td>' . $no++ . '</td>';
        $tbody .= '<td>' . $row->id_transaksi . '</td>';
        $tbody .= '<td>' . $row->nama_pembeli . '</td>';
        $tbody .= '<td data-filter="' . $row->tgl_iso . '">' . $row->tgl . '</td>';
        $tbody .= '<td>' . 'Rp. ' . number_format($row->total_bayar, 0, ',', '.');
        $row->total_bayar . '</td>';

        $tbody .= '<td>' . $row->keterangan . '</td>';
        $tbody .= '<td>
                    <a href="' . site_url('transaksi/detail/' . urlencode(base64_encode($row->id_transaksi))) . '" class="btn btn-sm btn-success">detail</a>
                    <a href="' . site_url('transaksi/edit/' . urlencode(base64_encode($row->id_transaksi))) . '" class="btn btn-sm btn-warning">Edit</a>
                    <a href="' . site_url('transaksi/hapus/' . $row->id_transaksi) . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Yakin ingin menghapus?\')">Hapus</a>
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
