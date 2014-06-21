<?php
class form_add_pinterest{
	
	function __construct(){}
	
	/**
	 *	Render form
	 */
	function getForm(){ ?>		
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
		
			<div class="wrap" >
			    <div id="icon-options-general" class="icon32"><br></div>
			    <h2>
			    	<?php _e('Pinterest Widget', PLUGIN_NOM_LANG); ?> 
			    	<?php /*<a href="<?php echo $_SERVER["REQUEST_URI"]."&type=add"; ?>" class="add-new-h2"><?php _e('Add', PLUGIN_NOM_LANG); ?></a>*/ ?>
			    </h2>
			</div>

				
			<h3><?php _e('Edit widget', 'eeweePinterest') ?></h3>
	
			<table class="form-table">
				<tr>
					<th scope="row">
						<?php _e('Position', 'eeweePinterest') ?>
					</th>
					<td>
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
					</td>
				</tr>
				<tr>
					<th>
						<?php _e('URL', 'eeweePinterest') ?> : 
					</th>
					<td>
						<input type='text' name='formUrl' value='<?php form_option( "eewee_pinterest_val_url" ); ?>' class="regular-text">
						<span class="description">ex: http://pinterest.com/eeweefr/</span>
					</td>
				</tr>
				<tr>
					<th>
						<?php _e('Image Width', 'eeweePinterest') ?> :
					</th>
					<td>
						<input type='text' name='formImageWidth' value='<?php form_option( "eewee_pinterest_val_imagewidth" ); ?>' class="regular-text">
						<span class="description"><?php _e('Min:60. Leave blank for 92', 'eeweePinterest') ?></span>
					</td>
				</tr>
				<tr>
					<th>
						<?php _e('Board Height', 'eeweePinterest') ?> :  
					</th>
					<td>
						<input type='text' name='formBoardHeight' value='<?php form_option( "eewee_pinterest_val_boardheight" ); ?>' class="regular-text">
						<span class="description"><?php _e('Min:60. Leave blank for 175', 'eeweePinterest') ?></span>
					</td>
				</tr>
				<tr>
					<th>
						<?php _e('Board Width', 'eeweePinterest') ?> :
					</th>
					<td>
						<input type='text' name='formBoardWidth' value='<?php form_option( "eewee_pinterest_val_boardwidth" ); ?>' class="regular-text">
						<span class="description"><?php _e('Min:130. Leave blank for auto', 'eeweePinterest') ?></span>
					</td>
				</tr>
			</table>
			
			<div class="submit">
	            <input type="submit" name="btn_save" value="<?php _e('Save', 'eeweePinterest') ?>" id="submit" class="button button-primary">
	        </div>
	
		</form>
		<?php
	}
	
}