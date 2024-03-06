<?php
session_start();
$conn = new mysqli("localhost", "admin", "321", "siteti");

if (isset($_POST['id_pacote'])) {
    $id_pacote = isset($_POST['id_pacote']) ? $_POST['id_pacote'] : '';
    $sql = "SELECT NomeDestino, DataPartida, DataRetorno, PrecoPacote FROM pacotesviagem
            JOIN destinos ON DestinoID=Destino WHERE PacoteID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_pacote);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_array();
        $Nome = $row['NomeDestino'];
        $dp = $row['DataPartida'];
        $dr = $row['DataRetorno'];
        $Preco = $row['PrecoPacote'];
    } else {
        echo "Pacote não encontrado.";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type ="text/css" href="css/detalhes.css">
    <link rel="stylesheet" type="text/css" href="css/sstyle.css">
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
<div class="div_main_container">
    <form class="form" action="lidar.php" method="post">
        <div class="grid-container">
            <div class="cell1">
                <?php
                if ($Nome == 'Roma'){
                    echo '<img src="css/imgs/passagens-aereas-roma-capa2019-01-820x430.png" class="img">';
                }elseif ($Nome == 'Lisboa'){
                    echo '<img src="css/imgs/lisboa.jpg" class="img">';
                }elseif ($Nome == 'Porto'){
                    echo '<img src="css/imgs/clerigos.webp" class="img">';
                }elseif ($Nome == 'Paris'){
                    echo '<img src="css/imgs/paris.jpg" class="img">';
                }elseif ($Nome == 'Munique'){
                    echo '<img src="css/imgs/munique.jpg" class="img">';
                }elseif ($Nome == 'Madrid'){
                    echo '<img src="css/imgs/madrid.webp" class="img">';
                }
                ?>
            </div>

            <div class="cell2">
                <?php
                echo "<h2>Detalhes do Pacote</h2>";
                echo "<p>Destino: " . $Nome . "</p>";
                echo "<p>Data de Partida: " . $dp . "</p>";
                echo "<p>Data de Retorno: " . $dr . "</p>";
                echo "<p>Preço: " . $Preco . "€</p>";
                ?>
            </div>

            <div class="s">
                <input type='hidden' name='id_pacote' value="<?php echo $id_pacote; ?>">
                <button name="comprar" type="submit" class="button">Comprar</button>
            </div>
            <div class="b">
                <button name="back" value="back" type="submit" class="button">Voltar</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
