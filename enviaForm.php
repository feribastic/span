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
  <center>
<?php
include 'conn.php';

    $entrev = $_POST["entrev"];
    $dataentrev = $_POST["data_entrev"];
    $horaentrev = $_POST["hora_entrev"];
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
    $motivoinsc = $_POST["txtPergunta"];
    $altura = $_POST["txtAltura"];
    $peso = $_POST["txtPeso"];
    $ESsaude = $_POST["radES"];
    $radpsp = $_POST["radPSP"];
    $ins_doenca1 = $_POST["selecdoencas1"];
    $ins_doenca2 = $_POST["selecdoencas2"];
    $ins_doenca3 = $_POST["selecdoencas3"];
    $outrasdoencas = $_POST["txtOutrosD"];
    $medicamentos = $_POST["txtMedicamentos"];
    $suplementos = $_POST["txtSuplementos"];
    $cirurgia = $_POST["txtCirurgia"];
    $tabagista = $_POST["radTabagista"];
    $tempofumo = $_POST["txtTempofumo"]?: 'NULL';
    $bebida = $_POST["radBebida"];
    $bebida_tipo = $_POST["txtBTipo"] ?: 'NULL';
    $bebida_freq = $_POST["txtBFreq"] ?: 'NULL';
    $opiniao = $_POST["txtAS"];


//Insere dados do formulario no banco
    $sql = "INSERT INTO `individuo`(`entrevistador`, `data_entrev`, `hora_entrev`, `nome`, `nasc`, `idade`, `sexo`, `naturalidade`, `nacionalidade`, `endereco`, `cep`, `bairro`, `municipio`, `telefone1`, `telefone2`, `email`, `escolaridade`, `curso`, `profissao`, `trabalha_atualmente`, `aposentado`, `estado_civil`, `arranjo_domiciliar`, `pessoas_m_domicilio`, `num_pessoas_renda`, `tipo_renda`, `renda_mensal`, `religiao`, `motivo_inscricao`, `altura`, `peso`, `estado_saude`, `plano_saude`, `doenca1`, `doenca2`, `doenca3`, `doenca_outros`, `medicamentos`, `fitoterapicos`, `cirurgias`, `tabagista`, `tabagismo_tempo`, `alcool`, `alcool_tipo`, `alcool_freq`, `opiniao`)".
                            "VALUES ('$entrev', '$dataentrev', '$horaentrev', '$nome','$dnasc', '$idade', '$sexo', '$naturalidae', '$nacionalidade', '$endereco', '$CEP', '$bairro', '$municipio', '$tel1', '$tel2', '$email', '$escolaridade', '$curso', '$profissao', '$trabalhando', '$aposentado', '$estadoCivil', '$arranjoDomiciliar', '$numeroDomicilio', '$pessoasRenda', '$tipoRenda', '$renda', '$religiao', '$motivoinsc', '$altura', '$peso', '$ESsaude', '$radpsp', '$ins_doenca1', '$ins_doenca2', '$ins_doenca3', '$outrasdoencas', '$medicamentos', '$suplementos', '$cirurgia', '$tabagista', '$tempofumo', '$bebida', '$bebida_tipo', '$bebida_freq', '$opiniao')";


    echo $sql;
    echo "<br><br>";
    var_dump($_POST);
    echo "<br><br>";
//Tratamento de erros da operacao
    if ($query === \mysql_query($sql)){
                echo "Cadastro realizado com sucesso";
            } else {
                echo "Não foi possível realizar o cadastro da informação. Por favor contate o administrador do sistema";
               echo mysql_error();
            }

    echo "<br><br>";
// Testa o conteúdo das variáveis declaradas
//var_dump($_POST)
?>
<a href="index.php"><button>Início</button></a><br />
  </center>
</body>

</html>
