@extends('layouts.app')

@section('content')
<section>
  <div class="container">
    <div class="d-flex align-items-center justify-content-between">
      <h1>Reporte de Asistencia</h1>
      <button class="btn btn-sm btn-primary ml-2">Ver Horario</button>
    </div>
    <div class="card">
      <div class="card-header">
        Consolidado 1
      </div>
      <div class="card-body">
        <h2 class="card-title">{{ $alumno }}</h2>
        <ul>
          <li>
            Semestre: <strong>2019-II</strong>
          </li>
        </ul>
        <p class="card-text"></p>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered text-center">
        <thead class="thead-light">
          <tr>
            <th rowspan="2">Fecha</th>
            <th colspan="6">Cursos</th>
          </tr>
          <tr>
            <th>Redes</th>
            <th>Teoría de Control</th>
            <th>Met. Sistémicas</th>
            <th>Taller de A.S.I.</th>
            <th>Org. Empresarial</th>
            <th>Aplicaciones Web</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($registros as $r => $v)
          <tr>
            <td>{{ $r }}</td>
            @foreach ($v as $s)
            <td>{{ $s }}</td>
            @endforeach
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>
@endsection