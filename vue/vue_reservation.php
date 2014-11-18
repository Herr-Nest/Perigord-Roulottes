<?php
    include_once('header.php') ;
?>
<section>
    <h1>Pré-réservation</h1>
    <br />
    <?php
        if(isset($msg_error))
        {
            echo '<div class="msgerror">'.$msg_error.'</div>' ;
        }
    ?>
    <p>
        Avant de faire une demande de réservation, veuillez consulter
        nos <a href="index.php?section=tarifs">tarifs</a> et nos 
        <a href="index.php?section=sejours">séjours</a>.
    </p>
    <br />
    <div id="form_reserv">
        <form method="post" action="index.php?section=reserv_roul">
            <h3>Vos coordonnées</h3>
            <p>Nom : <input type="text" name="nomclient" class="texte" required/></p>
            <p>Prenom : <input type="text" name="prenomclient" class="texte" required/></p>
            <p>Adresse : <input type="text" name="adresseclient" class="texte" required/></p>
            <p>Code Postal : <input type="text" name="cpclient" class="texte" required/></p>
            <p>Ville : <input type="text" name="villeclient" class="texte" required/></p>
            <hr />
            <h3>Détails du séjour</h3>
            <p>Date de départ : <input type="text" name="date" id="date" class="calendrier" value="Cliquez ici pour afficher le calendrier" required/></p>
            <p>Durée du séjour : <select name="dureesej">
                <?php
                    foreach($liste_sejours as $unsejour)
                    {
                        echo '<option value="'.$unsejour['NbJours'].'">'.$unsejour['NomSejour'].' ['.$unsejour['NbJours'].'jours] </option>' ;
                    }
                ?>
            </select></p>
            <p>Ville de départ : <select name="villedep">
                <?php
                    foreach($liste_etapes as $uneEtape)
                    {
                        echo'<option value='.$uneEtape['NumEtape'].'>'.$uneEtape['VilleEtape'].'</option>';
                    }
                ?>
                
                </select></p><br/>
            <p><input type="submit" value="Valider" class="button"/></p><br />
        </form>
    </div>
</section>

