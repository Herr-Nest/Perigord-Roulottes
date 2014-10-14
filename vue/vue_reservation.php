<?php
    include_once('header.php') ;
?>
<section><br />
    <h1>Pré-réservation</h1>
    <br />
    <p>
        Avant de faire une demande de réservation, veuillez consulter
        nos tarifs et nos séjours.
    </p>
    
    <form method="post" action="reserv_roulotte.php">
        
        <p>Nom : <input type="text" name="nomclient" /></p>
        <p>Prenom : <input type="text" name="prenomclient" /></p>
        <p>Adresse : <input type="text" name="adresseclient" /></p>
        <p>Code Postal : <input type="text" name="cpclient" /></p>
        <p>Ville : <input type="text" name="villeclient" /></p>
        
    </form>
</section>

