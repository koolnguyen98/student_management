$(function(){
	var url = $('#base').val();
	$(document).on('click','.btn-edit',function(){
		$(this).hide();
		$(this).next().hide();
		$(this).next().next().show();

		$(this).parent().prev().children().first().val($(this).parent().prev().children().first().next().text());
		$(this).parent().prev().children().first().show();
		$(this).parent().prev().children().first().next().hide();

	});

	$(document).on('click','.btn-save',function(){

		$(this).hide();
		$(this).siblings().show();

		
		var SubjectName = $(this).parent().prev().children().first().val();
		var SubjectID = $(this).parent().prev().prev().children().first().text();
		if(SubjectName != ''){
			var tmp;
			$(this).parent().prev().children().first().hide();
			$(this).parent().prev().children().first().next().show();
			$.post(url+'/Welcome/updateSubject', {SubjectID : SubjectID, SubjectName : SubjectName}, function(data){
				tmp = data;
				alert(data);
			});
						
		}else{
			alert('Vui lòng điền đủ thông tin');
		}

	});

	$(document).on('click','.btn-remove',function(){
		var isRemove = confirm("Bạn có chắc chắn muốn xóa lớp này");

		if(isRemove == true){
			$(this).parent().parent().remove();
			var SubjectID = $(this).parent().prev().prev().children().first().text();
			$.post(url+'/Welcome/deleteSubject', {SubjectID : SubjectID}, function(data){
				alert(data);
			});
		}
	});

	$(document).on('click','.btn-add',function(){

		var subjectName = $(this).parent().prev().children().first().val();
		var subjectID = $(this).parent().prev().prev().prev().children().first().val();
		
		var stt = $(this).parent().parent().next().find('tbody tr').last().children().first().children().first().text();

		if(subjectName == '' || subjectID == ''){
			alert('Vui lòng điền đủ thông tin');
		}else{

			var row = '<tr>'; 
			row += '<td class="py-1" width="5%"><span>'+(parseInt(stt)+1)+'</span></td>'; 
			row += '<td width="20%"><span>'+subjectID+'</span></td>'; 
			row += '<td width="60%""><input type="text" class="form-control" name="" style="background-color: transparent; margin: auto;width: 100%; display: none"><span>'+subjectName+'</span></td>'; 
			row += '<td width="10%"><!--Sửa--><button type="button" class="btn btn-icons btn-rounded btn-outline-primary btn-edit" style="display: inline-block;">  <i class="mdi mdi-pencil"></i></button>'; 
			row += '<!--Xoá-->  <button type="button" class="btn btn-icons btn-rounded btn-outline-danger btn-remove" style="display: inline-block;">    <i class="mdi mdi-bitbucket"></i>    </button>    ';
			row += '<!--Lưu-->    <button type="button" class="btn btn-icons btn-rounded btn-outline-success btn-save" style="display: none">      <i class="mdi mdi-check"></i>    </button>  </td></tr>';

			$.post(url+'/Welcome/insertSubject', {subjectID : subjectID, subjectName : subjectName}, function(data){
				alert(data);
				$('.btn-add').parent().parent().next().find('tbody').append(row);
				$('.btn-add').parent().prev().children().first().val('');
				$('.btn-add').parent().prev().prev().prev().children().first().val('');
			});

		}

	});

});