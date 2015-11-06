<section id="accueil">
	<div id="container-titres">
		<div id="container-titre-programme">
			<div id="titre-programme"><h1>Programme</h1></div>
		</div>
		<div id="container-titre-news">
			<div id="titre-news"><h1>News</h1></div>
		</div>
	</div>

	<div id="places">
		
		<section id="programme-accueil">
			<?php 
			get_template_part('boxes');
			?>
		</section>
		<section id="news-accueil">
			<div class="boxnews">
				<div class="boxnewstitre">
					<div class="titrenews"></div>
				</div>
				<div class="boxnewscontenu">
					<div class="imagenews"></div>
					<div class="textenews"></div>
				</div>
			</div>
		</section>
	</div>	


</section>