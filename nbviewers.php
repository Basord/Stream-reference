<?php

$channels = array("MilleniumTVLoL,LEKADAYZ,Mactorlol,Furiie,Gardoum,Rekkles,yuniko0720,OgamingLoL,jiahao2") ;                         
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



$i = 0;                                                                                            //Boucle pour trouver le nombre de viewers d'un stream enparticulier
for ($dataArray['streams'][$i]; $i < 100; $i++) {                                                 //Changer le <100 si il y a plus de 100 streamers     
	if($dataArray['streams'][$i] != null ){
		if (in_array($created_at = '2015-11-22T09:50:34Z', $dataArray['streams'][$i])) {          
			echo $dataArray['streams'][$i]['viewers'];                                           //Enlever le "echo" et mettre a la place un nom de varaible différent pour chaque stremer qui sera la variable qui recuperera le nombre de viewers du streamer
		}
	}
}
$i = 0;

echo "<br/>";


for ($dataArray['streams'][$i]; $i < 100; $i++) { 
	if($dataArray['streams'][$i] != null ){
		if (in_array($created_at = '2015-11-22T09:58:04Z', $dataArray['streams'][$i])) {          
			echo $dataArray['streams'][$i]['viewers'];
		}
	}
}
$i = 0;








