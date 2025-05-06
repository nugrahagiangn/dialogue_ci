<?php
$this->load->view('layout/header', ['title' => 'Daftar Barang']);

// Isi <thead>
$thead = ['No', 'Nama Barang', 'Harga', 'Status', 'Tgl & Jam Ditambahkan', 'Tgl & Jam Diubah', 'Aksi'];

// Isi <tbody>
$tbody = '';
$no = 1;
if (!empty($barang)) {
    foreach ($barang as $row) {
        $status = ($row->status) === 't' ? 'Aktif' : 'Tidak Aktif';

        $tbody .= '<tr>';
        $tbody .= '<td>' . $no++ . '</td>';
        $tbody .= '<td>' . $row->nama . '</td>';
        $tbody .= '<td>' . $row->harga . '</td>';
        $tbody .= '<td>' . $status . '</td>';
        $tbody .= '<td>' . format_tanggal_indonesia($row->created_at) . '</td>';
        $tbody .= '<td>' . ($row->updated_at ? format_tanggal_indonesia($row->updated_at) : '-') . '</td>';
        $tbody .= '<td>
                    <a href="' . site_url('barang/edit/' . urlencode(base64_encode($row->id))) . '" class="btn btn-sm btn-warning">Edit</a>
                    <a href="' . site_url('barang/hapus/' . $row->id) . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Yakin ingin menghapus?\')">Hapus</a>
                  </td>';
        $tbody .= '</tr>';
    }
}

$this->load->view('layout/table_list', [
    'tableTitle' => 'Daftar Barang',
    'thead' => $thead,
    'tbody' => $tbody
]);

$this->load->view('layout/footer');
