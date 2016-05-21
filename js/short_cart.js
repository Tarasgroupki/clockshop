function funcBefore(){
	$('#information').text("Waiting...");
}
function funcSuccess(data){
	$('#information').text(data);
}
$(document).ready(function (){
	$('.delete_button').bind("click",function(){
		var admin = 'AdminAdminAdminAdminAdminAdminAdminAdmin';
		$.ajax({
			url:"tmpl/content.php",
			type:"POST",
			data:({name:admin,number:ad}),
		    datatype:"php",
			beforeSend:funcBefore,
			success:funcSuccess
		});
	});
});