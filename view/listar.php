<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTAR</title>
    <link rel="stylesheet" type="text/css" href="./view/css/styles.css">
</head>

<body>
    <div class="menu">
        <a href="/speedrun/registro/">Registrar</a>
        <a href="/speedrun/">Listar</a>
        <div>
            <form action="" method="post">
                <input type="text" name="nombre">

                <button type="submit">Buscar</button>
            </form>
        </div>
    </div>
    
    <h1>LISTAR</h1>
    <div class="contenedor">
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>ApellidoP</th>
            <th>ApellidoM</th>
            <th>Tel</th>
        </tr>

        <?php
        foreach ($resultado as $valor) {
            echo "<tr>";
            echo "<td>" . $valor['id'] . "</td>";
            echo "<td>" . $valor['nombre'] . "</td>";
            echo "<td>" . $valor['apellidoP'] . "</td>";
            echo "<td>" . $valor['apellidoM'] . "</td>";
            echo "<td>" . $valor['tel'] . "</td>";
            echo "<td><form action='/speedrun/editarMenu/' method='post'><button class='ed' type='submit' name='id' value='" . $valor['id'] . "'>Editar</button></form></td>";
            echo "<td><form class='eliminar' action='/speedrun/eliminar/' method='post'><button class='el' onclick='confirmar()' type='submit' name='id' value='" . $valor['id'] . "'>Eliminar</button></form></td>";
            echo "</tr>";
        }
        ?>

    </table>
    </div>
    <script>
        let confirmar = () => {
            let elimForm = document.getElementsByClassName('eliminar');
            for (let i = 0; i < elimForm.length; i++) {
                elimForm[i].onsubmit = (event) => {
                    if (!confirm(`SE ELIMINARÁ EL REGISTRO`)) {
                        event.preventDefault();
                    }
                }
            }
        }
    </script>
</body>

</html>