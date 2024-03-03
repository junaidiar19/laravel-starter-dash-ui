<!-- Libs JS -->
<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/libs/feather-icons/dist/feather.min.js') }}"></script>

{{-- Additional libs --}}
<script src="{{ asset('assets/vendors/dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('assets/vendors/dropify/js/upload-init.js') }}"></script>
<script src="{{ asset('assets/vendors/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datepicker3/datepicker3.min.js') }}"></script>
<script src="{{ asset('assets/vendors/fancybox/fancybox.umd.js') }}"></script>

<!-- Theme JS -->
<script src="{{ asset('assets/js/theme.min.js') }}"></script>

<script>
    // alert dismissible
    $('.alert-dismissible').delay(3000).fadeOut('slow');

    // fancybox
    Fancybox.bind("[data-fancybox]");

    // select2
    $('.select2').select2();

    // datepicker
    $(".datepicker").datepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
        todayHighlight: true,
    });
</script>
