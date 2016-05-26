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
# Informa qual o conjunto de caracteres será usado.
header('Content-Type: text/html; charset=utf-8');
# Conecta ao banco de dados
$conexao = mysql_connect('localhost','root','root');
$banco = mysql_select_db('span');
# Charset
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
?>
<form name ="frm" method="post" action="./enviaDados.php">

<h3>I-Identifica&ccedil;ão</h3>
Nome:<input type="text" name="txtNome" maxlength="150" size="70">
Data de nascimento:<input type="text" name="txtData" maxlength="8" size="8"><br>
<b>1.</b>Idade:<input type="text" name="txtIdade" maxlength="3" size="3"><br>
<b>2.</b>Sexo:<input type="radio" name="radSexo" value="F">F                                        
<input type="radio" name="radSexo" value="M">M <br>
Informações:<br>
Altura:<input type="text" name=txtAltura size="6" maxlength="6">
Peso:<input type="text" name=txtPeso size="6" maxlength="6">
<b>3.</b>Endere&ccedil;o:<input type="text" name="txtEndereco" maxlength="150" size="100">  
Cep:<input type="text" name="txtCEP" maxlength="8" size="8">  <br>
Bairro:<input type="text" name="txtBairro" maxlength="50" size="50">
Municipio:<input type="text" name="txtMunicipio" maxlength="50" size="50"><br>
<b>4.</b>Telefones:<input type="text" name="txtTel1" maxlength="11" size="11">
<input type="text" name="txtTel2" maxlength="11" size="11">
Email: <input type="text" name="txtEmail" maxlength="150" size="100"><br>
<b>5.</b>Naturalidade(Cidade/Estado):<input type="text" name="txtNaturalidade" maxlength="20" size="20">
<b>6.</b>Nacionalidade:<input type="text" name="txtNacionalidade" maxlength="20" size="20"><br>
<b>7.</b>Escolaridade:<input type="radio" name="radEscolaridade" value="FI" onCLick="frm.txtCurso.disabled=true">FI
<input type="radio" name="radEscolaridade" value="FC" onCLick="frm.txtCurso.disabled=true">FC
<input type="radio" name="radEscolaridade" value="MI" onCLick="frm.txtCurso.disabled=true">MI
<input type="radio" name="radEscolaridade" value="MC" onCLick="frm.txtCurso.disabled=true">MC
<input type="radio" name="radEscolaridade" value="SI" onCLick="frm.txtCurso.disabled=true">SI
<input type="radio" name="radEscolaridade" value="SC" onCLick="frm.txtCurso.disabled=false">SC
<input type="radio" name="radEscolaridade" value="PG" onCLick="frm.txtCurso.disabled=false">PG
Curso:<input disabled type="text" name="txtCurso" maxlength="255" size="25" id="curso"><br>
<b>8.</b>Profiss&atilde;o:<input type="text" name="txtProfissao" maxlength="50" size="20"><br>
<b>9.</b>Trabalha atualmente? <input type="radio" name="radTrabA" value="Sim">Sim
<input type="radio" name="radTrabA" value="Não">N&atilde;o
Aposentado? <input type="radio" name="radAposentado" value="Sim">Sim
<input type="radio" name="radAposentado" value="Não">N&atilde;o<br>
<b>10.</b>Estado Civil:<input type="radio" name="radEC" value="Solteiro">Solteiro(a)
<input type="radio" name="radEC" value="Casado/União">Casado(a)/União consensual
<input type="radio" name="radEC" value="Divorciado">Divorciado(a)/Separado(a)
<input type="radio" name="radEC" value="Viúvo">Viúvo(a)<br>
<b>11.</b>Arranjo Domiciliar:<input type="radio" name="radAD" value="Só" onCLick="frm.txtADOutros.disabled=true">Mora só
<input type="radio" name="radAD" value="Conjugue" onCLick="frm.txtADOutros.disabled=true">Mora com o cônjugue
<input type="radio" name="radAD" value="Conjugue/Filhos" onCLick="frm.txtADOutros.disabled=true">Mora com o cônjugue e filhos
<input type="radio" name="radAD" value="Parentes" onCLick="frm.txtADOutros.disabled=true">Mora com parentes
<input type="radio" name="radAD" value="Outros" onCLick="frm.txtADOutros.disabled=false">Outros:<input disabled type="text" name="txtADOutros" maxlength="150" size="50">

