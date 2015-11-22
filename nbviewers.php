<?php

$channels3 = array("MilleniumTVLoL,LEKADAYZ,Mactorlol,Furiie,Gardoum,Rekkles,yuniko0720,OgamingLoL,jiahao2") ;                         
$callAPI3 = implode(",",$channels3);                                                                
$dataArray3 = json_decode(@file_get_contents('https://api.twitch.tv/kraken/streams?channel=' . $callAPI3), true);

foreach($dataArray3['streams'] as $mydata){                      
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
for ($dataArray3['streams'][$i]; $i < 100; $i++) {                                                 //Changer le <100 si il y a plus de 100 streamers     
	if($dataArray3['streams'][$i] != null ){
		if (in_array($created_at = '2015-11-22T09:50:34Z', $dataArray3['streams'][$i])) {          
			echo $dataArray3['streams'][$i]['viewers'];
		}
	}
}
$i = 0;

echo "<br/>";


for ($dataArray3['streams'][$i]; $i < 100; $i++) { 
	if($dataArray3['streams'][$i] != null ){
		if (in_array($created_at = '2015-11-22T09:58:04Z', $dataArray3['streams'][$i])) {          
			echo $dataArray3['streams'][$i]['viewers'];
		}
	}
}
$i = 0;








