$(document).ready(function(){

	if ($('#optionsRadios1').is(':checked')){
		$('#option1checked').addClass("db");
		$('#option2checked').removeClass("db");
	}
	if($('#optionsRadios2').is(':checked')){
		$('#option2checked').addClass("db");
		$('#option1checked').removeClass("db");
	}