<b>12.</b>Número de pessoas que moram no domicílio:<input type="text" name="txtNPD" maxlength="2" size="2"><br>
<b>13</b>Número de pessoas que contribuem com a renda:<input type="text" name="txtNPCR" maxlength="2" size="2"><br>
<b>14.</b>Renda mensal <input type="radio" name="radRMT" value="Proprio">Própio
<input type="radio" name="radRMT" value="Familiar">Familiar
<input type="radio" name="radRM" value="2SM"><2SM
<input type="radio" name="radRM" value="2SM-4SM">2SM-4SM
<input type="radio" name="radRM" value="4SM-6SM">4SM-6SM
<input type="radio" name="radRM" value="6SM-8SM">6SM-8SM
<input type="radio" name="radRM" value="8SM-10SM">8SM-10SM
<input type="radio" name="radRM" value=">=10SM">>=10SM <br>
<b>15.</b>Religião<input type="text" name="txtReligiao" maxlength="255" size="50"><br>
<b>16.</b>Por que se inscreveu no Curso de Nutrição e Terceira Idade? <input type="text" name="txtPergunta" maxlength="255" size="100"><br><br>
<h3>II-Alterações de saúde</h3>
<b>1.</b>De um modo geral, considera seu próprio estado de saúde como:<br>
<input type="radio" name="radES" value="Muito Boa">Muito boa
<input type="radio" name="radES" value="Boa">Boa
<input type="radio" name="radES" value="Regular">Regular
<input type="radio" name="radES" value="Ruim">Ruim
<input type="radio" name="radES" value="Muito Ruim">Muito Ruim<br>
<b>2.</b>Utiliza plano de saúde privado?
<input type="radio" name="radPSP" value="Sim">Sim 
<input type="radio" name="radPSP" value="Nao">Não<br>
<b>3.</b>Algum médico ou profissional de saúde já disse que você tem:<br>

        <?php
            $sql = "SELECT * FROM doencas";
			$rs = mysql_query($sql) or die(mysql_error());
			while($row = mysql_fetch_array($rs)){                            
			echo "<input type=checkbox name='doenca' value='".$row["id_doenca"]."' class='box2'>".$row["nome"]."</input> ";
			}mysql_free_result($rs);
           ?>
Outros:<input type="text" name="txtOutrosD" maxlength="255" size="100">

<br>
<b>4.</b>Medicamentos utilizados:<input type="text" name="txtMedicamentos" maxlength="255" size="100"><br>
<b>5.</b>Suplementos ou ditoterápicos utilizados:<input type="text" name="txtSuplementos" maxlength="255" size="100"><br>
<b>6.</b>Já fez alguma cirurgia?<input type="text" name="txtMedicamentos" maxlength="255" size="100"><br>
<b>7.</b>Tabagista?
<input type="radio" name="radTabagista" value="Sim" onclick="frm.txtTabagista.disabled=false">Sim
<input type="radio" name="radTabagista" value="Nao" onclick="frm.txtTabagista.disabled=true">Não 
Desde quando?<input disabled type="text"  name="txtTabagista" maxlength="50" size="25"><br>
<b>8.</b>Ingere bebida alcoolica?
<input type="radio" name="radBebida" value="Sim" onclick="frm.txtBTipo.disabled=false,frm.txtBFreq.disabled=false">Sim
<input type="radio" name="radBebida" value="Nao" onclick="frm.txtBTipo.disabled=true,frm.txtBFreq.disabled=true">Não  
Qual?<input disabled type="text"  name="txtBTipo" maxlength="255" size="50">
Frequência<input disabled type="text"  name="txtBFreq" maxlength="255" size="50"><br>
<h3>III-Alimentação</h3>
<b>1.</b>Na sua opinião, o que é uma alimentação saudável?
<input type="text"  name="txtAS" maxlength="255" size="100"><br>
<input type=submit name="enviar">
</body>
</html>
