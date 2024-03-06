<?php
include('verificar.php');
$conn = new mysqli("localhost", "admin", "321", "siteti");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type ="text/css" href="css/pesquisa.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="inicial.php" class="button_log">Pagina Inicial</a></li>
                <li><a href="reservas.php" class="button">Reservas</a></li>
                <li><a href="logout.php" class="button_log">Sair</a></li>
            </ul>
        </nav>
    </header>
    <div class="div_main_container">
        <form class="form" action="pacotes.php" method="post">
            <div class="grid-container">
                <div class="cell1">
                    <label for="partida">Destino:</label>
                    <select name="destino" id="destino" class="dropdown">
                        <option value="Porto" name="Porto">Porto</option>
                        <option value="Munique" name="Munique">Munique</option>
                        <option value="Lisboa" name="Lisboa">Lisboa</option>
                        <option value="Roma" name="Roma">Roma</option>
                        <option value="Bruxelas" name="Bruxelas">Bruxelas</option>
                        <option value="Madrid" name="Madrid">Madrid</option>
                    </select>
                </div>

                <div class="cell2">
                    <label for="di">Data de partida:</label>
                    <input type="date" name="di" id="di" class="data">
                </div>
                <div class="cell3">
                    <p>Caso queira ver todas as viagens para qualquer destino</p>
                    <p>não selecione data.</p>
                </div>
                <div class="s">
                    <button name="pequisar" value="pesquisar" type="submit" class="button">Pesquisar</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>