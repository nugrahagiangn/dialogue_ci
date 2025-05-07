</div> <!-- End container -->

<!-- JS Libraries -->

<!-- jQuery -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Bundle (sudah termasuk Popper.js) -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables -->

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<!-- flatpickr -->

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-- select2 -->

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Script Initialization -->
<script>
    let barangList = <?= json_encode(isset($barang) ? $barang : []); ?>;

    function formatRupiah(angka) {
        return 'Rp ' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    }

    function updateTotal() {
        let subtotal = 0;
        let list = '';
        document.querySelectorAll('.barang-item').forEach(el => {
            const harga = parseInt(el.querySelector('.harga')?.value || 0);
            const jumlah = parseInt(el.querySelector('.jumlah')?.value || 0);
            const nama = el.querySelector('.barang_id option:checked')?.dataset.nama || '';
            const total = harga * jumlah;
            subtotal += total;
            list += `<li class="list-group-item d-flex justify-content-between">${nama} (${jumlah} x ${formatRupiah(harga)}) <strong>${formatRupiah(total)}</strong></li>`;
        });

        const subtotalDisplay = document.getElementById('subtotalDisplay');
        const listTotalBarang = document.getElementById('listTotalBarang');
        const totalHargaContainer = document.getElementById('totalHargaContainer');
        if (subtotalDisplay && listTotalBarang && totalHargaContainer) {
            listTotalBarang.innerHTML = list;
            subtotalDisplay.innerText = formatRupiah(subtotal);
            totalHargaContainer.classList.toggle('d-none', subtotal === 0);
        }
    }

    function buatBarangRowHtml() {
        let options = barangList.map(b => `
            <option value="${b.id}" data-harga="${b.harga}" data-nama="${b.nama}">
                ${b.nama} (Rp ${parseInt(b.harga).toLocaleString('id-ID')})
            </option>
        `).join('');

        return `
        <div class="barang-item row g-2 mb-2 align-items-end">
            <div class="col-md-6">
                <select name="barang_ids[]" class="form-select barang_id" required>
                    <option value="">-- Pilih Barang --</option>
                    ${options}
                </select>
            </div>
            <div class="col-md-3">
                <input type="number" name="jumlahs[]" class="form-control jumlah" value="1" min="1" required>
            </div>
            <div class="col-md-2">
                <input type="hidden" name="hargas[]" class="harga" value="0">
                <button type="button" class="btn btn-danger btn-sm hapusBarang">Hapus</button>
            </div>
        </div>`;
    }

    document.addEventListener('DOMContentLoaded', () => {
        const page = '<?= isset($page) ? $page : ''; ?>';

        // Event delegation universal
        document.addEventListener('change', function(e) {
            if (e.target.matches('.barang_id')) {
                const harga = e.target.selectedOptions[0]?.dataset.harga || 0;
                e.target.closest('.barang-item').querySelector('.harga').value = harga;
                updateTotal();
            }
            if (e.target.matches('.jumlah')) {
                updateTotal();
            }
        });

        document.addEventListener('click', function(e) {
            if (e.target.matches('.hapusBarang')) {
                e.target.closest('.barang-item').remove();
                updateTotal();
            }
        });

        // Tambah barang dinamis
        const tambahBtn = document.getElementById('tambahBarang');
        if (tambahBtn) {
            tambahBtn.addEventListener('click', function() {
                const targetContainer = document.getElementById(page === 'edit' ? 'barangContainerEdit' : 'barangContainer');
                if (targetContainer) {
                    targetContainer.insertAdjacentHTML('beforeend', buatBarangRowHtml());
                } else {
                    console.error('Container barang tidak ditemukan!');
                }
            });
        }

        // Jalankan updateTotal awal saat edit
        if (page === 'edit') {
            updateTotal();
        }
    });
    $(document).ready(function() {
        $('#datatable').DataTable({
            destroy: true
        });

        flatpickr(".datepicker", {
            dateFormat: "Y-m-d",
            allowInput: true
        });

        // Alert auto-dismiss
        setTimeout(function() {
            let alert = document.querySelector('.alert');
            if (alert) {
                alert.classList.remove('show');
                setTimeout(() => alert.remove(), 150);
            }
        }, 4000);

        $('.select2').select2();

        $('#barangSelect').on('change', function() {
            const selectedBarang = $(this).val();
            const container = $('#jumlahContainer');
            container.html('');
            $('#listTotalBarang').html('');
            $('#totalHargaContainer').addClass('d-none');
            $('#subtotalDisplay').text('Rp 0');

            if (!selectedBarang) return;

            selectedBarang.forEach(function(id) {
                const nama = $('#barangSelect option[value="' + id + '"]').data('nama');
                const harga = $('#barangSelect option[value="' + id + '"]').data('harga');

                const inputHTML = `
                    <div class="mb-3">
                        <label class="form-label">${nama} - Jumlah</label>
                        <input type="hidden" name="barang_id[]" value="${id}">
                        <input type="hidden" name="harga[]" class="harga-barang" data-id="${id}" value="${harga}">
                        <input type="number" name="jumlah[]" class="form-control jumlah-barang" data-id="${id}" required min="1" placeholder="Jumlah untuk ${nama}">
                    </div>
                `;
                container.append(inputHTML);
            });
        });

        $(document).on('input', '.jumlah-barang', function() {
            let subtotal = 0;
            $('#listTotalBarang').html('');

            $('.jumlah-barang').each(function() {
                const id = $(this).data('id');
                const jumlah = parseInt($(this).val()) || 0;
                const harga = parseInt($(`.harga-barang[data-id="${id}"]`).val());

                if (jumlah > 0) {
                    const total = jumlah * harga;
                    subtotal += total;

                    const nama = $('#barangSelect option[value="' + id + '"]').data('nama');
                    const itemHTML = `
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            ${nama} (${jumlah} x Rp ${harga.toLocaleString('id-ID')})
                            <span class="badge bg-primary rounded-pill">Rp ${total.toLocaleString('id-ID')}</span>
                        </li>
                    `;
                    $('#listTotalBarang').append(itemHTML);
                }
            });

            if (subtotal > 0) {
                $('#totalHargaContainer').removeClass('d-none');
                $('#subtotalDisplay').text(`Rp ${subtotal.toLocaleString('id-ID')}`);
            } else {
                $('#totalHargaContainer').addClass('d-none');
                $('#subtotalDisplay').text('Rp 0');
            }
        });
    });
