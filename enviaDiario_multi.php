<!DOCTYPE html>
<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('Location: /');
    exit();
}
?>

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
//var_dump($_POST);

//Valores para todas as refeições
    $nome_entrevistador = $_POST["entrevistador"];
    $data_ent = $_POST["dataentrevista"];
    $hora_ent = $_POST["horaentrevista"];
    $insere_nome = $_POST["selecnome"];
    $dtdiario = $_POST["datadiario"];
    $insere_dia = $_POST["selecdia"];
    
    $sqli = "INSERT INTO `refeicao`".
        "(`id_individuo`, `entrevistador`, `data_entrevista`, `hora_entrevista`, `data_diario`, `dia_semana`, `hora_refeicao`, `local`, `nome_refeicao`, `alimento`, `quantidade`, `medida`) VALUES ";
    
    //adiciona valores do array refeição
    foreach ($_POST['refeicao'] as $refeicao) {
        $hrefeicao = $refeicao["horarefeicao"];
        $localref = $refeicao["localrefeicao"];
        $nome_refeicao = $refeicao["nomerefeicao"];
        $a_ingerido = $refeicao["selecalimento"];
        $quant = $refeicao["qtd"];
        $insere_medida = $_POST["selecmedida"];
        
        $sqli .= "('$insere_nome', '$nome_entrevistador', '$data_ent', '$hora_ent', '$dtdiario', '$insere_dia', '$hrefeicao', '$localref', '$nome_refeicao', '$a_ingerido', '$quant', '$insere_medida'),";
        
    }
    
    $sqli = rtrim($sqli, ',') . ";"; //Troca última vírgula por ponto e virgula
    $resultado = mysql_query($sqli);
    if (!$resultado){
        echo "Não foi possível realizar o cadastro de uma informação. Por favor contate o administrador do sistema<br><br>" . mysql_error();
    }else{
        echo "Informação adicionada com sucesso.";
    }

?>
</body>
<a href="index.php"><button>Início</button></a><br />
</html>
