$(function(){
	var url = $('#base').val();

	var ClassID = $(this).val();
	$.post(url+'/Welcome/getTableStudent', {ClassID : ClassID}, function(data){
		if(data == 'false'){
			//alert("Lớp chưa có sinh viên");
		}else{
			$("tbody").html(data);
		}
	});

	$(document).on('click','.btn-edit',function(){
		$(this).hide();
		$(this).next().hide();
		$(this).next().next().show();

		$(this).parent().prevAll().children().removeAttr('disabled');

	});

	$(document).on('change','.selectClass',function(){
		var ClassID = $(this).val();
		$.post(url+'/Welcome/getTableStudent', {ClassID : ClassID}, function(data){
			//alert(data);
			if(data == 'false'){
				alert("Lớp chưa có sinh viên");
				$("tbody").hide();
			}else{
				$("tbody").html(data);
			}
		});

	});

	$(document).on('click','.btn-save',function(){
		$(this).hide();
		$(this).siblings().show();

		$(this).parent().prevAll().children().attr('disabled', 'true');

		var StudentID = $(this).parent().prev().prev().prev().prev().prev().prev().prev().prev().children().text();
		var FirstName = $(this).parent().prev().prev().prev().prev().prev().prev().prev().children().val();
		var LastName = $(this).parent().prev().prev().prev().prev().prev().prev().children().val();
		var ClassID = $('.selectClass').val();
		var Sex = $(this).parent().prev().prev().prev().prev().prev().children().val();
		var Birthday = $(this).parent().prev().prev().prev().prev().children().val();
		var BirthAddress = $(this).parent().prev().prev().prev().children().val();
		var HomeAddress = $(this).parent().prev().prev().children().val();
		var Status = $(this).parent().prev().children().prop('checked');
		if(Status == false){
			Status = 0;
		}else{
			Status = 1;
		}

		if(StudentID == '' || FirstName == '' || LastName == ''  || Birthday == '' || BirthAddress == '' || HomeAddress == ''){

			alert('Vui lòng điền đầy đủ thông tin sinh viên');

		}else{

			$.post(url+'/Welcome/updateStudent', {StudentID : StudentID, FirstName : FirstName, LastName : LastName, Sex : Sex, Birthday : Birthday, BirthAddress : BirthAddress, HomeAddress : HomeAddress, Status : Status}, function(data){
				alert('Sửa thành công');
			});

		}
		
	});

	$(document).on('click','.btn-remove',function(){
		var isRemove = confirm("Bạn có chắc chắn muốn sinh viên này");

		if(isRemove == true){
			$(this).parent().parent().remove();
			var StudentID = $(this).parent().prev().prev().prev().prev().prev().prev().prev().prev().children().text();
			$.post(url+'/Welcome/deleteStudent', {StudentID : StudentID}, function(data){
				alert('Xóa thành công');
			});
		}
	});

	$(document).on('click','.btn-add',function(){
		$(this).hide();
		$(this).next().show();
		$(this).parent().parent().next().show();
	});

	$(document).on('click','.btn-save-student',function(){
		var ClassID = $('.selectClass').val();
		var stt = $(this).parent().parent().next().next().find('tbody tr').last().children().first().children().first().text();
		var StudentID = $(this).parent().parent().next().children().first().nextAll().eq(0).children().first().val();
		var FirstName = $(this).parent().parent().next().children().first().nextAll().eq(2).children().first().val();
		
		var LastName = $(this).parent().parent().next().children().first().nextAll().eq(4).children().first().val();
		
		var sex = [];
		$(":radio:checked").each(function(i){
			sex[i] = $(this).val();
		});
		var Sex = sex[0];

		var Birthday = $(this).parent().parent().next().children().first().nextAll().eq(10).children().first().val();
		
		var BirthAddress = $(this).parent().parent().next().children().first().nextAll().eq(12).children().first().val();
		
		var HomeAddress = $(this).parent().parent().next().children().first().nextAll().eq(14).children().first().val();

		if(StudentID == '' || FirstName == '' || LastName == ''  || Birthday == '' || BirthAddress == '' || HomeAddress == ''){

			alert('Vui lòng điền đầy đủ thông tin sinh viên');

		}else{
			var row = '<tr><!--STT-->';
				row += '<td class="py-1" ><span>'+(parseInt(stt)+1)+'</span></td>';
				row += '<!--MSSV--><td><span>'+StudentID+'</span></td>';
				row += '<!--Họ--><td ><input type="text" class="form-control" name="" style="background-color: transparent; width: 200px" value="'+FirstName+'" disabled=""></td>';
				row += '<!--Tên--><td ><input type="text" class="form-control" name="" style="background-color: transparent; width: 100px; text-align: center;" value="'+LastName+'" disabled=""></td>';
				row += '<!--Giới tính--><td><input type="text" class="form-control" name="" style="background-color: transparent; margin: auto;" value="'+sex[0]+'" disabled=""></td>';
				row += '<!--Ngày sinh--><td ><input type="date" class="form-control" name="" style="background-color: transparent; margin: auto; width: 150px" value="'+Birthday+'" disabled=""></td>';
				row += '<!--Nơi sinh--><td ><input type="text" class="form-control" name="" style="background-color: transparent; margin: auto; width: 250px; overflow-x: scroll;" value="'+BirthAddress+'" disabled=""></td>';
				row += '<!--Địa chỉ--><td ><input type="text" class="form-control" name="" style="background-color: transparent; margin: auto;  width: 250px; overflow-x: scroll;" value="'+HomeAddress+'" disabled=""></td>'; 
				row += '<!--Nghỉ học--><td ><input type="checkbox" class="form-check" name="" style="background-color: transparent; margin: auto;" disabled=""></td><!--Tác vụ--><td >'; 
				row += '<!--Sửa--><button type="button" class="btn btn-icons btn-rounded btn-outline-primary btn-edit" style="display: inline-block;"><i class="mdi mdi-pencil"></i></button>'; 
				row += '<!--Xoá--><button type="button" class="btn btn-icons btn-rounded btn-outline-danger btn-remove" style="display: inline-block;"><i class="mdi mdi-bitbucket"></i></button>';
				row += '<!--Lưu--><button type="button" class="btn btn-icons btn-rounded btn-outline-success btn-save" style="display: none"><i class="mdi mdi-check"></i></button></td></tr>';

			
			$.post(url+'/Welcome/insertStudent', {StudentID : StudentID, FirstName : FirstName, LastName : LastName, ClassID : ClassID, Sex : Sex, Birthday : Birthday, BirthAddress : BirthAddress, HomeAddress : HomeAddress}, function(data){
				alert('Thêm thành công');
				$('.btn-save-student').parent().parent().next().next().find('tbody').append(row);

				$('.btn-save-student').parent().parent().next().hide();

				$('.btn-save-student').parent().parent().next().children().first().nextAll().eq(0).children().first().val('');
				$('.btn-save-student').parent().parent().next().children().first().nextAll().eq(2).children().first().val('');
				$('.btn-save-student').parent().parent().next().children().first().nextAll().eq(4).children().first().val('');
				$('.btn-save-student').parent().parent().next().children().first().nextAll().eq(10).children().first().val('');
				$('.btn-save-student').parent().parent().next().children().first().nextAll().eq(12).children().first().val('');
				$('.btn-save-student').parent().parent().next().children().first().nextAll().eq(14).children().first().val('');

				$('.btn-save-student').hide();
				$('.btn-save-student').prev().show();

			});

			


			

			

		}

		// // $(this).parent().prev().children().first().val('');


		
	});

});