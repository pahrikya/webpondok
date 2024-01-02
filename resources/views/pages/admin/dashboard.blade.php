@extends('layout.admin.layout')
@section('title')
    <title>Dashboard - AUP</title>
@endsection
@section('breadcrumb')
    {{-- <a class="breadcrumb-item" href="{{route('dashboard')}}">Admin</a>
    <a class="breadcrumb-item" href="{{route('admin.product')}}">Product</a> --}}
    <span class="breadcrumb-item active">Admin</span>
@endsection
@section('content')
    <!-- Main Container -->
    <main id="main-container">

        <!-- Quick Navigation -->
        <div class="bg-body-dark">
            <div class="content">
                <div class="row">
                    <div class="col-6 col-md-4 col-xl-2">
                        <a class="block block-rounded text-center" href="javascript:void(0)">
                            <div class="block-content">
                                <p class="mt-5 mb-10">
                                    <i class="fa fa-envelope-o text-gray fa-2x d-xl-none"></i>
                                    <i class="fa fa-envelope-o text-gray fa-3x d-none d-xl-inline-block"></i>
                                </p>
                                <p class="font-w600 font-size-sm text-uppercase">Inbox</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <a class="block block-rounded text-center" href="javascript:void(0)">
                            <div class="block-content">
                                <p class="mt-5 mb-10">
                                    <i class="fa fa-pencil text-gray fa-2x d-xl-none"></i>
                                    <i class="fa fa-pencil text-gray fa-3x d-none d-xl-inline-block"></i>
                                </p>
                                <p class="font-w600 font-size-sm text-uppercase">Profile</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <a class="block block-rounded text-center" href="javascript:void(0)">
                            <div class="block-content">
                                <p class="mt-5 mb-10">
                                    <i class="fa fa-wrench text-gray fa-2x d-xl-none"></i>
                                    <i class="fa fa-wrench text-gray fa-3x d-none d-xl-inline-block"></i>
                                </p>
                                <p class="font-w600 font-size-sm text-uppercase">Settings</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <a class="block block-rounded text-center" href="{{route('admin.product.create')}}">
                            <div class="block-content">
                                <p class="mt-5 mb-10">
                                    <i class="fa fa-plus-square-o text-gray fa-2x d-xl-none"></i>
                                    <i class="fa fa-plus-square-o text-gray fa-3x d-none d-xl-inline-block"></i>
                                </p>
                                <p class="font-w600 font-size-sm text-uppercase">Add Product</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <a class="block block-rounded text-center" href="{{route('admin.kegiatan.create')}}">
                            <div class="block-content">
                                <p class="mt-5 mb-10">
                                    <i class="fa fa-plus-square-o text-gray fa-2x d-xl-none"></i>
                                    <i class="fa fa-plus-square-o text-gray fa-3x d-none d-xl-inline-block"></i>
                                </p>
                                <p class="font-w600 font-size-sm text-uppercase">Add Kegiatan</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <a class="block block-rounded text-center" href="javascript:void(0)">
                            <div class="block-content">
                                <p class="mt-5 mb-10">
                                    <i class="fa fa-plus-square-o text-gray fa-2x d-xl-none"></i>
                                    <i class="fa fa-plus-square-o text-gray fa-3x d-none d-xl-inline-block"></i>
                                </p>
                                <p class="font-w600 font-size-sm text-uppercase">Add Payment</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Quick Navigation -->

        <!-- Page Content -->
        <div class="content">
            <!-- Overview -->
            <div class="row invisible" data-toggle="appear">
                <div class="col-md-4">
                    <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="py-20 text-center">
                                <div class="mb-10">
                                    <i class="fa fa-user-circle-o fa-3x text-corporate"></i>
                                </div>
                                <div class="font-size-h4 font-w600">5 Product</div>
                                <div class="text-muted">2 were added today!</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="py-20 text-center">
                                <div class="mb-10">
                                    <i class="fa fa-calendar fa-3x text-elegance"></i>
                                </div>
                                <div class="font-size-h4 font-w600">6 Kegiatan</div>
                                <div class="text-muted">4 are scheduled for today!</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="py-20 text-center">
                                <div class="mb-10">
                                    <i class="fa fa-newspaper-o fa-3x text-primary"></i>
                                </div>
                                <div class="font-size-h4 font-w600">2 Berita</div>
                                <div class="text-muted">Pending for tomorrow.</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Overview -->

            <!-- Product -->
            <div id="product" class="block block-rounded block-bordered invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Current Product</h3>
                    <div class="block-options">
                        <button type="button" id="btn_refresh_product" class="btn-block-option">
                            <i class="si si-refresh"></i>
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
            </div>
            <!-- END Product -->

            <!-- Kegiatan -->
            <div class="block block-rounded block-bordered invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Kegiatan</h3>
                    <div class="block-options">
                        <button type="button" id="btn_refresh_kegiatan" class="btn-block-option">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="table-responsive">
                        <!-- Dynamic Table Full -->
                        <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                        <table id="table-kegiatan" class="table  table-borderless table-hover mb-0 table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th class="d-none d-sm-table-cell" style="width: 100px">Judul</th>
                                    <th class="d-none d-sm-table-cell" style="width: auto;">Penulis</th>
                                    <th class="d-none d-sm-table-cell">Headline</th>
                                    <th class="d-none d-sm-table-cell">Gambar</th>
                                    <th class="d-none d-sm-table-cell">Dibuat</th>
                                    <th class="d-none d-sm-table-cell" style="width: 300px;">Action</th>
                                </tr>
                            </thead>
                        </table>
                        <!-- END Dynamic Table Full -->
                    </div>
                </div>
            </div>
            <!-- END Kegiatan -->

            <!-- Payments -->
            <div class="block block-rounded block-bordered invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Open Payments</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="table-responsive">
                        <table class="table table-borderless table-hover table-striped table-vcenter mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 100px;">ID</th>
                                    <th>Patient</th>
                                    <th>Invoice</th>
                                    <th>Due</th>
                                    <th>Actions</th>
                                    <th class="text-right">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">158214</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)">Carl Wells</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)">
                                            INV_158214.pdf
                                        </a>
                                    </td>
                                    <td>
                                        <span class="badge badge-primary">tomorrow</span>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                            <i class="fa fa-pencil text-primary mr-5"></i> Edit
                                        </a>
                                        <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                            <i class="fa fa-times text-danger mr-5"></i> Cancel
                                        </a>
                                    </td>
                                    <td class="text-right">
                                        $3.500,00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">158213</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)">Jack Estrada</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)">
                                            INV_158213.pdf
                                        </a>
                                    </td>
                                    <td>
                                        <span class="badge badge-primary">tomorrow</span>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                            <i class="fa fa-pencil text-primary mr-5"></i> Edit
                                        </a>
                                        <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                            <i class="fa fa-times text-danger mr-5"></i> Cancel
                                        </a>
                                    </td>
                                    <td class="text-right">
                                        $1.280,00
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="text-right">
                                        <strong class="text-uppercase">Total Due</strong>
                                    </td>
                                    <td class="text-right">
                                        <strong>$4.780,00</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Payments -->
        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->

@endsection
@push('script')
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
            $('#table-kegiatan').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.kegiatan') }}",
                columns: [{
                    data: 'DT_RowIndex',
                    name: 'no',
                }, 
                {
                    data: 'judul',
                    name: 'judul'
                },
                {
                    data: 'headline',
                    name: 'headline'
                },
                {
                    data: 'gambar',
                    name: 'gambar'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
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
@endpush