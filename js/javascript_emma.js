// JavaScript Document


// Informations produits
$(function(){
	var flip = 0;
	$( "button" ).click(function() {
		$( "#infosAboutProduit" ).slideToggle( flip++ % 2 === 0 );
		$('#img_infosProduit').attr('src','images/icon-minus-128.png');
	});	
	$( "button" ).mouseout(function(){
		$('#img_infosProduit').attr('src','images/61112.png');
	});


});




// Modification image en fonction case taille verre


$(function(){
	//Changement de l'image quand click sur pichet
	$("#pichet").click(function(){
		$("#imgGobPerso").attr('src','images/pichetGlassPerso.png').addClass('Cssforme');
	});
	//Changement de l'image quand click sur shooter
	$("#shooter").click(function(){
	$("#imgGobPerso").attr('src','images/shooter3.png').addClass('Cssforme');
	});	
	//Changement de l'image quand click sur gobelet
	$("#gobelet").click(function(){
	$("#imgGobPerso").attr('src','images/gobletGlassP.png').addClass('Cssforme');
	});		
	//Changement de l'image quand click sur pinte
	$("#pinte").click(function(){
	$("#imgGobPerso").attr('src','images/pinteGlass.png').addClass('Cssforme');
	});
	
	
	//Affichage texte en direct
	
	
	
	$('#inputText').on('input',function(e){
     $("#textPersoGob").html($(this).val());
 });
	
	$("#cercle_perso").click(function(){
		$("#imgForme").attr('src','images/cercle.png').css('width','50px').addClass('alignement');	
		
	});
	
	$("#etoile_perso").click(function(){
		$("#imgForme").attr('src','images/etoile.png').css('width','50px').addClass('alignement');
	});
	
	$("#triangle_perso").click(function(){
		$("#imgForme").attr('src','images/triangle.png').css('width','50px').addClass('forme').addClass('alignement');
	});

});

