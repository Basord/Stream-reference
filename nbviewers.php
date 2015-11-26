<?php

$channels = array("MilleniumTVLoL,LEKADAYZ,Mactorlol,Furiie,Gardoum,Rekkles,yuniko0720,OgamingLoL,jiahao2,Calliev2,esl_PinkWard") ;                         
$callAPI = implode(",",$channels);                                                                
$dataArray = json_decode(@file_get_contents('https://api.twitch.tv/kraken/streams?channel=' . $callAPI), true);



$idstreamers1 = 47375371;  //1ere ligne de l'endroit ou on met les id des streams pour lesquelles on met le nb de viewers, Alt+F3 pour changer le nom de la varaible à tous les endroits, ne pas oublier de mettre le nom de variable qu'on veut dans les fonctions en dessous (à partir de la ligne (enfin juste apres la fonction de base qu'on utilise))
$idstreamers2 = 88398531;
$idstreamers3 = 71852533;
$idstreamers4 = 28964954;

foreach($dataArray['streams'] as $mydata){     
	if($mydata != null ){
		$iddirecttableau[] = $mydata['channel']['_id'];
		$viewersdirecttableau[] = $mydata['viewers'];
	}
}

var_dump($iddirecttableau);

function getnbviewers($iddirecttableau, $viewersdirecttableau,  $idstreamers,$nbviewers){  //Les deux dernieres valeurs seront a changer a chaque fois qu'on appelle la fonction.
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

$newarraytotal = array();         //Tableau dans le quels sont rangées toutes les varaiables contenant le nombre de viewers de chaque streamer


getnbviewers($iddirecttableau, $viewersdirecttableau, $idstreamers1, $nbviewers1);  //1ere ligne des fonctions pour recup le nb de viewers, mettre le bon nom de variable dans laquelle on recupere le nombre de vue pour pouvoir l'utiliser apres.
$nbviewers = getnbviewers($iddirecttableau, $viewersdirecttableau, $idstreamers1, $nbviewers1);   //Ce pack de quatre lignes est nécessaire pour récupérer et ranger le nombre de viewers de chaque streamer
$nbviewers1 = $nbviewers;
array_push($newarraytotal,$nbviewers);

getnbviewers($iddirecttableau, $viewersdirecttableau, $idstreamers2, $nbviewers2);
$nbviewers = getnbviewers($iddirecttableau, $viewersdirecttableau, $idstreamers2, $nbviewers2);
$nbviewers2 = $nbviewers;
array_push($newarraytotal,$nbviewers);

getnbviewers($iddirecttableau, $viewersdirecttableau, $idstreamers3, $nbviewers3);
$nbviewers = getnbviewers($iddirecttableau, $viewersdirecttableau, $idstreamers3, $nbviewers3);
$nbviewers3 = $nbviewers;
array_push($newarraytotal,$nbviewers);

getnbviewers($iddirecttableau, $viewersdirecttableau, $idstreamers4, $nbviewers4);
$nbviewers = getnbviewers($iddirecttableau, $viewersdirecttableau, $idstreamers4, $nbviewers4);
$nbviewers4 = $nbviewers;
array_push($newarraytotal,$nbviewers);






var_dump($newarraytotal);
print_r($newarraytotal);

$nbopif = 54;                                                                 //Moyen de mettre le nb de viewers dans un array qui contient un array par nom dans lequel se trouve le nb de viewers;
$testarray = array( "pi" => array( "pu" => "po", "pl" => $nbopif ) );         //Mais on peut deja savoir a quel numero appartient  quel nb de viewers car ils sont classé dans le tableau par l'ordre d'appel
$testcherche = array_column($testarray, "pl");                                //Pour prendre les valeurs associer à des clés dans plusieurs tableaux qui sont dans un meme tableau


global $wpdb;


$wpdb->update('wp_streams',array('nb_viewers' => $nbviewers1),array('id' => 0));  //Voila voila pour mettre le nombre de viewer dans la BDD, là c'est la requête que pour un stream

$testbdd = $wpdb->get_results('SELECT * FROM wp_streams ORDER BY nb_viewers DESC', ARRAY_A) ;   //Affichage par nb de viewers décroissant
foreach ($testbdd as $testaff ) {

echo $testaff['nom_stream'];
}
//usort($newarraytotal, function($a,$b) {return $a < $b ;});  //Pour trier les nb de viewers par ordre (dé)croissant mais pas nécessaire vu qu'on le fait en SQL



//$time_start = microtime(true);  //Calcul du temps d'un script

//usleep(100);                     //A partir de la mettre a la fin du script

//$time_end = microtime(true);
//$time = $time_end - $time_start;

//echo "Temps d'éxécution : $time secondes ";



//${$i."un"}=31;    //Concatener un nom de variable avec un autre
//echo ${$i."un"};








	







