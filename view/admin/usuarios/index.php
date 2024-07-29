<?php
require_once 'model/UserModel.php';

$userModel = new UserModel();

function getError($field)
{
    global $errors;
    if (isset($errors[$field])) {
        echo $errors[$field];
    }
}

function isValidPassword($password)
{
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';

    $hasLetter = false;
    $hasNumber = false;

    for ($i = 0; $i < strlen($password); $i++) {
        if (strpos($letters, $password[$i]) !== false) {
            $hasLetter = true;
        } else if (strpos($numbers, $password[$i]) !== false) {
            $hasNumber = true;
        }
    }

    var_dump($hasLetter);
    var_dump($hasNumber);



    return $hasLetter && $hasNumber;
}

$nombre = $correo = $contrasena = '';
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"] ?? '';
    $correo = $_POST["correo"] ?? '';
    $contrasena = $_POST["contrasena"] ?? '';

    if (empty($nombre)) {
        $errors['nombre'] = "El nombre es obligatorio.";
    } elseif (strlen($nombre) < 5) {
        $errors['nombre'] = "El nombre debe tener al menos 5 caracteres.";
    } else if (strlen($nombre) > 50) {
        $errors['nombre'] = "El nombre no debe tener más de 50 caracteres.";
    }

    if (empty($correo)) {
        $errors['correo'] = "El correo es obligatorio.";
    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errors['correo'] = "El correo no es válido.";
    }

    if (empty($contrasena)) {
        $errors['contrasena'] = "La contraseña es obligatoria.";
    } elseif (strlen($contrasena) < 4) {
        $errors['contrasena'] = "La contraseña debe tener al menos 4 caracteres.";
    } elseif (strlen($contrasena) > 40) {
        $errors['contrasena'] = "La contraseña  no debe tener más de 40 caracteres.";
    } elseif (isValidPassword($contrasena)) {
        $errors['contrasena'] = "La contraseña debe incluir al menos una letra y un número.";
    }

    if (empty($errors)) {
        echo "Formulario enviado con éxito.";

        $userModel->create([
            'nombre' => $nombre,
            'correo' => $correo,
            'contrasena' => password_hash($contrasena, PASSWORD_DEFAULT)
        ]);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>

<body>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>">
        <div class="error">
            <?php getError('nombre'); ?>
        </div><br><br>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" value="<?php echo $correo; ?>">
        <div class="error">
            <?php getError('correo'); ?>
        </div><br><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena">
        <div class="error">
            <?php getError('contrasena'); ?>
        </div><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>