<?php
require_once("../head/head.php");
require_once("../../controller/usernameController.php");
$obj = new usernameController();
$date = $obj->show($_GET["id"]);
// var_dump($date);
?>

<h2 class="text-center">Detalles del Registro</h2>

<div class="pb-3 d-flex gap-2">
    <a href="./index.php" class="btn btn-outline-primary">Volver</a>
    <a href="./edit.php?id=<?= $date['id']?>" class="btn btn-outline-success">Actualizar</a>
    <!-- <a href="./delete.php?id=<?= $date['id']?>" class="btn btn-outline-danger" Onclick="return ConfirmDelete();">Eliminar</a> -->
    <form action="./store.php" method="POST">
        <input type="hidden" name="delete">
        <input type="hidden" name="id" value="<?= $date["id"]?>">
        <button type="submit"class="btn btn-outline-danger" Onclick="return ConfirmDelete()">Eliminar</button>
    </form>
</div>

<table class="table table-striped table-hover border">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["id"] ?></td>
            <td scope="col"><?= $date["nombre"] ?></td>
        </tr>
    </tbody>
</table>

<script>
//Funcion para el boton de eliminar
    function ConfirmDelete()
    {
      var x = confirm("¿Seguro que quiere eliminar el usuario?");
      if (x)
          return true;
      else
        return false;
    }
</script>
<?php
require_once("../head/footer.php");

?>