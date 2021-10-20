@extends('layouts.app')

@section('content')
<div class="titulo w-100 d-flex justify-content-center align-items-center">
    <p class="text-center text-white position-absolute">SERVICIOS DE COMPUTO</p>
</div>
<div class="container">
    <div class="container mb-4">
        <p class="text-center bg-dark"></p>
        <p class="text-justify bg-secondary"></p> 
    </div> 
    <div class="container mb-4 text-center">
        <div class="row ">
            <div class="col">
                <a href="" class="btn btn-primary"> </a>
                <a href="" class="fs-3 text-white">SOFTWARE</a>
            </div>
            <div class="col">
                <a href="" class="btn btn-success"> </a>
                <a href="" class="fs-3 text-white">HARDWARE</a>
            </div>
        </div>
    </div>
    <div class="container-lg bg-warning">
    @if(isset(Auth::user()->name))
        <a href="{{url('servicio/create')}}" class="btn btn-primary mt-2">Crear Servicio</a>
    @endif
    <div class="d-flex flex-wrap justify-content-around mb-4 table-responsive align-items-center">
            @foreach($servicios as $servicio) 
            <div class="post my-2 mx-1 h-25 border-2 border-success" style="border: solid;">
                <a href=""><p class="fs-2 text-center">{{$servicio->NombreS}}</p></a>
                <a href=""><img src="{{asset('storage').'/'.$servicio->Logo}}" alt="{{$servicio->NombreS}}" class="w-100" style="height: 200px;"></a>
                <p class="fs-6 text-center">{{substr($servicio->DescripcionS,0, 80)}}...</p>
                @if(isset(Auth::user()->name))
                <div class="container d-flex justify-content-around">
                    <a href="{{url('/servicio/'.$servicio->id.'/edit')}}" class="btn btn-secondary">Editar</a>
                    <form action="{{url('/servicio/'.$servicio->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit" onclick="return confirm('Seguro de borrarlo??')" class="btn btn-danger">Borrar</button>
                    </form>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
