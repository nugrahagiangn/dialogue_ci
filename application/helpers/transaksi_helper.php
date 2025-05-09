<?php
defined('BASEPATH') or exit('No direct script access allowed');

function validate_transaksi_input($post)
{
    $errors = [];

    // Validasi tanggal
    if (empty($post['tanggal']) || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $post['tanggal'])) {
        $errors['tanggal'] = "Tanggal transaksi wajib diisi dan harus dalam format YYYY-MM-DD.";
    }

    // Validasi pembeli
    if (empty($post['pembeli_id'])) {
        $errors['pembeli_id'] = "Pembeli harus dipilih.";
    }

    // Validasi barang & jumlah
    if (empty($post['produk_id']) || !is_array($post['produk_id'])) {
        $errors['produk_id'] = "Minimal satu barang harus dipilih.";
    } else {
        foreach ($post['produk_id'] as $i => $id_barang) {
            if (empty($id_barang)) {
                $errors["produk_id_$i"] = "Barang pada baris ke-" . ($i + 1) . " harus dipilih.";
            }
            if (!isset($post['jumlah'][$i]) || !is_numeric($post['jumlah'][$i]) || $post['jumlah'][$i] <= 0) {
                $errors["jumlah_$i"] = "Jumlah barang pada baris ke-" . ($i + 1) . " harus lebih dari 0.";
            }
        }
    }

    return $errors;
}
