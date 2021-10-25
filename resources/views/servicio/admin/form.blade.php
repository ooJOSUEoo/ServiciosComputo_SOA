@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        <li>* Se recargo la pagina asi que vuelve a poner las img necesarias y el tipo de servicio asi como el status si
            se necesita</li>
    </ul>
</div>
@endif

<div class="form-floating mb-3">
    <input type="text" name="NombreS" class="form-control" id="floatingInput" placeholder="-"
        value="{{isset($servicio->NombreS)?$servicio->NombreS:old('NombreS')}}">
    <label for="floatingInput">Nombre del Servicio</label>

</div>

<div class="mb-3">
    <label for="formFile" class="form-label text-white">Imagen Principal</label>
    <input class="form-control" type="file" name="Logo" id="formFile">
    @if(isset($servicio->Logo))
    <img src="{{asset('storage').'/'.$servicio->Logo}}" alt="{{$servicio->NombreS}}" style="height: 25%; width: 25%;">
    @endif
</div>

<div class="form-floating mb-3">
    <textarea class="form-control" name="DescripcionS" placeholder="Leave a comment here" id="floatingTextarea2"
        style="height: 100px">{{isset($servicio->DescripcionS)?$servicio->DescripcionS:old('DescripcionS')}}</textarea>
    <label for="floatingTextarea2">Descripción</label>

</div>

<div class="row g-3">
    <div class="col-md-6 p-2 form-floating mb-3">
        <input readonly  type="text" name="Latitud" class="form-control" id="Latitud" placeholder="-"
            value="{{isset($servicio->Latitud)?$servicio->Latitud:old('Latitud')}}">
        <label for="Latitud">Latitud</label>
    </div>
    <div class="col-md-6 p-2 form-floating mb-3">
        <input readonly  type="text" name="Longitud" class="form-control" id="Longitud" placeholder="-"
            value="{{isset($servicio->Longitud)?$servicio->Longitud:old('Longitud')}}">
        <label for="Longitud">Longitud</label>
    </div>
</div>´
<p class="text-white">Elige la latitud y longitud conforme al mapa</p>
<div class="container d-flex justify-content-center mb-3">
    <div id="mapa" style="width: 100%; height: 250px;"></div>
</div>

<div class="p-2 form-floating mb-3">
    <input type="text" name="AtiendeS" class="form-control" id="floatingInput" placeholder="-"
        value="{{isset($servicio->AtiendeS)?$servicio->AtiendeS:old('AtiendeS')}}">
    <label for="floatingInput">Atiende</label>

</div>

<label for="tipo" class="text-white">Tipo</label>
<select class="form-select mb-3" name="TipoS" aria-label="Default select example" id="tipo">
    @if(isset($servicio->TipoS))
    @if($servicio->TipoS == '1')
    <option value="1" selected>Software</option>
    @elseif($servicio->TipoS == '2')
    <option value="2" selected>Hardware</option>
    @endif
    @endif
    <option value="1">Software</option>
    <option value="2">Hardware</option>
</select>


<div class="form-floating mb-3">
    <input type="number" name="TelS" class="form-control" id="floatingInput" placeholder="-"
        value="{{isset($servicio->TelS)?$servicio->TelS:old('TelS')}}">
    <label for="floatingInput">Tel</label>

</div>

<div class="row g-3">
    <div class="col-md-6 p-2 form-floating mb-3">
        <input type="number" name="WhatsappS" class="form-control" id="floatingInput" placeholder="-"
            value="{{isset($servicio->WhatsappS)?$servicio->WhatsappS:old('WhatsappS')}}">
        <label for="floatingInput">Whatsapp (numero)</label>
    </div>


    <div class="col-md-6 p-2 form-floating mb-3">
        <input type="text" name="FacebookS" class="form-control" id="floatingInput" placeholder="-"
            value="{{isset($servicio->FacebookS)?$servicio->FacebookS:old('FacebookS')}}">
        <label for="floatingInput">Facebook (link)</label>
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6 p-2 form-floating mb-3">
        <input type="text" name="TwiterS" class="form-control" id="floatingInput" placeholder="-"
            value="{{isset($servicio->TwiterS)?$servicio->TwiterS:old('TwiterS')}}">
        <label for="floatingInput">Twiter (link)</label>
    </div>

    <div class="col-md-6 p-2 form-floating mb-3">
        <input type="text" name="InstagramS" class="form-control" id="floatingInput" placeholder="-"
            value="{{isset($servicio->InstagramS)?$servicio->InstagramS:old('InstagramS')}}">
        <label for="floatingInput">Instagram (link)</label>
    </div>
