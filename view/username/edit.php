<?php
require_once("../head/head.php");
require_once("../../controller/usernameController.php");
$obj = new usernameController();
$user = $obj->show($_GET["id"]);
// var_dump($user);
?>
<div class="row">
    <div class="col-12 col-lg-6 col-md-8 col-sm-10">
        <form autocomplete="off" action="./store.php" Method="post">
            <h2 class="text-center mb-3">Modificando Registro</h2>
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" name="id" class="form-control" id="" value="<?= $user["id"]?>" readonly >
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Usuario</label>
                <input type="text" name="nombre" class="form-control" id="" value="<?= $user["nombre"]?>" required>
            </div>
            <input type="hidden" name="update">
            <a href="./index.php" class="btn btn-outline-primary">Volver a la Tabla</a>
            <button type="reset" class="btn btn-outline-danger">Cancelar</button>
            <button type="submit" class="btn btn-outline-success">Guardar</button>
        </form>
    </div>
</div>
<?php
require_once("../head/footer.php");

?>