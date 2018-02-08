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
		$("#imgGobPerso").attr('src','images/pichetBoisson.png').css('width','470px').css('padding-left','150px').css('padding-bottom','40px');
	});
	//Changement de l'image quand click sur shooter
	$("#shooter").click(function(){
	$("#imgGobPerso").attr('src','images/shoot.png').css('width','350px').css('padding-left','30px').css('padding-bottom','40px');
	});	
	//Changement de l'image quand click sur gobelet
	$("#gobelet").click(function(){
	$("#imgGobPerso").attr('src','images/gobletperso.png').css('width','500px').css('padding-right','120px').css('padding-bottom','40px');;
	});		
	//Changement de l'image quand click sur pinte
	$("#pinte").click(function(){
	$("#imgGobPerso").attr('src','images/pinte.png').css('width','370px').css('padding-left','150px').css('padding-bottom','40px');	
	});
	
	
	//Affichage texte en direct
	
	
	
	$('#inputText').on('input',function(e){
     $("#textPersoGob").html($(this).val());
 });
	
	$("#cercle_perso").click(function(){
		$("#imgForme").attr('src','images/cercle.png').css('width','50px');	
		
	});
	
	$("#etoile_perso").click(function(){
		$("#imgForme").attr('src','images/etoile.png').css('width','50px');
	});
	
	$("#triangle_perso").click(function(){
		$("#imgForme").attr('src','images/triangle.png').css('width','50px').addClass('forme');
	});

});











// CHOIX PROUITS
// Informations produits
$(function(){
	var flip = 0;
	$( "button" ).click(function() {
		$( "#infosProduit" ).slideToggle( flip++ % 2 === 0 );
		$('#img_infos').attr('src','images/icon-minus-128.png');
	});	
	$( "button" ).mouseout(function(){
		$('#img_infos').attr('src','images/61112.png');
	});


});


