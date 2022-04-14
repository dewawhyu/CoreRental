@extends('admin.layouts.main')
@section('title','Daftar Member')
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
                <li class="breadcrumb-item active" aria-current="page">Daftar Member</li>
            </ol>
        </nav>
        <h2 class="h4">Daftar Member</h2>
        <p class="mb-0">Semua data member yang terdaftar pada penyewaan.</p>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0"><a href="{{ url('/backoffice/members/create') }}"
            class="btn btn-success text-white d-inline-flex align-items-center"><svg class="icon icon-xs me-2" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg> Tambah Member</a>
    </div>
</div>

<div class="row">
    <div class="col-12 col-xl-12">
        <div class="row">
            <div class="col-12">
                <div class="card card-body shadow border-0 table-wrapper table-responsive">
                    @livewire('admin.member.member-index')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
