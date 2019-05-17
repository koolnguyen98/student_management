$(function(){
	var url = $('#base').val();
	$(document).on('change','.select',function(){

		$('.div-mark').hide();
		$('.btn-save').hide();
		$('.btn-save').prev().show();

	});

	$(document).on('click','.btn-start',function(){

		var select_class = $('.select-name-class').children("option:selected").val();

		var select_subject = $('.select-name-subject').children("option:selected").val();

		var select_times = $('.select-times').children("option:selected").val();

		if(select_class == '' || select_subject == '' || select_times == '' ){
			alert('Vui lòng điền đầy đủ thông tin');
		}else{

			$.post(url+'/Welcome/getMark', {class_id : select_class, subject_id : select_subject, times : select_times}, function(data){
				//alert(data);
				if(data == 'false' || data == 'Thất Bại' || data == 'null'){
					alert('Vui lòng nhập hết điểm cho lần 1');
				}else if(data == 'notstudent'){
					alert('Lớp không có sinh viên');
				}else{
					$('tbody').html(data);
					$('.btn-start').hide();
					$('.btn-start').next().show();
					$('.div-mark').find('input').show();
					$('.div-mark').find('.mark-student').hide();
					$('.div-mark').show();
				}
			});

		}
	});

	$(document).on('click','.btn-save',function(){

		var tablerow = $('.table-mark > tbody > tr').length;
		var mark_arr = []
		var i = 0;
		for(i = 1; i <= tablerow; i++){

			var mssv = $('tbody tr:nth-child('+i+') > td').eq(1).children().first().text();

			var mark = $('tbody tr:nth-child('+i+') > td').eq(3).children().first().val();
			var tmp = [mssv, mark];
			mark_arr.push(tmp);
			$('tbody tr:nth-child('+i+') > td').eq(3).children().first().next().text(mark);
			$('tbody tr:nth-child('+i+') > td').eq(3).children().first().val($('tbody tr:nth-child('+i+') > td').eq(3).children().first().next().text());
		}
		if(mark_arr.length > 0){
			var class_id = $('.select-name-class').children("option:selected").val();
			var times = $('.select-times').children("option:selected").val();
			var subject_id =  $('.select-name-subject').children("option:selected").val();

			$.post(url+'/Welcome/setMark', {mark_arr : mark_arr, times : times, subject_id : subject_id, class_id : class_id}, function(data){

				alert(data);
				$('.div-mark').find('input').hide();
				$('.div-mark').find('.mark-student').show();

				$('.btn-save').hide();
				$('.btn-save').prev().show();
					
			});

		}else{
			$('.btn-save').hide();
			$('.btn-save').prev().show();
		}

	});

});