<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Pessoas</title>
    <link rel="stylesheet" href="list.css">
</head>
<body>
    <?php
        //abre a conexão com o MySql
        $conn = mysqli_connect('localhost', 'root', '', 'crud');
        $query = "SELECT * FROM cliente ORDER BY CodigoCliente";
        $result = mysqli_query($conn, $query);

        print '<table border=1>';
            print '<thead>';
                print '<tr>';
                    print "<th></th>";
                    print "<th></th>";
                    print "<th> CodigoCliente </th>";
                    print "<th> defeito </th>";
                    print "<th> equipamento </th>";
                    print "<th> NomeCliente </th>";
                print '</tr>';
            print '</thead>';

            print '<tbody>';
                while ($row = mysqli_fetch_assoc($result)) {
                    $numeroOs = $row['numeroOs'];
                    $data = $row['data'];
                    $equipamento = $row['equipamento'];
                    $defeito = $row['defeito'];
                    $servico = $row['servico'];
                    $NomeTecnico = $row['NomeTecnico'];
                    $valorTotal = $row['valorTotal'];
                    $idCliente = $row['idCliente'];
                    $NomeCliente = $row['NomeCliente'];

                    print '<tr>';
                        print "<td align='center'>
                            <a href='pessoa_form_edit.php?id={$CodigoCliente}'>
                                <img src='images/edit.svg' style='width:17px'>
                            </a>
                        </td>";
                        print "<td align='center'>
                            <a href='pessoa_delete.php?id={$CodigoCliente}'>
                                <img src='images/remove.svg' style='width:17px'>
                            </a>
                        </td>";
                        print "<td>{$numeroOs}</td>";
                        print "<td>{$data}</td>";
                        print "<td>{$equipamento}</td>";
                        print "<td>{$servico}</td>";
                        print "<td>{$NomeTecnico}</td>";
                        print "<td>{$valorTotal}</td>";
                        print "<td>{$idCliente}</td>";
                        print "<td>{$NomeCliente}</td>";
                    print '</tr>';
                }
            print '</tbody>';
        print '</table>'
    ?>
    <button onclick="window.location='pessoa_form_insert.php'">
        <img src='images/insert.svg' alt="" style='width:17px'> Inserir
    </button>
</body>
</html>