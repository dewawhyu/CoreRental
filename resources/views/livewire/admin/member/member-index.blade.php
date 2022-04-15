<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/backoffice/members') }}">Member</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        @if ($isAddMember)
                            Tambah Member
                        @else
                            Daftar Member
                        @endif
                    </li>
                </ol>
            </nav>
            <h2 class="h4">
                @if ($isAddMember)
                    Tambah Member
                @else
                    Daftar Member
                @endif
            </h2>
            <p class="mb-0">Semua data member yang terdaftar pada penyewaan.</p>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            {{-- <a wire:click="addMember" href="{{ url('/backoffice/members/create') }}"
                class="btn btn-success text-white d-inline-flex align-items-center"><svg class="icon icon-xs me-2"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                    </path>
                </svg> Tambah Member
            </a> --}}
            @if ($isAddMember)
            <button wire:click="backToViewData" type="button" class="btn btn-danger text-white d-inline-flex align-items-center"><i class="fa fa-arrow-left"></i>Kembali</button>
            @else
            
            <button wire:click="addMember" type="button" class="btn btn-success text-white d-inline-flex align-items-center"><i class="fa fa-plus"></i>Tambah Member</button>
            @endif
        </div>
    </div>
        
    @if ($isAddMember)
        @livewire('admin.member.member-create')
    @else
        @livewire('admin.member.member-view')
    @endif
</div>
