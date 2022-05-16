<?php
$dados = $_POST;

if ($dados['id']) {
    $conn = mysqli_connect('localhost', 'root', '', 'crud');

    $query = "UPDATE pessoa SET dataproduto = '{$dados['dataproduto']}',
                                endereco = '{$dados['endereco']}',
                                bairro = '{$dados['bairro']}',
                                telefone = '{$dados['telefone']}',
                                email = '{$dados['email']}',
                                id_cidade = '{$dados['id_cidade']}'
                        WHERE id = '{$dados['id']}'";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        print 'Registro atualizado com sucesso';
    }else {
        print mysqli_error($conn);
    }

    mysqli_close($conn);
}