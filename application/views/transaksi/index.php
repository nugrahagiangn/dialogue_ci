<?php
$this->load->view('layout/header', ['title' => 'Daftar Transaksi']);


// Isi <thead>
$thead = ['No', 'Barang', 'Pembeli', 'Jumlah', 'Tanggal Transaksi', 'Aksi'];

// Isi <tbody>
$tbody = '';
$no = 1;
if (!empty($transaksi)) {
    foreach ($transaksi as $row) {
        $tbody .= '<tr>';
        $tbody .= '<td>' . $no++ . '</td>';
        $tbody .= '<td>' . $row->nama_barang . '</td>';
        $tbody .= '<td>' . $row->nama_pembeli . '</td>';
        $tbody .= '<td>' . $row->jumlah . '</td>';
        $tbody .= '<td>' . format_tanggal_indonesia($row->created_at) . '</td>';
        $tbody .= '<td>
                    <a href="' . site_url('transaksi/edit/' . urlencode(base64_encode($row->id))) . '" class="btn btn-sm btn-warning">Edit</a>
                    <a href="' . site_url('transaksi/hapus/' . $row->id) . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Yakin ingin menghapus?\')">Hapus</a>
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
