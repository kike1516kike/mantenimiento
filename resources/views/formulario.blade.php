@extends('layouts.app')

@section('titulo', 'Mantenimiento de PC')

@section('content')

<div class="input-group mb-5" >
  <input type="number"  class="" width="10%" style="margin:2px;" placeholder="Codigo de Empleado" aria-label="Codigo de Empleado" aria-describedby="buscar_usuario">
  <button class="btn btn-primary" type="button" id="buscar_usuario">Buscar</button>
</div>

<h2>hola</h2>

<nav>
  <div class="nav nav-tabs " id="nav-tab" role="tablist" >
    <button class="nav-link active" id="nav-perfil-tab" data-bs-toggle="tab" data-bs-target="#nav-perfil" type="button" role="tab" aria-controls="nav-perfil" aria-selected="true">Perfil</button>
    <button class="nav-link" id="nav-equipo-tab" data-bs-toggle="tab" data-bs-target="#nav-equipo" type="button" role="tab" aria-controls="nav-equipo" aria-selected="false">Equipo</button>
    <button class="nav-link" id="nav-software-tab" data-bs-toggle="tab" data-bs-target="#nav-software" type="button" role="tab" aria-controls="nav-software" aria-selected="false">MTTO-Software</button>
    <button class="nav-link" id="nav-hardware-tab" data-bs-toggle="tab" data-bs-target="#nav-hardware" type="button" role="tab" aria-controls="nav-hardware" aria-selected="false">MTTO-Hardware</button>
    <button class="nav-link" id="nav-conformidad-tab" data-bs-toggle="tab" data-bs-target="#nav-conformidad" type="button" role="tab" aria-controls="nav-conformidad" aria-selected="false" >conformidad-MTTO</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-perfil" role="tabpanel" aria-labelledby="nav-perfil-tab" tabindex="0">
    <h2>PERFIL</h2>
    <div class="class">

    </div>
  
  
  
  
  
  </div>
  <div class="tab-pane fade" id="nav-equipo" role="tabpanel" aria-labelledby="nav-equipo-tab" tabindex="0">equipo</div>
    <div class="tab-pane fade" id="nav-software" role="tabpanel" aria-labelledby="nav-software-tab" tabindex="0">Mantenimiento preventivo de software</div>
  <div class="tab-pane fade" id="nav-hardware" role="tabpanel" aria-labelledby="nav-hardware-tab" tabindex="0">Mantenimiento preventivo de hardware</div>
  <div class="tab-pane fade" id="nav-conformidad" role="tabpanel" aria-labelledby="nav-conformidad-tab" tabindex="0">Conformidad MTTO</div>
</div>  

@endsection