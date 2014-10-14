<?php
	include_once('vue/header.php');
?>
<section><br/>
	<h1>Les Tarifs</h1>
        <div id="tarif">
            <table border=1>
                    <tr><th></th><th>Été</th><th>Printemps</th><th>Automne</th></tr>
                    <?php
                    $i=0;
                            foreach($lesTarifs as $unTarif){
                                    if($i%3==0)
                                    {
                                            $sejour=$unTarif['NomSejour'];
                                            echo "<tr><td>$sejour</td>";
                                    }

                                    $tarif=$unTarif['TarifSejour'];
                                    echo "<td>$tarif</td>";

                                    if($i%3==2)
                                    {
                                            echo "</tr>";

                                    }
                                    $i++;

                            }
                    ?>
            </table>
        </div><br />
</section>
