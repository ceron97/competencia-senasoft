@extends('adminlte::page')
@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)
    

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')

<table class="table">
    <thead class="thead-dark ">
      <tr class="center">
        <th scope="col">nombre</th>
        <th scope="col">descripcion</th>
        <th scope="col">precio</th>
        <th scope="col">cantidad</th>
        <th scope="col">garantia</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($productos as $item)
            <tr>
                <th scope="row">{{$item->nombre}}</th>
                <td>{{$item->descripcion}}</td>
                <td>{{$item->precio}}</td>
                <td>{{$item->cantidad}}</td>
                <td>{{$item->fecha_garantia}}</td>
                <td>
                    <button class="btn btn-warning col-md-3"><i class="fas fa-pen"></i></button>
                    <button class="btn btn-danger col-md-3"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@stop


@section('js')
    @if (session('mensaje'))
        <script>
            Swal.fire({
                position: 'top-end',
                type: 'success',
                title: '{{ session('mensaje') }}',
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif

@stop