@extends('layouts.app')
@section('title', 'Estudiantes - Crear')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Nuevo Estudiante</h5>

                        <a href="{{ route('students.index') }}" class="btn btn-sm btn-secondary"
                        ><i class="ri-arrow-left-line me-1"></i> Regresar</a>
                    </div>
                    <!-- <h5 class="card-header">Crear Categoría</h5> -->

                    <div class="card-body">
                        <form id="formCategory" class="needs-validation" action="{{ route('students.store') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="mb-6 col-md-4">
                                    <div class="form-floating form-floating-outline">
                                        <input
                                            type="text"
                                            id="dni"
                                            name="dni"
                                            class="form-control @if($errors->has('dni')) is-invalid @endif"
                                            placeholder="Ingrese la cedula del estudiante"
                                            value="{{ old('dni') }}"
                                        />
                                        <label for="code">DNI</label>
                                         @if($errors->has('dni'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('dni') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="mb-6 col-md-4">
                                    <div class="form-floating form-floating-outline">
                                        <input
                                            type="text"
                                            id="name"
                                            name="name"
                                            class="form-control  @if($errors->has('name')) is-invalid @endif"
                                            placeholder="Ingrese el nombre del estudiante"
                                            value="{{ old('name') }}"
                                        />
                                        <label for="code">Nombre</label>
                                         @if($errors->has('name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>



                                 <div class="mb-6 col-md-4">
                                    <div class="form-floating form-floating-outline">
                                        <input
                                            type="text"
                                            id="lastname"
                                            name="lastname"
                                            class="form-control @if($errors->has('lastname')) is-invalid @endif "
                                            placeholder="Ingrese el apellido del estudiante"
                                            value="{{ old('lastname') }}"
                                        />
                                        <label for="code">Apellido</label>
                                         @if($errors->has('lastname'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('lastname') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>


                            </div>
                            <div class="row justify-content-end">
                                <div class="mb-3 col-md-1">
                                    <button type="submit" class="btn btn-primary float-end">
                                        <i class="ri-save-2-line me-1"></i>
                                        Guardar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
