<!DOCTYPE html>
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
    $local_server="localhost";
    $usuario_server = "span";
    $senha_server = "kkKMagfET8pp6yjR";
    $banco_dados = "span";
    if ($conecta === @mysql_connect($local_server, $usuario_server, $senha_server)){
    if ($db === @mysql_select_db($banco_dados, $conecta)){
    $nome = $_POST["txtNome"];
    $dnasc = $_POST["txtData"];
    $idade = $_POST["txtIdade"];
    $sexo = $_POST["radSexo"];
    $endereco = $_POST["txtEndereco"];
    $CEP = $_POST["txtCEP"];
    $bairro = $_POST["txtBairro"];
    $municipio = $_POST["txtMunicipio"];
    $tel1 = $_POST["txtTel1"];
    $tel2 = $_POST["txtTel2"];
    $email = $_POST["txtEmail"];
    $naturalidae = $_POST["txtNaturalidade"];
    $nacionalidade = $_POST["txtNacionalidade"];
    $escolaridade = $_POST["radEscolaridade"];
    $curso = $_POST["txtCurso"];
    $profissao = $_POST["txtProfissao"];
    $trabalhando = $_POST["radTrabA"];
    $aposentado = $_POST["radAposentado"];
    $estadoCivil = $_POST["radEC"];
    $arranjoDomiciliar = $_POST["radAD"];
    $numeroDomicilio = $_POST["txtNPD"];
    $pessoasRenda = $_POST["txtNPCR"];
    $tipoRenda = $_POST["radRMT"];
    $renda = $_POST["radRM"];
    $religiao = $_POST["txtReligiao"];
    $pergunta = $_POST["txtPergunta"];
    $altura = $_POST["txtAltura"];
    $peso = $_POST["txtPeso"];
    $sql = "INSERT INTO `individuo`(`id`, `nome`, `nasc`, `idade`, `sexo`, `naturalidade`, `nacionalidade`, `endereco`, `cep`, `bairro`, `municipio`, `telefone1`, `telefone2`, `email`, `escolaridade`, `curso`, `profissao`, `trabalha_atualmente`, `aposentado`, `estado_civil`, `arranjo_domiciliar`, `pessoas_m_domicilio`, `num_pessoas_renda`, `tipo_renda`, `renda_mensal`, `religiao`, `motivo_inscricao`, `altura`, `peso_inicio`, `peso_fim`) VALUES
     ('".$nome."','".$dnasc."','".$idade."','".$sexo."','".$naturalidade."','".$nacionalidade."','".$endereco."','".$CEP."','".$bairro."','".$municipio."','".$tel1."','".$tel2."','".$email."','".$escolaridade."','".$curso."','".$profissao."','".$trabalhando."','".$aposentado."','".$estadoCivil."','".$arranjoDomiciliar."','".$numeroDomicilio."','".$pessoasRenda."','".$tipoRenda."','".$renda."','".$religiao."','".$pergunta."','".$altura."','".$peso."')";
            if ($query == \mysql_query($sql)){
                echo "Sucesso";                                            
            } else {
                echo "Erro";    
               mysql_error();
            }
    }else { //erro na seleção do banco de dados
    echo "Erro seleção";
    }
    }else { //erro na conexão com a servidor
    echo "erro conexão";    
    }
?>
</body>
</html>
