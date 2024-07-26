<?php
require '../model/UserModel.php';
$userModel = new UserModel();

$user = $userModel->findById("clvtz1mx60001t4ihgr8dooch");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="card">
        <h1>User Info</h1>
        <p>Name: <?php echo $user['correo']; ?></p>
    </div>
</body>

</html>