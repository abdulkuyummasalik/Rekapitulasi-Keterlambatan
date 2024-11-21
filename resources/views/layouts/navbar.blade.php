<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <!-- Logo dan Nama Web -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="https://via.placeholder.com/40" class="rounded-circle me-2" alt="Logo" width="40"
                height="40">
            <span>My Dashboard</span>
        </a>

        <!-- Toggle Button untuk Responsif -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Navbar -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Dropdown Data Master -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Data Master
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Data Siswa</a></li>
                        <li><a class="dropdown-item" href="#">Data Rombel</a></li>
                        <li><a class="dropdown-item" href="#">Data Rayon</a></li>
                        <li><a class="dropdown-item" href="#">Data Pengguna</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Data Keterlambatan</a>
                </li>
            </ul>

            <!-- Nama Pengguna dan Foto -->
            <div class="d-flex align-items-center ms-lg-3">
                <span class="text-white me-2">User Name</span>
                <img src="https://via.placeholder.com/40" class="rounded-circle" alt="User" width="40"
                    height="40">
            </div>
        </div>
    </div>
</nav>
