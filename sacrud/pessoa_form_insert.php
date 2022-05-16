<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
            <header class="cabecalho">
                <h1>Sistema de Controle de Serviços</h1>
            </header>
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="#Cadastro">Cadastro</a></li>
                        <li><a href="#Relatório">Relatório</a></li>
                        <li><a href="#Ajuda">Ajuda</a></li>
                        <li><a href="#Opções">Opções</a></li>
                    </ul>
                </nav>
            </div>
            <div class="borda-de-fora">
                <div class="borda-de-dentro">
                    <div class="ordem_de_servicos">
                        <h2>Ordem de Serviços</h2>
                    </div>
                    <div class="campos">
                        <p>*Campos Obrigatórios</p>
                    </div>
                        <div class="cadastro">
                        <form enctype="multipart/form-data" method="post" action="pessoa_save_insert.php">
                            <label class="numero">*Número OS</label>
                            <input type="number" name="numeroOs" id="numeroOs">

                            <label class="data">*Data</label>
                            <input type="date" name="data" id="dataproduto">

                            <label class="equipamento">*Equipamento</label>
                            <input type="text" name="equipamento" id="equipamento">

                            <label class="defeito">*Defeito</label>
                            <input type="text" name="defeito" id="defeito">

                            <label class="servico">Serviço</label>
                            <input type="text" name="servico" id="servico">

                            <label class="tecnico">Técnico</label>
                            <input type="text" name="NomeTecnico" id="tecnico">
                            
                            <label class="valor-total">Valor Total</label>
                            <input type="number" name="valorTotal" id="valorTotal">

                            <label class="id-cliente">*IdCliente</label>
                            <input type="number" name="idCliente" id="idCliente">
                            
                            <label class="cliente">Cliente</label>
                            <input type="text" name="NomeCliente" id="cliente">
                        
                        </div>

                        <div class="botoes">
                            <div class="insert">
                             <button id="ordemservicos" type="submit" onclick="ordemservicos()"><img src="img/insert.png" alt="botao_inserir"></button>
                            </div>
                            <div class="search">
                                <button><img src="img/search.png" alt="botao_pesquisar"></button>
                            </div>
                    </form>

                    </div>
                </div>
            </div>
         </div>
    <script src="script.js"></script>
            <?php
                require_once 'lista_combo_cidades.php';
                print lista_combo_cidades();
            ?>
        </select>
</body>
</html>
