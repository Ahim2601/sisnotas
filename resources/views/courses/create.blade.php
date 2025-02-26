@extends('layouts.app')
@section('title', 'Materias - Crear')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Nueva Institucion</h5>

                        <a href="{{ route('courses.index') }}" class="btn btn-sm btn-secondary"
                        ><i class="ri-arrow-left-line me-1"></i> Regresar</a>
                    </div>
                    <!-- <h5 class="card-header">Crear Categoría</h5> -->

                    <div class="card-body">
                        <form id="formCategory" class="needs-validation" action="{{ route('courses.store') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="mb-6 col-md-8">
                                    <div class="form-floating form-floating-outline">
                                        <input
                                            type="text"
                                            id="description"
                                            name="description"
                                            class="form-control @if($errors->has('description')) is-invalid @endif"
                                            placeholder="Ingrese nombre de la institucion"
                                            value="{{ old('description') }}"
                                        />
                                        <label for="code">Curso</label>
                                         @if($errors->has('description'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('description') }}
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
