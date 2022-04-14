@extends('admin.layouts.main')
@section('title','Tambah Member')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="#"><svg class="icon icon-xxs" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg></a></li>
                <li class="breadcrumb-item"><a href="{{ url('/backoffice') }}">InVision Rent</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/backoffice/member') }}">Data Member</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Member</li>
            </ol>
        </nav>
        <h2 class="h4">Tambah Member</h2>
        <p class="mb-0">Tambah data member untuk mencatat transaksi.</p>
    </div>
</div>


<div class="row mb-4">
    <div class="col-12 col-xl-8">
        <div class="card card-body border-0 shadow mb-4">
            <h2 class="h5 mb-4">Informasi Member</h2>
            <form>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="first_name">Nama Depan</label>
                            <input class="form-control" id="first_name" type="text" placeholder="Masukan nama depan" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="last_name">Nama Belakang</label>
                            <input class="form-control" id="last_name" type="text" placeholder="Masukan nama belakang" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" type="email" placeholder="nama@domain.com" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="phone">Handphone</label>
                            <input class="form-control" id="phone" type="number" placeholder="+62-123-456-789" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <div class="form-group">
                            <label for="address">Alamat Lengkap</label>
                            <input class="form-control" id="address" type="text" placeholder="Masukan Alamat" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="">Informasi Tambahan</label>
                            <textarea class="form-control" name="" id="" placeholder=""></textarea>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><i class="fa fa-paper-plane"></i>Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-12 col-xl-4">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-info"><i class="fa fa-info-circle"></i>Multiple Upload File untuk mengunggah foto dan dokumen pendukung masih dikembangkan</div>
            </div>
            <div class="col-12">
                <div class="alert alert-danger">
                    <i class="fa fa-warning"></i> <strong>Peringatan!</strong> Pastikan semua data di isi dengan benar dan sesuai dengan data penyewa agar terhindar dari kasus yang tidak diinginkan.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
