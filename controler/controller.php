<?
require('model/bd.musicien.php');

function accueil()
{

    require('view/v_accueil.php');
}


function musiciens()
{

    $req1 = getAllMusiciens();
    require('view/v_musiciens.php');
}
