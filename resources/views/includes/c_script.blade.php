{{-- <script>
    var $site = '{{ config("app.home") }}';
</script> --}}
{{-- <script src="{{ asset("assets/js/dashboard/bundle.js") }}"></script> --}}
{{-- <script src="{{ asset("assets/js/dashboard/scripts.js") }}"></script> --}}
{{-- <script src="{{ asset("assets/js/dashboard/charts/chart-crypto.js") }}"></script> --}}
{{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
{{-- <script src="{{ asset("assets/js/customer.js") }}"></script> --}}

<!-- Vendor JS -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/index.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('assets/js/customer.js') }}"></script>
<!--plugins-->
<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('assets/plugins/chartjs/js/Chart.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
<script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>
<script>
    function clipboard(elem, event) {
        elem.prev('input[type="text"]').focus().select();
        document.execCommand(event);
        elem.prev('input[type="text"]').blur();
        elem.addClass('clicked');
        setTimeout(function() {
            elem.removeClass('clicked');
        }, 500);
    }

    $('.btn-copy').on('click', function() {
        clipboard($(this), 'copy')
    });

    $('.btn-cut').on('click', function() {
        clipboard($(this), 'cut')
    });
</script>

<script>
    function change() {
        document.getElementById("block1").style.display = "none"
        document.getElementById("plans").style.display = "block"
        document.getElementById("plans4").style.display = "none"
    }
    function change1() {
        document.getElementById("block2").style.display = "none"
        document.getElementById("block1").style.display = "block"
    }
</script>
<!--app JS-->
