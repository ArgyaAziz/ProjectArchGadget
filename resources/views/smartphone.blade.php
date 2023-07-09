@extends('layouts.app')

@section('content')
<div class="container-lg">
    <div class="row mb-5">
        <!-- Sidebar -->
        <div class="col-lg-3">
            <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width:250px">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                                <li class="nav-item">
                                    <a class="nav-link ps-2" aria-current="page" href="home"><i class="bi bi-house-door"></i> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link ps-2" href="smartphone"><i class="bi bi-phone-fill"></i> Smartphone</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link ps-2" href="laptop"><i class="bi bi-laptop"></i> Laptop</a>
                                </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- End Sidebar -->

        <!-- Content -->
        <div class="col-lg-9 mt-2">
            <div class="container">
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="img/pocof4.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Poco F4</h5>
                                <p class="card-text">6 GB+128 GB | 8 GB+256 GB
                                    LPDDR5+ UFS 3.1Snapdragon®️ 870
                                    CPU: CPUI Octa-core®️ Qualcomm Kryo™ 585
                                    Proses manufaktur 7nm</p>
                                <strong>5.699.000</strong>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="img/iphone15.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Iphone 14 Pro Max</h5>
                                <p class="card-text">Chipset : Apple A16 Bionic
                                    Kamera Belakang : 48MP + 12MP +12MP
                                    Kamera Depan : 12MP
                                    Ukuran Layar : 6.7 inch LTPO Super Retina XDR OLED
                                    Baterai : 4323 mAh
                                    Sistem Operasi : iOS</p>
                                <strong>19.999.000</strong>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="img/s23ultra.png" class="card-img-top" style="width: 250px;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Samsung S23 Ultra</h5>
                                <p class="card-text">Qualcomm Snapdragon 8 Gen 2 ; CPU, Octa-core (1x3.36 GHz Cortex-X3 & 2x2.8 GHz Cortex-A715 & 2x2.8 GHz
                                    Cortex-A710 & 3x2.0 GHz Cortex-A510) ; GPU, Adreno Layar, 6,8 inci layar,Layar Refresh rate 120Hz</p>
                                <strong>14.999.000</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection