@extends('layout.admin.layout')
@section('title')
    <title>Kegiatan - AUP</title>
@endsection
@section('breadcrumb')
    <a class="breadcrumb-item" href="">Admin</a>
    <a class="breadcrumb-item" href="">Kegiatan</a>
    {{-- <span class="breadcrumb-item active">Create</span> --}}
@endsection
@section('content')
    <!-- Main Container -->
    <main id="main-container">

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
                                <div class="font-size-h4 font-w600"> Kegiatan</div>
                                <div class="text-muted"> were added today!</div>
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
                                <div class="font-size-h4 font-w600"> Headline</div>
                                <div class="text-muted">jumlah headline pada semua berita!</div>
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
                                <div class="font-size-h4 font-w600">Rp.</div>
                                <div class="text-muted">Harga termalah dari semua Kegiatan!</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Overview -->

            <!-- Kegiatan -->
            <div id="Kegiatan" class="block block-rounded block-bordered invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Current Kegiatan</h3>
                    <div class="block-options">
                        <button type="button" id="btn_refresh_Kegiatan" class="btn-block-option">
                            <i class="si si-refresh"></i>
                        </button>
                        <a href="" type="button" class="btn btn-block-option">
                            <i class="si si-plus"> Tambah Kegiatan</i>
                        </a>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="table-responsive">
                        {{-- @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror --}}
                        <!-- Dynamic Table Full -->
                        <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                        <table id="table-Kegiatan" class="table table-borderless table-hover mb-0 table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th class="d-none d-sm-table-cell" style="width: 30px">No</th>
                                    <th class="d-none d-sm-table-cell" style="max-width: 300px;">judul</th>
                                    <th class="d-none d-sm-table-cell">headline</th>
                                    <th class="d-none d-sm-table-cell">gambar</th>
                                    <th class="d-none d-sm-table-cell">dibuat</th>
                                    <th class="d-none d-sm-table-cell" style="width: 250px;">Action</th>
                                </tr>
                            </thead>
                        </table>
                        <!-- END Dynamic Table Full -->
                    </div>
                </div>
            </div>
            <!-- END Kegiatan -->
        </div>
        <!-- END Page Content -->
        <!-- Large Modal -->
        <div class="modal" id="modal-large" tabindex="-1" role="dialog" aria-labelledby="modal-large" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Detail Kegiatan</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row">
                                <div class="col-6">
                                    <label class="col-6" for="judul">Judul</label>
                                    <div class="col">
                                        <input disabled type="text" class="form-control" id="judul" name="judul" placeholder="Kegiatan.." value="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="col-6" for="penulis">Penulis</label>
                                    <div class="col">
                                        <input disabled type="number" class="form-control" id="penulis" name="penulis" placeholder="penulis.." value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-12" for="deskripsi">Deskripsi</label>
                                <div class="col-12">
                                    <textarea disabled class="form-control" id="deskripsi" name="deskripsi" rows="6" placeholder="Deskripsi.."></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-12">Gambar File</label>
                                <div class="col-12">
                                    <img id="img-preview" class=" border bg-secondary" style="max-width: 500px">
                                </div>
                            </div>
                            {{-- <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p> --}}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Large Modal -->
    </main>
    <!-- END Main Container -->
@endsection
@push('script')
    <script src="{{asset('assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        $(document).ready(function () {
            $('#table-Kegiatan').DataTable({
                processing: true,
                serverSide: true,
                ajax: "",
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
                    name: 'dibuat'
                },  
                {
                    data: 'action',
                    name: 'action',
                }]
            });
            $('#btn_refresh_Kegiatan').on('click', function () {
                refreshKegiatan();
            });
        });

        function refreshKegiatan() {
            $.ajax({
                url: "",
                type: "GET",
                dataType: "JSON",
                beforeSend: function () {
                    $('#Kegiatan').addClass('block-mode-loading');
                    $('#table-Kegiatan').DataTable().ajax.reload();
                },
                success: function (res) {
                    $('#Kegiatan').removeClass('block-mode-loading');
                }, 
                error: function (err) {

                }
            })
        }
        function confirm(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/admin/kegiatan/delete/'+id, 
                        type: "POST",
                        data: $('#form-delete-'+id).serialize(),
                        beforeSend: function () {
                            $('#Kegiatan').addClass('block-mode-loading');
                        },
                        success: function(data) {
                            if (data['code'] == 200) {
                                Toast.fire({
                                    icon: "success",
                                    title: "Delete is successfully"
                                });
                                $('#table-Kegiatan').DataTable().ajax.reload();
                                $('#Kegiatan').removeClass('block-mode-loading');
                            } else {
                                Toast.fire({
                                    icon: "error",
                                    title: "Delete is failed"
                                });
                                $('#table-Kegiatan').DataTable().ajax.reload();
                                $('#Kegiatan').removeClass('block-mode-loading');
                            }
                        }, 
                        error: function(data) {
                            console.log(data);
                        }
                    });
                }
            });
        }
        function edit(id) {
            $.ajax({
                url: "/admin/kegiatan/show/"+id,
                type: "GET",
                dataType: "JSON",
                beforeSend: function () {
                    // $('#Kegiatan').addClass('block-mode-loading');
                    // $('#table-Kegiatan').DataTable().ajax.reload();
                },
                success: function (res) {
                    console.log(res);
                    $('#modal-large').modal('show');
                    $('#judul').val(res.judul);
                    $('#penulis').val(res.penulis);
                    $('#deskripsi').val(res.deskripsi);
                    $('#img-preview').attr("src",'/assets/media/kegiatan/'+res.gambar);
                    // $('#Kegiatan').removeClass('block-mode-loading');
                }, 
                error: function (err) {
                    console.log(err);
                }
            })
        }

    </script>
@endpush