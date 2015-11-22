<?php

$channels3 = array("MilleniumTVLoL,LEKADAYZ,Mactorlol,Furiie,Gardoum,Rekkles,yuniko0720,OgamingLoL,") ;                         
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

//print_r($dataArray3);
$time_start = microtime(true);

if (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][0])) {          
			
	echo $dataArray3['streams'][0]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][1])) {          
			
	echo $dataArray3['streams'][1]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][2])) {          
			
	echo $dataArray3['streams'][2]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][3])) {          
			
	echo $dataArray3['streams'][3]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][4])) {          
			
	echo $dataArray3['streams'][4]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][5])) {          
			
	echo $dataArray3['streams'][5]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][6])) {          
			
	echo $dataArray3['streams'][6]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][7])) {          
			
	echo $dataArray3['streams'][8]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][7])) {          
			
	echo $dataArray3['streams'][9]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][7])) {          
			
	echo $dataArray3['streams'][10]['viewers'];
}
echo "<br/>";


if (in_array($display_name = OgamingLoL, $dataArray3['streams'][0])) {          
			
			echo $dataArray3['streams'][0]['viewers'];
	}
	elseif (in_array($display_name = OgamingLoL, $dataArray3['streams'][1])) {          
			
			echo $dataArray3['streams'][1]['viewers'];
	}
		elseif (in_array($display_name = OgamingLoL, $dataArray3['streams'][2])) {          
			
			echo $dataArray3['streams'][2]['viewers'];
	}
			elseif (in_array($display_name = OgamingLoL, $dataArray3['streams'][3])) {          
			
			echo $dataArray3['streams'][3]['viewers'];
	}
				elseif (in_array($display_name = OgamingLoL, $dataArray3['streams'][4])) {          
			
			echo $dataArray3['streams'][4]['viewers'];
	}
					elseif (in_array($display_name = OgamingLoL, $dataArray3['streams'][5])) {          
			
			echo $dataArray3['streams'][5]['viewers'];
	}
						elseif (in_array($display_name = OgamingLoL, $dataArray3['streams'][6])) {          
			
			echo $dataArray3['streams'][6]['viewers'];
	}
							elseif (in_array($display_name = OgamingLoL, $dataArray3['streams'][7])) {          
			
			echo $dataArray3['streams'][7]['viewers'];
	}
echo "<br/>";

$arrayremplissage = array();
if (in_array($_id = 17817845968, $dataArray3['streams'][0] )) {          
			
			echo $dataArray3['streams'][0]['viewers'];
	}
	elseif (in_array($_id = 17817845968, $dataArray3['streams'][1])) {          
			
			echo $dataArray3['streams'][1]['viewers'];
	}
		elseif (in_array($_id = 17817845968, $dataArray3['streams'][2])) {          
			
			echo $dataArray3['streams'][2]['viewers'];
	}
			elseif (in_array($_id = 17817845968, $dataArray3['streams'][3])) {          
			
			echo $dataArray3['streams'][3]['viewers'];
	}
				elseif (in_array($_id = 17817845968, $dataArray3['streams'][4])) {          
			
			echo $dataArray3['streams'][4]['viewers'];
	}
					elseif (in_array($_id = 17817845968, $dataArray3['streams'][5])) {          
			
			echo $dataArray3['streams'][5]['viewers'];
	}
						elseif (in_array($_id = 17817845968, $dataArray3['streams'][6])) {          
			
			echo $dataArray3['streams'][6]['viewers'];
	}
							elseif (in_array($_id = 17817845968, $dataArray3['streams'][7])) {          
			
			echo $dataArray3['streams'][7]['viewers'];
	}
echo "<br/>";


