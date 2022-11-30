@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Tipos de Medicamentos')
@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}">
@endsection

@section('page-script')
<script src="{{asset('assets/js/ui-modals.js')}}"></script>
@endsection
@section('content')
<h4>Tipos de medicamentos</h4>
<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Tipos de medicina</h5>
    
    
    <div class="table-responsive text-nowrap">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
        Crear nuevo tipo de medicamento
      </button>
      <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Creado en</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @foreach ($types as $type)
            <tr>
            <td>{{$type->id}}</td>
            <td>{{$type->name}}</td>
            <td>{{$type->description}}</td>
            <td>{{$type->created_at}}</td>
            <td>
                <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                    <a href="{{route('pages-types_drugs-edit',$type->id)}}" class="dropdown-item" ><i class="bx bx-edit-alt me-1"></i> Editar</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Borrar</a>
                </div>
                </div>
            </td>
            </tr>
                
        @endforeach
          
                  
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

  <!-- Modal -->
  <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">

      <div class="modal-content">
        <form action="{{route('pages-types_drugs-store')}}" method="POST">
            @csrf
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel1">Crear tipo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                  <label for="nameBasic" class="form-label">Nombre del tipo</label>
                  <input type="text" id="nameBasic" name="name" class="form-control" placeholder="Ex. Pastilla">
                </div>
              </div>
              <div class="row g-2">
                <div class="col mb-0">
                  <label for="emailBasic" class="form-label">Descripcion</label>
                  <input type="text" id="emailBasic" name="description" class="form-control" placeholder="Ex. Pastillas toma oral">
                </div>
                
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection
