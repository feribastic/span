<!DOCTYPE html>
<html lang="pt-BR">
    <link href="css/base.css" rel="stylesheet">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Felipe Ribas" />
        <title>Sistema Público de Avaliação Nutricional</title>
    </head>
<body>

<?php
require 'conn.php';
?>
    
<form name ="frm" method="post" action="./enviaForm.php">

<h3>I - Identifica&ccedil;ão</h3>
Nome <input type="text" name="txtNome" maxlength="150" size="70">
Data de nascimento <input type="text" name="txtData" maxlength="8" size="8"><br>
Idade <input type="text" name="txtIdade" maxlength="3" size="3">  Sexo <input type="radio" name="radSexo" value="F">F <input type="radio" name="radSexo" value="M">M <br>
Altura <input type="text" name=txtAltura size="6" maxlength="6"> - Peso <input type="text" name=txtPeso size="6" maxlength="6"><br>
Naturalidade <input type="text" name="txtNaturalidade" maxlength="20" size="20">
Nacionalidade <input type="text" name="txtNacionalidade" maxlength="20" size="20"><br>
Estado Civil<input type="radio" name="radEC" value="Solteiro">Solteiro(a)
<input type="radio" name="radEC" value="Casado/União">Casado(a)/União consensual
<input type="radio" name="radEC" value="Divorciado">Divorciado(a)/Separado(a)
<input type="radio" name="radEC" value="Viúvo">Viúvo(a)<br>
<b>15.</b>Religião <input type="text" name="txtReligiao" maxlength="255" size="50"><br>
<h3>II - Endere&ccedil;o</h3>
Logradouro <input type="text" name="txtEndereco" maxlength="150" size="100"><br>
Cep <input type="text" name="txtCEP" maxlength="8" size="8">  Bairro <input type="text" name="txtBairro" maxlength="50" size="50">
Municipio <input type="text" name="txtMunicipio" maxlength="50" size="50"><br>
<b>4.</b>Telefones <input type="text" name="txtTel1" maxlength="11" size="11"> - <input type="text" name="txtTel2" maxlength="11" size="11">
Email  <input type="text" name="txtEmail" maxlength="150" size="100"><br>
<h3>III - Formação</h3>
<b>7.</b>Escolaridade <input type="radio" name="radEscolaridade" value="FI" onCLick="frm.txtCurso.disabled=true">Fund. Incomp.
<input type="radio" name="radEscolaridade" value="FC" onCLick="frm.txtCurso.disabled=true">Fund. Comp.
<input type="radio" name="radEscolaridade" value="MI" onCLick="frm.txtCurso.disabled=true">Médio Incomp.
<input type="radio" name="radEscolaridade" value="MC" onCLick="frm.txtCurso.disabled=true">Médio Comp.
<input type="radio" name="radEscolaridade" value="SI" onCLick="frm.txtCurso.disabled=true">Superior Incomp.
<input type="radio" name="radEscolaridade" value="SC" onCLick="frm.txtCurso.disabled=false">Superior Comp.
<input type="radio" name="radEscolaridade" value="PG" onCLick="frm.txtCurso.disabled=false">Pós Graduação
<br>
Curso <input disabled type="text" name="txtCurso" maxlength="255" size="25" id="curso"><br>
<h3>IV - Qualificação profissional</h3>
Profiss&atilde;o <input type="text" name="txtProfissao" maxlength="50" size="50">  Trabalha atualmente? <input type="radio" name="radTrabA" value="Sim">Sim
<input type="radio" name="radTrabA" value="Não">N&atilde;o<br>
Aposentado? <input type="radio" name="radAposentado" value="Sim">Sim
<input type="radio" name="radAposentado" value="Não">N&atilde;o<br>
<h3>V - Arranjo Domiciliar</h3>
<input type="radio" name="radAD" value="Só" onCLick="frm.txtADOutros.disabled=true">Mora só
<input type="radio" name="radAD" value="Conjugue" onCLick="frm.txtADOutros.disabled=true">Mora com o cônjugue
<input type="radio" name="radAD" value="Conjugue/Filhos" onCLick="frm.txtADOutros.disabled=true">Mora com o cônjugue e filhos
<input type="radio" name="radAD" value="Parentes" onCLick="frm.txtADOutros.disabled=true">Mora com parentes
<input type="radio" name="radAD" value="Outros" onCLick="frm.txtADOutros.disabled=false"> Outros <input disabled type="text" name="txtADOutros" maxlength="150" size="20"><br>
Número de pessoas que moram no domicílio <input type="text" name="txtNPD" maxlength="2" size="2"><br>
Número de pessoas que contribuem com a renda <input type="text" name="txtNPCR" maxlength="2" size="2"><br>
Renda mensal (em salários mínimos)<br>
<input type="radio" name="radRMT" value="Proprio">Própio
<input type="radio" name="radRMT" value="Familiar">Familiar
<input type="radio" name="radRM" value="2SM"><2
<input type="radio" name="radRM" value="2SM-4SM">2-4
<input type="radio" name="radRM" value="4SM-6SM">4-6
<input type="radio" name="radRM" value="6SM-8SM">6-8
<input type="radio" name="radRM" value="8SM-10SM">8-10
<input type="radio" name="radRM" value=">=10SM">>=10<br>
<h3>VI-Alterações de saúde</h3>
De um modo geral, considera seu próprio estado de saúde como <br>
<input type="radio" name="radES" value="Muito Boa">Muito boa
<input type="radio" name="radES" value="Boa">Boa
<input type="radio" name="radES" value="Regular">Regular
<input type="radio" name="radES" value="Ruim">Ruim
<input type="radio" name="radES" value="Muito Ruim">Muito Ruim<br>
Utiliza plano de saúde privado?
<input type="radio" name="radPSP" value="Sim">Sim 
<input type="radio" name="radPSP" value="Nao">Não<br>
Algum médico ou profissional de saúde já disse que você tem <br>
     <?php
            $sql = "SELECT * FROM doencas";
			$rs = mysql_query($sql) or die(mysql_error());
			while($row = mysql_fetch_array($rs)){                            
			echo "<input type=checkbox name='doenca' value='".$row["id_doenca"]."' class='box2'>".$row["nome_doenca"]."</input>  ";
			}mysql_free_result($rs);
           ?>
-   Outros <input type="text" name="txtOutrosD" maxlength="255" size="20">
<br />

Medicamentos utilizados <input type="text" name="txtMedicamentos" maxlength="255" size="80"><br>
Suplementos ou fitoterápicos utilizados <input type="text" name="txtSuplementos" maxlength="255" size="80"><br>
Já fez alguma cirurgia? <input type="text" name="txtCirurgia" maxlength="255" size="80"><br>
Tabagista?
<input type="radio" name="radTabagista" value="Sim" onclick="frm.txtTabagista.disabled=false">Sim
<input type="radio" name="radTabagista" value="Nao" onclick="frm.txtTabagista.disabled=true">Não 
Desde quando? <input disabled type="text"  name="txtTempofumo" maxlength="50" size="25"><br>
Ingere bebida alcoolica?
<input type="radio" name="radBebida" value="Sim" onclick="frm.txtBTipo.disabled=false,frm.txtBFreq.disabled=false">Sim
<input type="radio" name="radBebida" value="Nao" onclick="frm.txtBTipo.disabled=true,frm.txtBFreq.disabled=true">Não  
<br>
Qual? <input disabled type="text"  name="txtBTipo" maxlength="255" size="30">
Frequência <input disabled type="text"  name="txtBFreq" maxlength="255" size="30"><br>
<h3>VII-Alimentação</h3>
Na sua opinião, o que é uma alimentação saudável?<br>
<input type="text"  name="txtAS" maxlength="255" size="100"><br>
<br />
Por que se inscreveu no Curso de Nutrição e Terceira Idade?<br>
<input type="text" name="txtPergunta" maxlength="255" size="100"><br>
<br />
<center>
    <input type=submit name="Enviar">
    <input type="reset" name="Limpar">
    <button><a href="javascript:window.history.go(-1)">Voltar</a></button>
</center>
</body>
<br /> 
<footer>
    <center>Copyright 2016 - Todos os direitos reservados - Instituto de Nutrição - Departamento de Nutrção Social</center>
</footer>
</html>