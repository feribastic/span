<!DOCTYPE html>
<html lang="pt-BR">
    <link href="css/base.css" rel="stylesheet">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Instituto de Nutrição UERJ" />
        <title>Sistema Público de Avaliação Nutricional</title>
        <h1>Sistema Público de Avaliação Nutricional</h1>
        <h2>Departamento de Nutrição Social - Instituto de Nutrição UERJ</h2>
        <hr width=100%><br />
    </head>
<body>
<?php
  require 'conn.php';
?>
<form name ="frm" method="post" action="./enviaForm.php">
Entrevistador: <input type="text" name="entrev" maxlength="50" size="20">&nbsp;
Hora da entrevista: <input type="time" name="hora_entrev">&nbsp;
Data da entrevista: <input type="date" name="data_entrev">
<br>
<hr>
<br>
<h2>Ficha Pessoal</h2>
<hr>
<h3>I - Identificação</h3>
<p>
Nome <input type="text" name="txtNome" maxlength="150" size="70">
Data de nascimento <input type="date" name="txtData" maxlength="8" size="8"><br>
Idade <input type="text" name="txtIdade" maxlength="3" size="3">  Sexo <input type="radio" name="radSexo" value="F">F <input type="radio" name="radSexo" value="M">M <br>
Naturalidade <input type="text" name="txtNaturalidade" maxlength="20" size="20">
Nacionalidade <input type="text" name="txtNacionalidade" maxlength="20" size="20"><br>
Estado Civil<input type="radio" name="radEC" value="Solteiro">Solteiro(a)
<input type="radio" name="radEC" value="Casado/União">Casado(a)/União consensual
<input type="radio" name="radEC" value="Divorciado">Divorciado(a)/Separado(a)
<input type="radio" name="radEC" value="Viúvo">Viúvo(a)<br>
Religião <input type="text" name="txtReligiao" maxlength="255" size="50"><br>
Por que se inscreveu no Curso de Nutrição e Terceira Idade?<br>
<input type="text" name="txtPergunta" maxlength="255" size="100"><br>
</P>
<h3>II - Endere&ccedil;o</h3>
<P>
Logradouro <input type="text" name="txtEndereco" maxlength="150" size="100"><br>
Cep <input type="text" name="txtCEP" maxlength="8" size="8">  Bairro <input type="text" name="txtBairro" maxlength="50" size="50">
Municipio <input type="text" name="txtMunicipio" maxlength="50" size="50"><br>
Telefones <input type="text" name="txtTel1" maxlength="11" size="11"> - <input type="text" name="txtTel2" maxlength="11" size="11">
Email  <input type="text" name="txtEmail" maxlength="150" size="100"><br></P>
<h3>III - Formação</h3>
<P>
Escolaridade <input type="radio" name="radEscolaridade" value="FI" onCLick="frm.txtCurso.disabled=true">Fund. Incomp.
<input type="radio" name="radEscolaridade" value="FC" onCLick="frm.txtCurso.disabled=true">Fund. Comp.
<input type="radio" name="radEscolaridade" value="MI" onCLick="frm.txtCurso.disabled=true">Médio Incomp.
<input type="radio" name="radEscolaridade" value="MC" onCLick="frm.txtCurso.disabled=true">Médio Comp.
<input type="radio" name="radEscolaridade" value="SI" onCLick="frm.txtCurso.disabled=true">Superior Incomp.
<input type="radio" name="radEscolaridade" value="SC" onCLick="frm.txtCurso.disabled=false">Superior Comp.
<input type="radio" name="radEscolaridade" value="PG" onCLick="frm.txtCurso.disabled=false">Pós Graduação<br>
Curso <input disabled type="text" name="txtCurso" maxlength="255" size="25" id="curso"><br></P>
<h3>IV - Qualificação profissional</h3>
<P>
Profiss&atilde;o <input type="text" name="txtProfissao" maxlength="50" size="50">  Trabalha atualmente? <input type="radio" name="radTrabA" value="Sim">Sim
<input type="radio" name="radTrabA" value="Não">N&atilde;o<br>
Aposentado? <input type="radio" name="radAposentado" value="Sim">Sim
<input type="radio" name="radAposentado" value="Não">N&atilde;o<br></P>
<h3>V - Arranjo Domiciliar</h3>
<P>
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
<input type="radio" name="radRM" value="2SM">Menor que 2
<input type="radio" name="radRM" value="2SM-4SM">2-4
<input type="radio" name="radRM" value="4SM-6SM">4-6
<input type="radio" name="radRM" value="6SM-8SM">6-8
<input type="radio" name="radRM" value="8SM-10SM">8-10
<input type="radio" name="radRM" value=">=10SM">Maior que 10<br></P>
<h3>VI-Alterações de saúde</h3>
<P>
De um modo geral, considera seu próprio estado de saúde como <br>
<input type="radio" name="radES" value="Muito Boa">Muito boa
<input type="radio" name="radES" value="Boa">Boa
<input type="radio" name="radES" value="Regular">Regular
<input type="radio" name="radES" value="Ruim">Ruim
<input type="radio" name="radES" value="Muito Ruim">Muito Ruim<br>
Utiliza plano de saúde privado?
<input type="radio" name="radPSP" value="Sim">Sim
<input type="radio" name="radPSP" value="Nao">Não<br>
Algum médico ou profissional de saúde já disse que você tem:<br>
Doença 1: <select name="selecdoencas1">
    <label for="">Selecione</label>
    <option>Nome</option>
                <?php
                        $sqla = "SELECT * from doencas";
                        $executara = mysql_query($sqla) or die (mysql_error());
                        while ($selecdoencas1 = mysql_fetch_array ($executara))
                        {
                    ?>
                        }
                        <option value="<?php echo $selecdoencas1['id_doenca'] ?>"><?php echo $selecdoencas1['nome_doenca'] ?></option>
                <?php
                            }

                ?>
