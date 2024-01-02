@extends('layout.admin.layout')
@section('title')
    <title>Setting - AUP</title>
@endsection
@section('breadcrumb')
    <a class="breadcrumb-item" href="{{route('dashboard')}}">Admin</a>
    <span class="breadcrumb-item active">Setting</span>
@endsection
@section('content')
    <!-- Main Container -->
    <main id="main-container">

        <div class="content">
            <!-- Block Tabs Animated Fade -->
            <div class="block">
                <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#btabs-animated-fade-home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#btabs-animated-fade-sosialmedia">Sosial Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#btabs-animated-fade-kontak">Kontak</a>
                    </li>
                    {{-- <li class="nav-item ml-auto">
                        <a class="nav-link" href="#btabs-animated-fade-settings"><i class="si si-settings"></i></a>
                    </li> --}}
                </ul>
                <div class="block-content tab-content overflow-hidden">
                    <div class="tab-pane fade show active" id="btabs-animated-fade-home" role="tabpanel">
                        <!-- Bootstrap Forms Validation -->
                        <div class="block-content">
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-12">
                                    <!-- jQuery Validation functionality is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _es6/pages/be_forms_validation.js -->
                                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <form class="js-validation-bootstrap" action="{{route('admin.setting.update', ['tab' => 'about'])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="title_about">Title <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="title_about" name="title_about" value="{{$setting->where('nama', 'title_about')->first()->value}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="deskripsi_about">Deskripsi <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <textarea class="form-control" id="deskripsi_about" name="deskripsi_about" rows="5" >{{$setting->where('nama', 'deskripsi_about')->first()->value}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Gambar <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <div class="custom-file">
                                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                                    <input type="file" class="custom-file-input" id="gambar_about" name="gambar_about" data-toggle="custom-file-input">
                                                    <label class="custom-file-label" for="gambar_about">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Bootstrap Forms Validation -->
                    </div>
                    <div class="tab-pane fade" id="btabs-animated-fade-sosialmedia" role="tabpanel">
                        <!-- Bootstrap Forms Validation -->
                        <div class="block-content">
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-12">
                                    <!-- jQuery Validation functionality is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _es6/pages/be_forms_validation.js -->
                                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <form class="js-validation-bootstrap" action="{{route('admin.setting.update', ['tab'=>'sosialmedia'])}}" method="post">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="twitter">Twitter <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="twitter" name="twitter" value="{{$setting->where('nama', 'twitter')->first()->value}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="instagram">Instagram <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="instagram" name="instagram" value="{{$setting->where('nama', 'instagram')->first()->value}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="facebook">Facebook <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="facebook" name="facebook" value="{{$setting->where('nama', 'facebook')->first()->value}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="website">Website <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="website" name="website" value="{{$setting->where('nama', 'website')->first()->value}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Bootstrap Forms Validation -->
                    </div>
                    <div class="tab-pane fade" id="btabs-animated-fade-kontak" role="tabpanel">
                        <!-- Bootstrap Forms Validation -->
                        <div class="block-content">
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-12">
                                    <!-- jQuery Validation functionality is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _es6/pages/be_forms_validation.js -->
                                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <form class="js-validation-bootstrap" action="{{route('admin.setting.update', ['tab' => 'kontak'])}}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="email_kontak">Email <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="email_kontak" name="email_kontak" value="{{$setting->where('nama','email_kontak')->first()->value}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="phone_kontak">Phone <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="phone_kontak" name="phone_kontak" value="{{$setting->where('nama','phone_kontak')->first()->value}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="alamat_kontak">Alamat <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <textarea class="form-control" id="alamat_kontak" name="alamat_kontak" rows="5" >{{$setting->where('nama','alamat_kontak')->first()->value}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Bootstrap Forms Validation -->
                    </div>
                    {{-- <div class="tab-pane fade" id="btabs-animated-fade-settings" role="tabpanel">
                        <h4 class="font-w400">Settings Content</h4>
                        <p>Content fades in..</p>
                    </div> --}}
                </div>
            </div>
            <!-- END Block Tabs Animated Fade -->
        </div>
        <!-- Page Content -->
        {{-- <div class="content">
            <!-- Overview -->
            <div class="row invisible" data-toggle="appear">
                <div class="col-md-4">
                    <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="py-20 text-center">
                                <div class="mb-10">
                                    <i class="fa fa-user-circle-o fa-3x text-corporate"></i>
                                </div>
                                <div class="font-size-h4 font-w600">{{$kegiatan->count()}} Kegiatan</div>
                                <div class="text-muted">{{$kegiatanToday->count()}} were added today!</div>
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
                                <div class="font-size-h4 font-w600">{{$kegiatan->where('headline', '1')->count()}} Headline</div>
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
                                <div class="font-size-h4 font-w600">Rp. {{number_format($kegiatan->max('harga'), 0,',','.')}}</div>
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
                        <a href="{{route('admin.kegiatan.create')}}" type="button" class="btn btn-block-option">
                            <i class="si si-plus"> Tambah Kegiatan</i>
                        </a>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="table-responsive">
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
        </div> --}}
        <!-- END Page Content -->
        <!-- Large Modal -->
        {{-- <div class="modal" id="modal-large" tabindex="-1" role="dialog" aria-labelledby="modal-large" aria-hidden="true">
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
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- END Large Modal -->
    </main>
    <!-- END Main Container -->
@endsection
@push('style')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/select2/css/select2.css')}}">
@endpush
@push('script')
    <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery-validation/additional-methods.js')}}"></script>

    <!-- Page JS Helpers (Select2 plugin) -->
    <script>jQuery(function(){ Codebase.helpers('select2'); });</script>

    <!-- Page JS Code -->
    <script src="{{asset('assets/js/pages/be_forms_validation.min.js')}}"></script>
@endpush
{{-- @push('script')
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
                url: "{{route('admin.kegiatan')}}",
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
@endpush --}}