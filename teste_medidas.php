<?php
#chama o arquivo de configuração com o banco
require 'conn.php';

# abaixo montamos um formulário em html
# e preenchemos o select com dados
?>
<form name="medidas" method="post" action="">
 
  <select>
    <option>Selecione uma medida</option> 
    <?php
    $query = mysql_query("SELECT COD_medida, DESC_medida, QTD_gramas FROM medidas");
        while($med = mysql_fetch_array($query)) { ?>
            <option value="<?php echo $med['DESC_medida'] ?>"><?php echo $med['DESC_medida'] ?></option>
 <?php } ?>
 
 </select>
</form>