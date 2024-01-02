@extends('layout.admin.layout')
@section('title')
    <title>Dashboard - AUP</title>
@endsection
@section('breadcrumb')
    <a class="breadcrumb-item" href="{{route('dashboard')}}">Admin</a>
    <a class="breadcrumb-item" href="{{route('admin.kegiatan')}}">Kegiatan</a>
    <span class="breadcrumb-item active">Edit</span>
@endsection
@section('content')
    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Form edit kegiatan</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="{{route('admin.kegiatan.update', $kegiatan->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-12" for="judul">Judul</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Product.." value="{{ $kegiatan->judul }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-form-label" for="headline">Headline</label>
                            <div class="col-md-9">
                                <select class="js-select2 form-control" id="headline" name="headline" data-placeholder="Choose one..">
                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="1" {{($kegiatan->headline == 1) ? 'selected' : '' }}>True</option>
                                    <option value="0" {{($kegiatan->headline == 0) ? 'selected' : '' }}>False</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="deskripsi">Deskripsi</label>
                            <div class="col-12">
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="6" placeholder="Deskripsi..">{{ $kegiatan->deskripsi }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Gambar File Input</label>
                            <div class="col-12">
                                <img src="{{asset('assets/media/kegiatan/'.$kegiatan->gambar)}}" class=" border bg-secondary" style="max-width: 500px">
                            </div>
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