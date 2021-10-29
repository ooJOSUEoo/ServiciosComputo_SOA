@extends('layouts.app')

@section('content')

<div class="container">
    <p class="fs-2 text-white">Mis Servicios</p>
    <div class="container-lg bg-warning py-1">
        <div class="d-flex flex-wrap justify-content-around mb-4 table-responsive align-items-center">
            @foreach($servicios as $servicio)
                <div class="post my-2 mx-1 h-25 border-3 rounded-3 border-success px-1"
                    style="border: solid; box-shadow: 0 .5rem 1rem rgba(0,0,0,.6);">
                    <p class="fs-2 text-center">{{$servicio->NombreS}}</p>

                    <img src="{{asset('storage').'/'.$servicio->Logo}}" alt="servicio de: {{$servicio->NombreS}}"
                        class="w-100" style="height: 200px;">
                    <p class="text-secondary" id="ubicacionCortaMapa">{{$servicio->Longitud}} {{$servicio->Latitud}}</p>
                    <p class="fs-6 text-center">{{substr($servicio->DescripcionS,0, 80)}}...</p>
                    <form action="{{url('/servicio/'.$servicio->id)}}" method="get"
                        class="d-flex justify-content-center py-2">
                        @csrf
                        <button type="submit" class="btn btn-success">Mas info</button>
                    </form>
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