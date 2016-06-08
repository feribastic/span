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

<center>
<body>
    <?php
      require 'conn.php';
    ?>

<form name ="frmdiario" method="post" action="./enviaDiario.php">

  <h3><u>Recordatório Alimentar</u></h3>
  <p>
  Nome: <select name="selecnome">
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
    Data: <input type="date" name="datadiario">
    <br />
    Hora da entrevista: <input type="time" name="horaentrevista" maxlength="5" size="5">
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
<h3><u>Refeições</u></h3>
<TABLE BORDER=1>
  <center>
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
    <TR>
        <td><input type="time" name="horarefeicaob" maxlength="5" size="5"></td>
        <TD><input type="text" name="localrefeicaob" maxlength="8" size="8"></td>
        <td><input type="text" name="nomerefeicaob" maxlength="15" size=15></td>
        <td>
            <select name="selecalimentob">
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
        <td><input type="number" name="qtdb" maxlength="5" size="5"></td>
        <td>
            <select name="selecmedidab">
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
  </center>
</TABLE>
<p><center>
  <input type=submit name="botao_enviar" value="Cadastrar">
  <input type=reset name="bota_limpar" value="Limpar">
  <button><a href="javascript:window.history.go(-1)">Voltar</a></button>
  </center>
</body>
</center>
<br />
<footer>
  Universidade do Estado do Rio de Janeiro - Instituto de Nutrição - Departamento de Nutrção Social<br>
  Copyright 2016 - Todos os direitos reservados
</footer>
</html>
