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

var_dump($dataArray['streams']);
print_r($dataArray['streams'][0]['channel']['display_name']);

$i = 0;                                                                                            //Boucle pour trouver le nombre de viewers d'un stream enparticulier
for ($dataArray['streams'][$i]['channel']; $i < 100; $i++) {                                                 //Changer le <100 si il y a plus de 100 streamers     
	if($dataArray['streams'][$i]['channel'] != null ){
		if (in_array($_id = 28964954 , $dataArray['streams'][$i]['channel'])) {          
			echo $dataArray['streams'][$i]['viewers'];                                           //Enlever le "echo" et mettre a la place un nom de varaible différent pour chaque stremer qui sera la variable qui recuperera le nombre de viewers du streamer
		}
	}
}
$i = 0;

echo "<br/>";   //Enlever les br/ apres si on veut incorporer le script dans une autre page

$i = 0;                                                                                            //Boucle pour trouver le nombre de viewers d'un stream enparticulier
for ($dataArray['streams'][$i]['channel']; $i < 100; $i++) {                                                 //Changer le <100 si il y a plus de 100 streamers     
	if($dataArray['streams'][$i]['channel'] != null ){
		if (in_array($_id = 28964954 , $dataArray['streams'][$i]['channel'])) {          
			echo $dataArray['streams'][$i]['viewers'];                                           //Enlever le "echo" et mettre a la place un nom de varaible différent pour chaque stremer qui sera la variable qui recuperera le nombre de viewers du streamer
		}
	}
}

echo "<br/>";   //Enlever les br/ apres si on veut incorporer le script dans une autre page
$test1 = array("nn" => "tt" , "jj" => array("oo" => "dd" , "uu" => "ii"));

if (in_array($jj = array("oo" => "dd" , "uu" => "ii") , $test1)) { echo "cava"; }

if (in_array($channel = array('_id' => 28964954) , $dataArray['streams'][0])) {          
			echo $dataArray['streams'][0]['viewers'];                                           //Enlever le "echo" et mettre a la place un nom de varaible différent pour chaque stremer qui sera la variable qui recuperera le nombre de viewers du streamer
}
elseif (in_array($channel = array('_id' => 28964954), $dataArray['streams'][1])) {          
			echo $dataArray['streams'][1]['viewers'];                                           //Enlever le "echo" et mettre a la place un nom de varaible différent pour chaque stremer qui sera la variable qui recuperera le nombre de viewers du streamer
}
elseif (in_array($channel = array('_id' => 28964954), $dataArray['streams'][2])) {          
			echo $dataArray['streams'][2]['viewers'];                                           //Enlever le "echo" et mettre a la place un nom de varaible différent pour chaque stremer qui sera la variable qui recuperera le nombre de viewers du streamer
}
elseif (in_array($channel = array('_id' => 28964954), $dataArray['streams'][3])) {          
			echo $dataArray['streams'][3]['viewers'];                                           //Enlever le "echo" et mettre a la place un nom de varaible différent pour chaque stremer qui sera la variable qui recuperera le nombre de viewers du streamer
}
//var_dump($dataArray['streams'][3]);

echo "<br/>";   //Enlever les br/ apres si on veut incorporer le script dans une autre page
$i = 0;
for ($dataArray['streams'][$i]; $i < 100; $i++) { 
	if($dataArray['streams'][$i] != null ){
	if (in_array($channel = array('_id' => 28964954) , $dataArray['streams'][$i])) {          
			echo $dataArray['streams'][$i]['viewers'];                                           //Enlever le "echo" et mettre a la place un nom de varaible différent pour chaque stremer qui sera la variable qui recuperera le nombre de viewers du streamer
			echo "tamer";
		}
	}
}
echo "<br/>";   //Enlever les br/ apres si on veut incorporer le script dans une autre page
$i = 0;

for ($dataArray['streams'][$i]; $i < 100; $i++) { 
	if($dataArray['streams'][$i] != null ){
	if (in_array($_id = 28964954 , $dataArray['streams'][$i]['channel'])) {          
			echo $dataArray['streams'][$i]['viewers'];                                           //Enlever le "echo" et mettre a la place un nom de varaible différent pour chaque stremer qui sera la variable qui recuperera le nombre de viewers du streamer
			echo "tamer";
		}
	}
}
$i = 0;


echo "<br/>"; 
if (in_array($jj = array("oo" => "dd" , "uu" => "ii") , $test1)) { echo "cava"; }

