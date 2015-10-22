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
 

//foreach ($twitchInit->getAPI_SearchStreams("LeagueofLegends", 30,0) as $key => $item) {
	//if ($item['broadcaster_language'] == "en"){
	

	//echo "<h3>Team n°$i</h3>";
	
	
	//echo $item['name']." - ".$item['display_name']." - ".$item['created_at']." - ".$item['updated_at']." - ".$item['broadcaster_language']." - ".$item['stream_viewers']." <br />
		//  ";
		  
		// echo '<a href="'.$item['url'].'"><img src="'.$item['preview_medium'].'" />';
	//}
	//else { echo "string";}

//$i++;
 
//}	



foreach ($twitchInit->getAPI_SearchStreams("LeagueofLegends", 30,0) as $key => $item) {
	//if ($item['broadcaster_language'] == "en"){
	

	
	
	
	$testtri .= $item['name']."  <br />
		  ";
		  
		 
	//}
	//else { echo "string";}
$i++;
 
 }	
echo $testtri;


usort($item, function($a,$b){return $a[$stream["viewers"]] > $b[$stream["viewers"]];});
foreach ($twitchInit->getAPI_SearchStreams("LeagueofLegends", 30,0) as $key => $item) {
	echo  $item['name']." - ".$item['display_name']." - ".$item['created_at']." - ".$item['updated_at']." - ".$item['broadcaster_language']." - ".$item['stream_viewers']." <br /> ";
}


?>