</div>

<div class="mb-3">
    <label for="formFile" class="form-label text-white">Imagen de descripcción N.1</label>
    <input class="form-control" type="file" name="Img1S" id="formFile">
    @if(isset($servicio->Img1S))
    <img src="{{asset('storage').'/'.$servicio->Img1S}}" alt="{{$servicio->NombreS}}" style="height: 25%; width: 25%;">
    @endif
</div>

<div class="mb-3">
    <label for="formFile" class="form-label text-white">Imagen de descripcción N.2</label>
    <input class="form-control" type="file" name="Img2S" id="formFile">
    @if(isset($servicio->Img2S))
    <img src="{{asset('storage').'/'.$servicio->Img2S}}" alt="{{$servicio->NombreS}}" style="height: 25%; width: 25%;">
    @endif
</div>

<div class="mb-3">
    <label for="formFile" class="form-label text-white">Imagen de descripcción N.3</label>
    <input class="form-control" type="file" name="Img3S" id="formFile">
    @if(isset($servicio->Img3S))
    <img src="{{asset('storage').'/'.$servicio->Img3S}}" alt="{{$servicio->NombreS}}" style="height: 25%; width: 25%;">
    @endif
</div>

<div class="mb-3">
    <label for="formFile" class="form-label text-white">Imagen de descripcción N.4</label>
    <input class="form-control" type="file" name="Img4S" id="formFile">
    @if(isset($servicio->Img4S))
    <img src="{{asset('storage').'/'.$servicio->Img4S}}" alt="{{$servicio->NombreS}}" style="height: 25%; width: 25%;">
    @endif
</div>

<div class="mb-3">
    <label for="formFile" class="form-label text-white">Imagen de descripcción N.5</label>
    <input class="form-control" type="file" name="Img5S" id="formFile">
    @if(isset($servicio->Img5S))
    <img src="{{asset('storage').'/'.$servicio->Img5S}}" alt="{{$servicio->NombreS}}" style="height: 25%; width: 25%;">
    @endif
</div>

<label for="tipo" class="text-white">Status</label>
<select class="form-select mb-3" name="StatusS" aria-label="Default select example" id="tipo">
    @if(isset($servicio->StatusS))
    @if($servicio->StatusS == '1')
    <option value="1" selected>Activo</option>
    @elseif($servicio->StatusS == '2')
    <option value="2" selected>No activo</option>
    @endif
    @endif
    <option value="1">Activo</option>
    <option value="2">No activo</option>
</select>

<div class="d-grid gap-2 col-10 mx-auto">
    <button class="btn btn-primary" type="submit">{{$modo}} Servicio</button>
    <button class="btn btn-warning" type="button" onClick="history.go(-1);">Regresar</button>
</div>

<script>
    function iniciarMapa() {

        var latitud,longitud;

        if(document.getElementById('Latitud').value == ''){
            latitud = 19.38624308932614;
        }else{
            latitud = document.getElementById('Latitud').value;
        }
        if(document.getElementById('Longitud').value == ''){
            longitud = -97.96578439831544;
        }else{
            longitud = document.getElementById('Longitud').value;
        }
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
            draggable: true,
            position: new google.maps.LatLng(coordenadas.lat, coordenadas.lng)
        });

        marcador.addListener('dragend', function (event) {
            document.getElementById('Latitud').value = this.getPosition().lat();
            document.getElementById('Longitud').value = this.getPosition().lng();

        });
    }

</script>
