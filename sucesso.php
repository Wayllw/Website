<?php
include('verificar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Compra Bem Sucedida</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="login-container">
    <h1 style="margin-bottom: 10px; margin-top: 10px; text-align: center;">Compra efetuada com sucesso!</h1>
    <form action="Inicial.php" method="post" style="margin-bottom: 10px; margin-top: 10px;">
        <input type="hidden" name="action" value="logout">
        <table class="table" align="center">
            <tr>
                <th align="left">Muito obrigado pela compra, <?php echo $_SESSION['Username'];?> !</th>
            </tr>
        </table>
        <p align="center"><button type="submit" class="button" name="voltar" value="voltar">Volta à página inicial</button></p>
    </form>
</div>
</body>
</html>
