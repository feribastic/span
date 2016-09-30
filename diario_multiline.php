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

<form name ="frmdiario" method="post" action="./enviaDiario_multi.php">
<p>
  Entrevistador: <input type="text" name="entrevistador">
  Data: <input type="date" name="dataentrevista">
  Hora da entrevista: <input type="time" name="horaentrevista" maxlength="5" size="5">
  <br>
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
    Data do diário: <input type="date" name="datadiario">
    <br>
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
<script language="javascript">
var idRefeicao = 0;
function clonarLinha(){
  var row = document.getElementById("linhaParaClonar");
  var table = document.getElementById("tabela");
  var clone = row.cloneNode(true);
  clone.id = "linhaClonada" + idRefeicao++;
  clone.querySelectorAll('input, select').forEach(function(a){a.name = a.name.replace('0', idRefeicao)})
  table.appendChild(clone);
}
</script>
<TABLE BORDER=1>
  <center>
    <thead>
        <TR>
          <th>Hora</th>
          <th>Local</th>
          <th>Refeição</th>
          <th>Alimentos ingeridos</th>
          <th>Qtd.</th>
          <th>Medida</th>
        </TR>
    </thead>
    <tbody id = "tabela">
        <tr id = "linhaParaClonar">
          <td><input type="time" name="refeicao[0][horarefeicao]" maxlength="5" size="5"></td>
          <td><input type="text" name="refeicao[0][localrefeicao]" maxlength="8" size="8"></td>
          <td><input type="text" name="refeicao[0][nomerefeicao]" maxlength="15" size=15></td>
        <td>
        <select name="refeicao[0][selecalimento]">
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
      <td><input type="number" name="refeicao[0][qtd]" maxlength="5" size="5"></td>
      <td>
        <select name="refeicao[0][selecmedida]">
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
    </tr>
  </center>
</tbody>
</TABLE>
<input type="button" onclick="clonarLinha()" value="Nova refeição" />
<br>
<br>
<br>
<p>
<center>
  <input type=submit name="botao_enviar" value="Cadastrar">
  <input type=reset name="bota_limpar" value="Limpar">
  <button><a href="javascript:window.history.go(-1)">Voltar</a></button>
  </center>
</center>
<br />
<footer>
  Universidade do Estado do Rio de Janeiro - Instituto de Nutrição - Departamento de Nutrção Social<br>
  Copyright 2016 - Todos os direitos reservados
</footer>
</html>