</script>


<!-- <script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            destroy: true
        });

        flatpickr(".datepicker", {
            dateFormat: "Y-m-d",
            allowInput: true
        });

        // Alert auto-dismiss
        setTimeout(function() {
            let alert = document.querySelector('.alert');
            if (alert) {
                alert.classList.remove('show');
                setTimeout(() => alert.remove(), 150);
            }
        }, 4000);

        $('.select2').select2();

        $('#barangSelect').on('change', function() {
            const selectedBarang = $(this).val();
            const container = $('#jumlahContainer');
            container.html('');
            $('#listTotalBarang').html('');
            $('#totalHargaContainer').addClass('d-none');
            $('#subtotalDisplay').text('Rp 0');

            if (!selectedBarang) return;

            selectedBarang.forEach(function(id) {
                const nama = $('#barangSelect option[value="' + id + '"]').data('nama');
                const harga = $('#barangSelect option[value="' + id + '"]').data('harga');

                const inputHTML = `
                    <div class="mb-3">
                        <label class="form-label">${nama} - Jumlah</label>
                        <input type="hidden" name="barang_id[]" value="${id}">
                        <input type="hidden" name="harga[]" class="harga-barang" data-id="${id}" value="${harga}">
                        <input type="number" name="jumlah[]" class="form-control jumlah-barang" data-id="${id}" required min="1" placeholder="Jumlah untuk ${nama}">
                    </div>
                `;
                container.append(inputHTML);
            });
        });

        $(document).on('input', '.jumlah-barang', function() {
            let subtotal = 0;
            $('#listTotalBarang').html('');

            $('.jumlah-barang').each(function() {
                const id = $(this).data('id');
                const jumlah = parseInt($(this).val()) || 0;
                const harga = parseInt($(`.harga-barang[data-id="${id}"]`).val());

                if (jumlah > 0) {
                    const total = jumlah * harga;
                    subtotal += total;

                    const nama = $('#barangSelect option[value="' + id + '"]').data('nama');
                    const itemHTML = `
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            ${nama} (${jumlah} x Rp ${harga.toLocaleString('id-ID')})
                            <span class="badge bg-primary rounded-pill">Rp ${total.toLocaleString('id-ID')}</span>
                        </li>
                    `;
                    $('#listTotalBarang').append(itemHTML);
                }
            });

            if (subtotal > 0) {
                $('#totalHargaContainer').removeClass('d-none');
                $('#subtotalDisplay').text(`Rp ${subtotal.toLocaleString('id-ID')}`);
            } else {
                $('#totalHargaContainer').addClass('d-none');
                $('#subtotalDisplay').text('Rp 0');
            }
        });
    });

    // ===== Bagian Vanilla JS Dinamis =====
    let barangList = <?php echo json_encode(isset($barang) ? $barang : []); ?>;


    function formatRupiah(angka) {
        return 'Rp ' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    }

    function updateTotal() {
        let subtotal = 0;
        let list = '';
        document.querySelectorAll('.barang-item').forEach(el => {
            const harga = parseInt(el.querySelector('.harga').value);
            const jumlah = parseInt(el.querySelector('.jumlah').value) || 0;
            const nama = el.querySelector('.barang_id option:checked')?.dataset.nama || '';
            const total = harga * jumlah;
            subtotal += total;
            list += `<li class="list-group-item d-flex justify-content-between">${nama} (${jumlah} x ${formatRupiah(harga)}) <strong>${formatRupiah(total)}</strong></li>`;
        });

        document.getElementById('listTotalBarang').innerHTML = list;
        document.getElementById('subtotalDisplay').innerText = formatRupiah(subtotal);
        document.getElementById('totalHargaContainer').classList.toggle('d-none', subtotal === 0);
    }

    function tambahBarangRow() {
        const container = document.getElementById('barangContainer');
        if (!container) {
            console.error('Elemen #barangContainer tidak ditemukan!');
            return;
        }

        let options = barangList.map(b => `<option value="${b.id}" data-harga="${b.harga}" data-nama="${b.nama}">${b.nama} (Rp ${b.harga.toLocaleString()})</option>`).join('');
        const html = `
    <div class="barang-item row g-2 mb-2 align-items-end">
        <div class="col-md-6">
            <select name="barang_id[]" class="form-select barang_id" required>
                <option value="">-- Pilih Barang --</option>
                ${options}
            </select>
        </div>
        <div class="col-md-3">
            <input type="number" name="jumlah[]" class="form-control jumlah" placeholder="Jumlah" min="1" value="1" required>
        </div>
        <div class="col-md-2">
            <input type="hidden" name="harga[]" class="harga" value="0">
            <button type="button" class="btn btn-danger btn-sm hapusBarang">Hapus</button>
        </div>
    </div>`;
        container.insertAdjacentHTML('beforeend', html);
    }


    document.addEventListener('DOMContentLoaded', () => {
        // Tambah baris awal
        tambahBarangRow();

        // Tombol tambah baris
        const tambahBtn = document.getElementById('tambahBarang');
        if (tambahBtn) {
            tambahBtn.addEventListener('click', tambahBarangRow);
        }

        // Event delegation
        document.addEventListener('change', function(e) {
            if (e.target.matches('.barang_id')) {
                const harga = e.target.selectedOptions[0]?.dataset.harga || 0;
                e.target.closest('.barang-item').querySelector('.harga').value = harga;
                updateTotal();
            }
            if (e.target.matches('.jumlah')) {
                updateTotal();
            }
        });

        document.addEventListener('click', function(e) {
            if (e.target.matches('.hapusBarang')) {
                e.target.closest('.barang-item').remove();
                updateTotal();
            }
        });
    });
</script> -->
</body>

</html>