@extends('layouts.app')

@section('content')
@if($servicio->StatusS=='1')
<style>
    .logoimg {
        background-image: url("{{asset('storage').'/'.$servicio->Logo}}");
        background-repeat: no-repeat;
        background-size: cover;
    }

</style>
<div class="container">
    <div class=" w-100 d-flex justify-content-center align-items-center bg-secondary mb-3" style="min-height: 40vh">
        <div class="w-50 d-flex justify-content-center align-items-center">
            <img class="w-100" src="{{asset('storage').'/'.$servicio->Logo}}"
                alt="Imagen principal de {{$servicio->NombreS}}">
            @if($servicio->TipoS == '1')
            <p class="text-center text-primary position-absolute tituloS">{{$servicio->NombreS}}</p>
            @else
            <p class="text-center text-success position-absolute tituloS">{{$servicio->NombreS}}</p>
            @endif
        </div>
    </div>

    <div class="container bg-warning d-flex justify-content-center align-items-center pt-1 text-justify mb-3">
        <p>{{$servicio->DescripcionS}}</p>
    </div>

    <div
        class="text-white text-center container bg-secondary d-flex justify-content-around align-items-center flex-wrap pt-1 text-justify mb-3 py-4 pt-3">
        <div>Atendido por: <span><b>{{$servicio->AtiendeS}}</b></span></div>
        <div>Servicio para necesidades en: <span><b>
                    @if($servicio->TipoS==1)
                    SOFTWARE
                    @else
                    HARDWARE
                    @endif
                </b></span></div>
        <div class=""><i class="bi bi-telephone"></i><span>{{$servicio->TelS}}</span></div>
    </div>

    <div class="container mb-3">
        <div class="container d-flex justify-content-center mb-3">
            <div id="mapa" style="width: 100%; height: 250px;"></div>
        </div>
    </div>


    <div class="galery container d-flex justify-content-around align-items-center bg-warning flex-wrap table-responsive py-4 mb-3">
        <img src="{{asset('storage').'/'.$servicio->Img1S}}" alt="Imagen 1 de descripcion" class="post mb-3">
        <img src="{{asset('storage').'/'.$servicio->Img2S}}" alt="Imagen 2 de descripcion" class="post mb-3">
        <img src="{{asset('storage').'/'.$servicio->Img3S}}" alt="Imagen 3 de descripcion" class="post mb-3">
        <img src="{{asset('storage').'/'.$servicio->Img4S}}" alt="Imagen 4 de descripcion" class="post mb-3">
        <img src="{{asset('storage').'/'.$servicio->Img5S}}" alt="Imagen 5 de descripcion" class="post mb-3">
    </div>

    <div class="container d-flex justify-content-around align-items-center bg-secondary flex-wrap py-4 mb-3">
        @if($servicio->WhatsappS != '')
        <div class="btn btn-dark">
            <i class="bi bi-whatsapp"></i>
            <a href="https://wa.me/{{$servicio->WhatsappS}}" class="text-white" style="text-decoration: none;">Whatsapp</a>
        </div>
        @endif
        @if($servicio->FacebookS != '')
        <div class="btn btn-dark">
            <i class="bi bi-facebook"></i>
            <a href="{{$servicio->FacebookS}}" class="text-white" style="text-decoration: none;">Facebook</a>
        </div>
        @endif
        @if($servicio->TwiterS != '')
        <div class="btn btn-dark">
            <i class="bi bi-twitter"></i>
            <a href="{{$servicio->TwiterS}}" class="text-white" style="text-decoration: none;">Twitter</a>
        </div>
        @endif
        @if($servicio->InstagramS != '')
        <div class="btn btn-dark">
            <i class="bi bi-instagram"></i>
            <a href="{{$servicio->InstagramS}}" class="text-white" style="text-decoration: none;">Instagram</a>
        </div>
        @endif
        @if($servicio->InstagramS != '')
        <div class="btn btn-dark">
            <i class="bi bi-briefcase-fill"></i>
            <a href="mailto:{{$servicio->EmailS}}" class="text-white" style="text-decoration: none;">{{$servicio->EmailS}}</a>
        </div>
        @endif
    </div>
</div>

<script>
    function iniciarMapa() {

        var latitud, longitud;

        latitud = {{$servicio->Latitud}};

        longitud = {{$servicio->Longitud}};
 
        coodenadas = {
            lng: longitud,
            lat: latitud,
        }

        generarMapa(coodenadas);
    }

    function generarMapa(coordenadas) {
        var mapa = new google.maps.Map(document.getElementById('mapa'), {
            zoom: 15,
            center: new google.maps.LatLng(coordenadas.lat, coordenadas.lng)
        });

        marcador = new google.maps.Marker({
            map: mapa,
            draggable: false,
            position: new google.maps.LatLng(coordenadas.lat, coordenadas.lng)
        });

        marcador.addListener('dragend', function (event) {
            document.getElementById('Latitud').value = this.getPosition().lat();
            document.getElementById('Longitud').value = this.getPosition().lng();

        });
    }

</script>
@else
<div class="container">
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">El servicio no esta disponible</h4>
        <p>El servicio no esta disponible por el momento, intenta mas tarde.</p>
        <hr>
        <p class="mb-0">Si el problema persiste, comunicate con nosotros.</p>
    </div>
@endif
@endsection
