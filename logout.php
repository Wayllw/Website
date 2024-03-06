<?php
include('verificar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="inicial.php" class="button">Pagina Inicial</a></li>
        </ul>
    </nav>
</header>

<div class="login-container">
    <h1 style="margin-bottom: 10px; margin-top: 10px; text-align: center;">Tem a certeza que quer sair?</h1>
    <form action="sair.php" method="post" style="margin-bottom: 10px; margin-top: 10px;">
        <input type="hidden" name="action" value="logout">
        <table class="table" align="center">
            <tr>
                <th align="left">Muito obrigado pela visita, <?php echo $_SESSION['Username'];?> ,caso tenha certeza que deseja sair, por favor prima o botão abaixo.</th>
            </tr>
        </table>
        <p align="center"><button type="submit" class="button" name="logout" value="logout">Sair</button></p>
    </form>
</div>
</body>
</html>
