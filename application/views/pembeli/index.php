<?php
$this->load->view('layout/header', ['title' => 'Daftar Pembeli']);


// Isi <thead>
$thead = ['No', 'Nama Pembeli', 'Alamat', 'Aksi'];

// Isi <tbody>
$tbody = '';
$no = 1;
if (!empty($pembeli)) {
    foreach ($pembeli as $row) {
        $tbody .= '<tr>';
        $tbody .= '<td>' . $no++ . '</td>';
        $tbody .= '<td>' . $row->nama . '</td>';
        $tbody .= '<td>' . $row->alamat . '</td>';
        $tbody .= '<td>
                    <a href="' . site_url('pembeli/edit/' . urlencode(base64_encode($row->id))) . '" class="btn btn-sm btn-warning">Edit</a>
                    <a href="' . site_url('pembeli/hapus/' . $row->id) . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Yakin ingin menghapus?\')">Hapus</a>
                  </td>';
        $tbody .= '</tr>';
    }
}

$this->load->view('layout/table_list', [
    'tableTitle' => 'Daftar Pembeli',
    'thead' => $thead,
    'tbody' => $tbody
]);

$this->load->view('layout/footer');
