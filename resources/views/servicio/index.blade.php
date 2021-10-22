@extends('layouts.app')

@section('content')

@if(Session::has('mensaje'))
<div class="container-xxl position-fixed">
    <div class="alert alert-success alert-dismissible" role="alert">
        {{Session::get('mensaje')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
@endif

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
    <div class="container-lg bg-warning py-1"> 
        @if(isset(Auth::user()->name)&&Auth::user()->email=='sjosue5082002@gmail.com')
        <a href="{{url('servicio/create')}}" class="btn btn-primary mt-2">Crear Servicio</a>
        @endif
        <div class="d-flex flex-wrap justify-content-around mb-4 table-responsive align-items-center">
            @foreach($servicios as $servicio)
            @if($servicio->TipoS == '1')
            <div class="post my-2 mx-1 h-25 border-3 rounded-3 border-primary"
                style="border: solid; box-shadow: 0 .5rem 1rem rgba(0,0,0,.6);">
                @else
                <div class="post my-2 mx-1 h-25 border-3 rounded-3 border-success"
                    style="border: solid; box-shadow: 0 .5rem 1rem rgba(0,0,0,.6);">
                    @endif
                    <a href="">
                        <p class="fs-2 text-center">{{$servicio->NombreS}}</p>
                    </a>
                    <a href=""><img src="{{asset('storage').'/'.$servicio->Logo}}" alt="servicio de: {{$servicio->NombreS}}"
                            class="w-100" style="height: 200px;"></a>
                    <p class="fs-6 text-center">{{substr($servicio->DescripcionS,0, 80)}}...</p>
                    @if(isset(Auth::user()->name)&&Auth::user()->email=='sjosue5082002@gmail.com')
                    <div class="container d-flex justify-content-around">
                        <a href="{{url('/servicio/'.$servicio->id.'/edit')}}" class="btn btn-secondary">Editar</a>
                        <form action="{{url('/servicio/'.$servicio->id)}}" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" onclick="return confirm('Seguro de borrarlo??')"
                                class="btn btn-danger">Borrar</button>
                        </form>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container py-3">
        {!!$servicios->links()!!}
    </div>
</div>
@endsection
