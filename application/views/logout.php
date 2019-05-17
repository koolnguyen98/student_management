<?php  
/** 
 * Created by PhpStorm. 
 * User: Ehtesham Mehmood 
 * Date: 11/21/2014 
 * Time: 2:46 AM 
 */  

	session_destroy();  
	redirect(base_url().'Welcome/viewLogin','refresh');
?>  