if (in_array($_id = 17817772016, $dataArray3['streams'][0])) {          
			
			echo $dataArray3['streams'][0]['viewers'];
	}
	elseif (in_array($_id = 17817772016, $dataArray3['streams'][1])) {          
			
			echo $dataArray3['streams'][1]['viewers'];
	}
		elseif (in_array($_id = 17817772016, $dataArray3['streams'][2])) {          
			
			echo $dataArray3['streams'][2]['viewers'];
	}
			elseif (in_array($_id = 17817772016, $dataArray3['streams'][3])) {          
			
			echo $dataArray3['streams'][3]['viewers'];
	}
				elseif (in_array($_id = 17817772016, $dataArray3['streams'][4])) {          
			
			echo $dataArray3['streams'][4]['viewers'];
	}
					elseif (in_array($_id = 17817772016, $dataArray3['streams'][5])) {          
			
			echo $dataArray3['streams'][5]['viewers'];
	}
						elseif (in_array($_id = 17817772016, $dataArray3['streams'][6])) {          
			
			echo $dataArray3['streams'][6]['viewers'];
	}
							elseif (in_array($_id = 17817772016, $dataArray3['streams'][7])) {          
			
			echo $dataArray3['streams'][7]['viewers'];
	}
echo "<br/>";


if (in_array($_id = 17819231760, $dataArray3['streams'][0])) {          
			
			echo $dataArray3['streams'][0]['viewers'];
	}
	elseif (in_array($_id = 17819231760, $dataArray3['streams'][1])) {          
			
			echo $dataArray3['streams'][1]['viewers'];
	}
		elseif (in_array($_id = 17819231760, $dataArray3['streams'][2])) {          
			
			echo $dataArray3['streams'][2]['viewers'];
	}
			elseif (in_array($_id = 17819231760, $dataArray3['streams'][3])) {          
			
			echo $dataArray3['streams'][3]['viewers'];
	}
				elseif (in_array($_id = 17819231760, $dataArray3['streams'][4])) {          
			
			echo $dataArray3['streams'][4]['viewers'];
	}
					elseif (in_array($_id = 17819231760, $dataArray3['streams'][5])) {          
			
			echo $dataArray3['streams'][5]['viewers'];
	}
						elseif (in_array($_id = 17819231760, $dataArray3['streams'][6])) {          
			
			echo $dataArray3['streams'][6]['viewers'];
	}
							elseif (in_array($_id = 17819231760, $dataArray3['streams'][7])) {          
			
			echo $dataArray3['streams'][7]['viewers'];
	}
echo "<br/>";


if (in_array($_id = 17817921120, $dataArray3['streams'][0])) {          
			
			echo $dataArray3['streams'][0]['viewers'];
	}
	elseif (in_array($_id = 17817921120, $dataArray3['streams'][1])) {          
			
			echo $dataArray3['streams'][1]['viewers'];
	}
		elseif (in_array($_id = 17817921120, $dataArray3['streams'][2])) {          
			
			echo $dataArray3['streams'][2]['viewers'];
	}
			elseif (in_array($_id = 17817921120, $dataArray3['streams'][3])) {          
			
			echo $dataArray3['streams'][3]['viewers'];
	}
				elseif (in_array($_id = 17817921120, $dataArray3['streams'][4])) {          
			
			echo $dataArray3['streams'][4]['viewers'];
	}
					elseif (in_array($_id = 17817921120, $dataArray3['streams'][5])) {          
			
			echo $dataArray3['streams'][5]['viewers'];
	}
						elseif (in_array($_id = 17817921120, $dataArray3['streams'][6])) {          
			
			echo $dataArray3['streams'][6]['viewers'];
	}
							elseif (in_array($_id = 17817921120, $dataArray3['streams'][7])) {          
			
			echo $dataArray3['streams'][7]['viewers'];
	}
echo "<br/>";


if (in_array($_id = 17820164112, $dataArray3['streams'][0])) {          
			
			echo $dataArray3['streams'][0]['viewers'];
	}
	elseif (in_array($_id = 17820164112, $dataArray3['streams'][1])) {          
			
			echo $dataArray3['streams'][1]['viewers'];
	}
		elseif (in_array($_id = 17820164112, $dataArray3['streams'][2])) {          
			
			echo $dataArray3['streams'][2]['viewers'];
	}
			elseif (in_array($_id = 17820164112, $dataArray3['streams'][3])) {          
			
			echo $dataArray3['streams'][3]['viewers'];
	}
				elseif (in_array($_id = 17820164112, $dataArray3['streams'][4])) {          
			
			echo $dataArray3['streams'][4]['viewers'];
	}
					elseif (in_array($_id = 17820164112, $dataArray3['streams'][5])) {          
			
			echo $dataArray3['streams'][5]['viewers'];
	}
						elseif (in_array($_id = 17820164112, $dataArray3['streams'][6])) {          
			
			echo $dataArray3['streams'][6]['viewers'];
	}
							elseif (in_array($_id = 17820164112, $dataArray3['streams'][7])) {          
			
			echo $dataArray3['streams'][7]['viewers'];
	}
