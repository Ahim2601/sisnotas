@extends('layouts.app')

@section('title') Institucion  @endsection

@section('css')

@endsection

@section('content')

<!-- start page title -->
 <div class="container-xxl flex-grow-1 container-p-y">

<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Editar Institucion</h4>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('institutions.update', $institution->id) }}" method="POST"
                    enctype="multipart/form-data" class="needs-validation @if ($errors->any()) was-validated @endif"
                    novalidate>
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input class="form-control" type="text" name="description" id="code" required
                                    value="{{ $institution->description }}">
                                @if($errors->has('description'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('description') }}
                                    </div>
                                @endif
                            </div>
                        </div>






                    </div>
                    <button type="submit" class="btn btn-primary w-md float-end">Actualizar Materia</button>
                </form>
            </div>
         </div>
        </div>
    </div>
 </div>
@endSection

@section('scripts')
<script>

</script>
@endSection
