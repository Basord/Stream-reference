<?php

/**
* 
*/
	class Twitch_API {
		public function getAPI_URI($type){
		
		$API_Base_URI = "https://api.twitch.tv/kraken/";
		
			$twitchAPI_Sections = array(
				"teams" 	=> $API_Base_URI."teams/",
				"channels" 	=> $API_Base_URI."channels/",
				"games" 	=> $API_Base_URI."games/",
				"users" 	=> $API_Base_URI."users/",
				"streams" 	=> $API_Base_URI."streams/",
				"search" 	=> $API_Base_URI."search/"
			);
	
		return $twitchAPI_Sections[$type];

		}
		public function getAPI_FeaturedStreams($limit, $offset) {
		// Récupération du contenu JSON avec les paramètres "limit" et "offset"
		$url = file_get_contents($this->getAPI_URI("streams")."?limit=$limit&offset=$offset");
		// On décode la chaîne JSON
		$decodeFlux = json_decode($url, true);
 
		$API_Streams = $decodeFlux["streams"];
		$tableauItems = array();
		
		foreach($API_Streams as $stream) {
			
			array_push($tableauItems, array(
				// Channel
				"status" 		=>	$stream["channel"]["status"],
				"display_name" 		=>	$stream["channel"]["display_name"],
				"name" 			=>	$stream["channel"]["name"],
				"game" 			=> 	$stream["channel"]["game"],
				"created_at" 		=>	$stream["channel"]["created_at"],
				"updated_at" 		=>	$stream["channel"]["updated_at"],
				"logo" 			=>	$stream["channel"]["logo"],
				"url" 			=>	$stream["channel"]["url"],
				"views" 		=>	$stream["channel"]["views"],
				"followers" 		=>	$stream["channel"]["followers"],
				"broadcaster_language"	=> $stream["channel"]["language"],	//C'est ici pour voir les langues
				// Previews
				"preview_medium" 	=>	$stream["preview"]["medium"],
				// Current Stream
				"stream_game" 		=>	$stream["game"],
				"stream_viewers" 	=>	$stream["viewers"],	

				));
	
			}
			return $tableauItems;
		}

		public function getAPI_SearchStreams($name, $limit, $offset) {
		// Récupération du contenu JSON avec les paramètres "limit" et "offset"
		$url = file_get_contents($this->getAPI_URI("search")."streams?q=".$name."&limit=$limit&offset=$offset");
		// On décode la chaîne JSON
		$decodeFlux = json_decode($url, true);

		$API_Streams = $decodeFlux["streams"];			
				
		$tableauItems = array();
		
		foreach($API_Streams as $stream) {
			
			// Contenu mature ou non ?
			$isMature = ($stream["channel"]["mature"] == true) ? 'CONTENU MATURE!' : 'JEU TOUT PUBLIC';
			
			// Array_Push sur $tableauItems
			array_push($tableauItems, array(
				// Channel
				"mature" 			=> 	$isMature,
				"status" 			=>	$stream["channel"]["status"],
				"display_name" 		=>	$stream["channel"]["display_name"],
				"name" 				=>	$stream["channel"]["name"],
				"game" 				=> 	$stream["channel"]["game"],
				"created_at" 		=>	$stream["channel"]["created_at"],
				"updated_at" 		=>	$stream["channel"]["updated_at"],
				"logo" 				=>	$stream["channel"]["logo"],
				"banner" 			=>	$stream["channel"]["banner"],
				"video_banner" 		=>	$stream["channel"]["video_banner"],
				"background" 		=>	$stream["channel"]["background"],
				"profile_banner" 	=>	$stream["channel"]["profile_banner"],
				"profile_banner_background_color" => $stream["channel"]["profile_banner_background_color"],
				"url" 				=>	$stream["channel"]["url"],
				"views" 			=>	$stream["channel"]["views"],
				"followers" 		=>	$stream["channel"]["followers"],
				"broadcaster_language"	=> $stream["channel"]["language"],
				// Featured
				"text" 				=> 	$stream["text"],
				// Previews
				"preview_small" 	=>	$stream["preview"]["small"],
				"preview_medium" 	=>	$stream["preview"]["medium"],
				"preview_large" 	=>	$stream["preview"]["large"],
				"preview_template" 	=>	$stream["preview"]["template"],
				// Current Stream
				"_id" 				=>	$stream["_id"],
				"stream_game" 		=>	$stream["game"],
				"stream_viewers" 	=>	$stream["viewers"],	
				// Videos, Char, Stream Key…
				"videos" 			=>	$stream["channel"]["_links"]["videos"],
					
					));
	
			}
			return $tableauItems;
		}
		
	}

?>
