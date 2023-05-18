<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba de hash</title>
</head>
<body>
    <form action="./update.php" method="POST">
    <div>    
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id=""> <br>
    </div>
    <div>
        <label for="descripcion">Descripcion</label><br>
        <textarea name="descripcion" id="" cols="30" rows="10"></textarea> <br>
    </div>
    <div>
        <label for="descripcion">Caracteristicas Generales</label><br>
        <textarea name="caracteristicas" id="" cols="30" rows="10"></textarea> <br>
    </div>
    <div>
        <label for="precio">Precio</label>
        <input type="number" name="precio" id="">
    </div>
    <div>
        <label for="precioDescuento">Precio Descuento</label>
        <input type="number" name="precioDescuento" id="">
    </div>
    <div>
        <label for="oferta">Oferta</label>
        <input type="checkbox" id="" name="oferta" value="oferta">
    </div>
        <label for="categoria">Categoria</label>
        <input type="text" name="categoria" id="">
        <button type="submit">Verificar</button>
    </form>

    <?php
        if(isset($_POST["nombre"])){
            // $pass_hash= password_hash($_POST["password"],PASSWORD_DEFAULT);
            // echo $pass_hash;
            // echo "<br>";
            // echo $_POST["password"];
            // echo "<br>";
            // if(password_verify($_POST["password"],$pass_hash)){
            //     echo "Contraseñas identicas";
            // }else{
            //     echo "error";
            // };

            
            if(isset($_POST["oferta"])){
                $oferta=true;
            }else{
                $oferta=false;
            }
            $nombre = $_POST["nombre"];
            $descripcion = $_POST["descripcion"];

            echo $_POST["nombre"]."<br>".$_POST["descripcion"]."<br>".$_POST["caracteristicas"]."<br>".$_POST["precio"]
            ."<br>".$_POST["precioDescuento"]."<br>".$oferta."<br>".$_POST["categoria"];
            echo "<br>";
        
            $array = array("nombre"=>$_POST["nombre"], "descripcion"=>$_POST["descripcion"], "caracteristicas" => $_POST["caracteristicas"], "precio"=>$_POST["precio"], "precioDescuento"=>$_POST["precioDescuento"], "ofertaEspecial"=>$oferta, "categoria"=>$_POST["categoria"]);
            if(file_exists("productos.json")){
                $contenido = file_get_contents("productos.json");
                $data = json_decode($contenido);
                array_push($data, $array);
                file_put_contents("productos.json", json_encode($data));
            }else{
                $data=array();
                array_push($data, $array);
                $f = fopen("productos.json", "w");
                fwrite($f, json_encode($data));
                fclose($f);
            }
         

        }
    ?>
</body>
</html>