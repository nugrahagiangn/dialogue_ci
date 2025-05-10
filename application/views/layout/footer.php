</div> <!-- End container -->

<!-- JS Libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    let barangList = <?= json_encode(isset($barang) ? $barang : []); ?>;

    function formatRupiah(angka) {
        return 'Rp ' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    }

    function updateNomorBarang() {
        document.querySelectorAll('.barang-item').forEach((el, index) => {
            const label = el.querySelector('.form-number');
            if (label) {
                label.textContent = `#${index + 1}`;
            }
        });
    }



    function updateTotal() {
        let subtotal = 0;
        let list = '';
        document.querySelectorAll('.barang-item').forEach(el => {
            const harga = parseInt(el.querySelector('.harga')?.value || 0);
            const jumlah = parseInt(el.querySelector('.jumlah')?.value || 0);
            const nama = el.querySelector('.barang_id option:checked')?.dataset.nama || '';
            const total = harga * jumlah;
            if (jumlah > 0 && harga > 0) {
                subtotal += total;
                list += `<li class="list-group-item d-flex justify-content-between">${nama} (${jumlah} x ${formatRupiah(harga)}) <strong>${formatRupiah(total)}</strong></li>`;
            }
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
        const options = barangList.map(b => `
        <option value="${b.id}" data-harga="${b.harga}" data-nama="${b.nama}">
            ${b.nama} (Rp ${parseInt(b.harga).toLocaleString('id-ID')})
        </option>`).join('');

        return `
    <div class="barang-item row g-2 mb-2 align-items-end">
        <div class="col-md-1 text-center">
                                        <span class="badge bg-secondary form-number">1</span>
                                    </div>
                                    <div class="col-md-5">
            <select name="barang_ids[]" class="form-select barang_id select2">
                <option value="">-- Pilih Barang --</option>
                ${options}
            </select>
        </div>
        <div class="col-md-3">
            <input type="number" name="jumlahs[]" class="form-control jumlah" value="1" min="1">
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
        const page = '<?= isset($page) ? $page : ''; ?>';
        const tambahBtn = document.getElementById('tambahBarang');
        const containerId = page === 'edit' ? 'barangContainerEdit' : 'barangContainer';
        const initialContainer = document.getElementById(containerId);

        if (page === 'tambah' && barangList.length && document.querySelectorAll('.barang-item').length > 0) {
            initializeSelect2();
            updateTotal();
        }

        if (page === 'tambah' && initialContainer) {
            initialContainer.insertAdjacentHTML('beforeend', buatBarangRowHtml());
            initializeSelect2();
        }

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

        document.addEventListener('change', e => {
            if (e.target.matches('.barang_id')) {
                const harga = e.target.selectedOptions[0]?.dataset.harga || 0;
                const hargaInput = e.target.closest('.barang-item')?.querySelector('.harga');
                if (hargaInput) hargaInput.value = harga;
                updateTotal();
            }
            if (e.target.matches('.jumlah')) updateTotal();
        });

        ['input', 'keyup', 'paste'].forEach(event => {
            document.addEventListener(event, e => {
                if (e.target.matches('.jumlah')) setTimeout(updateTotal, 0);
            });
        });

        document.addEventListener('click', e => {
            if (e.target.matches('.hapusBarang')) {
                e.target.closest('.barang-item').remove();
                updateTotal();
                updateNomorBarang();
            }
        });

        if (page === 'edit') {
            initializeSelect2();
            updateTotal();
            updateNomorBarang();
        }
    });

    document.addEventListener('DOMContentLoaded', () => {
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

            if (!pembeli.value) {
                pembeli.classList.add('is-invalid');
                $(pembeli).next('.select2-container').find('.select2-selection').addClass('is-invalid');
                errors.push('Pembeli harus dipilih.');
            }

            if (!tanggal || !tanggal.value.trim() || isNaN(Date.parse(tanggal.value))) {
                tanggal.classList.add('is-invalid');
                errors.push('Tanggal transaksi harus diisi dengan format yang benar.');
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
                if (!jumlah || jumlah < 1) {
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
    });

    $(document).ready(function() {
        $('#datatable').DataTable({
            destroy: true
        });

        flatpickr(".datepicker", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            time_24hr: true,
            allowInput: true,
            defaultDate: new Date()
        });

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