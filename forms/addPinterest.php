<?php
class form_add_pinterest{
	
	function __construct(){}
	
	/**
	 *	Render form
	 */
	function getForm(){
		?>		
		<form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">

<?php /*
	<?php //--------------------------------------// ?>
	<?php //----------- PROFILE WIDGET -----------// ?>
	<?php //--------------------------------------// ?>
	
	<?php // faire apparaitre le widget ?>
	<?php 
	// Valeur par defaut
	//<a data-pin-do="embedUser" href="http://pinterest.com/redbull/"></a>
	?>
	<a 
	data-pin-scale-width="150"		<?php // min:60; leave blank for 92 ?>
	data-pin-scale-height="300"		<?php // min:60; leave blank for 175 ?> 
	data-pin-board-width="450" 		<?php // min:130;leave blank for auto ?>
	data-pin-do="embedUser" href="http://pinterest.com/pinterest/"></a>

	<?php // a inclure qu'une seule foie (juste avant </body> si possible) ?>
	<script src="//assets.pinterest.com/js/pinit.js"></script>
	
	
	<?php //--------------------------------------// ?>
	<?php //----------- CONSEIL WIDGET -----------// ?>
	<?php //--------------------------------------// ?>
	
	<?php // faire apparaitre le widget ?>
	<?php
	// Valeur par defaut
	//<a data-pin-do="embedBoard" href="http://pinterest.com/pinterest/pin-pets/"></a>
	?>
	<a 
	data-pin-scale-width="60" 		<?php // min:60; leave blank for 92 ?>
	data-pin-scale-height="300" 	<?php // min:60; leave blank for 175 ?> 
	data-pin-board-width="600" 		<?php // min:130;leave blank for auto ?>
	data-pin-do="embedBoard" href="http://pinterest.com/pinterest/pin-pets/"></a>
	
	<?php // a inclure qu'une seule foie (juste avant </body> si possible) ?>
	<script src="//assets.pinterest.com/js/pinit.js"></script>
*/ ?>

			<div class="postbox " id="postexcerpt">
				
				<h3><?php _e('Pinterest widget', 'eeweePinterest') ?></h3>

				<label>
					<?php _e('Position', 'eeweePinterest') ?>
					<?php
					$position = get_option( "eewee_pinterest_val_position" );
					if( $position == 'header' ){
						$selectHeader = "selected";
					}else{
						$selectFooter = "selected";
					}
					?>
					<select name='formPosition'>
						<option value='header' <?php echo $selectHeader; ?> ><?php echo __('Header', 'eeweePinterest') ?></option>
						<option value='footer' <?php echo $selectFooter; ?> ><?php echo __('Footer', 'eeweePinterest') ?></option>
					</select>
				</label>
				<br />
				
				<label>
					<?php _e('URL', 'eeweePinterest') ?> (ex: http://pinterest.com/eeweefr/) : 
					<input type='text' name='formUrl' value='<?php form_option( "eewee_pinterest_val_url" ); ?>' />
				</label>
				<br />
				
				<label>
					<?php _e('Image Width', 'eeweePinterest') ?> (<?php _e('Min:60. Leave blank for 92', 'eeweePinterest') ?>) : 
					<input type='text' name='formImageWidth' value='<?php form_option( "eewee_pinterest_val_imagewidth" ); ?>' />
				</label>
				<br />
				
				<label>
					<?php _e('Board Height', 'eeweePinterest') ?> (<?php _e('Min:60. Leave blank for 175', 'eeweePinterest') ?>) : 
					<input type='text' name='formBoardHeight' value='<?php form_option( "eewee_pinterest_val_boardheight" ); ?>' />
				</label>
				<br />
				
				<label>
					<?php _e('Board Width', 'eeweePinterest') ?> (<?php _e('Min:130. Leave blank for auto', 'eeweePinterest') ?>) : 
					<input type='text' name='formBoardWidth' value='<?php form_option( "eewee_pinterest_val_boardwidth" ); ?>' />
				</label>
				<br />
						
				<div class="submit">
		            <input type="submit" name="btn_save" value="<?php _e('Save', 'eeweePinterest') ?>" />
		        </div>
				
			</div>
	
		</form>
		<?php
	}
	
}