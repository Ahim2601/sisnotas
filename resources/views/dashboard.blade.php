@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row g-6">
        <!-- Ventas del mes -->
        <div class="col-md-12 col-xxl-8">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-md-6 order-2 order-md-1">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Bienvenido ! <span class="fw-bold">Carlos Perez!</span> 🎉</h4>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-end order-1 order-md-2">
                        <div class="card-body pb-0 px-0 pt-2">
                        <img src="../../assets/img/illustrations/illustration-john-light.png"
                            height="186" class="scaleX-n1-rtl" alt="View Profile"
                            data-app-light-img="illustrations/illustration-john-light.png"
                            data-app-dark-img="illustrations/illustration-john-dark.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ventas del mes -->
        <div class="col-sm-6 col-lg-3 ">
            <div class="card card-border-shadow-primary h-100">
                <div class="card-body text-center">
                    <span class="avatar-initial rounded-3 mb-2 text-center">
                        <i class="ri-group-3-fill ri-48px text-primary"></i>
                    </span>
                    <h5 class="mb-0 fw-bold">Estudiantes</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="card card-border-shadow-info h-100">
                <div class="card-body text-center">
                    <span class="avatar-initial rounded-3 mb-2 text-center">
                        <i class="ri-shield-user-fill ri-48px text-info"></i>
                    </span>
                    <h5 class="mb-0 fw-bold">Profesores</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="card card-border-shadow-warning h-100">
                <div class="card-body text-center">
                    <span class="avatar-initial rounded-3 mb-2 text-center">
                        <i class="ri-file-list-3-fill ri-48px text-warning"></i>
                    </span>
                    <h5 class="mb-0 fw-bold">Tramites</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 ">
            <div class="card card-border-shadow-success h-100">
                <div class="card-body text-center">
                    <span class="avatar-initial rounded-3 mb-2 text-center">
                        <i class="ri-group-2-fill ri-48px text-success"></i>
                    </span>
                    <h5 class="mb-0 fw-bold">Usuarios</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
