<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item">
                <a href="index.html" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon">
                        <img src="{{ asset('assets/img/brand/light.svg') }}" height="20"
                            width="20" alt="Volt Logo">
                    </span>
                    <span class="mt-1 ms-1 sidebar-text">InVision Rent</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/backoffice') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="sidebar-text">Halaman Utama</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/backoffice/orders') }}"
                    class="nav-link d-flex justify-content-between">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fa fa-folder"></i>
                        </span>
                        <span class="sidebar-text">Order</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/backoffice/products') }}"
                    class="nav-link d-flex justify-content-between">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fa fa-cart-flatbed"></i>
                        </span>
                        <span class="sidebar-text">Produk</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/backoffice/members') }}"
                    class="nav-link d-flex justify-content-between">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fa fa-user-group"></i>
                        </span>
                        <span class="sidebar-text">Member</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/backoffice/invoices') }}"
                    class="nav-link d-flex justify-content-between">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fa fa-folder"></i>
                        </span>
                        <span class="sidebar-text">Invoice</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/backoffice/settings') }}"
                    class="nav-link d-flex justify-content-between">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fa fa-cogs"></i>
                        </span>
                        <span class="sidebar-text">Pengaturan</span>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</nav>
