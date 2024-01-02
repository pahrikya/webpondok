{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> --}}
<!-- Page JS Plugins -->
{{-- <script src="{{asset('assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script> --}}
{{-- <script src="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script> --}}

<!-- Page JS Code -->
<script src="{{asset('admin/assets/js/codebase.core.min.js')}}"></script>
{{-- <script src="{{asset('assets/js/pages/be_tables_datatables.min.js')}}"></script> --}}
<!--
    Codebase JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->
<script src="{{asset('admin/assets/js/codebase.app.min.js')}}"></script>
{{-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script> --}}
@stack('script')
{{-- <script>
    $(document).ready(function () {
        $('.table-product').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.product') }}",
            columns: [{
                data: 'DT_RowIndex',
                name: 'no',
                // className: 'dt-center'
            }, 
            {
                data: 'nama',
                name: 'nama'
            }, 
            {
                data: 'harga',
                name: 'harga'
            }, 
            {
                data: 'gambar',
                name: 'gambar'
            },
            {
                data: 'created_at',
                name: 'dibuat'
            },  
            {
                data: 'action',
                name: 'action',
            }]
        });
        $('#btn_refresh_product').on('click', function () {
            refreshProduct();
        });
    });

    function refreshProduct() {
        $.ajax({
            url: "{{route('admin.product')}}",
            type: "GET",
            dataType: "JSON",
            beforeSend: function () {
                $('#product').addClass('block-mode-loading');
            },
            success: function (res) {
                $('#product').removeClass('block-mode-loading');
            }, 
            error: function (err) {

            }
        })
    }
</script> --}}