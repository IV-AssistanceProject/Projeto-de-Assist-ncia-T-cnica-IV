<?php 

require_once 'connect.php';

if($_POST) {    //Cadastro de animais

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $servicos = $_POST['servicos'];
    $produtos = $_POST['produtos'];
    $pagamento = $_POST['pagamento'];
}

    //Cadastro de animais
$sql = "INSERT INTO Orcamento(nome, email, cpf, telefone, servicos, produtos, pagamento)
VALUES ('$nome', '$email', '$cpf', '$telefone', '$servicos', '$produtos', '$pagamento')";  

//

if($connect->query($sql) === TRUE) {
    header("location: ../orcamento.php");
} else {
    echo "Error " . $sql . ' ' . $connect->connect_error;
}

$connect->close();


?>