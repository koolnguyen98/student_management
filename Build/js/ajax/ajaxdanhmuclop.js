$(function(){
	var url = $('#base').val();
	$(document).on('click','.btn-edit',function(){
		$(this).hide();
		$(this).next().hide();
		$(this).next().next().show();

		$(this).parent().prev().prev().children().first().val($(this).parent().prev().prev().children().first().next().text());
		$(this).parent().prev().prev().children().first().show();
		$(this).parent().prev().prev().children().first().next().hide();

	});

	$(document).on('click','.btn-save',function(){
		$(this).hide();
		$(this).siblings().show();

		$(this).parent().prev().prev().children().first().hide();
		$(this).parent().prev().prev().children().first().next().text($(this).parent().prev().prev().children().first().val());
		$(this).parent().prev().prev().children().first().next().show();
		var ClassName = $(this).parent().prev().prev().children().first().val();
		var ClassID = $(this).parent().prev().prev().children().first().next().next().val();
		if(ClassName != ''){
			$.post(url+'/Welcome/updateClass', {ClassID : ClassID, ClassName : ClassName}, function(data){
				alert('Update Thành Công');
			});
		}

	});

	$(document).on('click','.btn-remove',function(){
		var isRemove = confirm("Bạn có chắc chắn muốn xóa lớp này");
		var ClassID = $(this).parent().prev().prev().children().first().next().next().val();
		if(isRemove == true){
			var parent = $(this).parent().parent();
			$.post(url+'/Welcome/deleteClass', {ClassID : ClassID}, function(data){
				if(data == 'true'){
					alert('Delete Thành Công');
					parent.remove();
				}
				else{
					alert('Delete Không Thành Công');
				}

			});

		}
	});

	$(document).on('click','.btn-add',function(){
		$(this).parent().parent().hide();
		$(this).parent().parent().next().show();
	});

	$(document).on('click','.btn-save-class',function(){
		

		var ClassName = $(this).parent().prev().children().first().val();
		var ClassID = $(this).parent().prev().prev().prev().children().first().val();
		var Facult = $('.khoa').val();
		$(this).parent().prev().children().first().val('');
		$(this).parent().prev().prev().prev().children().first().val('');

		var stt = $(this).parent().parent().next().find('tbody tr').last().children().first().children().first().text();

		if(ClassName == '' || ClassID == ''){
			alert('Vui lòng điền đủ thông tin');
		}else{
			

			var row = '<tr>'; 
			row += '<td class="py-1" width="10%"><span>'+(parseInt(stt)+1)+'</span></td>'; 
			row += '<td width="50%"><input type="" class="form-control" name="" style="background-color: transparent; margin: auto; display: none;" value="'+ClassName+'"><span>'+ClassName+'</span><input type="hidden" class="form-control" name="" style="background-color: transparent; margin: auto; display: none;" value="'+ClassID+'"></td>'; 
			row += '<td width="10%">0</td><td width="20%">'; 
			row += '<!--Sửa--> <button type="button" class="btn btn-icons btn-rounded btn-outline-primary btn-edit" style="display: inline-block;"><i class="mdi mdi-pencil"></i></button> '; 
			row += '<!--Xoá-->  <button type="button" class="btn btn-icons btn-rounded btn-outline-danger btn-remove" style="display: inline-block;">    <i class="mdi mdi-bitbucket"></i>    </button>    ';
			row += '<!--Lưu-->    <button type="button" class="btn btn-icons btn-rounded btn-outline-success btn-save" style="display: none">      <i class="mdi mdi-check"></i>    </button>  </td></tr>';

			

			$.post(url+'/Welcome/insertClass', {ClassID : ClassID, ClassName : ClassName, Facult : Facult}, function(data){
				alert(data);
				$('.btn-save-class').parent().prev().children().first().val('');
				$('.btn-save-class').parent().parent().next().find('tbody').append(row);

				$('.btn-save-class').parent().parent().hide();
				$('.btn-save-class').parent().parent().prev().show();
			});
		}
		
	});

});