echo "<br/>";


if (in_array($_id = 17817949936, $dataArray3['streams'][0])) {          
			
			echo $dataArray3['streams'][0]['viewers'];
	}
	elseif (in_array($_id = 17817949936, $dataArray3['streams'][1])) {          
			
			echo $dataArray3['streams'][1]['viewers'];
	}
		elseif (in_array($_id = 17817949936, $dataArray3['streams'][2])) {          
			
			echo $dataArray3['streams'][2]['viewers'];
	}
			elseif (in_array($_id = 17817949936, $dataArray3['streams'][3])) {          
			
			echo $dataArray3['streams'][3]['viewers'];
	}
				elseif (in_array($_id = 17817949936, $dataArray3['streams'][4])) {          
			
			echo $dataArray3['streams'][4]['viewers'];
	}
					elseif (in_array($_id = 17817949936, $dataArray3['streams'][5])) {          
			
			echo $dataArray3['streams'][5]['viewers'];
	}
						elseif (in_array($_id = 17817949936, $dataArray3['streams'][6])) {          
			
			echo $dataArray3['streams'][6]['viewers'];
	}
							elseif (in_array($_id = 17817949936, $dataArray3['streams'][7])) {          
			
			echo $dataArray3['streams'][7]['viewers'];
	}
echo "<br/>";














//$time_start = microtime(true);                      //Script pour calculer le temps d'execution d'un script: mettre cette ligne avant le script qu'on veut calculer.

usleep(100);                                        //Mettre ces 4 lignes apres le script qu'on veut calculer                                    
$time_end = microtime(true);
$time = $time_end - $time_start;
echo "Temps d'eecution de $time secondes\n";








