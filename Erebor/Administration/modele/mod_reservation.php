<?php
function get_afficheId()
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT  * FROM reservation ");
    $req->execute();
    $lll = $req->fetchAll();
        
    return $lll;
}
?>