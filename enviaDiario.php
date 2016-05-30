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
    $insere_nome = $_POST['selecnome'];
    $hrefeicao = $_POST["horarefeicao"];
    $nome_refeicao = $_POST["nomerefeicao"];
    $localref = $_POST["localrefeicao"];
    $a_ingerido = $_POST['selecalimento'];
    $dtdiario = $_POST["datadiario"];
    $dsemana = $_POST["diadasemana"];
    $quant = $_POST ["qtd"];
    $insere_medida = $_POST ['selecmedida'];

//Insere os dados no banco de dados
    $sqli = "INSERT INTO `span`.`refeicao` (`id_individuo`, `hora_refeicao`, `nome_refeicao`, `alimento`, `local`, `data`, `dia_semana`, `quantidade`, `medida`)".
                                   "VALUES ('$insere_nome', '$hrefeicao', '$nome_refeicao', '$a_ingerido', '$localref', '$dtdiario', '$dsemana', '$quant', '$insere_medida')";

//Tratamento de erros da operacao        
    if ($query === \mysql_query($sqli)){
                echo "Não foi possível realizar o cadastro da informação. Por favor contate o administrador do sistema";                                            
            } else {
                echo "Cadastro realizado com sucesso";    
               echo mysql_error();
            }
// Testa o conteúdo das variáveis declaradas
// var_dump($_POST)
            
?>
</body>
</html>