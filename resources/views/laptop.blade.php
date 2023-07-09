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
                            <img src="img/ideapadgaming3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Ideapad Gaming 3</h5>
                                <p class="card-text">Intel Core i5 11300H
                                    RAM 8 GB 3200 MHz
                                    512 GB SSD
                                    RTX 3050 Laptop GPU
                                    6 Inch Full HD 165 Hz 100% sRGB
                                    3 x 1,5W speaker dengan Dolby Audio™
                                    Webcam microphone array
                                    WiFi 802.11 ac
                                    Bluetooth®5.1</p>
                                <strong>13.299.000</strong>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="img/strix16.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Ideapad Gaming 3</h5>
                                <p class="card-text">NVIDIA® GeForce RTX™ 4050 Laptop GPU
                                    ROG Boost: 2420MHz* at 140W (2370MHz Boost Clock+50MHz OC, 115W+25W Dynamic Boost)
                                    6GB GDDR6</p>
                                <strong>24.499.000</strong>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="img/victus.png" class="card-img-top" style="width: 250px;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Victus Gaming Laptop 15-fa0008TX</h5>
                                <p class="card-text">12th Generation Intel® Core™ i7 processor
                                    Windows 11 Home 15.6" diagonal, FHD (1920 x 1080)</p>
                                <strong>14.999.000</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection