$(document).ready(function () {
	if($("#rbsincontrato").is(':checked')){
		$("#txtnrcontrato").attr("readonly","");
	}
	$("#rbconcontrato").change(function () {
		veri();
	});
	$("#rbsincontrato").change(function () {
		veri();
	})
});
function veri() {
	if ($("#rbconcontrato").is(':checked')){
		$("#txtnrcontrato").removeAttr("readonly","");
	}else{
		$("#txtnrcontrato").attr("readonly","");
	}
}
