@extends('layout.admin.layout')
@section('title')
    <title>Kegiatan - AUP</title>
@endsection
@section('breadcrumb')
    <a class="breadcrumb-item" href="{{route('dashboard')}}">Admin</a>
    <a class="breadcrumb-item" href="{{route('admin.kegiatan')}}">Kegiatan</a>
    <span class="breadcrumb-item active">Create</span>
@endsection
@section('content')
    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">

            <!-- Default Elements -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Form tambah kegiatan</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="{{route('admin.kegiatan.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-12" for="judul">Judul</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="judul.." value="{{ old('judul') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-form-label" for="headline">Headline</label>
                            <div class="col-md-9">
                                <select class="js-select2 form-control" id="headline" name="headline" data-placeholder="Choose one..">
                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="1">True</option>
                                    <option value="0">False</option>
                                </select>
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