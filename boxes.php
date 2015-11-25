<div class="box">
<?php
/* $channels = array("nomduchannel") ;                        //D'ici jusqu'à  echo $viewers; c'est pour afficher le nombre de viewers d'un channel (il y a surmenent une maniere plus optimisée qui permettra d'abord de récupérer toutes les infos des channels qu'on veut en une seule requête et de trier apres) 
	$callAPI = implode(",",$channels);
	$dataArray = json_decode(@file_get_contents('https://api.twitch.tv/kraken/streams?channel=' . $callAPI), true);

	foreach($dataArray['streams'] as $mydata){                      //On peut changer le $mydata par ce qu'on veut c'est juste une clé je crois (genre on peut mettre itme comme aux trucs au dessus)
    	if($mydata['_id'] != null){
        $name      = $mydata['channel']['display_name'];
        $viewers =   $mydata['viewers'];
    	}
	}
	echo $viewers;
	
global $wpdb;


	
$testbddboxes = $wpdb->get_results('SELECT * FROM wp_streams where wp_streams.id=0' , ARRAY_A) ;
foreach ($testbddboxes as $testaff ) {
?> <?php 
*/
?>
	<div class="left-part">
		<div class="logo-streamer">
			<a href="#"><img src="<?php echo $testaff['logo'] ?>"/></a>
		</div>
		<div class="calendrier-stream">

			<a href="#">CALENDRIER</a>
			
		</div>
	</div>
	<div class="right-part">
		<div class="groupe-emissions">
			<div class="fleche-carrousssel-left"><img src="/workspace/Stream-reference/wordpress/wp-content/themes/Stream-reference/images/fleche-carroussel-left.png" id="imgfleche-carroussel-left"></div> <! apparemment c'est avec une div qu'on peut faire un carrousel qui permet de naviguer parmis les émissions sur une memepage (voir "programme-relevision .org) !>
			<div class="emissions">
				<div class="preview-and-title">
					<div class="imgstream">image preview du stream</div>
					<div class="titrestream">titre du stream</div>
				</div>
				<div class="infos-complementaires">
					<div class="reseaux-sociaux">
						<a href="#"><img src="">Fb</a>
						<a href="#"><img src="">t</a>
						<a href="#"><img src="">Yt</a>
					</div>
					<div class="dureestream">Durée et heure de début/Fin</div>
					<div class="nomstreamers"><?php echo $testaff['nom_stream'] ?></div>
					<div class="nbviewers"><?php echo $viewers; ?></div>
					<div class="logoetautre">
						<div class="placevide"></div>
						<div class="lienstream"><a href="#">Stream</a></div> <!place vide a cote du lien vers le stream>
					</div>
				</div>
			</div>
			<div class="emissions">
				<div class="preview-and-title">
					<div class="imgstream">image preview du stream</div>
					<div class="titrestream">titre du stream</div>
				</div>
				<div class="infos-complementaires">
					<div class="reseaux-sociaux">
						<a href="#"><img src="">Fb</a>
						<a href="#"><img src="">t</a>
						<a href="#"><img src="">Yt</a>
					</div>
					<div class="dureestream">Durée et heure de début/Fin</div>
					<div class="nomstreamers">Noms streamers</div>
					<div class="nbviewers">Nb de viewers et nom du jeu</div>
					<div class="logoetautre">
						<div class="placevide"></div>
						<div class="lienstream"><a href="#">Stream</a></div>  <!place vide a cote du lien vers le stream>
					</div>
				</div>
				
			</div>
			<div class="fleche-carrousssel-right"><img src="/workspace/Stream-reference/wordpress/wp-content/themes/Stream-reference/images/fleche-carroussel-right.png" id="imgfleche-carroussel-right"></div>
		</div>
	</div>
	<?php
	//}
?>
</div>



<div class="box"></div>
<div class="box"></div>
<div class="box"></div>

