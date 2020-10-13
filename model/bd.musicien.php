
<? function getAllMusiciens()
{


    $bdd = getBdd();
    $req = $bdd->query('SELECT * FROM musicien');
    return $req;
}