</select>
<br />
Doença 2: <select name="selecdoencas2">
    <label for="">Selecione</label>
    <option>Nome</option>
                <?php
                        $sqlb = "SELECT * from doencas";
                        $executarb = mysql_query($sqlb) or die (mysql_error());
                        while ($selecdoencas2 = mysql_fetch_array ($executarb))
                        {
                    ?>
                        }
                        <option value="<?php echo $selecdoencas2['id_doenca'] ?>"><?php echo $selecdoencas2['nome_doenca'] ?></option>
                <?php
                            }

                ?>
</select>
<br />
Doença 3: <select name="selecdoencas3">
    <label for="">Selecione</label>
    <option>Nome</option>
                <?php
                        $sqlc = "SELECT * from doencas";
                        $executarc = mysql_query($sqlc) or die (mysql_error());
                        while ($selecdoencas3 = mysql_fetch_array ($executarc))
                        {
                    ?>
                        }
                        <option value="<?php echo $selecdoencas3['id_doenca'] ?>"><?php echo $selecdoencas3['nome_doenca'] ?></option>
                <?php
                            }

                ?>
</select>
<br />
Outras doenças:<input type="text" name="txtOutrosD" maxlength="255" size="20">
<br />
Medicamentos utilizados <input type="text" name="txtMedicamentos" maxlength="255" size="80"><br>
Suplementos ou fitoterápicos utilizados <input type="text" name="txtSuplementos" maxlength="255" size="65"><br>
Já fez alguma cirurgia? <input type="text" name="txtCirurgia" maxlength="255" size="80"><br>
Tabagista?
<input type="radio" name="radTabagista" value="Sim" onclick="frm.txtTempofumo.disabled=false">Sim
<input type="radio" name="radTabagista" value="Nao" onclick="frm.txtTempofumo.disabled=true">Não
Desde quando? <input disabled type="text"  name="txtTempofumo" maxlength="50" size="50"><br>
Ingere bebida alcoolica?
<input type="radio" name="radBebida" value="Sim" onclick="frm.txtBTipo.disabled=false,frm.txtBFreq.disabled=false">Sim
<input type="radio" name="radBebida" value="Nao" onclick="frm.txtBTipo.disabled=true,frm.txtBFreq.disabled=true">Não
<br>
Qual? <input disabled type="text"  name="txtBTipo" maxlength="255" size="30">
Com que Frequência? <input disabled type="text"  name="txtBFreq" maxlength="255" size="30"><br></P>
</p>
<h3>VII-Alimentação</h3>
<p>
Na sua opinião, o que é uma alimentação saudável?<br>
<input type="text"  name="txtAS" maxlength="255" size="100"><br />
Considera a sua alimentação saudável?<br>
<input type="radio" name="radalimsaud" value="Sim">Sim
<input type="radio" name="radalimsaud" value="Nao">Não
<input type="radio" name="radalimsaud" value="Sim e Nao">Sim e Não<br>
Se não, o que dificulta ter uma alimentação saudável?<br>
<input type="text"  name="txtJustificaAS" maxlength="255" size="100"><br />
Quem compra os alimentos?<br>
<input type="radio" name="radCompraalimentos" value="Proprio">Proprio (a)
<input type="radio" name="radCompraalimentos" value="Proprio e familiar">Proprio (a) e familiar
<input type="radio" name="radCompraalimentos" value="Familiar">Familiar
<input type="radio" name="radCompraalimentos" value="Proprio e empregada">Proprio (a) e empregada
<input type="radio" name="radCompraalimentos" value="Empregada">Empregada<br>
Quem define o que vai ser preparado?<br>
<input type="radio" name="radDefinealimentos" value="Proprio">Proprio (a)
<input type="radio" name="radDefinealimentos" value="Proprio e familiar">Proprio (a) e familiar
<input type="radio" name="radDefinealimentos" value="Familiar">Familiar
<input type="radio" name="radDefinealimentos" value="Proprio e empregada">Proprio (a) e empregada
<input type="radio" name="radDefinealimentos" value="Empregada">Empregada<br>
Quem prepara sua alimentação?<br>
<input type="radio" name="radPreparaalimentos" value="Proprio">Proprio (a)
<input type="radio" name="radPreparaalimentos" value="Proprio e familiar">Proprio (a) e familiar
<input type="radio" name="radPreparaalimentos" value="Familiar">Familiar
<input type="radio" name="radPreparaalimentos" value="Proprio e empregada">Proprio (a) e empregada
<input type="radio" name="radPreparaalimentos" value="Empregada">Empregada<br>
Já recebeu alguma orientação sobre alimentação ou dieta?<br>
<input type="radio" name="radOrienta" value="Sim">Sim
<input type="radio" name="radOrienta" value="Nao">Não<br>
De quem?<br>
<input type="radio" name="radPreparaalimentos" value="Proprio">Nutricionista
<input type="radio" name="radPreparaalimentos" value="Proprio e familiar">Endocrinologista
<input type="radio" name="radPreparaalimentos" value="Familiar">Cardiologista &nbsp; Outros:&nbsp;<input type="text"  name="txtQuemorienta" maxlength="255" size="50"><br>
Faz uso de algum tipo de tempero artificial?<br>
<input type="radio" name="radTempero" value="Sim">Sim
<input type="radio" name="radTempero" value="Nao">Não &nbsp; Qual?:&nbsp;<input type="text"  name="txtTipotempero" maxlength="255" size="75"><br>
Faz uso de adoçante?<br>
<input type="radio" name="radAdocante" value="Sim">Sim
<input type="radio" name="radAdocante" value="Nao">Não &nbsp; Qual?:&nbsp;<input type="text"  name="txtTipoadocante" maxlength="255" size="75"><br>
</p>
<h3>VIII-Auto-imagem</h3>
<p>
Qual a aparência física que mais se parece com você atualmente? Nº:&nbsp;<input type="text"  name="txtImagem" maxlength="2" size="2"><br>
Qual a aparência física que mais gostaria de ter? Nº:&nbsp;<input type="text"  name="txtImagempretendida" maxlength="2" size="2"><br>
Como vc se sente em realção ao seu corpo?<br>
<input type="text"  name="txtcorpo" maxlength="255" size="100"><br>
Que parte do seu corpo você mais gosta?:&nbsp;<input type="text"  name="txtMaisgosta" maxlength="100" size="62"><br>
Que parte do seu corpo você menos gosta?:&nbsp;<input type="text"  name="txtMenosgosta" maxlength="100" size="60"><br>
O que você gostaria de fazer para modificar o seu corpo?<br>
<input type="text"  name="txtModificacorpo" maxlength="255" size="100"><br>
</p>
Pratica atividade física?&nbsp;<input type="radio" name="radOrienta" value="Sim">Sim &nbsp;<input type="radio" name="radOrienta" value="Nao">Não<br>
<h3>IX-Atividade física</h3>
<p>
Quais?<br>
Modalidade:<input type="text"  name="txtModalidade1" maxlength="30" size="20">
    &nbsp;Dias da semana:<input type="text"  name="txtModalidade1dias" maxlength="2" size="2">
    &nbsp;Duração:<input type="time"  name="timeModalidade1duracao" maxlength="20" size="20"><br>
