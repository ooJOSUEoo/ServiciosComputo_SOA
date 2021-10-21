@extends('layouts.app')

@section('content')
<div class="container">
    <div class="fs-3 mb-2 text-white">Editar Servicio</div>
    <form method="post" action="{{url('/servicio/'.$servicio->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    @include('servicio.admin.form', ['modo'=>'Editar'])

    </form>
</div>
@endsection