if (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][0])) {          
			
	$dataArray3['streams'][0]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][1])) {          
			
	$dataArray3['streams'][1]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][2])) {          
			
	$dataArray3['streams'][2]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][3])) {          
			
	$dataArray3['streams'][3]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][4])) {          
			
	$dataArray3['streams'][4]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][5])) {          
			
	$dataArray3['streams'][5]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][6])) {          
			
	$dataArray3['streams'][6]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][7])) {          
			
	$dataArray3['streams'][7]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][8])) {          
			
	$dataArray3['streams'][8]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][9])) {          
			
	$dataArray3['streams'][9]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][10])) {          
			
	$dataArray3['streams'][10]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][11])) {          
			
	$dataArray3['streams'][11]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][12])) {          
			
	$dataArray3['streams'][12]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][13])) {          
			
	$dataArray3['streams'][13]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][14])) {          
			
	$dataArray3['streams'][14]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][15])) {          
			
	$dataArray3['streams'][15]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][16])) {          
			
	$dataArray3['streams'][16]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][17])) {          
			
	$dataArray3['streams'][17]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][18])) {          
			
	$dataArray3['streams'][18]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][19])) {          
			
	$dataArray3['streams'][19]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][20])) {          
			
	$dataArray3['streams'][20]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][21])) {          
			
	$dataArray3['streams'][21]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][22])) {          
			
	$dataArray3['streams'][22]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][23])) {          
			
	$dataArray3['streams'][23]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][24])) {          
			
	$dataArray3['streams'][24]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][25])) {          
			
	$dataArray3['streams'][25]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][26])) {          
			
	$dataArray3['streams'][26]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][27])) {          
			
	$dataArray3['streams'][27]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][28])) {          
			
	$dataArray3['streams'][28]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][29])) {          
			
	$dataArray3['streams'][29]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][30])) {          
			
	$dataArray3['streams'][30]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][31])) {          
			
	$dataArray3['streams'][31]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][32])) {          
			
	$dataArray3['streams'][32]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][33])) {          
			
	$dataArray3['streams'][33]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][34])) {          
			
	$dataArray3['streams'][34]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][35])) {          
			
	$dataArray3['streams'][35]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][36])) {          
			
	$dataArray3['streams'][36]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][37])) {          
			
	$dataArray3['streams'][37]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][38])) {          
			
	$dataArray3['streams'][38]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][39])) {          
			
	$dataArray3['streams'][39]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][40])) {          
			
	$dataArray3['streams'][40]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][41])) {          
			
	$dataArray3['streams'][41]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][42])) {          
			
	$dataArray3['streams'][42]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][43])) {          
			
	$dataArray3['streams'][43]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][44])) {          
			
	$dataArray3['streams'][44]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][45])) {          
			
	$dataArray3['streams'][45]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][46])) {          
			
	$dataArray3['streams'][46]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][47])) {          
			
	$dataArray3['streams'][47]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][48])) {          
			
	$dataArray3['streams'][48]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][49])) {          
			
	$dataArray3['streams'][49]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][50])) {          
			
	$dataArray3['streams'][50]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][51])) {          
			
	$dataArray3['streams'][51]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][52])) {          
			
	$dataArray3['streams'][52]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][53])) {          
			
	$dataArray3['streams'][53]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][54])) {          
			
	$dataArray3['streams'][54]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][55])) {          
			
	$dataArray3['streams'][55]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][56])) {          
			
	$dataArray3['streams'][56]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][57])) {          
			
	$dataArray3['streams'][57]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][58])) {          
			
	$dataArray3['streams'][58]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][59])) {          
			
	$dataArray3['streams'][59]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][60])) {          
			
	$dataArray3['streams'][60]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][61])) {          
			
	$dataArray3['streams'][61]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][62])) {          
			
	$dataArray3['streams'][62]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][63])) {          
			
	$dataArray3['streams'][63]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][64])) {          
			
	$dataArray3['streams'][64]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][65])) {          
			
	$dataArray3['streams'][65]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][66])) {          
			
	$dataArray3['streams'][66]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][67])) {          
			
	$dataArray3['streams'][67]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][68])) {          
			
	$dataArray3['streams'][68]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][69])) {          
			
	$dataArray3['streams'][69]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][70])) {          
			
	$dataArray3['streams'][70]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][71])) {          
			
	$dataArray3['streams'][71]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][72])) {          
			
	$dataArray3['streams'][72]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][73])) {          
			
	$dataArray3['streams'][73]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][74])) {          
			
	$dataArray3['streams'][74]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][75])) {          
			
	$dataArray3['streams'][75]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][76])) {          
			
	$dataArray3['streams'][76]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][77])) {          
			
	$dataArray3['streams'][77]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][78])) {          
			
	$dataArray3['streams'][78]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][79])) {          
			
	$dataArray3['streams'][79]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][80])) {          
			
	$dataArray3['streams'][80]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][81])) {          
			
	$dataArray3['streams'][81]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][82])) {          
			
	$dataArray3['streams'][82]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][83])) {          
			
	$dataArray3['streams'][83]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][84])) {          
			
	$dataArray3['streams'][84]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][85])) {          
			
	$dataArray3['streams'][85]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][86])) {          
			
	$dataArray3['streams'][86]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][87])) {          
			
	$dataArray3['streams'][87]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][88])) {          
			
	$dataArray3['streams'][88]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][89])) {          
			
	$dataArray3['streams'][89]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][90])) {          
			
	$dataArray3['streams'][90]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][91])) {          
			
	$dataArray3['streams'][91]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][92])) {          
			
	$dataArray3['streams'][92]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][93])) {          
			
	$dataArray3['streams'][93]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][94])) {          
			
	$dataArray3['streams'][94]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][95])) {          
			
	$dataArray3['streams'][95]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][96])) {          
			
	$dataArray3['streams'][96]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][97])) {          
			
	$dataArray3['streams'][97]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][98])) {          
			
	$dataArray3['streams'][98]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][99])) {          
			
	$dataArray3['streams'][99]['viewers'];
}
elseif (in_array($created_at = '2015-11-21T15:23:57Z', $dataArray3['streams'][100])) {          
			
	$dataArray3['streams'][100]['viewers']; 
}

echo "<br/>";