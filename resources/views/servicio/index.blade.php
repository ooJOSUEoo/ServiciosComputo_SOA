@extends('layouts.app')

@section('content')

@if(Session::has('mensaje')&&isset(Auth::user()->name))
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
            <div class="col border-warning border">
                <a href="" class="btn btn-primary"> </a>
                <a href="{{ url('/software') }}" class="nav-link fs-3 text-white">SOFTWARE</a>
            </div>
            <div class="col border-warning border">
                <a href="" class="btn btn-success"> </a>
                <a href="{{ url('/hardware') }}" class="nav-link fs-3 text-white">HARDWARE</a>
            </div>
        </div>
    </div>
    <div class="container-lg bg-warning py-2">
        @if(isset(Auth::user()->id))
        <a href="{{url('servicio/create')}}" class="btn btn-primary mt-2"><i class="bi bi-plus"></i>Crear Servicio</a>
        <a href="{{url('/misServicios')}}" class="btn btn-success mt-2"><i class="bi bi-person"></i>Mis Servicios</a>
        @endif
        <div class="d-flex flex-wrap justify-content-around mb-4 table-responsive align-items-center">
            @foreach($servicios as $servicio)
            @if($servicio->TipoS == '1')
            <div class="post my-2 mx-1 h-25 border-3 rounded-3 border-primary px-1"
                style="border: solid; box-shadow: 0 .5rem 1rem rgba(0,0,0,.6);">
                @else
                <div class="post my-2 mx-1 h-25 border-3 rounded-3 border-success px-1"
                    style="border: solid; box-shadow: 0 .5rem 1rem rgba(0,0,0,.6);">
                    @endif

                    <p class="fs-2 text-center">{{$servicio->NombreS}}</p>

                    <img src="{{asset('storage').'/'.$servicio->Logo}}" alt="servicio de: {{$servicio->NombreS}}"
                        class="w-100" style="height: 200px;">
                    <p class="text-secondary" id="ubicacionCortaMapa">{{$servicio->Longitud}} {{$servicio->Latitud}}</p>
                    <!--<div>
                        <a href="{{$servicio->Longitud}} {{$servicio->Latitud}}">Municipo</a>
                    </div>-->
                    <p class="fs-6 text-center">{{substr($servicio->DescripcionS,0, 80)}}...</p>
                    @if($servicio->StatusS == '1')
                    <form action="{{url('/servicio/'.$servicio->id)}}" method="get"
                        class="py-2 d-grid gap-2">
                        @csrf
                        @if($servicio->TipoS == '1')
                        <button type="submit" class="btn btn-primary">Mas info</button>
                        @elseif($servicio->TipoS == '2')
                        <button type="submit" class="btn btn-success">Mas info</button>
                        @endif
                    </form>
                    @else
                    <p class="btn btn-secondary d-flex justify-content-center py-2"><i class="bi bi-lock"></i></p>
                    @endif
                    @if(isset(Auth::user()->id)&&Auth::user()->id==$servicio->IdUsuario)
                    <div class="container d-flex justify-content-around">
                        <a href="{{url('/servicio/'.$servicio->id.'/edit')}}" style="height:38px;" class="btn btn-secondary">Editar</a>
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

<script>
    const key = "G1Tnt7t6nrMf6f56br6EEbTUbdXbAD55D5d";
    const lat = null;
    const lng = null;
    let url = `https://maps.googleapis.com/maps/api/geocode/json?latlng=${lat},${lng}&key=${key}`;
    fetch(url)
    .then(res => res.json())
    .then(data => {
        console.log(data);
        //document.getElementById('ubicacionCortaMapa').innerHTML = data.results[0].formatted_address;
    })
    .catch(err => console.log(err));
</script>
