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
    $hora_ent = $_POST["horaentrevista"];
    $insere_nome = $_POST["selecnome"];
    $hrefeicao = $_POST["horarefeicao"];
    $nome_refeicao = $_POST["nomerefeicao"];
    $localref = $_POST["localrefeicao"];
    $a_ingerido = $_POST["selecalimento"];
    $dtdiario = $_POST["datadiario"];
    $quant = $_POST["qtd"];
    $insere_medida = $_POST["selecmedida"];
    $insere_dia = $_POST["selecdia"];

//Insere os dados no banco de dados
    $sqli = "INSERT INTO `span`.`refeicao` (`id_individuo`, `data`, `hora_entrevista`, `dia_semana`, `hora_refeicao`, `local`, `nome_refeicao`, `alimento`, `quantidade`, `medida`)".
                                   "VALUES ('$insere_nome', '$dtdiario', '$hora_ent', '$insere_dia', '$hrefeicao', '$localref', '$nome_refeicao', '$a_ingerido', '$quant', '$insere_medida')";

//Tratamento de erros da operacao
    if ($query === \mysql_query($sqli)){
                echo "Cadastro realizado com sucesso";
            } else {
                echo "Não foi possível realizar o cadastro da informação. Por favor contate o administrador do sistema";
               mysql_error();
            }
// Testa o conteúdo das variáveis declaradas
// var_dump($_POST)

?>
</body>
<a href="index.php"><button>Início</button></a><br />
</html>
