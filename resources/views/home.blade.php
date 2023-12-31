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
            <div class="card">
                <div class="card-header">
                    ArchGadget
                </div>
                <div class="card-body" style="background-color: lemonchiffon;">
                    <div class="card md-12">
                       <img src="{{ asset('img/ezgif2.gif') }}" alt="Animated GIF">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection