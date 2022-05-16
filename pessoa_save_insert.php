<?php
$dados = $_POST;
var_dump($_POST);

//abre a conexão com o MySql
$conn = mysqli_connect('localhost', 'root', '','crud');

//Inseri os dados no banco de dados 
$sql = "INSERT INTO cliente (defeito, equipamento, NomeCliente)
        VALUES ('{$dados['defeito']}',
                '{$dados['equipamento']}',
                '{$dados['NomeCliente']}');
            

            
            ";

$sql2 = "INSERT INTO ordemdeservico (NomeTecnico, valorTotal, data)
VALUES ('{$dados['NomeTecnico']}',
        '{$dados['valorTotal']}',
        '{$dados['data']}');
        ";

$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);

if ($result && $result2) {
    print 'Registro inserido com sucesso';
}else {
    print mysqli_error($conn);
}

mysqli_close($conn);

?>

<button onclick="window.location='pessoa_form_insert.php' ">Voltar</button>