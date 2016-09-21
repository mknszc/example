$( document ).ready(function() {
	$("#insertForm").click(function(){
		$.ajax({
			type: "POST",  
			url: "http://localhost/example/dashboard/ajaxInsert",
			data: $('#loginForm').serializeArray(),
			success : function(data){
				
			}
		});
    });
});

