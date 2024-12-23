<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos
    include_once 'model/conexion.php';
   

    // Obtener datos del formulario
    $titulo = isset($_POST["titulo"]) ? $_POST["titulo"] : "";
    $seccion1 = isset($_POST["seccion1"]) ? $_POST["seccion1"] : "";
    $seccion2 = isset($_POST["seccion2"]) ? $_POST["seccion2"] : "";
    $descripcion1 = isset($_POST["descripcion1"]) ? $_POST["descripcion1"] : "";
    $contenido1 = isset($_POST["contenido1"]) ? $_POST["contenido1"] : "";
    $descripcion2 = isset($_POST["descripcion2"]) ? $_POST["descripcion2"] : "";
    $contenido2 = isset($_POST["contenido2"]) ? $_POST["contenido2"] : "";
    $descripcion3 = isset($_POST["descripcion3"]) ? $_POST["descripcion3"] : "";
    $contenido3 = isset($_POST["contenido3"]) ? $_POST["contenido3"] : "";
    $descripcion4 = isset($_POST["descripcion4"]) ? $_POST["descripcion4"] : "";
    $contenido4 = isset($_POST["contenido4"]) ? $_POST["contenido4"] : "";
    $descripcion5 = isset($_POST["descripcion5"]) ? $_POST["descripcion5"] : "";
    $contenido5 = isset($_POST["contenido5"]) ? $_POST["contenido5"] : "";
    $descripcion6 = isset($_POST["descripcion6"]) ? $_POST["descripcion6"] : "";
    $contenido6 = isset($_POST["contenido6"]) ? $_POST["contenido6"] : "";
    $titulonosotros = isset($_POST["titulonosotros"]) ? $_POST["titulonosotros"] : "";
    $contenidonosotros = isset($_POST["contenidonosotros"]) ? $_POST["contenidonosotros"] : "";
    $d1 = isset($_POST["d1"]) ? $_POST["d1"] : "";
    $d2 = isset($_POST["d2"]) ? $_POST["d2"] : "";
    $proyectos = isset($_POST["proyectos"]) ? $_POST["proyectos"] : "";
    $mision = isset($_POST["mision"]) ? $_POST["mision"] : "";
    $contenido8 = isset($_POST["contenido8"]) ? $_POST["contenido8"] : "";
    $vision = isset($_POST["vision"]) ? $_POST["vision"] : "";
    $contenido9 = isset($_POST["contenido9"]) ? $_POST["contenido9"] : "";
    $ideario = isset($_POST["ideario"]) ? $_POST["ideario"] : "";
    $contenido10 = isset($_POST["contenido10"]) ? $_POST["contenido10"] : "";
    $detalle1 = isset($_POST["detalle1"]) ? $_POST["detalle1"] : "";
    $contenido11 = isset($_POST["contenido11"]) ? $_POST["contenido11"] : "";
    $detalle2 = isset($_POST["detalle2"]) ? $_POST["detalle2"] : "";
    $contenido12 = isset($_POST["contenido12"]) ? $_POST["contenido12"] : "";
    $detalle3 = isset($_POST["detalle3"]) ? $_POST["detalle3"] : "";
    $contenido13 = isset($_POST["contenido13"]) ? $_POST["contenido13"] : "";
    $footer1 = isset($_POST["footer1"]) ? $_POST["footer1"] : "";
    $contenido14 = isset($_POST["contenido14"]) ? $_POST["contenido14"] : "";
    $facebook = isset($_POST["facebook"]) ? $_POST["facebook"] : "";
    $instagram = isset($_POST["instagram"]) ? $_POST["instagram"] : "";
    $ubicacion = isset($_POST["ubicacion"]) ? $_POST["ubicacion"] : "";
    $correo = isset($_POST["correo"]) ? $_POST["correo"] : "";
    $celular = isset($_POST["celular"]) ? $_POST["celular"] : "";

    // Modificar datos en la base de datos
    $update_query = "UPDATE general SET 
        titulo=?, seccion1=?, seccion2=?, descripcion1=?, contenido1=?, descripcion2=?, contenido2=?, 
        descripcion3=?, contenido3=?, descripcion4=?, contenido4=?, 
        descripcion5=?, contenido5=?, descripcion6=?, contenido6=?, 
        titulonosotros=?, contenidonosotros=?, d1=?, d2=?, proyectos=?, 
        mision=?, contenido8=?, vision=?, contenido9=?, ideario=?, 
        contenido10=?, detalle1=?, contenido11=?, detalle2=?, contenido12=?, 
        detalle3=?, contenido13=?, footer1=?, contenido14=?, facebook=?, 
        instagram=?, ubicacion=?, correo=?, celular=?";
    
    $stmt = $pdo->prepare($update_query);
    $stmt->bindParam(1, $titulo);
    $stmt->bindParam(2, $seccion1);
    $stmt->bindParam(3, $seccion2);
    $stmt->bindParam(4, $descripcion1);
    $stmt->bindParam(5, $contenido1);
    $stmt->bindParam(6, $descripcion2);
    $stmt->bindParam(7, $contenido2);
    $stmt->bindParam(8, $descripcion3);
    $stmt->bindParam(9, $contenido3);
    $stmt->bindParam(10, $descripcion4);
    $stmt->bindParam(11, $contenido4);
    $stmt->bindParam(12, $descripcion5);
    $stmt->bindParam(13, $contenido5);
    $stmt->bindParam(14, $descripcion6);
    $stmt->bindParam(15, $contenido6);
    $stmt->bindParam(16, $titulonosotros);
    $stmt->bindParam(17, $contenidonosotros);
    $stmt->bindParam(18, $d1);
    $stmt->bindParam(19, $d2);
    $stmt->bindParam(20, $proyectos);
    $stmt->bindParam(21, $mision);
    $stmt->bindParam(22, $contenido8);
    $stmt->bindParam(23, $vision);
    $stmt->bindParam(24, $contenido9);
    $stmt->bindParam(25, $ideario);
    $stmt->bindParam(26, $contenido10);
    $stmt->bindParam(27, $detalle1);
    $stmt->bindParam(28, $contenido11);
    $stmt->bindParam(29, $detalle2);
    $stmt->bindParam(30, $contenido12);
    $stmt->bindParam(31, $detalle3);
    $stmt->bindParam(32, $contenido13);
    $stmt->bindParam(33, $footer1);
    $stmt->bindParam(34, $contenido14);
    $stmt->bindParam(35, $facebook);
    $stmt->bindParam(36, $instagram);
    $stmt->bindParam(37, $ubicacion);
    $stmt->bindParam(38, $correo);
    $stmt->bindParam(39, $celular);

    $success = $stmt->execute();
    $stmt->closeCursor();

    // Cerrar la conexión
    

    // Mostrar alerta después de realizar cambios
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
    if ($success) {
        echo '<script>
                Swal.fire("Cambios guardados!", "Los cambios se han guardado correctamente.", "success");
            </script>';
    } else {
        echo '<script>
                Swal.fire("Error", "Hubo un error al guardar los cambios.", "error");
            </script>';
    }
}
?>

