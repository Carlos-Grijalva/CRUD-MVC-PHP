<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link rel="stylesheet" type="text/css" href="./view/css/styles.css">
</head>

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

<body>
    <div class="menu2">
        <a href="/speedrun/registro/">Registrar</a>
        <a href="/speedrun/">Listar</a>
    </div>
    <h1>REGISTRO</h1>
    <div class="form">
    <form action="/speedrun/registro/" method="post">
        <label for="">id</label><br>
        <input type="text" name="id"><br>

        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre"><br>

        <label for="apellido1">Apellido1</label><br>
        <input type="text" name="apellido1"><br>

        <label for="apellido2">Apellido2</label><br>
        <input type="text" name="apellido2"><br>

        <label for="tel">Tel</label><br>
        <input type="text" name="tel"><br>
        <button type="submit">Enviar</button>
    </form>
    </div>
</body>

</html>