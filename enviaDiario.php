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
    $insere_nome = $_POST[$reg];
    $hrefeicao = $_POST["horarefeicao"];
    $nome_refeicao = $_POST["nomerefeicao"];
    $localref = $_POST["localrefeicao"];
    $a_ingerido = $_POST["alim_ingerido"];
    $dtdiario = $_POST["datadiario"];
    $dsemana = $_POST["diadasemana"];
    $quant = $_POST ["qtd"];
    $insere_medida = $_POST [$med];

//Insere os dados no banco de dados
    $sqli = "INSERT INTO `span`.`refeicao` (`id_individuo`, `hora_refeicao`, `nome_refeicao`, `alimento`, `local`, `data`, `dia_semana`, `quantidade`, `medida`)".
                                   "VALUES ('$insere_nome', '$hrefeicao', '$nome_refeicao', '$a_ingerido', '$localref', '$dtdiario', '$dsemana', '$quant', '$insere_medida')";

//Tratamento de erros da operacao        
    if ($query === \mysql_query($sqli)){
                echo "Cadastro realizado com sucesso";                                            
            } else {
                echo "Erro - Contate o administrador do sistema";    
               echo mysql_error();
            }
var_dump($_POST)
            
?>
</body>
</html>