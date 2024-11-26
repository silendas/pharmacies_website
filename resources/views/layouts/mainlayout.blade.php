<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website | Apoteker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('layout.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
</head>
<body>
    <div class="d-flex main">
        <nav id="sidebar" class="sidebar p-3">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="text-light text-center" style="font-weight: 500;">Apoteker</h4>
                <button id="closeSidebar" class="btn btn-light d-lg-none"><i class="bi bi-x-lg"></i></button>
            </div>
            <ul class="nav flex-column">
                <!-- Dashboard -->
                <li class="nav-item mb-3">
                    <a href="dashboard" class="nav-link">
                        <i class="bi bi-speedometer"></i> Dashboard
                    </a>
                </li>
        
                <!-- Inventory -->
                <li class="nav-item mb-3">
                    <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#inventorySubmenu" aria-expanded="false" aria-controls="inventorySubmenu">
                        <i class="bi bi-files me-2"></i> Inventory
                    </a>
                    <div id="inventorySubmenu" class="collapse ms-3">
                        <ul class="nav flex-column">
                            <li class="nav-item mb-3">
                                <a href="" class="nav-link" data-bs-toggle="collapse" data-bs-target="#stockSubmenu" aria-expanded="false" aria-controls="stockSubmenu">
                                    <i class="bi bi-box me-2"></i> Stock Barang
                                </a>
                                <div id="stockSubmenu" class="collapse ms-3">
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2">
                                            <a href="stok_masuk" class="nav-link">
                                                <i class="bi bi-box-arrow-in-right me-2"></i> Stok Masuk
                                            </a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a href="stok_keluar" class="nav-link">
                                                <i class="bi bi-box-arrow-out-right me-2"></i> Stok Keluar
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link">
                                    <i class="bi bi-clipboard-data me-2"></i> Laporan Inventory
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
        
                <!-- Gaji -->
                <li class="nav-item mb-3">
                    <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#salarySubmenu" aria-expanded="false" aria-controls="salarySubmenu">
                        <i class="bi bi-cash me-2"></i> Gaji
                    </a>
                    <div id="salarySubmenu" class="collapse ms-3">
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="daftar_gaji" class="nav-link">
                                    <i class="bi bi-people me-2"></i> Daftar Gaji Karyawan
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="detail_gaji" class="nav-link">
                                    <i class="bi bi-info-circle me-2"></i> Detail Gaji
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="pengelolaan_gaji" class="nav-link">
                                    <i class="bi bi-gear me-2"></i> Pengelolaan Gaji
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="laporan_gaji" class="nav-link">
                                    <i class="bi bi-file-earmark-bar-graph me-2"></i> Laporan Gaji
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
        
                <!-- Pembayaran -->
                <li class="nav-item mb-3">
                    <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#paymentSubmenu" aria-expanded="false" aria-controls="paymentSubmenu">
                        <i class="bi bi-wallet me-2"></i> Pembayaran
                    </a>
                    <div id="paymentSubmenu" class="collapse ms-3">
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="daftar_pembayaran" class="nav-link">
                                    <i class="bi bi-list-check me-2"></i> Daftar Pembayaran
                                </a>
                            </li>
                            {{-- <li class="nav-item mb-2">
                                <a href="#" class="nav-link">
                                    <i class="bi bi-file-text me-2"></i> Detail Pembayaran
                                </a>
                            </li> --}}
                            <li class="nav-item mb-2">
                                <a href="laporan_pembayaran" class="nav-link">
                                    <i class="bi bi-graph-up-arrow me-2"></i> Laporan Pembayaran
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
        
                <!-- Logout -->
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">
                        <i class="bi bi-box-arrow-right me-2"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>
        
      
        

        <!-- Content -->
        <div class="flex-grow-1 content">
            <!-- Navbar -->
            <header class="navbar navbar-light bg-white shadow-sm px-4">
                <div class="d-flex justify-content-between w-100 align-items-center">
                    <button id="toggleSidebar" class="btn btn-light d-lg-block d-md-none"><i class="bi bi-list"></i></button>
                   
                    <div class="d-flex align-items-center">
                        <input type="search" class="form-control me-3" placeholder="Search...">
                        <button class="btn btn-light"><i class="bi bi-bell"></i></button>
                        <button class="btn btn-light ms-2"><i class="bi bi-person-circle"></i></button>
                    </div>
                </div>
            </header>

            <!-- Content Area -->
             <!-- Konten utama -->
    <div class="main-content mt-5">@yield('content')</div>

            <!-- Footer -->
            <footer class="footer text-center">
                <div class="col text-center">
                    <small class="block"
                        >&copy; 2024 apoteker by Fakultas Informatika dan Komputer - FINKOM UNBIN</small
                    >
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleSidebar = document.getElementById('toggleSidebar');
        const closeSidebar = document.getElementById('closeSidebar');
        const content = document.querySelector('.content');

        toggleSidebar.addEventListener('click', () => {
            sidebar.classList.toggle('open');
            content.classList.toggle('sidebar-open');
        });

        closeSidebar.addEventListener('click', () => {
            sidebar.classList.remove('open');
            content.classList.remove('sidebar-open');
        });
    </script>
</body>
</html>
