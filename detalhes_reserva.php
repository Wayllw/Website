<?php
session_start();
$conn = new mysqli("localhost", "admin", "321", "siteti");

if (isset($_POST['reserva_id'])) {
    $reserva_id = isset($_POST['reserva_id']) ? $_POST['reserva_id'] : '';
    $sql = "SELECT ReservaID, DataReserva, NomeDestino, PrecoPacote, DataPartida, DataRetorno FROM reservas r join pacotesviagem p on 
            p.PacoteID=r.PacoteID join destinos d on d.DestinoID = p.Destino WHERE ReservaID=?;";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $reserva_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_array();
        $Nome = $row['NomeDestino'];
        $dp = $row['DataPartida'];
        $dr = $row['DataRetorno'];
        $Preco = $row['PrecoPacote'];
        $drs = $row ['DataReserva'];
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
<div class="div_main_container">
    <form class="form" action="lidar.php" method="post">
        <div class="grid-container">

            <div class="cell2">
                <?php
                echo "<h3>Detalhes da Reserva</h3>";
                echo "<h3>Destino: " . $Nome . "</h3>";
                echo "<h3>Data de Partida: " . $dp . "</h3>";
                echo "<h3>Data de Retorno: " . $dr . "</h3>";
                echo "<h3>Preço: " . $Preco . "€</h3>";
                echo "<h3>Data da Reserva: " . $drs . "</h3>";

                ?>
            </div>
            <div class="b">
                <input type='hidden' name='id_reserva' value="<?php echo $reserva_id; ?>">
                <button name="voltar" value="voltar" type="submit" class="button">Voltar</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
