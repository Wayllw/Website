<?php
include('verificar.php');
$conn = new mysqli("localhost", "admin", "321", "siteti");

if (isset($_POST['comprar'])) {
    $id_pacote = $_POST['id_pacote'];
    $cliente_nome = $_SESSION['Username'];
    $sql_id = "SELECT ClienteID FROM clientes WHERE Nome=?";
    $stmt = $conn->prepare($sql_id);
    $stmt->bind_param("s", $cliente_nome);
    $stmt->execute();
    $result_id = $stmt->get_result();

    if ($result_id->num_rows > 0) {
        $cliente_info = $result_id->fetch_assoc();
        $cliente_id = $cliente_info['ClienteID'];

        $data_reserva = date('Y-m-d'); // Obtém a data atual

        $sql_inserir_reserva = "INSERT INTO reservas (ClienteID, DataReserva , PacoteID) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql_inserir_reserva);
        $stmt->bind_param("ssi", $cliente_id, $data_reserva, $id_pacote);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Compra realizada com sucesso!";
            header("Location: sucesso.php");
        } else {
            echo "Erro ao realizar a compra: " . $stmt->error;
        }
    } else {
        echo "Erro ao obter ID do cliente.";
    }
} elseif (isset($_POST['back'])) {
    // Lidar com a ação Voltar conforme necessário
    header("Location: resultados_pacotes.php");
}elseif (isset($_POST['voltar'])) {
    header('Location: reservas.php');
}
?>