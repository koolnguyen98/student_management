$(function(){
	var url = $('#base').val();
	$('.btn-search').prop('disabled', true);
	$(document).on('change','.select',function(){
		
		var select_class = $(this).children("option:selected").val();
		if(select_class != ''){
			$.post(url+'/Welcome/getStudentTable', {ClassID : select_class}, function(data){
				$('.table-student').html(data);
				$('.btn-search').removeAttr('disabled');
				$('.table-student').show();
				$('.mark-table').hide();

			});
		}else{
			$('.btn-search').prop('disabled', true);
			$('.table-student').hide();
			$('.mark-table').hide();
		}
		
		
	});

	$(document).on('click','.btn-search',function(){
		
		var studentID = $(this).parent().prev().val();
		var classID = $('.select').children("option:selected").val();

		if(studentID == '' || classID == ''){
			alert('Vui lòng nhập mã số sinh viên');
		}else{
			//nếu có mssv
			$.post(url+'/Welcome/getInforMarkStudentTable', {ClassID : classID, StudentID : studentID}, function(data){
				if(data == 'false'){

					alert('Lỗi');

				}else{
					$('.mark-body').html(data);
					$('.table-student').show();
					$('.mark-table').show();
					$('.div-btn').show();
				}
				
			});

			$.post(url+'/Welcome/printListMarkByStudent', {ClassID : classID, StudentID : studentID}, function(data){

			});

			//Ngược lại thông báo mssv không tồn tại 
			//$(this).parent().prev().val('');
		}

	});

	$(document).on('click','.link-student',function(){

		var studentID = $(this).children().first().text();
		var classID = $('.select').children("option:selected").val();

		event.preventDefault();

		if(studentID == '' || classID == ''){
			alert('Vui lòng nhập mã số sinh viên');
		}else{
			//nếu có mssv
			$.post(url+'/Welcome/getInforMarkStudentTable', {ClassID : classID, StudentID : studentID}, function(data){
				if(data == 'false'){

					alert('Lỗi');

				}else{
					$('.mark-body').html(data);
					$('.table-student').show();
					$('.div-btn').show();
					$('.mark-table').show();
				}
				
			});

			$.post(url+'/Welcome/printListMarkByStudent', {ClassID : classID, StudentID : studentID}, function(data){

			});

			//Ngược lại thông báo mssv không tồn tại 
			//$(this).parent().prev().val('');
		}

	});


});