<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" type="text/css" href="./view/css/styles.css">
</head>
<body>

<style>
    * {
        padding: 0;
        margin: 0;
    }

    .menu2 {
        display: flex;
        background-color: rgb(70 70 70);
        align-items: center;
        height: auto;
        justify-content: center;
    }

    .menu2 a {
        color: white;
        padding: 10px 20px;
        font-size: 18px;
        text-decoration: none;
    }

    .menu a:hover {
        background-color: rgb(61, 61, 61);
    }

    h1 {
        margin-top: 20px;
        text-align: center;
    }

    .form {
        display: flex;
        justify-content: center;
        font-size: 18px;
    }


</style>
    <div class="menu2">
        <a href="/speedrun/registro/">Registrar</a>
        <a href="/speedrun/">Listar</a>
    </div>
    <h1>EDITAR</h1>
    <div class="form">
    <form class="modificar" action="/speedrun/editar/" method="post">
        <label for="">id</label><br>
        <input type="text" name="id" readonly value="<?php echo $lista['id'] ?>"><br>

        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" value="<?php echo $lista['nombre'] ?>"><br>

        <label for="apellido1">Apellido1</label><br>
        <input type="text" name="apellido1" value="<?php echo $lista['apellidoP'] ?>"><br>

        <label for="apellido2">Apellido2</label><br>
        <input type="text" name="apellido2" value="<?php echo $lista['apellidoM'] ?>"><br>
        
        <label for="tel">Tel</label><br>
        <input type="text" name="tel" value="<?php echo $lista['tel'] ?>" ><br>
        <button onclick="confirmar()" type="submit">Enviar</button>
    </form>
    </div>
    <script>
        let confirmar = () => {
            let modifForm = document.getElementsByClassName('modificar');
            for (let i = 0; i < modifForm.length; i++) {
                modifForm[i].onsubmit = (event) => {
                    if (!confirm(`SE MODIFICARÁ EL REGISTRO`)) {
                        event.preventDefault();
                    }
                }
            }
        }
    </script>
</body>
</html>