<main>

<div class="container"> 

<div class="form-container" style=" margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: space-between;" >

    <style>
.container {
    max-width: 90%; /* Ajusta al 90% del ancho de la ventana para hacer el contenedor un poco más pequeño */
    margin: 0 auto;
    padding: 20px;
}

.form-container {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* Estilo del formulario destacado */
.formulario-destacado {
    background: #ffffff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Sombra más pronunciada */
    overflow-y: auto;
    max-height: 700px;
}

/* Estilos de los campos y etiquetas del formulario */
.formulario-destacado label {
    display: block;
    margin-bottom: 0.5em;
    color: #333333;
    font-weight: 600;
}

.formulario-destacado input[type="text"],
.formulario-destacado textarea {
    width: calc(100% - 1.5em); /* Resta el padding para mantener el diseño */
    padding: 0.75em;
    border: 1px solid #dcdcdc;
    border-radius: 4px;
    margin-bottom: 1em;
}

.formulario-destacado textarea {
    min-height: 120px;
    resize: vertical;
}

/* Estilo para los botones */
.formulario-destacado input[type="submit"] {
    display: block; /* Asegura que el botón sea un bloque individual */
    width: auto; /* Ajusta el ancho según el contenido */
    padding: 0.8em 2em; /* Tamaño del botón, ajusta el alto y ancho */
    background-color: #007bff; /* Color de fondo */
    color: #ffffff; /* Color del texto */
    border: none; /* Sin bordes */
    border-radius: 30px; /* Bordes redondeados */
    cursor: pointer; /* Cambia el cursor al pasar el mouse */
    font-size: 1em; /* Tamaño de fuente */
    transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Transiciones suaves */
    box-shadow: 2px 4px 6px rgba(0, 0, 0, 0.2); /* Sombra */
    margin-top: 1em; /* Espacio superior */
    margin-left: auto; /* Empuja el botón a la derecha */
    margin-right: 0; /* Asegura que esté alineado completamente a la derecha */
    text-align: center; /* Centra el texto dentro del botón */
}

.formulario-destacado input[type="submit"]:hover {
    background-color: #0069d9; /* Color ligeramente más oscuro para el hover */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Sombra más pronunciada en hover */
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        padding: 20px 10px; /* Menos padding en dispositivos móviles */
    }

    .formulario-destacado {
        max-height: none; /* No limitar la altura en dispositivos móviles */
        padding: 20px; /* Menos padding en dispositivos móviles */
    }

    .formulario-destacado input[type="text"],
    .formulario-destacado textarea {
        width: calc(100% - 40px); /* Ajuste para el padding en dispositivos móviles */
    }
}

