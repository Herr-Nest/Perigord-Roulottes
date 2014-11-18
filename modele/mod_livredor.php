<?php
    
    function insert_billet($auteur, $billet)
    {
        global $bdd ;
        
        $req = $bdd->prepare('INSERT INTO livredor(idbillet, auteur, texte, datebillet, heurebillet) VALUES(:id, :auteur, :texte, :date, :heure)') ;
        $req->execute(array(
            'id' => '',
            'auteur' => $auteur,
            'texte' => $billet,
            'date' => date('Y-m-d'),
            'heure' => date('H:i:s')
        ));
    }
    
    function get_billets($page)
    {
        $firstbillet = ($page-1)*4 ;
        
        global $bdd ;
        
        $req = $bdd->prepare('SELECT * FROM livredor ORDER BY idbillet DESC LIMIT '.$firstbillet.',4') ;
        $req->execute() ;
        $don = $req->fetchAll();
        
        return $don ;
    }
    
    function count_billets()
    {
        global $bdd ;
        
        $req = $bdd->prepare('SELECT COUNT(*) FROM livredor') ;
        $req->execute() ;
        $don = $req->fetchColumn() ;
        
        return $don ;
    }

