@extends('layouts.app')

@section('content')
<div class="container">
    <div class="fs-3 mb-2 text-white">Crear Servicio</div>
    <form method="post" action="{{url('/servicio')}}" method="POST" enctype="multipart/form-data">
    @csrf
        
    @include('servicio.admin.form', ['modo'=>'Crear'])

    </form>
</div>
@endsection
