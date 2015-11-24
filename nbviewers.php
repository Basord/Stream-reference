<?php

$channels = array("MilleniumTVLoL,LEKADAYZ,Mactorlol,Furiie,Gardoum,Rekkles,yuniko0720,OgamingLoL,jiahao2,Calliev2,esl_PinkWard") ;                         
$callAPI = implode(",",$channels);                                                                
$dataArray = json_decode(@file_get_contents('https://api.twitch.tv/kraken/streams?channel=' . $callAPI), true);

foreach($dataArray['streams'] as $mydata){                             //Boucle "temoin" pour verifier que les données recoltées dans les autres boucles sont correctes (a supprimer une fois que tout est terminé)
    if($mydata['_id'] != null){
        $name      = $mydata['channel']['display_name'];                  
        $viewers =   $mydata['viewers'];                                  
        $id = $mydata['_id'];                                                                        
    }
    	
    	
    echo $viewers;
	echo $name;
	echo $id;
	echo "<br/>";

		

}


$i = 0;

foreach($dataArray['streams'] as $mydata){     
	if($mydata != null ){
		$iddirecttableau[] = $mydata['channel']['_id'];
		$viewersdirecttableau[] = $mydata['viewers'];
	}
}

var_dump($iddirecttableau);
var_dump($viewersdirecttableau);
$i = 0;
for ($iddirecttableau[$i]; $i < 100; $i++) { 
	if($iddirecttableau[$i] != null ){
		if ($iddirecttableau[$i] == 88398531) {          
			echo $viewersdirecttableau[$i];
		}
	}
}

echo "<br/>";

$i = 0;

for ($iddirecttableau[$i]; $i < 100; $i++) { 
	if($iddirecttableau[$i] != null ){
		if ($iddirecttableau[$i] == 94437681) {          
			echo $viewersdirecttableau[$i];
		}
	}
}

echo "<br/>";

$i = 0;

for ($iddirecttableau[$i]; $i < 100; $i++) { 
	if($iddirecttableau[$i] != null ){
		if ($iddirecttableau[$i] == 30506683) {          
			echo $viewersdirecttableau[$i];
		}
	}
}

function getnbviewers($id, $idstockage){

	
$i = 0;
for ($iddirecttableau[$i]; $i < 100; $i++) { 
	if($iddirecttableau[$i] != null ){
		if ($iddirecttableau[$i] == $id) {          
			$idstockage = $viewersdirecttableau[$i];
			echo $viewersdirecttableau[$i];
		}
	}
	
}
return $idstockage;
}
$iddunstream = 88398531;
getnbviewers($iddunstream,$testrecup);
echo $testrecup;
var_dump($testrecup);


function getnbtest2($iddirecttableau, $viewersdirecttableau){
	$i = 0;

for ($iddirecttableau[$i]; $i < 100; $i++) { 
	if($iddirecttableau[$i] != null ){
		if ($iddirecttableau[$i] == 88398531) {          
			echo $viewersdirecttableau[$i];
			
		}
	}
}

}

getnbtest2($iddirecttableau, $viewersdirecttableau);

echo "<br/>";

function getnbtest3($iddirecttableau, $viewersdirecttableau,$idstreamers,$nbviewers){
	$i = 0;

for ($iddirecttableau[$i]; $i < 100; $i++) { 
	if($iddirecttableau[$i] != null ){
		if ($iddirecttableau[$i] == $idstreamers) {          
			
			$nbviewers = $viewersdirecttableau[$i];
			echo $nbviewers;
		}
	}
}

}
$idstreamers1 = 71852533;
getnbtest3($iddirecttableau, $viewersdirecttableau,$idstreamers1,$nbviewers1);



//$time_start = microtime(true);  //Calcul du temps d'un script

//usleep(100);                     //A partir de la mettre a la fin du script

//$time_end = microtime(true);
//$time = $time_end - $time_start;

//echo "Temps d'éxécution : $time secondes ";



//${$i."un"}=31;    //Concatener un nom de variable avec un autre
//echo ${$i."un"};








	



for ($dataArray['streams'][$i]; $i < 100; $i++) { 
	if($dataArray['streams'][$i] != null ){
		if (in_array($created_at = '2015-11-22T09:58:04Z', $dataArray['streams'][$i])) {          
			echo $dataArray['streams'][$i]['viewers'];
		}
	}
}
$i = 0;








