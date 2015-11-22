<?php

get_template_part('api/twitch-api');

$twitchInit = new Twitch_API();



echo '<h2>Liste Streams</h2>';
$i=1;
// Get Featured Streams
foreach ($twitchInit->getAPI_FeaturedStreams(2, 0) as $key => $item) {
 
	echo "<h3>Stream n°$i</h3>";
	echo "[status] 	=> ".$item['status']."<br />
		  [display_name] 		=> ".$item['display_name']."<br />
		  [name] 			=> ".$item['name']."<br />
		  [game] 			=> ".$item['game']."<br />
		  [created_at] 			=> ".$item['created_at']."<br />
		  [updated_at] 			=> ".$item['updated_at']."<br />
		  [logo]			=> ".$item['logo']."<br />
		  [url]				=> ".$item['url']."<br />
		  [views] 			=> ".$item['views']."<br />
		  [followers] 			=> ".$item['followers']."<br />
		  [preview_medium] 		=> ".$item['preview_medium']."<br />
		  [stream_game] 		=> ".$item['stream_game']."<br />
		  [stream_viewers] 		=> ".$item['stream_viewers']."<br />
		  [broadcaster_language]    => ".$item['broadcaster_language']." <br />
		  ";
	$i++;
}

echo '<h1>Tuto</h1>';


echo '<h2>[ Liste Teams ]</h2>';
$i=0;
// Get API Teams
 

foreach ($twitchInit->getAPI_SearchStreams("LeagueofLegends", 30,0) as $key => $item) {
	if ($item['broadcaster_language'] == "en"){
	

	echo "<h3>Team n°$i</h3>";
	
	
	echo $item['name']." - ".$item['display_name']." - ".$item['created_at']." - ".$item['updated_at']." - ".$item['broadcaster_language']." - ".$item['stream_viewers']." <br />
		  ";
		  
		 echo '<a href="'.$item['url'].'"><img src="'.$item['preview_medium'].'" />';
	}
	else { echo "string";}

$i++;
 
}	


$allinfos = $twitchInit->getAPI_SearchStreams("LeagueofLegends", 30,0);										//jusqu'à ligne 85 tri et affichage des streams par nombre de viewers (ici décroissant)

usort($allinfos, function($a,$b) {return $a['stream_viewers'] > $b['stream_viewers'];});


foreach ($allinfos as $key => $item) {
	//if ($item['broadcaster_language'] == "en"){
	

	
	$viewercount .= $item['stream_viewers']. "<br/>";
	echo $item['stream_viewers']." <br/>";
	echo $item['name']." <br/>";
	//$testtri .= $item['name'].
	//"        <br/>
	//	  ";
		  
		 
	//}
	//else { echo "string";}
$i++;
 
 }	

//echo $testtri;




echo "<hr/>";
global $wpdb;
//$testbdd = $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}zero_newsletter_email (id INT AUTO_INCREMENT PRIMARY KEY, email VARCHAR(255) NOT NULL);");

	
$testbdd = $wpdb->get_results('SELECT * FROM wp_streams', ARRAY_A) ;
foreach ($testbdd as $testaff ) {

echo $testaff['nom_stream'] ?><img src="<?php echo $testaff['img_stream'] ?>"/> <?php ;
}
//var_dump($testbdd) ;
$testrecuperation = $wpdb->get_results('SELECT * FROM wp_streams', ARRAY_A) ;
print_r($testrecuperation); 



