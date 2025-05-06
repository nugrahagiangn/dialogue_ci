<?php
$this->load->view('layout/header', ['title' => 'Daftar Barang']);

$thead = ['No', 'Nama Barang', 'Harga', 'Status', 'Tgl & Jam Ditambahkan', 'Tgl & Jam Diubah', 'Aksi'];

$tbody = '';
$no = 1;
if (!empty($barang)) {
    foreach ($barang as $row) {
        $statusClass = $row->status_keterangan === 'Aktif' ? 'btn-success' : 'btn-danger';
        $statusText = $row->status_keterangan;

        $tbody .= '<tr>';
        $tbody .= '<td>' . $no++ . '</td>';
        $tbody .= '<td>' . $row->nama . '</td>';
        $tbody .= '<td>' . $row->harga . '</td>';
        $tbody .= '<td>
    <a href="' . site_url('barang/hapus/' . $row->id) . '" class="btn btn-sm ' . $statusClass . '" onclick="return confirm(\'Yakin ingin merubah status?\')">' . $statusText . '</a>
</td>';
        $tbody .= '<td>' . format_tanggal_indonesia($row->created_at) . '</td>';
        $tbody .= '<td>' . ($row->updated_at ? format_tanggal_indonesia($row->updated_at) : '-') . '</td>';
        $tbody .= '<td>
                    <a href="' . site_url('barang/edit/' . urlencode(base64_encode($row->id))) . '" class="btn btn-sm btn-warning">Edit</a>
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
