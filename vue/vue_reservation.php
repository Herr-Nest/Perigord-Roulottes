<?php
    include_once('header.php') ;
?>
<script>
	function verifSaisie()
	{
		var i=0;
		while(i<=document.getElementsByTagName('input').length-2)
			{
				
				document.getElementsByTagName('input')[i].style.borderColor='initial';
				document.getElementsByClassName('msgerror')[i].style.display='none';
				i=i+1;
			}
		var ok=true;
		var i=0;
		while(i<=document.getElementsByTagName('input').length-2)
			{
			document.getElementsByTagName('input')[i].onkeyup=function(){
			
			
			
			}
				if(document.getElementsByTagName('input')[i].value=="")
				{
					document.getElementsByTagName('input')[i].style.borderColor='red';
					document.getElementsByClassName('msgerror')[i].style.display='initial';
					ok=false;
				}
				i=i+1;
				
			}
		if(document.getElementsByName('cpclient')[0].value.length!=5)
		{
			document.getElementsByName('cpclient')[0].style.borderColor='red';
			document.getElementsByClassName('msgerror')[3].style.display='initial';
			ok=false;
		}
		if(ok)
		{
			formReservation.submit();
		}else{
			return ok;
		}
		

	}

</script>

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
        <form name='formReservation'method="post" action="index.php?section=reserv_roul">
            <h3>Vos coordonnées</h3>
            <p>Nom : <input type="text" name="nomclient" class="texte"/><span class='msgerror'>Champ obligatoire</span></p>
            <p>Prenom : <input type="text" name="prenomclient" class="texte" /><span class='msgerror'>Champ obligatoire</span></p>
            <p>Adresse : <input type="text" name="adresseclient" class="texte" /><span class='msgerror'>Champ obligatoire</span></p>
            <p>Code Postal : <input type="text" name="cpclient" class="texte" /><span class='msgerror'>Code postal incorrect</span></p>
            <p>Ville : <input type="text" name="villeclient" class="texte" /><span class='msgerror'>Champ obligatoire</span></p>
            <hr />
            <h3>Détails du séjour</h3>
            <p>Date de départ : <input type="text" name="date" id="date" class="calendrier" placeholder="Cliquez ici pour afficher le calendrier" readonly /><span class='msgerror'>Champ obligatoire</span></p>
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
            <p><input type="button" value="Valider" class="button" onclick="verifSaisie()"/></p><br />
        </form>
    </div>
</section>
