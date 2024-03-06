<?php
include('verificar.php');
$conn = new mysqli("localhost", "admin", "321", "siteti");

$cliente_nome=$_SESSION['Username'];

$sql_id = "SELECT ClienteID FROM clientes WHERE Nome=?";
$stmt = $conn->prepare($sql_id);
$stmt->bind_param("s", $cliente_nome);
$stmt->execute();
$result_id = $stmt->get_result();
if ($result_id->num_rows > 0) {
    $cliente_info = $result_id->fetch_assoc();
    $cliente_id = $cliente_info['ClienteID'];

    $sql_res = "SELECT ReservaID,DataReserva, NomeDestino FROM reservas r join pacotesviagem p on p.PacoteID=r.PacoteID 
                join destinos d on d.DestinoID = p.Destino WHERE ClienteID=?;";
    $stmt = $conn->prepare($sql_res);
    $stmt->bind_param("i", $cliente_id);
    $stmt->execute();
    $result_res = $stmt->get_result();

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
    <form class="form" style="padding: 0" method="post" action="detalhes_reserva.php">
        <?php
        if ($result_res->num_rows > 0) {
            while ($res_info = $result_res->fetch_assoc()) {
                $dataRes = $res_info['DataReserva'];
                $nomeDestino = $res_info['NomeDestino'];
                $reserva_id=$res_info['ReservaID'];

                echo "<div class='pacote'>";
                echo "<h2>Destino: " . $nomeDestino . "</h2>";
                echo "<p>Data da Reserva: " . $dataRes . "</p>";
                echo "<button type='submit' class='button'>Detalhes</button>";
                echo "<input type='hidden' name='reserva_id' value='". $reserva_id . "'>";
                echo "</div>";
            }
        } else {
            echo "Nenhuma reserva encontrada.";
        }
        ?>
    </form>
</div>
</body>
</html>