Modalidade:<input type="text"  name="txtModalidade2" maxlength="30" size="20">
    &nbsp;Dias da semana:<input type="text"  name="txtModalidade2dias" maxlength="2" size="2">
    &nbsp;Duração:<input type="time"  name="timeModalidade2duracao" maxlength="20" size="20"><br>
Modalidade:<input type="text"  name="txtModalidade3" maxlength="30" size="20">
    &nbsp;Dias da semana:<input type="text"  name="txtModalidade3dias" maxlength="2" size="2">
    &nbsp;Duração:<input type="time"  name="timeModalidade3duracao" maxlength="20" size="20"><br>
</p>
<h3>X-Avaliação do estado nutricional</h3>
<p>
Peso usual: <input type="text"  name="txtpesousual" maxlength="2" size="2"> Kg
     &nbsp;Estatura referida: <input type="text"  name="txtestaturaref" maxlength="2" size="2"> m
     &nbsp;Peso atual: <input type="text"  name="txtpesousual" maxlength="2" size="2"> Kg<br>
</p>
<p>
<TABLE BORDER=1>
 <center>
     <TR>
     <TD>Medida</TD>
     <TD>Medida 1</TD>
     <TD>Medida 2</TD>
     <TD>Média</TD>
     </TR>
     <TR>
         <td>Altura</td>
         <td><input type="text" name="textaltura1" maxlength="4" size="5"></td>
         <td><input type="text" name="textaltura2" maxlength="4" size="5"></td>
         <td><input type="text" name="textmedia" maxlength="4" size="5"></td>
         </td>
       </TR>
     <TR>
           <td>Perímetro do braço</td>
           <td><input type="text" name="textbraco1" maxlength="5" size="5"></td>
           <td><input type="text" name="textbraco2" maxlength="5" size="5"></td>
           <td><input type="text" name="textbracomedia" maxlength="5" size="5"></td>
           </td>
     </TR>
     <TR>
           <td>Perímetro da cintura</td>
           <td><input type="text" name="textcintura1" maxlength="5" size="5"></td>
           <td><input type="text" name="textcintura2" maxlength="5" size="5"></td>
           <td><input type="text" name="textcinturamedia" maxlength="5" size="5"></td>
           </td>
     </TR>
     <TR>
           <td>Perímetro da panturrilha</td>
           <td><input type="text" name="textpantu1" maxlength="5" size="5"></td>
           <td><input type="text" name="textpantu2" maxlength="5" size="5"></td>
           <td><input type="text" name="textpantumedia" maxlength="5" size="5"></td>
           </td>
     </TR>
 </center>
</TABLE>
</p>
IMC: <input type="text" name="textimc" maxlength="5" size="5"> Kg/m2<br>
<br />
<hr>
<p>
  <center>
    <input type=submit name="botao_enviar" value="Cadastrar">
    <input type=reset name="bota_limpar" value="Limpar">
    <button><a href="javascript:window.history.go(-1)">Voltar</a></button>
  </center>
</P>
</body>
<br />
<br />
<br />
<hr>
<footer>
  Universidade do Estado do Rio de Janeiro - Instituto de Nutrição - Departamento de Nutrção Social<br>
  Copyright 2016 - Todos os direitos reservados
</footer>
</html>
