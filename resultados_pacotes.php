<?php
include('verificar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type ="text/css" href="css/detalhes.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="inicial.php" class="button_log">Pagina Inicial</a></li>
            <li><a href="pesquisa.php" class="button">Viajar</a></li>
            <li><a href="logout.php" class="button_log">Sair</a></li>
        </ul>
    </nav>
</header>
<div class="div_main_container" >
    <form class="form"style="padding: 0" action="detalhes_pacote.php" method="post">
        <?php
        if (isset($_SESSION['resultados_pacotes'])) {
            foreach ($_SESSION['resultados_pacotes'] as $pacote) {
                $nomeDestino=isset($pacote['NomeDestino']) ? $pacote['NomeDestino'] : 'N/A';
                $pacoteID = isset($pacote['PacoteID']) ? $pacote['PacoteID'] : 'N/A';
                $precoPacote = isset($pacote['PrecoPacote']) ? $pacote['PrecoPacote'] : 'N/A';
                $dataPartida = isset($pacote['DataPartida']) ? $pacote['DataPartida'] : 'N/A';

                echo "<div class='pacote' >";
                echo "<h2>Destino: " . $nomeDestino . " </h2>";
                echo "<p>Preço:" . $precoPacote . "€</p>";
                echo "<p>Data de Ida:" .$dataPartida."</p>";
                echo "<button type='submit' class='button'>Detalhes</button>";
                echo "<input type='hidden' name='id_pacote' value='" . $pacote['PacoteID'] . "'>";
                echo "</div>";
            }
        } else {


        }
        ?>
    </form>
</div>
</form>
</body>
</html>