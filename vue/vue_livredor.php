<?php
    include_once('vue/header.php') ;
?>

<section>
    
    <h1>Livre d'or</h1>
    
    <div id='billets'>
    <?php
        
        foreach($billets as $unbillet)
        {
            echo '<div class="unbillet"' ;
        echo '<p><u>Par <b>'.$unbillet['auteur'].'</b> le '.$unbillet['datebillet'].' à '.$unbillet['heurebillet'].'</u></p>' ;
            echo '<p>'.$unbillet['texte'].'</p>' ;
            echo '</div>' ;
        }
    
        $nbpages = (($nbbillets-1)/4)+1 ;
    
        for($i=1;$i<=$nbpages;$i++)
        {
            echo '<a href="index.php?section=livredor&page='.$i.'">'.$i.'</a>' ;
        }
    ?>
    
    </div>
    <p>Si vous avez apprécié le séjour, n'hésitez pas à laisser un petit commentaire </p>
    
    <?php
        if(isset($msg_confirm))
        {
            echo $msg_confirm ;
        }
        if(isset($msg_error))
        {
            echo $msg_error ;
        }
    ?>
    
    <form method='post' action='index.php?section=livredor'>
        
        <p>Pseudo : <input type='text' name='pseudo' value='Anonyme'/></p>
        <p>Commentaire : <br/>
            <textarea name='billet' rows='6' cols='30'></textarea>
        </p>
        <input type='submit' value='Envoyer' />
    </form>
</section>