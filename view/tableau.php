<?php
// page de mise à jour 
if( $_GET['type'] == "edit" ){
	include(EEWEE_PINTEREST_PLUGIN_DIR.'/view/pinterestEdit.php');
	
// page classique
}else{
	include(EEWEE_PINTEREST_PLUGIN_DIR.'/view/pinterest.php');

}
?>