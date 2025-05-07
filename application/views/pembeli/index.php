<?php
$this->load->view('layout/header', ['title' => 'Daftar Pembeli']);


// Isi <thead>
$thead = ['No', 'Nama Pembeli', 'Alamat', 'Status', 'Tgl & Jam Perubahan', 'Aksi'];

// Isi <tbody>
$tbody = '';
$no = 1;
if (!empty($pembeli)) {
    foreach ($pembeli as $row) {
        $statusClass = $row->status_keterangan === 'Aktif' ? 'btn-success' : 'btn-danger';
        $statusText = $row->status_keterangan;
        $tbody .= '<tr>';
        $tbody .= '<td>' . $no++ . '</td>';
        $tbody .= '<td>' . $row->nama . '</td>';
        $tbody .= '<td>' . $row->alamat . '</td>';
        $tbody .= '<td>
    <a href="' . site_url('pembeli/hapus/' . $row->id) . '" class="btn btn-sm ' . $statusClass . '" onclick="return confirm(\'Yakin ingin merubah status?\')">' . $statusText . '</a>
</td>';
        $tbody .= '<td>' . ($row->updated_at ? format_tanggal_indonesia($row->updated_at) : '-') . '</td>';
        $tbody .= '<td>
                    <a href="' . site_url('pembeli/edit/' . urlencode(base64_encode($row->id))) . '" class="btn btn-sm btn-warning">Edit</a>
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
