<?php

$channels = array("MilleniumTVLoL,LEKADAYZ,Mactorlol,Furiie,Gardoum,Rekkles,yuniko0720,OgamingLoL,jiahao2,Calliev2,esl_PinkWard") ;                         
$callAPI = implode(",",$channels);                                                                
$dataArray = json_decode(@file_get_contents('https://api.twitch.tv/kraken/streams?channel=' . $callAPI), true);



$idstreamers1 = 30506683;  //1ere ligne de l'endroit ou on met les id des streams pour lesquelles on met le nb de viewers, ne pas oublier de mettre le nom de variable qu'on veut dans les fonctions en dessous (à partir de la ligne (enfin juste apres la fonction de base qu'on utilise))
$idstreamers2 = 88398531;

foreach($dataArray['streams'] as $mydata){     
	if($mydata != null ){
		$iddirecttableau[] = $mydata['channel']['_id'];
		$viewersdirecttableau[] = $mydata['viewers'];
	}
}

var_dump($iddirecttableau);
$arrayallnbviewers = array();
function getnbviewers($iddirecttableau, $viewersdirecttableau, $arrayallnbviewers, $idstreamers,$nbviewers){  //Les deux dernieres valeurs seront a changer a chaque fois qu'on appelle la fonction.
	$i = 0;
	
	for ($iddirecttableau[$i]; $i < 100; $i++) { 
		if($iddirecttableau[$i] != null ){
			if ($iddirecttableau[$i] == $idstreamers) {
				$nbviewers = $viewersdirecttableau[$i];           //Pour vérifier que ca marche mettre un echo $nbviewers; sur la ligne d'après
				
			}
		}
	}
	return $nbviewers;
	
}


getnbviewers($iddirecttableau, $viewersdirecttableau, $arrayallnbviewers, $idstreamers1, $nbviewers1);  //1ere ligne des fonctions pour recup le nb de viewers, mettre le bon nom de variable dans laquelle on recupere le nombre de vue pour pouvoir l'utiliser apres.

getnbviewers($iddirecttableau, $viewersdirecttableau, $arrayallnbviewers, $idstreamers2, $nbviewers2);



$nbviewers = getnbviewers($iddirecttableau, $viewersdirecttableau, $arrayallnbviewers, $idstreamers2, $nbviewers2);  //Bon bah c'est à partir de la pour mettre les nbviewers dans un tableau, d'abord on a vu comme il fallait faire pour pouvoir afficher le résultat de la fonction et pares on voit comment ajouter a un tableau.

$newarraytotal = array();

echo $nbviewers;

$nbviewers = getnbviewers($iddirecttableau, $viewersdirecttableau, $arrayallnbviewers, $idstreamers1, $nbviewers1);

array_push($newarraytotal,$nbviewers);

$nbviewers = getnbviewers($iddirecttableau, $viewersdirecttableau, $arrayallnbviewers, $idstreamers2, $nbviewers2);

array_push($newarraytotal,$nbviewers);


var_dump($newarraytotal);
print_r($newarraytotal);

//$time_start = microtime(true);  //Calcul du temps d'un script

//usleep(100);                     //A partir de la mettre a la fin du script

//$time_end = microtime(true);
//$time = $time_end - $time_start;

//echo "Temps d'éxécution : $time secondes ";



//${$i."un"}=31;    //Concatener un nom de variable avec un autre
//echo ${$i."un"};









	







