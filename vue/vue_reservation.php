<?php
    include_once('header.php') ;
?>
<section>
    <h1>Pré-réservation</h1>
    <br />
    <p>
        Avant de faire une demande de réservation, veuillez consulter
        nos <a href="index.php?section=tarifs">tarifs</a> et nos 
        <a href="index.php?section=sejours">séjours</a>.
    </p>
    <br />
    <div id="form_reserv">
        <form method="post" action="reserv_roulotte.php">

            <p>Nom : <input type="text" name="nomclient" class="texte"/></p>
            <p>Prenom : <input type="text" name="prenomclient" class="texte"/></p>
            <p>Adresse : <input type="text" name="adresseclient" class="texte"/></p>
            <p>Code Postal : <input type="text" name="cpclient" class="texte"/></p>
            <p>Ville : <input type="text" name="villeclient" class="texte"/></p>
            <p>Date de départ : <input type="text" name="date" id="date" class="calendrier" value="Cliquez ici pour afficher le calendrier" /></p>
            <p>Durée du séjour : <select name="dureesej">
                <?php
                    foreach($liste_sejours as $unsejour)
                    {
                        echo '<option value="'.$unsejour['NbJours'].'">'.$unsejour['NomSejour'].'</option>' ;
                    }
                ?>
            </select></p><br />
            <p><input type="submit" value="Valider" class="button"/></p><br />
        </form>
    </div>
</section>

