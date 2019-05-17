<?php
	if(isset($_SESSION['admin'])){
	}else{
		redirect(base_url().'Welcome/viewLogin','refresh');
	}
?>