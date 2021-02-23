<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registro</title>
</head>
<body>
    <br>
    <h1>Estimado estudiante, por favor ingrese sus datos.</h1>
    <div class="datos">
        <form action="user.php" method="post">
            <input type="text" name="name" placeholder="Nombre" required>
            <input type="text" name="lastname" placeholder="Apellido" required>
            <input type="number" name="age" min=1 max=100 placeholder="Edad" required>
            <p>
            Masculino:
            <input class="sex" type="radio" name="sex" value="M" required>
            Femenino:
            <input class="sex" type="radio" name="sex" value="F" required>
            </p>
            <input type="submit" value="Ingresar">
        </form>
    </div>
    <footer>Howarts - Colegio de Magia y Hechicería</footer>
</body>
</html>