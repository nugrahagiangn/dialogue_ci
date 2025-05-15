</div> <!-- End container -->

<!-- JS Libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    const base_url = '<?= base_url() ?>';
</script>
<script>
    let barangList = <?= json_encode(isset($barang) ? $barang : []); ?>;

    function formatRupiah(angka) {
        if (isNaN(angka) || !angka) return 'Rp 0';
        return 'Rp ' + parseInt(angka).toLocaleString('id-ID');
    }

    function updateNomorBarang() {
        document.querySelectorAll('.barang-item').forEach((el, index) => {
            const label = el.querySelector('.form-number');
            if (label) {
                label.textContent = `#${index + 1}`;
            }
        });
    }

    function parseCustomDate(input) {
        const regex = /^(\d{2})-(\d{2})-(\d{4}) (\d{2}):(\d{2})$/;
        const match = input.match(regex);

        if (!match) return null;

        const [, dd, mm, yyyy, hh, mi] = match;
        return new Date(`${yyyy}-${mm}-${dd}T${hh}:${mi}:00`);
    }

    function updateTotal() {
        let totalSebelumDiskon = 0;
        let subtotal = 0;
        let list = '';

        document.querySelectorAll('.barang-item').forEach(el => {
            const harga = parseInt(el.querySelector('.harga')?.value || 0, 10);
            const jumlah = parseInt(el.querySelector('.jumlah')?.value || 0);
            const persenDiskon = parseFloat(el.querySelector('.persen')?.value || 0);
            const rpDiskon = parseInt(el.querySelector('.rp')?.value || 0);
            const nama = el.querySelector('.barang_id option:checked')?.dataset.nama || '';

            if (jumlah > 0 && harga > 0) {
                const total = harga * jumlah;
                totalSebelumDiskon += total;

                const diskonPersen = (persenDiskon / 100) * total;
                let totalSetelahDiskon = total - diskonPersen - rpDiskon;
                totalSetelahDiskon = totalSetelahDiskon < 0 ? 0 : totalSetelahDiskon;

                subtotal += totalSetelahDiskon;

                list += `<li class="list-group-item d-flex justify-content-between">
                ${nama} (${jumlah} x ${formatRupiah(harga)})
                <div class="text-end">
                    <small class="text-muted">Disc: ${persenDiskon}% + ${formatRupiah(rpDiskon)}</small><br>
                    <strong>${formatRupiah(totalSetelahDiskon)}</strong>
                </div>
            </li>`;
            }
        });

        const diskonPersenInput = document.querySelector('.diskon_persen');
        const diskonRupiahInput = document.querySelector('.diskon_rupiah');
        const diskonPersenGlobal = diskonPersenInput ? parseFloat(diskonPersenInput.value) || 0 : 0;
        const diskonRupiahGlobal = diskonRupiahInput ? parseInt(diskonRupiahInput.value) || 0 : 0;

        // Hitung total akhir setelah semua diskon
        let totalSetelahDiskonGlobal = subtotal;

        if (diskonPersenGlobal > 0) {
            totalSetelahDiskonGlobal -= subtotal * (diskonPersenGlobal / 100);
        }
        if (diskonRupiahGlobal > 0) {
            totalSetelahDiskonGlobal -= diskonRupiahGlobal;
        }
        totalSetelahDiskonGlobal = totalSetelahDiskonGlobal < 0 ? 0 : totalSetelahDiskonGlobal;

        // Update ke elemen DOM
        const subtotalDisplay = document.getElementById('subtotalDisplay'); // ➜ Sekarang tampilkan total awal
        const listTotalBarang = document.getElementById('listTotalBarang');
        const totalHargaContainer = document.getElementById('totalHargaContainer');
        const jumlahBayarDisplay = document.getElementById('jumlahBayarDisplay');

        if (subtotalDisplay) {
            subtotalDisplay.innerText = formatRupiah(totalSebelumDiskon); // 💡 ganti ke total sebelum diskon
        }

        if (listTotalBarang) {
            listTotalBarang.innerHTML = list;
        }

        if (totalHargaContainer) {
            totalHargaContainer.classList.toggle('d-none', totalSebelumDiskon === 0);
        }

        if (jumlahBayarDisplay) {
            jumlahBayarDisplay.innerText = formatRupiah(totalSetelahDiskonGlobal);
        }
    }

    function buatBarangRowHtml() {
        const options = barangList.map(b => `
        <option value="${b.id}" data-harga="${b.harga}" data-nama="${b.nama}">
            ${b.nama} (Rp ${parseInt(b.harga).toLocaleString('id-ID')})
        </option>`).join('');

        return `
    <div class="barang-item row g-2 mb-2 align-items-end">
        <div class="col-md-1 text-center">
            <span class="badge bg-secondary form-number">1</span>
        </div>
        <div class="col-md-3">
            <select name="barang_ids[]" class="form-select barang_id select2">
                <option value="">-- Pilih Barang --</option>
                ${options}
            </select>
        </div>
        <div class="col-md-2">
            <input type="number" name="jumlahs[]" class="form-control jumlah" value="1" min="1">
        </div>
        <div class="col-md-2">
            <input type="number" name="persens[]" class="form-control persen"  min="0">
        </div>
        <div class="col-md-2">
            <input type="number" name="rps[]" class="form-control rp"  min="0">
        </div>
        <div class="col-md-2">
            <input type="hidden" name="hargas[]" class="harga" value="0">
            <button type="button" class="btn btn-danger btn-sm hapusBarang">Hapus</button>
        </div>
    </div>`;
    }

    function initializeSelect2() {
        $('.select2').select2();
        $('.select2').off('select2:select').on('select2:select', function(e) {
            const selectedValue = e.params.data.id;
            const allSelects = document.querySelectorAll('.barang_id');
            let duplicate = false;

            allSelects.forEach(select => {
                if (select !== e.target && select.value === selectedValue) {
                    duplicate = true;
                }
            });

            if (duplicate) {
                // Reset select2 ke kosong
                $(this).val('').trigger('change');

                // Tampilkan toast
                if (toastDuplicate) {
                    const toast = new bootstrap.Toast(toastDuplicate);
                    toast.show();
                }

                return;
            }

            const selected = e.params.data.element;
            const harga = selected.getAttribute('data-harga') || 0;
            const row = e.target.closest('.barang-item');
            if (row) {
                const hargaInput = row.querySelector('.harga');
                if (hargaInput) hargaInput.value = harga;
            }
            updateTotal();
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        const PAGE_MODE = {
            TAMBAH: 'tambah',
            EDIT: 'edit'
        };
        const page = '<?= isset($page) ? $page : ''; ?>';

        const tambahBtn = document.getElementById('tambahBarang');
        const containerId = page === 'edit' ? 'barangContainerEdit' : 'barangContainer';
        const initialContainer = document.getElementById(containerId);

        // Halaman tambah: jika ada barangList & baris awal sudah muncul, jalankan Select2 & total
        if (page === PAGE_MODE.TAMBAH && barangList.length && document.querySelectorAll('.barang-item').length > 0) {
            initializeSelect2();
            updateTotal();
        }

        // Tambahkan satu baris kosong default (khusus tambah)
        if (page === PAGE_MODE.TAMBAH && initialContainer) {
            initialContainer.insertAdjacentHTML('beforeend', buatBarangRowHtml());
            initializeSelect2();
            updateNomorBarang();
        }

        // Tambah baris barang baru
        if (tambahBtn) {
            tambahBtn.addEventListener('click', () => {
                const container = document.getElementById(containerId);
                if (container) {
                    container.insertAdjacentHTML('beforeend', buatBarangRowHtml());
                    initializeSelect2();
                    updateNomorBarang();
                }
            });
        }
        const form = document.querySelector('form');
        if (!form) return;

        // ======= VALIDASI REAL-TIME =======

        // Pembeli (Select2)
        const pembeli = document.querySelector('[name="pembeli_id"]');
        $(pembeli).on('change', function() {
            if (this.value) {
                pembeli.classList.remove('is-invalid');
                $(this).next('.select2-container').find('.select2-selection').removeClass('is-invalid');
            }
        });

        // Tanggal
        const tanggal = document.querySelector('[name="tanggal"]');
        if (tanggal) {
            tanggal.addEventListener('input', function() {
                if (this.value && !isNaN(Date.parse(this.value))) {
                    tanggal.classList.remove('is-invalid');
                }
            });
        }

        // Barang & jumlah dinamis
        document.body.addEventListener('change', function(e) {
            if (e.target.matches('.barang_id')) {
                const select = e.target;
                if (select.value) {
                    select.classList.remove('is-invalid');
                    $(select).next('.select2-container').find('.select2-selection').removeClass('is-invalid');
                }
            }
        });

        document.body.addEventListener('input', function(e) {
            if (e.target.matches('.jumlah')) {
                const jumlah = parseInt(e.target.value);
                if (jumlah >= 1) {
                    e.target.classList.remove('is-invalid');
                }
            }
        });

        // ======= VALIDASI SAAT SUBMIT =======

        form.addEventListener('submit', function(e) {
            let errors = [];

            document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
            document.querySelectorAll('.alert-danger').forEach(el => el.remove());

            const diskonPersenGlobal = parseFloat(document.querySelector('.diskon_persen')?.value || 0);
            if (diskonPersenGlobal < 0 || diskonPersenGlobal > 100) {
                document.querySelector('.diskon_persen').classList.add('is-invalid');
                errors.push("Diskon persen global harus antara 0 - 100.");
            }

            if (!pembeli.value) {
                pembeli.classList.add('is-invalid');
                $(pembeli).next('.select2-container').find('.select2-selection').addClass('is-invalid');
                errors.push('Pembeli harus dipilih.');
            }

            // if (!tanggal || !tanggal.value.trim() || isNaN(Date.parse(tanggal.value))) {
            //     tanggal.classList.add('is-invalid');
            //     errors.push('Tanggal transaksi harus diisi dengan format yang benar.');
            // }
            const tanggalInput = tanggal.value.trim();

            console.log(tanggalInput);

            const parsedDate = parseCustomDate(tanggalInput);

            if (!tanggalInput || !parsedDate || isNaN(parsedDate.getTime())) {
                tanggal.classList.add('is-invalid');
                errors.push('Tanggal transaksi harus diisi dengan format yang benar (contoh: 14-05-2025 15:45).');
            }

            const barangItems = document.querySelectorAll('.barang-item');
            if (barangItems.length === 0) {
                errors.push('Minimal satu barang harus ditambahkan.');
            }

            barangItems.forEach((item, index) => {
                const barangSelect = item.querySelector('.barang_id');
                const jumlahInput = item.querySelector('.jumlah');

                if (!barangSelect || !barangSelect.value.trim()) {
                    barangSelect.classList.add('is-invalid');
                    $(barangSelect).next('.select2-container').find('.select2-selection').addClass('is-invalid');
                    errors.push(`Barang ke-${index + 1} harus dipilih.`);
                }

                const jumlah = parseInt(jumlahInput?.value);
                if (isNaN(jumlah) || jumlah < 1) {
                    jumlahInput.classList.add('is-invalid');
                    errors.push(`Jumlah barang ke-${index + 1} harus minimal 1.`);
                }
            });

            if (errors.length > 0) {
                e.preventDefault();

                const cardBody = document.querySelector('.card-body');
                const errorHtml = `
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    ${errors.map(msg => `<div>${msg}</div>`).join('')}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            `;
                cardBody.insertAdjacentHTML('afterbegin', errorHtml);
            }
        });

        // Saat select barang berubah: ambil harga dan isi input hidden harga
        document.addEventListener('change', e => {

            if (e.target.matches('.barang_id')) {
                const harga = e.target.selectedOptions[0]?.dataset.harga || 0;
                const hargaInput = e.target.closest('.barang-item')?.querySelector('.harga');
                if (hargaInput) hargaInput.value = harga;
                updateTotal();
            }

            if (e.target.matches('.jumlah') || e.target.matches('.diskon_persen') || e.target.matches('.diskon_rupiah')) {
                updateTotal();
            }
        });

        ['input', 'keyup', 'paste'].forEach(event => {
            document.addEventListener(event, e => {
                if (
                    e.target.matches('.jumlah') ||
                    e.target.matches('.persen') ||
                    e.target.matches('.rp')
                ) {
                    setTimeout(updateTotal, 0);
                }
            });
        });

        // Hapus baris barang
        document.addEventListener('click', e => {
            if (e.target.matches('.hapusBarang')) {
                e.target.closest('.barang-item').remove();
                updateTotal();
                updateNomorBarang();
            }
        });

        if (page === PAGE_MODE.EDIT) {
            // Set input harga dari data-harga
            document.querySelectorAll('.barang-item').forEach(row => {
                const select = row.querySelector('.barang_id');
                const hargaInput = row.querySelector('.harga');
                const selectedOption = select?.selectedOptions[0];
                const harga = selectedOption?.dataset.harga || 0;
                if (hargaInput) hargaInput.value = harga;
            });

            initializeSelect2();
            updateNomorBarang();

            // Trigger event input dan change di semua input relevan
            const allTriggerInputs = document.querySelectorAll(
                '.barang-item .jumlah, .barang-item .persen, .barang-item .diskon_persen'
            );

            allTriggerInputs.forEach(input => {
                input.dispatchEvent(new Event('input', {
                    bubbles: true
                }));
                input.dispatchEvent(new Event('change', {
                    bubbles: true
                }));
            });

            // Jalankan update total setelah semua input ready
            setTimeout(() => {
                updateTotal();
            }, 100);
        }

    });

    $(document).ready(function() {
        const today = new Date();
        const awalBulan = new Date(today.getFullYear(), today.getMonth(), 1);

        const formatDate = (date) => {
            const day = String(date.getDate()).padStart(2, '0');
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const year = date.getFullYear();
            return `${day}-${month}-${year}`; // Mengubah format menjadi dd-mm-yyyy
        };

        // Set default tanggal di input
        // $('#minDate').val(formatDate(awalBulan));
        // $('#maxDate').val(formatDate(today));

        // Inisialisasi flatpickr dengan format tanggal baru
        flatpickr('#minDate', {
            dateFormat: 'd-m-Y', // Format tanggal menjadi dd-mm-yyyy
            allowInput: true
        });
        flatpickr('#maxDate', {
            dateFormat: 'd-m-Y', // Format tanggal menjadi dd-mm-yyyy
            allowInput: true
        });
        flatpickr('#tanggalEdit', {
            dateFormat: "d-m-Y H:i",
            allowInput: true,
            time_24hr: true,
            enableTime: true,
        });
        flatpickr('#tanggalTbh', {
            dateFormat: "d-m-Y H:i",
            allowInput: true,
            time_24hr: true,
            enableTime: true,
            defaultDate: new Date()
        });

        flatpickr('.datepicker:not(#minDate):not(#maxDate):not(#tanggalEdit):not(#tanggalTbh)', {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            time_24hr: true,
            allowInput: true,
            defaultDate: new Date()
        });

        // Hanya aktifkan filter setelah tombol diklik
        let filterAktif = false;
        let minDate = null;
        let maxDate = null;

        $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
            if (!filterAktif) return true;

            const row = settings.aoData[dataIndex].nTr;
            const tglStr = $(row).find('td:eq(3)').data('filter'); // Kolom ke-4

            if (!tglStr) return true;

            const tgl = new Date(tglStr); // ISO format aman diparse

            if (isNaN(tgl)) return true; // skip kalau gagal parse

            if ((minDate && tgl < minDate) || (maxDate && tgl > maxDate)) {
                return false;
            }
            return true;
        });

        const table = $('#datatable').DataTable({
            destroy: true,
            order: [], // opsional: hilangkan sort default
            rowCallback: function(row, data, index) {
                const pageInfo = this.api().page.info(); // gunakan API dari DataTables, bukan variabel luar
                $('td:eq(0)', row).html(pageInfo.start + index + 1);
            }
        });

        $('#btnFilter').click(function(e) {
            e.preventDefault();
            const minDate = $('#minDate').val();
            const maxDate = $('#maxDate').val();
            const url = new URL(window.location.href);
            url.searchParams.set('min_date', minDate);
            url.searchParams.set('max_date', maxDate);
            window.location.href = url.toString();
        });

        $('#btnExport').click(function(e) {
            e.preventDefault();
            const minDate = $('#minDate').val();
            const maxDate = $('#maxDate').val();
            const exportUrl = `<?= base_url('transaksi/export_excel') ?>?min_date=${minDate}&max_date=${maxDate}`;
            window.location.href = exportUrl;
        });

        $('#btnExportDtl').on('click', function() {
            const minDate = $('#minDate').val();
            const maxDate = $('#maxDate').val();

            const url = `${base_url}transaksi/export_excel_detail?min_date=${minDate}&max_date=${maxDate}`;
            window.location.href = url;
        });

        // Auto hide alert
        setTimeout(() => {
            const alert = document.querySelector('.alert');
            if (alert) {
                alert.classList.remove('show');
                setTimeout(() => alert.remove(), 150);
            }
        }, 4000);
    });
</script>
<!-- Toast Error Duplicate -->
<div class="position-fixed top-50 start-50 translate-middle" style="z-index: 1055;">
    <div id="toastDuplicate" class="toast align-items-center text-bg-danger border-0 shadow" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                Barang sudah dipilih di baris lain. Silakan pilih barang lain.
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

</body>

</html>

</body>

</html>