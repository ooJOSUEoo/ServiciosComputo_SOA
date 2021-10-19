@extends('layouts.app')

@section('content')
<div class="container">
    <form method="post" action="{{url('/servicio')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-floating mb-3">
            <input type="text" name="NombreS" class="form-control" id="floatingInput" placeholder="-" required>
            <label for="floatingInput">Nombre del Servicio</label>
            <span class="text-danger">* Obligatorio</span>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label text-white">Logo de la empresa o servicio</label>
            <input class="form-control" type="file" name="Logo" id="formFile" required>
            <span class="text-danger">* Obligatorio</span>
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" name="DescripcionS" placeholder="Leave a comment here" id="floatingTextarea2"
                style="height: 100px" required></textarea>
            <label for="floatingTextarea2">Descripción</label>
            <span class="text-danger">* Obligatorio</span>
        </div>

        <div class="row g-3">
            <div class="col-md-6 p-2 form-floating mb-3">
                <input type="text" name="UbicacionS" class="form-control" id="floatingInput" placeholder="-" required>
                <label for="floatingInput">Ubicación</label>
                <span class="text-danger">* Obligatorio</span>
            </div>

            <div class="col-md-6 p-2 form-floating mb-3">
                <input type="text" name="AtiendeS" class="form-control" id="floatingInput" placeholder="-" required>
                <label for="floatingInput">Atiende</label>
                <span class="text-danger">* Obligatorio</span>
            </div>
        </div>

        <label for="tipo"class="text-white">Tipo</label>
        <select class="form-select mb-3" name="TipoS" aria-label="Default select example" id="tipo" required>
            <option value="1">Software</option>
            <option value="2">Hardware</option>
        </select>
        <span class="text-danger">* Obligatorio</span>


        <div class="form-floating mb-3">
            <input type="number" name="TelS" class="form-control" id="floatingInput" placeholder="-" required>
            <label for="floatingInput">Tel</label>
            <span class="text-danger">* Obligatorio</span>
        </div>

        <div class="row g-3">
            <div class="col-md-6 p-2 form-floating mb-3">
                <input type="text" name="WhatsappS" class="form-control" id="floatingInput" placeholder="-">
                <label for="floatingInput">Whatsapp</label>
            </div>


            <div class="col-md-6 p-2 form-floating mb-3">
                <input type="text" name="FacebookS" class="form-control" id="floatingInput" placeholder="-">
                <label for="floatingInput">Facebook</label>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-6 p-2 form-floating mb-3">
                <input type="text" name="TwiterS" class="form-control" id="floatingInput" placeholder="-">
                <label for="floatingInput">Twiter</label>
            </div>

            <div class="col-md-6 p-2 form-floating mb-3">
                <input type="text" name="InstagramS" class="form-control" id="floatingInput" placeholder="-">
                <label for="floatingInput">Instagram</label>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-6 p-2 mb-3">
                <label for="formFile" class="form-label text-white">Imagen de descripcción</label>
                <input class="form-control" type="file" name="img1S" id="formFile" required>
                <span class="text-danger">* Obligatorio</span>
            </div>

            <div class="col-md-6 p-2 mb-3">
                <label for="formFile" class="form-label text-white">Imagen de descripcción</label>
                <input class="form-control" type="file" name="img2S" id="formFile" required>
                <span class="text-danger">* Obligatorio</span>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-6 p-2 mb-3">
                <label for="formFile" class="form-label text-white">Imagen de descripcción</label>
                <input class="form-control" type="file" name="img3S" id="formFile" required>
                <span class="text-danger">* Obligatorio</span>
            </div>

            <div class="col-md-6 p-2 mb-3"> 
                <label for="formFile" class="form-label text-white">Imagen de descripcción</label>
                <input class="form-control" type="file" name="img4S" id="formFile" required>
                <span class="text-danger">* Obligatorio</span>
            </div>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label text-white">Imagen de descripcción</label>
            <input class="form-control" type="file" name="img5S" id="formFile" required>
            <span class="text-danger">* Obligatorio</span>
        </div>

        <label for="tipo"class="text-white">Status</label>
        <select class="form-select mb-3" name="StatusS" aria-label="Default select example" id="tipo" required>
            <option value="1">Activo</option>
            <option value="2">No activo</option>
        </select>
        <span class="text-danger">* Obligatorio</span>

        <div class="d-grid gap-2 col-10 mx-auto">
            <button class="btn btn-primary" type="submit">Enviar</button>
            <button class="btn btn-warning" type="button">Regresar</button>
        </div>

    </form>
</div>
@endsection
