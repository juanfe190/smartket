$(document).ready(function(){
	checkToast();
});

function checkToast(){
	$toastText = $('body').attr('toast');
	if($toastText!=='') Materialize.toast($toastText, 3000);
	$('body').attr('toast', '');
}
//# sourceMappingURL=all.js.map
