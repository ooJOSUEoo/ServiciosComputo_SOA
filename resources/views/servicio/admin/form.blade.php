<div class="form-floating mb-3">
    <input type="text" name="NombreS" class="form-control" id="floatingInput" placeholder="-"
        value="{{isset($servicio->NombreS)?$servicio->NombreS:''}}">
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
        style="height: 100px">{{isset($servicio->DescripcionS)?$servicio->DescripcionS:''}}</textarea>
    <label for="floatingTextarea2">Descripción</label>

</div>

<div class="row g-3">
    <div class="col-md-6 p-2 form-floating mb-3">
        <input type="text" name="UbicacionS" class="form-control" id="floatingInput" placeholder="-"
            value="{{isset($servicio->UbicacionS)?$servicio->UbicacionS:''}}">
        <label for="floatingInput">Ubicación</label>

    </div>

    <div class="col-md-6 p-2 form-floating mb-3">
        <input type="text" name="AtiendeS" class="form-control" id="floatingInput" placeholder="-"
            value="{{isset($servicio->AtiendeS)?$servicio->AtiendeS:''}}">
        <label for="floatingInput">Atiende</label>

    </div>
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
        value="{{isset($servicio->TelS)?$servicio->TelS:''}}">
    <label for="floatingInput">Tel</label>

</div>

<div class="row g-3">
    <div class="col-md-6 p-2 form-floating mb-3">
        <input type="text" name="WhatsappS" class="form-control" id="floatingInput" placeholder="-"
            value="{{isset($servicio->WhatsappS)?$servicio->WhatsappS:''}}">
        <label for="floatingInput">Whatsapp</label>
    </div>


    <div class="col-md-6 p-2 form-floating mb-3">
        <input type="text" name="FacebookS" class="form-control" id="floatingInput" placeholder="-"
            value="{{isset($servicio->FacebookS)?$servicio->FacebookS:''}}">
        <label for="floatingInput">Facebook</label>
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6 p-2 form-floating mb-3">
        <input type="text" name="TwiterS" class="form-control" id="floatingInput" placeholder="-"
            value="{{isset($servicio->TwiterS)?$servicio->TwiterS:''}}">
        <label for="floatingInput">Twiter</label>
    </div>

    <div class="col-md-6 p-2 form-floating mb-3">
        <input type="text" name="InstagramS" class="form-control" id="floatingInput" placeholder="-"
            value="{{isset($servicio->InstagramS)?$servicio->InstagramS:''}}">
        <label for="floatingInput">Instagram</label>
    </div>
</div>

<div class="mb-3">
    <label for="formFile" class="form-label text-white">Imagen de descripcción</label>
    <input class="form-control" type="file" name="img1S" id="formFile">
    @if(isset($servicio->Img1S))
    <img src="{{asset('storage').'/'.$servicio->Img1S}}" alt="{{$servicio->NombreS}}" style="height: 25%; width: 25%;">
    @endif
</div>

<div class="mb-3">
    <label for="formFile" class="form-label text-white">Imagen de descripcción</label>
    <input class="form-control" type="file" name="img2S" id="formFile">
    @if(isset($servicio->Img2S))
    <img src="{{asset('storage').'/'.$servicio->Img2S}}" alt="{{$servicio->NombreS}}" style="height: 25%; width: 25%;">
    @endif
</div>

<div class="mb-3">
    <label for="formFile" class="form-label text-white">Imagen de descripcción</label>
    <input class="form-control" type="file" name="img3S" id="formFile">
    @if(isset($servicio->Img3S))
    <img src="{{asset('storage').'/'.$servicio->Img3S}}" alt="{{$servicio->NombreS}}" style="height: 25%; width: 25%;">
    @endif
</div>

<div class="mb-3">
    <label for="formFile" class="form-label text-white">Imagen de descripcción</label>
    <input class="form-control" type="file" name="img4S" id="formFile">
    @if(isset($servicio->Img4S))
    <img src="{{asset('storage').'/'.$servicio->Img4S}}" alt="{{$servicio->NombreS}}" style="height: 25%; width: 25%;">
    @endif
</div>

<div class="mb-3">
    <label for="formFile" class="form-label text-white">Imagen de descripcción</label>
    <input class="form-control" type="file" name="img5S" id="formFile">
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
