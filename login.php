<?php
$session_lifetime = 1800;
ini_set('session.gc_maxlifetime', $session_lifetime);
session_set_cookie_params($session_lifetime);
session_start();
$connect = mysqli_connect("localhost", "admin", "321", "siteti") or die('unable to connect');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li style="position:absolute; left:0;"><a href="index.html" class="button_logo">Página Inicial</a></li>
            <li></li>
        </ul>
    </nav>
</header>

<div class="login-container">
    <h1 style="margin-bottom: 10px; margin-top: 10px; text-align: center;">Faça o login</h1>
    <form action="login.php" method="post" style="margin-bottom: 10px; margin-top: 10px;">
        <input type="hidden" name="action" value="login">
        <table class="table" align="center">
            <tr>
                <th align="left">User:</th>
                <th><input type="text" id="name" name="name" required></th>
            </tr>
            <tr>
                <th align="left">Password:</th>
                <th><input type="password" id="passwd" name="passwd" required></th>
            </tr>
        </table>
        <p align="center"><button type="submit" class="button" name="login" value="login">Login</button></p>
    </form>
    <p style="margin-bottom: 0px; margin-top: 10px;">Ainda não tem conta. <a href="register.php">Registe-se</a></p>
</div>
<?php
    if (isset($_POST['login'])) {
        $Nome = mysqli_real_escape_string($connect, $_POST['name']);
        $Password = mysqli_real_escape_string($connect, $_POST['passwd']);

        $sql = mysqli_query($connect, "SELECT * FROM clientes WHERE Nome = '$Nome' and Password='$Password'");
        $row = mysqli_fetch_array($sql);

        if (is_array($row)) {
            $_SESSION["Username"] = $row['Nome'];
            $_SESSION["Pass"] = $row['Password'];

        } else {
            echo '<script type= "text/javascript">';
            echo 'alert("Invalid password");';
            echo 'window.location.href = "login.php"';
            echo '</script>';
        }
    }
    if (isset($_SESSION["Username"])){
        header("Location: inicial.php");
    }
?>
</body>
</html>
