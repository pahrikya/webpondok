@extends('layout.admin.layout')
@section('title')
    <title>Dashboard - AUP</title>
@endsection
@section('breadcrumb')
    <a class="breadcrumb-item" href="{{route('dashboard')}}">Admin</a>
    <a class="breadcrumb-item" href="{{route('admin.product')}}">Product</a>
    <span class="breadcrumb-item active">Create</span>
@endsection
@section('content')
    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">

            <!-- Product -->
            {{-- <div id="product" class="block block-rounded block-bordered invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Current Product</h3>
                    <div class="block-options">
                        <button type="button" id="btn_refresh_product" class="btn-block-option">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn btn-block-option">
                            <i class="si si-plus"> Tambah Product</i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="table-responsive">
                        <!-- Dynamic Table Full -->
                        <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                        <table id="table-product" class="table table-borderless table-hover mb-0 table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th class="d-none d-sm-table-cell" style="width: 100px">No</th>
                                    <th class="d-none d-sm-table-cell" style="width: auto;">Name</th>
                                    <th class="d-none d-sm-table-cell">Harga</th>
                                    <th class="d-none d-sm-table-cell">gambar</th>
                                    <th class="d-none d-sm-table-cell">dibuat</th>
                                    <th class="d-none d-sm-table-cell" style="width: 300px;">Action</th>
                                </tr>
                            </thead>
                        </table>
                        <!-- END Dynamic Table Full -->
                    </div>
                </div>
            </div> --}}
            <!-- END Product -->
            <!-- Default Elements -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Form tambah product</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    {{-- @if($errors->has())
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    @endif --}}
                    <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-12" for="nama_product">Nama Product</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="nama_product" name="nama_product" placeholder="Product.." value="{{ old('nama_product') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="harga">Harga Product</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga.." value="{{ old('harga') }}">
                                {{-- <div class="form-text text-muted">Further info about this input</div> --}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="deskripsi">Deskripsi</label>
                            <div class="col-12">
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="6" placeholder="Deskripsi..">{{ old('deskripsi') }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Gambar File Input</label>
                            <div class="col-8">
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <input type="file" class="custom-file-input" id="gambar" name="gambar" data-toggle="custom-file-input">
                                    <label class="custom-file-label" for="gambar">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Default Elements -->

        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->
@endsection
{{-- @push('script')
    <script src="{{asset('assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#table-product').DataTable({
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
    </script>
@endpush --}}