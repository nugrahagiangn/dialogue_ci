</div> <!-- End container -->

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            destroy: true
        });
    });
</script>
<script>
    setTimeout(function() {
        let alert = document.querySelector('.alert');
        if (alert) {
            alert.classList.remove('show');
            setTimeout(() => alert.remove(), 150);
        }
    }, 4000);
</script>



</body>

</html>