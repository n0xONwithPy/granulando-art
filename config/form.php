<?php

require_once('./conn.php');

$identificador = $_POST['email'];
$mensagem = $_POST['texto'];
$contato = $_POST['contato'];

$sql = $connection->prepare("INSERT INTO emails VALUES (?,?,?)");

if(isset($_POST['submit'])) {
    try {
        $sql->execute(array($identificar,$mensagem,$contato));
        exit();
    } catch (Exception $e) {
        echo 'Erro'.$e->getMessage(); //remover para o usuario
    }
}else {
    echo 'Por favor verifique os campos.';
}