if (in_array(in_array($_id == 28964954, $channel), $dataArray['streams'][0])) {          
			echo $dataArray['streams'][0]['viewers'];                                           //Enlever le "echo" et mettre a la place un nom de varaible différent pour chaque stremer qui sera la variable qui recuperera le nombre de viewers du streamer
}
elseif (in_array(in_array($_id == 28964954, $channel), $dataArray['streams'][1])) {          
			echo $dataArray['streams'][1]['viewers'];                                           //Enlever le "echo" et mettre a la place un nom de varaible différent pour chaque stremer qui sera la variable qui recuperera le nombre de viewers du streamer
}
elseif (in_array(in_array($_id == 28964954, $channel), $dataArray['streams'][2])) {          
			echo $dataArray['streams'][2]['viewers'];                                           //Enlever le "echo" et mettre a la place un nom de varaible différent pour chaque stremer qui sera la variable qui recuperera le nombre de viewers du streamer
}
elseif (in_array(in_array($_id = 28964954, $channel), $dataArray['streams'][3])) {          
			echo $dataArray['streams'][3]['viewers'];                                           //Enlever le "echo" et mettre a la place un nom de varaible différent pour chaque stremer qui sera la variable qui recuperera le nombre de viewers du streamer
}


echo "<br/>";   //Enlever les br/ apres si on veut incorporer le script dans une autre page

if (in_array(in_array(28964954, $channel, true), $dataArray['streams'][0])) {          
			echo $dataArray['streams'][0]['viewers'];                                           //Enlever le "echo" et mettre a la place un nom de varaible différent pour chaque stremer qui sera la variable qui recuperera le nombre de viewers du streamer
}
elseif (in_array(in_array(28964954, $channel, true), $dataArray['streams'][1])) {          
			echo $dataArray['streams'][1]['viewers'];                                           //Enlever le "echo" et mettre a la place un nom de varaible différent pour chaque stremer qui sera la variable qui recuperera le nombre de viewers du streamer
}
elseif (in_array(in_array(28964954, $channel, true), $dataArray['streams'][2])) {          
			echo $dataArray['streams'][2]['viewers'];                                           //Enlever le "echo" et mettre a la place un nom de varaible différent pour chaque stremer qui sera la variable qui recuperera le nombre de viewers du streamer
}
elseif (in_array(in_array(28964954, $channel, true), $dataArray['streams'][3])) {          
			echo $dataArray['streams'][3]['viewers'];                                           //Enlever le "echo" et mettre a la place un nom de varaible différent pour chaque stremer qui sera la variable qui recuperera le nombre de viewers du streamer
}

//Le in_array marche pas donc il faut utiliser une fonction (voir ce dessous et essayer de comprendre)


$test1 = array("nn" => "tt" , "jj" => array("oo" => "dd" , "uu" => "ii"));
// Function for looking for a value in a multi-dimensional array
function in_multi_array($value, $array)
{   
    foreach ($array as $key => $item)
    {       
        // Item is not an array
        if (!is_array($item))
        {
            // Is this item our value?
            if ($item == $value) return true;
        }
        
        // Item is an array
        else
        {
            // See if the array name matches our value
            //if ($key == $value) return true;
            
            // See if this array matches our value
            if (in_array($value, $item)) return true;
            
            // Search this array
            else if (in_multi_array($value, $item)) return true;
        }
    }
    
    // Couldn't find the value in array
    return false;

}

$agateau = in_multi_array($dd, $jj);  //Bon ok j'ai trouvé comment on utilise la fonction pour faire un in_array sur un tableau multidimensionnel mainteant il y a plus qu'à l'appliquer pour mon cas(et espérer que ca soit le fait qu'un in_array ne fonctionne pas sur un tableau multi et qu'il faille faire une fonction)
if ($agateau = true) {
	echo "ppp";
}
elseif ($agateau = false) {
	echo "ooo";
}

function in_multi_array2($ii, $jj)
{   
    foreach ($jj as $key => $item)
    {       
        // Item is not an array
        if (!is_array($item))
        {
            // Is this item our value?
            if ($item == $ii) return true;
        }
        
        // Item is an array
        else
        {
            // See if the array name matches our value
            //if ($key == $value) return true;
            
            // See if this array matches our value
            if (in_array($ii, $item)) return true;
            
            // Search this array
            else if (in_multi_array($ii, $item)) return true;
        }
    }
    
    // Couldn't find the value in array
    return false;
}






function search_array($oo, $jj) {
     if(in_array($oo, $jj)) {
          return true;
          echo "cava";
     }
     foreach($jj as $element) {
          if(is_array($element) && search_array($jj, $element))
               return true;
           echo "cava";
     }
   return false;
   echo "cava";echo "cava";                     //Normalement c'est comme ca que ca marche mais j'arrive pas a afficher des trucs dans la fonction
}


	



for ($dataArray['streams'][$i]; $i < 100; $i++) { 
	if($dataArray['streams'][$i] != null ){
		if (in_array($created_at = '2015-11-22T09:58:04Z', $dataArray['streams'][$i])) {          
			echo $dataArray['streams'][$i]['viewers'];
		}
	}
}
$i = 0;








