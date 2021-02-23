<?php

    session_start();

    if($_POST['name'] !== null and $_POST['lastname'] !==  null and $_POST['age'] !== null and $_POST['sex'] !== null){
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        $_SESSION['admin'] = $_POST['name'];
        $year = date("Y") - $age;
    }else {
        header('Location:agree.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Estudiante: <?php echo $name?></title>
</head>
<body>
    <div class="user">
        <?php if($sex === "M"){echo '<img src="M.png" alt="Avatar masculino">';}else{echo '<img src="F.png" alt="Avatar femenino">';} ?>
        <h1><?php if($sex === "M"){echo "Bienvenido, Caballero";}else{echo "Bienvenida, Señorita";} ?></h1>
        <h2>Nombre: <span><?php echo $name?></span></h2>
        <h2>Apellido: <span><?php echo $lastname?></span></h2>
        <h2>Edad: <span><?php echo $age?></span></h2>
        <h2>Año de nacimiento: <span><?php echo $year?></span></h2>
        <h2>Sexo: <span><?php echo $sex?></span></h2>
        <a href="cerrar.php">Volver a ingresar los datos</a>
    </div>
    <footer>Howarts - Colegio de Magia y Hechicería</footer>
</body>
</html>