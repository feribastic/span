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
include 'conn.php';

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
    $outrasdoencas = $_POST["txtOutrosD"];
    $medicamentos = $_POST["txtMedicamentos"];
    $suplementos = $_POST["txtSuplementos"];
    $cirurgia = $_POST["txtCirurgia"];
    $tabagista = $_POST["radTabagista"];
    $tempofumo = $_POST["txtTempofumo"];
    $bebida = $_POST["radBebida"];
    $bebida_tipo = $_POST["txtBTipo"];
    $bebida_freq = $_POST["txtBFreq"];
    $opiniao = $_POST["txtAS"];
    
//Insere dados do formulario no banco
    $sql = "INSERT INTO `individuo`(`id`, `nome`, `nasc`, `idade`, `sexo`, `naturalidade`, `nacionalidade`, `endereco`, `cep`, `bairro`, `municipio`, `telefone1`, `telefone2`, `email`, `escolaridade`, `curso`, `profissao`, `trabalha_atualmente`, `aposentado`, `estado_civil`, `arranjo_domiciliar`, `pessoas_m_domicilio`, `num_pessoas_renda`, `tipo_renda`, `renda_mensal`, `religiao`, `motivo_inscricao`, `altura`, `peso`, `estado_saude`, `plano_saude`, `doenca1`, `doenca2`, `doenca3`, `doenca4`, `doenca5`, `doenca6`, `doenca7`, `doenca8`, `doenca9`, `doenca10`, `doenca11`, `doenca12`, `doenca13`, `doenca14`, `doenca_outros`, `medicamentos`, `fitoterapicos`, `cirurgias`, `tabagista`, `tabagismo_tempo`, `alcool`, `alcool_tipo`, `alcool_freq`, `opiniao`, `data`)".
                            "VALUES ('$nome','$dnasc', '$idade', '$sexo', '$naturalidae', '$nacionalidade', '$endereco', '$CEP', '$bairro', '$municipio', '$tel1', '$tel2', '$email', '$escolaridade', '$curso', '$profissao', '$trabalhando', '$aposentado', '$estadoCivil', '$arranjoDomiciliar', '$numeroDomicilio', '$pessoasRenda', '$tipoRenda', '$renda', '$religiao', '$motivoinsc', '$altura', '$peso', '$ESsaude', $radpsp', '$outrasdoencas', '$medicamentos', '$suplementos', '$cirurgia', '$tabagista', '$tempofumo', '$bebida', '$bebida_tipo', '$bebida_freq', '$opiniao')";
 
//Tratamento de erros da operacao        
    if ($query === \mysql_query($sql)){
                echo "Cadastro realizado com sucesso";                                            
            } else {
                echo "Não foi possível realizar o cadastro da informação. Por favor contate o administrador do sistema";    
               echo mysql_error();
            }
// Testa o conteúdo das variáveis declaradas
//var_dump($_POST)

?>
    
</body>
</html>