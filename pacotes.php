<?php
include('verificar.php');

$conn = new mysqli("localhost", "admin", "321", "siteti");

$destino=$_POST['destino'];
$dataPartida=$_POST['di'];


if (empty($dataPartida)){
    $sql="Select PacoteID, NomeDestino, DataPartida, PrecoPacote from pacotesviagem join destinos on DestinoID=Destino where NomeDestino = '$destino'";
}elseif(!empty($dataPartida)){
    $sql="Select PacoteID, NomeDestino, DataPartida, PrecoPacote from pacotesviagem join destinos on DestinoID=Destino where NomeDestino = '$destino' AND DataPartida = '$dataPartida'";
}
$result=$conn->query($sql);

if($result->num_rows>0) {
    $_SESSION['resultados_pacotes'] = $result->fetch_all(MYSQLI_ASSOC);
    header("Location: resultados_pacotes.php");
    exit();
}else{
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
        <link rel='stylesheet' type ='text/css' href='css/detalhes.css'>
        <link rel='stylesheet' type='text/css' href='css/style.css'>
    </head>
    <body>
    <header>
        <nav>
            <ul>
                <li><a href='inicial.php' class='button_log'>Pagina Inicial</a></li>
                <li><a href='pesquisa.php' class='button'>Viajar</a></li>
                <li><a href='logout.php' class='button_log'>Sair</a></li>
            </ul>
        </nav>
    </header>
    <div class='div_main_container' >
        <div class='pacote'>
         <h1>Nenhum resultado encontrado.</h1>
         <a href='pesquisa.php' class='button'>Voltar atrás</a>
         </div>
    </div>
    </form>
    </body>
    </html>";
}

$conn->close();
?>