</style>



<?php
include_once 'model/conexion.php';

// Obtener datos de la base de datos
$query = "SELECT * FROM general";
$result = $pdo->query($query);

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo '<div class="formulario-destacado">';
    echo '<form method="post" action="" id="form-' . $row['Id'] . '" enctype="multipart/form-data">';

    $campos = array(
        "titulo","seccion1","seccion2","descripcion1", "contenido1",
        "descripcion2", "contenido2", "descripcion3",
        "contenido3", "descripcion4", "contenido4",
        "descripcion5", "contenido5", "descripcion6",
        "contenido6", "titulonosotros", "contenidonosotros",
        "d1", "d2", "proyectos", "mision", "contenido8", 
        "vision", "contenido9", "ideario", "contenido10", 
        "detalle1", "contenido11", "detalle2", "contenido12",
        "detalle3", "contenido13", "footer1", "contenido14", 
        "facebook", "instagram", "ubicacion", "correo", "celular"
    );

    foreach ($campos as $campo) {
        echo '<div class="campo">';
        echo '<label for="' . $campo . '">' . ucfirst($campo) . ':</label>';

        // Verificar si la clave existe en la fila actual antes de acceder a ella
        $valorCampo = isset($row[$campo]) ? $row[$campo] : '';

        // Usar textarea para los campos que deben ser grandes
        if (strpos($campo, 'contenido') !== false || $campo == 'descripcion') {
            echo '<textarea name="' . $campo . '" required>' . $valorCampo . '</textarea>';
        } else {
            echo '<input type="text" name="' . $campo . '" value="' . $valorCampo . '" required>';
        }

        echo '</div>';
    }

    echo '<input type="submit" name="submitForm" value="Guardar Cambios">';
    echo '</form>';
    echo '</div>';
}

// Cerrar la conexión
$pdo = null;
?>



    </div>
</div>
    

</main>