    <div class="col-lg-6 col-xs-6">
          <?php
            
            $pecah = explode('<tr bgcolor="#dee9f2" style="text-align:center;">', $url);
            $pecah2 = explode('<td><strong>Beli</strong></td>', $pecah[1]);
            $pecah3 = explode('<table width="200" border="1" style="float:left;">', $pecah2[1]);
            echo "<table border='1'>";
            echo "<tr><td>KURS</td><td>JUAL</td><td>BELI</td></tr>";
            echo $pecah3[0];
            echo "</table>";
            ?>
        </div>