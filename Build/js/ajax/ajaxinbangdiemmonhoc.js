$(function(){
	var url = $('#base').val();
	$(document).on('change','select',function(){


		var select_class = $('.select-class').children("option:selected").val();

		var select_subject = $('.select-subject').children("option:selected").val();

		if(select_class != '-1' && select_subject != '-1'){
			$.post(url+'/Welcome/getInforMarkTable', {ClassID : select_class, SubjectID : select_subject}, function(data){
				$('.div-inf').html(data);
				$('.div-inf').show();
				$('.div-student').show();
			});

			$.post(url+'/Welcome/getMarkStudent', {ClassID : select_class, SubjectID : select_subject}, function(data){
				$('tbody').html(data);
				$('.div-btn').show();
			});

			$.post(url+'/Welcome/printListStudentMark', {ClassID : select_class, SubjectID : select_subject}, function(data){

			});

			

		}else{
			$('.div-inf').hide();
			$('.div-student').hide();
		}
		
	});

});	