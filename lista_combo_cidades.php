<?php
function lista_combo_cidades($numeroOS = null) {
    $output = '';
    
    //abre a conexão com o MySql
    $conn = mysqli_connect('localhost', 'root', '', 'crud');

    //define a consulta que será realizada
    $query = 'SELECT numeroOs, nome FROM equipamento';
    
    //envia a consulta ao banco de dados
    $result = mysqli_query($conn, $query);

    if ($result) {
        //percorre resultados da pesquisa
        while ($row = mysqli_fetch_assoc($result)) {
            $check = ($row['numeroOs'] == $numeroOS) ? 'selected=1' : '';
            $output .= "<option $check value='{$row['numeroOs']}'> {$row['equipamento']} 
            </option> \n";
        }
    }

    //fecha a conexão
    mysqli_close($conn);
    
    return $output;
}