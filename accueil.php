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
			<div id="container-optionsprogramme">
				<div class="optionstemps">
					<div class="uneoptiontemps">
						<a class="lienoptiontemps" href="#">Ce soir</a>
					</div>
					<div class="uneoptiontemps">
						<a class="lienoptiontemps" href="#">En ce moment</a>
					</div>
					<div class="uneoptiontemps">
						<a class="lienoptiontemps" href="#">Demain</a>
					</div>
				</div>
				<div class="optionslangue">
					<div class="uneoptionlangue">
						<a class="lienoptionlangue" href="#">FR</a>
					</div>
					<div class="uneoptionlangue">
						<a class="lienoptionlangue-pasdisponible" href="#">ENG</a>
						<p>soon</p>
					</div>
				</div>
				<div class="optionsjeu">
					<div class="uneoptionjeu">
						<a class="lienoptionjeu" href="">TOUS</a>
					</div>
					<div class="uneoptionjeu">
						<a class="lienoptionjeu" href="">LOL</a>
					</div>
					<div class="uneoptionjeu">
						<a class="lienoptionjeu" href="">HS</a>
					</div>
				</div>
			</div>
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