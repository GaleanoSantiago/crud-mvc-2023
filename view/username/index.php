<?php
require_once("../head/head.php");
require_once("../../controller/usernameController.php");
$obj = new usernameController();
$rows = $obj->index();
?>

<div class="mb-3">
    <a href="/Php/crud-mvc-2023/view/username/create.php" class="btn btn-outline-success">Agregar Nuevo Usuario</a>
</div>
<table class="table table-striped table-hover border">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if($rows) : 
        foreach($rows as $row): ?>
        <tr>
            <td ><?= $row['id']?></td>
            <td ><?= $row['nombre']?></td>
            <td class="d-flex gap-2">
                <a href="./show.php?id=<?= $row['id']?>" class="btn btn-outline-primary">Ver</a>
                <a href="./edit.php?id=<?= $row['id']?>" class="btn btn-outline-success">Modificar</a>
                <!-- <a href="./delete.php?id=<?= $row['id']?>" class="btn btn-outline-danger" Onclick="return ConfirmDelete()">Eliminar</a> -->
                <form action="./store.php" method="POST">
                    <input type="hidden" name="delete">
                    <input type="hidden" name="id" value="<?= $row["id"]?>">
                    <button type="submit"class="btn btn-outline-danger" Onclick="return ConfirmDelete()">Eliminar</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
        
        <?php else : ?>
            <tr>
                <td colspan="3" class="text-center">No hay Registros</td>
            </tr>
        <?php endif; ?>

        
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