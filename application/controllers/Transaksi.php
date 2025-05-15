<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaksi_model');
    }

    public function index()
    {
        $min_date = $this->input->get('min_date');
        $max_date = $this->input->get('max_date');

        // Default null-check
        $min_date_db = $this->convert_date_src($min_date);
        $max_date_db = $this->convert_date_src($max_date);

        $data['min_date'] = $min_date;
        $data['max_date'] = $max_date;
        $data['transaksi'] = $this->Transaksi_model->get_filtered_transaksi($min_date_db, $max_date_db);

        $this->load->view('transaksi/index', $data);
    }

    private function convert_date($str)
    {
        if (!$str) return null;

        $datetime = DateTime::createFromFormat('d-m-Y H:i', $str);

        if ($datetime === false) {
            return null; // Format tidak valid
        }

        return $datetime->format('Y-m-d H:i:s.000'); // Format untuk disimpan di database
    }

    private function convert_date_src($str)
    {
        if (!$str) return null;
        $parts = explode('-', $str);
        if (count($parts) === 3) {
            return "{$parts[2]}-{$parts[1]}-{$parts[0]}"; // d-m-Y -> Y-m-d
        }
        return $str;
    }

    public function tambah()
    {
        $data['transaksi'] = $this->Transaksi_model->get_all_transaksi(); // Ambil semua tanpa limit
        $data['barang'] = $this->Transaksi_model->get_barang();
        $data['pembeli'] = $this->Transaksi_model->get_pembeli();
        $data['page'] = 'tambah';
        $this->load->view('transaksi/tambah', $data);
    }

    public function simpan()
    {
        $pembeli_id  = $this->input->post('pembeli_id');
        $tanggal     = $this->convert_date($this->input->post('tanggal'));
        $keterangan  = $this->input->post('keterangan');
        $barang_ids  = $this->input->post('barang_ids');
        $jumlahs     = $this->input->post('jumlahs');
        $hargas      = $this->input->post('hargas');
        $persens = $this->input->post('persens');
        $rps = $this->input->post('rps');

        // Validasi dasar
        $errors = [];

        if (!$pembeli_id) {
            $errors[] = "Pembeli harus dipilih.";
        }

        if (!$tanggal) {
            $errors[] = "Tanggal transaksi harus diisi.";
        }

        if (empty($barang_ids) || !is_array($barang_ids)) {
            $errors[] = "Minimal satu barang harus dipilih.";
        } else {
            foreach ($barang_ids as $i => $barang_id) {
                if (empty($barang_id)) {
                    $errors[] = "Barang ke-" . ($i + 1) . " tidak boleh kosong.";
                }
                if (empty($jumlahs[$i]) || $jumlahs[$i] < 1) {
                    $errors[] = "Jumlah barang ke-" . ($i + 1) . " harus minimal 1.";
                }
                if (empty($hargas[$i]) || $hargas[$i] < 1) {
                    $errors[] = "Harga barang ke-" . ($i + 1) . " tidak valid.";
                }
                if (isset($jumlahs[$i], $hargas[$i], $persens[$i], $rps[$i])) {
                    $jumlah = (int) $jumlahs[$i];
                    $harga = (float) $hargas[$i];
                    $persen = (float) $persens[$i];
                    $rp = (float) $rps[$i];

                    $total = $jumlah * $harga;
                    $diskon_persen = ($persen / 100) * $total;
                    $total_akhir = $total - $diskon_persen - $rp;

                    if ($total_akhir < 0) {
                        $errors[] = "Diskon barang ke-" . ($i + 1) . " terlalu besar.";
                    }
                }
            }
        }

        if (!empty($errors)) {
            $this->session->set_flashdata('error_message', $errors);

            // Data untuk repopulasi form
            $data['pembeli'] = $this->Pembeli_model->get_pembeli();
            $data['barang'] = $this->Barang_model->get_all_barang();
            $data['old'] = [
                'pembeli_id' => $pembeli_id,
                'tanggal' => $tanggal,
                'keterangan' => $keterangan,
                'barang_ids' => $barang_ids,
                'jumlahs' => $jumlahs,
                'hargas' => $hargas,
                'persens'    => $persens,
                'rps'        => $rps
            ];
            $data['page'] = 'tambah';

            $this->load->view('transaksi/tambah', $data);
            return;
        }

        // Simpan ke database
        $transaksiData = [
            'pembeli_id' => $pembeli_id,
            'tanggal'    => $tanggal,
            'keterangan' => $keterangan,
            'barang_ids' => $barang_ids,
            'jumlahs'    => $jumlahs,
            'hargas'     => $hargas,
            'persens'    => $persens,
            'rps'        => $rps
        ];

        $this->Transaksi_model->simpan_transaksi($transaksiData);

        $this->session->set_flashdata('success_message', 'Transaksi berhasil disimpan.');
        redirect('transaksi');
    }

    public function edit($encoded_id)
    {
        $id = base64_decode(urldecode($encoded_id));
        $this->load->model('Transaksi_model');
        $this->load->model('Pembeli_model');
        $this->load->model('Barang_model');

        $transaksi = $this->Transaksi_model->get_by_id($id);
        $detail    = $this->Transaksi_model->get_detail_by_transaksi($id);

        if (!$transaksi) {
            show_404();
        }

        $data = [
            'transaksi' => $transaksi,
            'detail'    => $detail,
            'pembeli'   => $this->Pembeli_model->get_pembeli(),
            'barang'    => $this->Barang_model->get_all_barang()
        ];
        $data['page'] = 'edit';

        $this->load->view('transaksi/edit', $data);
    }

    public function detail($encoded_id)
    {
        $id = base64_decode(urldecode($encoded_id));

        $transaksi = $this->Transaksi_model->get_by_id($id);
        $detail    = $this->Transaksi_model->get_detail_by_transaksi($transaksi->id_transaksi);


        if (!$transaksi) {
            show_404();
        }

        // Ambil data pembeli
        $pembeli = $this->Pembeli_model->get_by_id($transaksi->pembeli_id);

        // Ambil data barang dari transaksi detail berdasarkan barang_id
        foreach ($detail as $item) {
            $barang = $this->Barang_model->get_by_id($item->barang_id);
            $item->barang = $barang;
        }

        $data = [
            'transaksi' => $transaksi,
            'detail'    => $detail,
            'pembeli'   => $pembeli
        ];
        $data['page'] = 'tambah';

        $this->load->view('transaksi/detail', $data);
    }

    public function update($id)
    {
        $errors = [];
        $postData = $this->input->post();
        $postData['tanggal'] = $this->convert_date($this->input->post('tanggal'));

        if (!$this->Transaksi_model->update_transaksi($postData, $errors)) {
            // Gagal validasi, kembali ke form edit
            $data['pembeli'] = $this->Pembeli_model->get_pembeli();
            $data['barang']  = $this->Barang_model->get_all_barang();

            $data['old'] = $postData;
            $data['error_message'] = $errors;
            $data['page'] = 'edit';

            // Perlu juga isi ulang transaksi dan detail
            $data['transaksi'] = $this->Transaksi_model->get_by_id($id);
            $data['detail'] = $this->Transaksi_model->get_detail_by_transaksi($id);

            $this->load->view('transaksi/edit', $data);
            return;
        }

        $this->session->set_flashdata('success_message', 'Transaksi berhasil diperbarui.');
        redirect('transaksi');
    }

    public function hapus($id)
    {
        $transaksi_id = $this->Transaksi_model->get_transaksi_id($id);

        $this->Transaksi_model->delete_transaksi($transaksi_id);
        $this->session->set_flashdata('success_message', 'Transaksi berhasil dihapus.');
        redirect('transaksi');
    }

    public function export_excel()
    {
        $min_date = $this->input->get('min_date');
        $max_date = $this->input->get('max_date');

        $min_date_db = $this->convert_date_src($min_date);
        $max_date_db = $this->convert_date_src($max_date);

        // Ambil jumlah per halaman dari DataTables
        $per_page = $this->input->get('length') ?: 10;

        // Hitung total data setelah filter
        $total_data = $this->Transaksi_model->count_filtered_transaksi($min_date_db, $max_date_db);
        $total_pages = ceil($total_data / $per_page);

        // Buat Spreadsheet baru
        $spreadsheet = new Spreadsheet();

        for ($page = 0; $page < $total_pages; $page++) {
            $offset = $page * $per_page;
            $data = $this->Transaksi_model->get_filtered_transaksi($min_date_db, $max_date_db, $per_page, $offset);

            // Tambahkan sheet baru
            $sheetTitle = 'Halaman ' . ($page + 1);
            if ($page == 0) {
                $sheet = $spreadsheet->getActiveSheet()->setTitle($sheetTitle);
            } else {
                $sheet = $spreadsheet->createSheet()->setTitle($sheetTitle);
            }

            // Judul laporan di baris 1
            $judul = 'Laporan Transaksi';
            if ($min_date && $max_date) {
                $judul .= ' Tanggal ' . $min_date . ' - ' . $max_date;
            } else {
                $judul .= ' (Semua Data)';
            }
            $sheet->setCellValue('A1', $judul);
            $sheet->mergeCells('A1:F1');
            $sheet->getStyle('A1')->applyFromArray([
                'font' => ['bold' => true, 'size' => 14],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ],
            ]);

            // Header
            $sheet->setCellValue('A2', 'No');
            $sheet->setCellValue('B2', 'ID Transaksi');
            $sheet->setCellValue('C2', 'Nama Pembeli');
            $sheet->setCellValue('D2', 'Tanggal');
            $sheet->setCellValue('E2', 'Total Dibayar');
            $sheet->setCellValue('F2', 'Keterangan');

            // Styling Header
            $headerStyle = [
                'font' => ['bold' => true, 'color' => ['argb' => 'FFFFFFFF']],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'startColor' => ['argb' => '4CAF50'],
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                ],
            ];
            $sheet->getStyle('A2:F2')->applyFromArray($headerStyle);

            // Data
            $row = 3;
            $no = $offset + 1;
            foreach ($data as $tr) {
                $sheet->setCellValue("A{$row}", $no++);
                $sheet->setCellValue("B{$row}", $tr->id_transaksi);
                $sheet->setCellValue("C{$row}", $tr->nama_pembeli);
                $sheet->setCellValue("D{$row}", date('d-m-Y', strtotime($tr->tanggal)));
                $sheet->setCellValue("E{$row}", $tr->total_bayar);
                $sheet->setCellValue("F{$row}", $tr->keterangan);

                // Rata tengah semua isi kolom (kecuali uang & teks)
                $sheet->getStyle("A{$row}:F{$row}")->applyFromArray([
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                    ],
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => '000000'],
                        ],
                    ],
                ]);

                // Format uang
                $sheet->getStyle("E{$row}")
                    ->getNumberFormat()
                    ->setFormatCode('[$Rp] #,##0.00');


                $row++;
            }

            // Auto width
            foreach (range('A', 'F') as $col) {
                $sheet->getColumnDimension($col)->setAutoSize(true);
            }
        }

        // Download Excel
        $filename = 'Laporan_Transaksi_' . date('YmdHis') . '.xlsx';
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header("Content-Disposition: attachment;filename=\"$filename\"");
        header('Cache-Control: max-age=0');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    }

    public function export_excel_detail()
    {
        $min_date = $this->input->get('min_date');
        $max_date = $this->input->get('max_date');

        $min_date_db = $this->convert_date_src($min_date);
        $max_date_db = $this->convert_date_src($max_date);

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet()->setTitle('Laporan Transaksi');

        $judul = 'Laporan Transaksi & Detail';
        if ($min_date && $max_date) {
            $judul .= ' Tanggal ' . $min_date . ' - ' . $max_date;
        }

        $sheet->setCellValue('A1', $judul);
        $sheet->mergeCells('A1:J1');
        $sheet->getStyle('A1')->applyFromArray([
            'font' => ['bold' => true, 'size' => 14],
            'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
        ]);

        // Header kolom
        $headers = ['No', 'ID Transaksi', 'Nama Pembeli', 'Tanggal', 'Total Bayar', 'Keterangan', 'Nama Barang', 'Jumlah', 'Diskon (%)', 'Diskon (Rp)', 'Subtotal'];
        $col = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($col . '2', $header);
            $col++;
        }

        $sheet->getStyle('A2:K2')->applyFromArray([
            'font' => ['bold' => true, 'color' => ['argb' => 'FFFFFFFF']],
            'fill' => ['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID, 'startColor' => ['argb' => '4CAF50']],
            'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
        ]);

        log_message('debug', "Export Detail: min_date=$min_date | max_date=$max_date");
        log_message('debug', "Converted: min_date_db=$min_date_db | max_date_db=$max_date_db");


        // Data
        $data = $this->Transaksi_model->get_transaksi_with_detail($min_date_db, $max_date_db);
        $row = 3;
        $no = 1;
        $last_id_transaksi = null;

        foreach ($data as $tr) {
            $same_transaksi = $last_id_transaksi === $tr->id_transaksi;

            $sheet->setCellValue("A{$row}", $same_transaksi ? '' : $no++);
            $sheet->setCellValue("B{$row}", $same_transaksi ? '' : $tr->id_transaksi);
            $sheet->setCellValue("C{$row}", $same_transaksi ? '' : $tr->nama_pembeli);
            $sheet->setCellValue("D{$row}", $same_transaksi ? '' : date('d-m-Y', strtotime($tr->tanggal)));
            $sheet->setCellValue("E{$row}", $same_transaksi ? '' : $tr->total_bayar);
            $sheet->setCellValue("F{$row}", $same_transaksi ? '' : $tr->keterangan);

            $sheet->setCellValue("G{$row}", $tr->nama_barang);
            $sheet->setCellValue("H{$row}", $tr->jumlah);
            $sheet->setCellValue("I{$row}", $tr->disc_persen);
            $sheet->setCellValue("J{$row}", $tr->disc_rp);
            $sheet->setCellValue("K{$row}", $tr->subtotal);

            // Styling dan border
            $sheet->getStyle("A{$row}:K{$row}")->applyFromArray([
                'borders' => [
                    'allBorders' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],
                ],
                'alignment' => ['vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER],
            ]);

            $sheet->getStyle("E{$row}")
                ->getNumberFormat()
                ->setFormatCode('[$Rp] #,##0.00');

            $row++;
            $last_id_transaksi = $tr->id_transaksi;
        }
        log_message('debug', $this->db->last_query());

        foreach (range('A', 'K') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }

        $filename = 'Laporan_Transaksi_Detail_' . date('YmdHis') . '.xlsx';
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header("Content-Disposition: attachment;filename=\"$filename\"");
        header('Cache-Control: max-age=0');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    }
}
