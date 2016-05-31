<html lang="pt-BR">
    <link href="css/base.css" rel="stylesheet">
        <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Felipe Ribas Coutinho" />
        <title>Diário Alimentar - Sistema Público de Avaliação Nutricional</title>
        </head>
    <body>
    <center>
<?php
require 'conn.php';
?>
        
<form name ="frmdiario" method="post" action="./enviaDiario.php">
    <div>
    <h2><b><u>Recordatório Alimentar</u></b></h2>
    Nome:<select name="selecnome">
    <label for="">Selecione um nome</label> 
    <option>Nome</option> 
                <?php
                        $sql = "SELECT * from individuo";
                        $executar = mysql_query($sql) or die (mysql_error());
                        while ($selecnome = mysql_fetch_array ($executar))
                        {
                    ?>
                        }
                        <option value="<?php echo $selecnome['id'] ?>"><?php echo $selecnome['nome'] ?></option>
                <?php
                            } 
                            
                ?>
 
        </select>
    <br />
    Data:<input type="date" name="datadiario">
    <br />
    Hora da entrevista:<input type="time" name="horaentrevista">
    <br />
    Dia da Semana:
    <select name="selecdia">
    <label for="">Selecione um nome</label> 
    <option>Nome</option> 
                <?php
                        $sql = "SELECT * from diasemana";
                        $executar = mysql_query($sql) or die (mysql_error());
                        while ($selecdia = mysql_fetch_array ($executar))
                        {
                    ?>
                        }
                        <option value="<?php echo $selecdia['dia'] ?>"><?php echo $selecdia['dia'] ?></option>
                <?php
                            } 
                            
                ?>
 
        </select>
    <br />
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
    <td>
        <select name="selecalimento">
            <option>Selecione um alimento</option> 
                <?php
                        $sql = "SELECT * from alimentos";
                        $executar = mysql_query($sql) or die (mysql_error());
                        while ($selecalimento = mysql_fetch_array ($executar))
                        {
                    ?>
                        }
                        <option value="<?php echo $selecalimento['cod'] ?>"><?php echo $selecalimento['nome'] ?></option>
                <?php
                            } 
                            
                ?>
        </select>
    </td>
    <td><input type="number" name="qtd" maxlength="5" size="5"></td>
    <td>
        <select name="selecmedida">
            <option>Selecione uma medida</option> 
                <?php
                        $sql = "SELECT * from medida";
                        $executar = mysql_query($sql) or die (mysql_error());
                        while ($selecmedida = mysql_fetch_array ($executar))
                        {
                    ?>
                        }
                        <option value="<?php echo $selecmedida['cod_medida'] ?>"><?php echo $selecmedida['descricao'] ?></option>
                <?php
                            } 
                            
                ?>
        </select>
    </td>
</TR>
</TABLE>
</div>
<center>
    <input type=submit name="enviaentrevista" value="Enviar">
    <input type="reset" name="limpaform" value="Limpar">
    <button><a href="javascript:window.history.go(-1)">Voltar</a></button>
</center>
</body>
<br /> 
<footer>
    <center>Copyright 2016 - Todos os direitos reservados - Instituto de Nutrição - Departamento de Nutrição Social</center>
</footer>
</html>