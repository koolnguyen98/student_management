$(function(){
	var url = $('#base').val();
	$(document).on('click','.submit-btn',function(){
		var site = $(this).parent().prev().prev().prev().find('select').val();
		var username = $(this).parent().prev().prev().find('input').val();
		var password = $(this).parent().prev().find('input').val();

		if(username == '' || password == ''){
			alert('Vui lòng điền đầu đủ username và password');
		}else{
			$.post(url+'/Welcome/checkLogin', {account : username, password : password, site : site}, function(data){
				if(data == 'true'){
					location.href= url+'/Welcome/viewDanhmuclop';
				}else{
					alert('Đăng nhập không thành công');
				}
				
			});
		}

	});

});