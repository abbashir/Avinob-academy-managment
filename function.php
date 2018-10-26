<?php
ob_start();

function loggedin(){
	if(isset($_SESSION['id'])){
		return true;
	}
}
?>