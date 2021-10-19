<div class="container">
    <form method="post" action="{{url('/servicio')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="-" required>
            <label for="floatingInput">Nombre del Servicio</label>
            <span class="text-danger">* Obligatorio</span>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label text-white">Logo de la empresa o servicio</label>
            <input class="form-control" type="file" id="formFile" required>
            <span class="text-danger">* Obligatorio</span>
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                style="height: 100px" required></textarea>
            <label for="floatingTextarea2">Descripcción</label>
            <span class="text-danger">* Obligatorio</span>
        </div>

        <div class="row">
            <div class="col p-2 form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="-" required>
                <label for="floatingInput">Ubicación</label>
                <span class="text-danger">* Obligatorio</span>
            </div>

            <div class="col p-2 form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="-" required>
                <label for="floatingInput">Atiende</label>
                <span class="text-danger">* Obligatorio</span>
            </div>
        </div>

        <label for="tipo"class="text-white">Tipo</label>
        <select class="form-select mb-3" aria-label="Default select example" id="tipo" required>
            <option value="1">Software</option>
            <option value="2">Hardware</option>
        </select>
        <span class="text-danger">* Obligatorio</span>


        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="floatingInput" placeholder="-" required>
            <label for="floatingInput">Tel</label>
            <span class="text-danger">* Obligatorio</span>
        </div>

        <div class="row">
            <div class="col p-2 form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="-">
                <label for="floatingInput">Whatsapp</label>
            </div>


            <div class="col p-2 form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="-">
                <label for="floatingInput">Facebook</label>
            </div>
        </div>

        <div class="row">
            <div class="col p-2 form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="-">
                <label for="floatingInput">Twiter</label>
            </div>

            <div class="col p-2 form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="-">
                <label for="floatingInput">Instagram</label>
            </div>
        </div>

        <div class="row">
            <div class="col p-2 mb-3">
                <label for="formFile" class="form-label text-white">Imagen de descripcción</label>
                <input class="form-control" type="file" id="formFile" required>
                <span class="text-danger">* Obligatorio</span>
            </div>

            <div class="col p-2 mb-3">
                <label for="formFile" class="form-label text-white">Imagen de descripcción</label>
                <input class="form-control" type="file" id="formFile" required>
                <span class="text-danger">* Obligatorio</span>
            </div>
        </div>

        <div class="row">
            <div class="col p-2 mb-3">
                <label for="formFile" class="form-label text-white">Imagen de descripcción</label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <div class="col p-2 mb-3">
                <label for="formFile" class="form-label text-white">Imagen de descripcción</label>
                <input class="form-control" type="file" id="formFile">
            </div>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label text-white">Imagen de descripcción</label>
            <input class="form-control" type="file" id="formFile">
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="submit">Enviar</button>
            <button class="btn btn-warning" type="button">Regresar</button>
        </div>

    </form>
</div>
