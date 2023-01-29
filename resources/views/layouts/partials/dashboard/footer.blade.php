<footer class="footer mt-auto">
    <div class="copyright bg-white">
        <p>
            &copy; <span id="copy-year"></span> Copyright Dashboard by <a class="text-primary">Gorilla
                Boards</a>
        </p>
    </div>
    <script>
        var d = new Date();
        var year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;
    </script>
</footer>

<script src="{{ asset('/dist/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/dist/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/dist/plugins/simplebar/simplebar.min.js') }}"></script>
<script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>
<script src="{{ asset('/dist/plugins/apexcharts/apexcharts.js') }}"></script>
<script src="{{ asset('/dist/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/dist/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="{{ asset('/dist/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
<script src="{{ asset('/dist/plugins/jvectormap/jquery-jvectormap-us-aea.js') }}"></script>
<script src="{{ asset('/dist/plugins/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('/dist/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script>
    jQuery(document).ready(function() {
        jQuery('input[name="dateRange"]').daterangepicker({
            autoUpdateInput: false,
            singleDatePicker: true,
            locale: {
                cancelLabel: 'Clear'
            }
        });
        jQuery('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
            jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
        });
        jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
            jQuery(this).val('');
        });
    });
</script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="{{ asset('/dist/plugins/toaster/toastr.min.js') }}"></script>
<script src="{{ asset('/dist/js/mono.js') }}"></script>
<script src="{{ asset('/dist/js/chart.js') }}"></script>
<script src="{{ asset('/dist/js/map.js') }}"></script>
<script src="{{ asset('/dist/js/custom.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#edituser').on('input change', function() {
            $('#editbtn').attr('disabled', false);
        });
    })
</script>
