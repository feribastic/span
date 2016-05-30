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
require 'conn.php';
?>
        
<form name ="frmdiario" method="post" action="./enviaDiario.php">
    <div>
    <h2><center><b><u>Recordatório Alimentar</u></b></center></h2>
    Nome:<select name="selecnome">
    <label for="">Selecione um nome</label> 
    <option>Nome</option> 
                <?php
                        $sql = "SELECT * from individuo";
                        $executar = mysql_query($sql) or die (mysql_error());
                        while ($reg = mysql_fetch_array ($executar))
                        {
                    ?>
                        }
                        <option value="<?php echo $reg['id']; ?>"><?php echo $reg['nome']; ?></option>
                <?php
                            } 
                            
                ?>
 
        </select>
    <br />
    Data:<input type="date" name="datadiario">
    <br />
    Hora da entrevista:<input type="time" name="horaentrevista">
    <br />
    Dia da Semana:<input type="txt" name="diadasemana">
    </div>
<div>
<h2>Refeições</h2>
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
    <TD><input type="text" name="localrefeicao" maxlength="8" size="8"></td>
    <td><input type="text" name="nomerefeicao" maxlength="15" size=15></td>
    <td><input type="text" name="alim_ingerido" maxlength="30" size="30"></td>
    <td><input type="number" name="qtd" maxlength="5" size="5"></td>
    <td>
        <select name="selecmedida">
            <option>Selecione uma medida</option> 
                <?php
                        $sql = "SELECT * from medida";
                        $executar = mysql_query($sql) or die (mysql_error());
                        while ($med = mysql_fetch_array ($executar))
                        {
                    ?>
                        }
                        <option value="<?php echo $med['descricao']; ?>"><?php echo $med['descricao']; ?></option>
                <?php
                            } 
                            
                ?>
        </select>
    </td>
</TR>
</TABLE>
</div>
<input type=submit name="enviaentrevista">
</center>
</body>
</html>