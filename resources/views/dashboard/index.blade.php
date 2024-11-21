@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mb-5 text-center fw-bold text-primary">Dashboard Overview</h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <!-- Card: Data Rombel -->
            <div class="col">
                <div class="card shadow-sm h-100 border-0">
                    <div class="card-header bg-primary text-white d-flex align-items-center">
                        <i class="bi bi-people-fill fs-4 me-2"></i>
                        <h5 class="mb-0">Data Rombel</h5>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text fs-5">Jumlah: <strong>10</strong></p>
                    </div>
                </div>
            </div>

            <!-- Card: Data Siswa -->
            <div class="col">
                <div class="card shadow-sm h-100 border-0">
                    <div class="card-header bg-success text-white d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-4 me-2"></i>
                        <h5 class="mb-0">Data Siswa</h5>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text fs-5">Jumlah: <strong>300</strong></p>
                    </div>
                </div>
            </div>

            <!-- Card: Data Keterlambatan -->
            <div class="col">
                <div class="card shadow-sm h-100 border-0">
                    <div class="card-header bg-danger text-white d-flex align-items-center">
                        <i class="bi bi-alarm-fill fs-4 me-2"></i>
                        <h5 class="mb-0">Data Keterlambatan</h5>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text fs-5">Jumlah: <strong>5</strong></p>
                    </div>
                </div>
            </div>

            <!-- Card: Data Pengguna -->
            <div class="col">
                <div class="card shadow-sm h-100 border-0">
                    <div class="card-header bg-secondary text-white d-flex align-items-center">
                        <i class="bi bi-person-badge-fill fs-4 me-2"></i>
                        <h5 class="mb-0">Data Pengguna</h5>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text fs-5">Jumlah: <strong>5</strong></p>
                    </div>
                </div>
            </div>

            <!-- Card: Data Rayon -->
            <div class="col">
                <div class="card shadow-sm h-100 border-0">
                    <div class="card-header bg-warning text-white d-flex align-items-center">
                        <i class="bi bi-building fs-4 me-2"></i>
                        <h5 class="mb-0">Data Rayon</h5>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text fs-5">Jumlah: <strong>5</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
