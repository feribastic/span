<!DOCTYPE html>
<html>
<html lang="pt-BR">
    <link href="css/base.css" rel="stylesheet">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Felipe Ribas Coutinho" />
        <title>Sistema Público de Avaliação Nutricional</title>
    </head>
<body>
<?php
require 'conn.php';

//Variaveis para os posts do formulario    
    $nome = $_POST[$envia_id];
    $hrefeicao = $_POST["horarefeicao"];
    $nomerefeicao = $_POST["nomerefeicao"];
    $localref = $_POST["localrefeicao"];
    $a_ingerido = $_POST["alim_ingerido"];
    $dtdiario = $_POST["datadiario"];
    $dsemana = $_POST["diadasemana"];
    $quant = $_POST ["qtd"];
    $medidaref = $_POST [$envia_medida];

//Insere os dados no banco de dados
    $sql = "INSERT INTO `span`.`refeicao` (`id_individuo`, `id_refeicao`, `hora_refeicao`, `nome_refeicao`, `alimento`, `local`, `data`, `dia_semana`, `data_cadastro`, `quantidade`, `medida`)
                                   VALUES (' $nome ', NULL, ' $hrefeicao ', ' $nomerefeicao ', ' $a_ingerido ', ' $localref ', ' $dtdiario ', ' $dsemana ', CURRENT_TIMESTAMP, ' $quant ', ' $medidaref ')";

//Tratamento de erros da operacao        
    if ($query === \mysql_query($sql)){
                echo "Cadastro realizado com sucesso";                                            
            } else {
                echo "Erro - Contate o administrador do sistema";    
               mysql_error();
            }
?>
</body>
</html>