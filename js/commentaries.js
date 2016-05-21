function funcBefore(){
	$('#information').text("Waiting...");
}
function funcSuccess(data){
	$('#information').text(data);
}
$(document).ready(function (){
	$('#sbm').bind("click",function(){
		var admin="Admin";
		//var nick =$("#nickname").val();
		var comment =$("#comments").val();
		$.ajax({
			url:"tmpl/content.php",
			type:"POST",
			data:({comments:comment}),
		    datatype:"php",
			beforeSend:funcBefore,
			success:funcSuccess
		});
	});
});