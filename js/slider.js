$(document).ready(function(){              //vidéo d'explication du slider: https://www.youtube.com/watch?v=sJ8rbJvaKOU    voir la fin de la vidéo pour voir comment faire une fonction qui permet d'aller à un endroit particulier du slider

	s = new slider ("#prototype-galerie");   //pas oublier de changer nom de div ici
	                                         //pour initialiser un deuxieme slider faire une autre variable  et prendre le nom de l'id de la div qu'on lui a donné (du coup ça permet de faire un copié collé du slider de base et il n'y a plus qu'à changer le nom de l'id de div (je crois))
});
var slider = function (id) {
	
	var self = this;
	this.div = $(id);
	this.slider = this.div.find(".prototype-slider") //pas oublier de changer nom de div ici
	this.largeurslider = this.div.width();
	this.largeur=0;
	this.div.find('span').each(function(){
		self.largeur += $(this).width();

	});
	this.defildroite = this.div.find(".flechedroite");
	this.defilgauche = this.div.find(".flechegauche");
	this.defil = this.largeurslider/2;    //si on veut déplacer de tout un block à chaque fois on enleve le divisé par 2
	this.nbsauts = Math.ceil(this.largeur/this.defil - this.largeurslider/this.defil );
	this.courant=0;
	this.defildroite.click(function(){
		if (self.courant<=self.nbsauts) {
			self.courant++;
			self.slider.animate({
				left:-self.courant*self.defil
			},1000)
		}
		
	});

	this.defilgauche.click(function(){
		if (self.courant>0) {
			self.courant--;
			self.slider.animate({
				left:-self.courant*self.defil
			},1000)
		}
		
	});
	
}

/* slider à défilement automatique
$(function(){
      setInterval(function(){
         $(".slideshow ul").animate({marginLeft:-350},800,function(){
            $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
         })
      }, 3500);
   });
*/
