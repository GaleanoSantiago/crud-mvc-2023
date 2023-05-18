<?php

require_once("../head/head.php");

?>
<div class="row">
    <div class="col-12 col-lg-6 col-md-8 col-sm-10">
        <h2 class="text-center">Creando Nuevo Usuario</h2>
        <form autocomplete="off" action="./store.php" Method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Usuario</label>
                <input type="text" name="nombre" class="form-control" id="" required>
            </div>
            <input type="hidden" name="store">
            <a href="./index.php" class="btn btn-outline-primary">Volver a la Tabla</a>
            <button type="reset" class="btn btn-outline-danger">Cancelar</button>
            <button type="submit" class="btn btn-outline-success">Guardar</button>
        </form>
    </div>
</div>
<?php

require_once("../head/footer.php");

?>
