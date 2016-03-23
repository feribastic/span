<td>
    <?php
            $sql = "SELECT * FROM medida";
			$rs = mysql_query($sql) or die(mysql_error());
			while($row = mysql_fetch_array($rs)){
                            echo "<input type=comboList1 name='medida' value='".$row["cod_medida"]."</input>";
			}mysql_free_result($rs);
           ?>
    </td>
