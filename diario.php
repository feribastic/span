<html lang="pt-BR">
    <link href="css/base.css" rel="stylesheet">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Felipe Ribas Coutinho" />
        <title>Diário Alimentar - Sistema Público de Avaliação Nutricional</title>
    </head>
    <body><center>
        <h2><center>Instituto de Nutrição UERJ</center></h2>
        <h3><center>Departamento de Nutrição Social</center></h3>
    <?php
    $local_server="localhost";
    $usuario_server = "root";
    $senha_server = "Fl@mengo1981";
    $banco_dados = "span";
    if ($conecta = @mysql_connect($local_server, $usuario_server, $senha_server)){
    if ($db = @mysql_select_db($banco_dados, $conecta)){
    }else { //erro na seleção do banco de dados
    echo "Erro seleção";
    }
    }else { //erro na conexão com a servidor
    echo "erro conexão";    
    }
    
?>
<form name ="frmdiario" method="post" action="./enviadiario.php">
<h1><center><b>Diário Alimentar</b></center></h1>
<h2>Identificação</h2><br />
Nome:<input type="text" name="txtNome" maxlength="150" size="70">
Data:<input type="date" name="datadiario">
Hora:<input type="time" name="horaentrevista">
<h2>Refeições</h2><br />
<TABLE BORDER=1>
<TR>
<TD>Hora</TD>
<TD>Local</TD>
<TD>Refeição</TD>
<TD>Alimentos ingeridos</TD>
<TD>Qtd.</TD>
<td>Medida</td>
</TR>
<TR>
    <td><input type="time" name="horarefeicao" maxlength="5" size="5"></td>
    <TD><input type="text" name="locarefeicao" maxlength="8" size="8"></td>
    <td><input type="text" name="tiporefeicao" maxlength="15" size=15></td>
    <td><input type="text" name="aliminger" maxlength="30" size="30"></td>
    <td><input type="number" name="qtd" maxlength="5" size="5"></td>
    <td><input type="text" name="tpmedida" maxlength="18" size="18"</td>
</tr>
</TABLE>
    <input type=submit name="Gravar entrevista">
</center>
</body>
</html>