$(function(){
	var url = $('#base').val();
	$(document).on('change','select',function(){
		
		var ClassID = $(this).children("option:selected").val();
		if(ClassID != ''){
			$.post(url+'/Welcome/getInforClass', {ClassID : ClassID}, function(data){
				$('.div-inf').html(data);
			});

			$.post(url+'/Welcome/getStudentByClass', {ClassID : ClassID}, function(data){

				$('tbody').html(data);
				$('.div-inf').show();
				$('.div-student').show();
				$('.div-btn').show();
			});

			$.post(url+'/Welcome/printListStudent', {ClassID : ClassID}, function(data){

			});
		}
		
		
	});

	// $(document).on('click','btn-success',function(){
	// 	var ClassID = $(this).children("option:selected").val();
	// 	event.preventDefault();
	// 	$.post(url+'/Welcome/printListStudent', {ClassID : ClassID}, function(data){
	// 		alert()
	// 	});

		
		
	// });


});