$(function(){

	$(document).on('change','select',function(){
		
		var classID = $(this).children("option:selected").val();

		$('.div-inf div:nth-child(1)').children().first().children().first().html('Khoa');
		$('.div-inf div:nth-child(2)').children().first().children().first().html('Tên Lớp');
		$('.div-inf div:nth-child(3)').children().first().children().first().html(classID);
		$('.div-inf').show();

		//$('.div-student > tbody').html();
		$('.div-student').show();
		
	});

});