//$result = $wpbd->get_results('SELECT * FROM wp_streams', ARRAY_A);
$data = array();
	foreach ($testbdd as $row) {
		$json = json_decode(file_get_contents('https://api.twitch.tv/kraken/streams/'.strtolower($row['channel']).'?client_id='.$clientId), true);
        if(!is_null($json->stream))
            $data[] = array(
                'display_name' => $json->stream->channel->display_name,
                'status' => $json->stream->channel->status,
                'game' => $json->stream->channel->game,
                'viewers' => $json->stream->viewers);
	}

    usort($data, function($a,$b) {return $a['viewers'] < $b['viewers'];});
    foreach($data as $item) {
       
        echo $item['display_name'];
        echo $item['status'];
        echo $item['game'];
        echo $item['viewers'];
        
    }
    echo "<hr/>";
    print_r($data);
    echo "<hr/>";
    



    $channels = array("nomduchannel") ;                        //D'ici jusqu'à  echo $viewers; c'est pour afficher le nombre de viewers d'un channel (il y a surmenent une maniere plus optimisée qui permettra d'abord de récupérer toutes les infos des channels qu'on veut en une seule requête et de trier apres) 
	$callAPI = implode(",",$channels);
	$dataArray = json_decode(@file_get_contents('https://api.twitch.tv/kraken/streams?channel=' . $callAPI), true);

	foreach($dataArray['streams'] as $mydata){                      //On peut changer le $mydata par ce qu'on veut c'est juste une clé je crois (genre on peut mettre itme comme aux trucs au dessus)
    	if($mydata['_id'] != null){
        $name      = $mydata['channel']['display_name'];
        $viewers =   $mydata['viewers'];
    	}
	}
	echo $viewers;

	$dataArray2 = json_decode(@file_get_contents('https://api.twitch.tv/kraken/streams?channel=Kgerie,etsalutdit,SardocheLol,sardochelol,OgamingLoL' ), true);  //Découverte du fait que si on met des virules dans l'url entre les noms ça permet de faire une requête pour plusieurs channels à la fois
                                                                                                        // Ici ce sont juste des noms de channels pris en exemple pour le test
	foreach($dataArray2['streams'] as $mydata){                      
    	if($mydata['_id'] != null){
        $name      = $mydata['channel']['display_name'];
        $viewers =   $mydata['viewers'];
        echo $viewers;
		echo $name;
		echo "<br/>";
    	}
	}
	echo "<hr/>";
	$channels3 = array("Kgerie,etsalutdit,SardocheLol,sardochelol,OgamingLoL,Narkuss_lol") ;                        //Il suffit de mettre des virgules entre les noms pour chercher plusieurs channels en meme temps 
	$callAPI3 = implode(",",$channels3);                                                                // Les channels sont apres classés par nombre de viewers
	$dataArray3 = json_decode(@file_get_contents('https://api.twitch.tv/kraken/streams?channel=' . $callAPI3), true);

	foreach($dataArray3['streams'] as $mydata){                      
    	if($mydata['_id'] != null){
        $name      = $mydata['channel']['display_name'];                  //Il faut réussir à associer le nom du stream à la BDD
        $viewers =   $mydata['viewers'];                                  
        $id = $mydata['_id'];                                             //Pour pouvoir faire ça on va lier l'ID (et peut être faire en sorte que quand l'id du streamer de l'api corresponde à quelque chose)                           
    	}
    	
    	
    	echo $viewers;
		echo $name;
		echo $id;
		echo "<br/>";

		

	}

	
	echo "<hr/>";
	if ($name == "OgamingLoL" ){
		echo $viewers;
	}
	echo "<hr/>";
	
var_dump($dataArray3);
echo "<hr/>";
print_r($dataArray3);
echo "<hr/>";

foreach($dataArray3['streams'] as $mydata){                      
    	if($mydata['_id'] == 71852533){
        $name      = $mydata['channel']['display_name'];                  //Il faut réussir à associer le nom du stream à la BDD
        $viewers =   $mydata['viewers'];                                  
        $id = $mydata['_id'];                                             //Pour pouvoir faire ça on va lier l'ID (et peut être faire en sorte que quand l'id du streamer de l'api corresponde à quelque chose)                           
    	}
    	
    	
    	echo $viewers;
		echo $name;
		echo $id;
		echo "<br/>";

		

	}	

	print_r($dataArray3['streams'][0]);
	echo "<hr/>";
	
	if (in_array($_id == 17819231760, $dataArray3['streams'][0])) {          
			echo "ca marche";
			echo $dataArray3['streams'][0]['viewers'];
	}
	echo "<br/>";
		
	
$dataArray3['streams'][0] = $teststreamindividuel;                                   // Cette variable n'est a crée qu'une seul fois elle est nécessaire pour pouvoir faire les boucles if
                                                                                 //Il sera nécessaire de faire une boucle If pour chaque streamer (sauf si il y a une autre solution mais je crois pas)
    	if($teststreamindividuel['_id'][0] == 71852533){                            //On a réussi a ne prendre les informations que d'un seul stream, mais je crois qu'il faudra mettre le nombre de viewer de chaque streamer associé à une variable différente
        $name      = $mydata['channel']['display_name'];                  
        $viewers =   $mydata['viewers'];                                  
        $id = $mydata['_id'];                                                                        
    	}
    	
    	
    	echo $viewers;
		echo $name;
		echo $id;
		echo "<br/>";
echo "<hr/>";


	

	


?>
<!--  <img src="/workspace/Stream-reference/wordpress/wp-content/themes/Stream-reference/images/logo.png"/> --> 


