<?php
session_start();
$conn = new mysqli("localhost", "admin", "321", "siteti");
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Registo</title>
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
        <h1 style="margin-bottom: 10px; margin-top: 10px; text-align: center;">Registo</h1>
        <form action="register.php" method="post" style="margin-bottom: 10px; margin-top: 10px;">
                <input type="hidden" name="action" value="1">
                <table class="table" align="center">
                        <tr>
                                <th align="left"> Utilizador:</th>
                                <td><input type="text" id="noe" name="noe" required></td>
                        </tr>
                        <tr>
                                <th align="left"> Senha:</th>
                                <td><input type="password" id="password" name="password" required></td>
                        </tr>
                        <tr>
                                <th align="left"> Email:</th>
                                <td><input type="email" id="email" name="email" required></td>
                        </tr>
                        <tr>
                                <th align="left"> Telemovel:</th>
                                <td><input type="tel" id="tel" name="tel" maxlength="9" required></td>
                        </tr>
                </table>
                <p align="center">
                        <button type="submit" class="button" name="register" value="register">Registar</button>
                </p>
        </form>
</div>

<?php
    if (isset($_POST['register'])){
            $nome = $_POST['noe'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $telemovel =$_POST['tel'];
            $sql = "INSERT INTO clientes (Nome, Password, Email, Telefone) VALUES ('$nome', '$password', '$email', '$telemovel')";

            if (mysqli_query($conn,$sql)) {
                echo "Registration successful";
                header("Location: index.html");
            } else {
                echo "Error: " . $sql->error;
            }

            $conn->close();
    }

?>
</body>
</html>






