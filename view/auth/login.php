<?php
require_once 'model/UserModel.php';
$userModel = new UserModel();
$usuarios = $userModel->get();

function verifyEmail($email, $pass)
{
    global $userModel;
    $ingresados = $userModel->where('correo', $email)->where('contrasena', $pass)->get();

    if (!empty($ingresados)) {
        foreach ($ingresados as $ingresado) {
            if (password_verify($pass, $ingresado['contrasena'])) {
                // Contraseña verificada
                return true;
            }
        }
    } else {
        // Usuario no encontrado
        return false;
    }
}

function getError($field)
{
    global $errors;
    if (isset($errors[$field])) {
        echo $errors[$field];
    }
}

$correo = $contrasena = '';
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"] ?? '';
    $contrasena = $_POST["contrasena"] ?? '';

    if (empty($correo)) {
        $errors['correo'] = "El correo es obligatorio.";
    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errors['correo'] = "El correo no es válido.";
    } elseif (verifyEmail($correo, $contrasena)!==true) {
        $errors['correo'] = "El correo o la contraseña ingresados no son correctos";
    }

    if (empty($contrasena)) {
        $errors['contrasena'] = "La contraseña es obligatoria.";
    } elseif (strlen($contrasena) < 4) {
        $errors['contrasena'] = "La contraseña debe tener al menos 4 caracteres.";
    } elseif (strlen($contrasena) > 40) {
        $errors['contrasena'] = "La contraseña  no debe tener más de 40 caracteres.";
    } elseif (verifyEmail($correo, $contrasena)!==true) {
        $errors['contrasena'] = "El correo o la contraseña ingresados no son correctos";
    }

    if (empty($errors)) {
        echo "Inicio de Sesion Exitoso.";
        
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
</head>

<body>
    <form action="" method="post">
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