<?php
// VALIDATED FORM
if( !empty( $_POST['btn_save']) ){
	update_option( "eewee_pinterest_val_position", $_POST['formPosition'] );
	update_option( "eewee_pinterest_val_url", $_POST['formUrl'] );
	update_option( "eewee_pinterest_val_imagewidth", $_POST['formImageWidth'] );
	update_option( "eewee_pinterest_val_boardheight", $_POST['formBoardHeight'] );
	update_option( "eewee_pinterest_val_boardwidth", $_POST['formBoardWidth'] );
}
?>

    
<?php 
// FORM
$f = new form_add_pinterest();
$f->getForm();
?>