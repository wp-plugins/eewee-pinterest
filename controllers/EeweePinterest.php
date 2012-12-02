<?php
if( !class_exists(EeweePinterest)){
	class EeweePinterest{
		
		function __construct(){
			// SHORTCODE
			add_shortcode( 'eeweepinterest', array($this, 'eeweepinterest') );

			$this->render();
		}//fin constructeur

		// init
		function init(){ $this->getOptionsAdmin(); }

		// execute lors de l'activation du plugin
		function eewee_activate(){}

		// execute lors de la désactivation du plugin
		function eewee_deactivate(){}
		
		/**
		 * Gestion des menus du site
		 */
		function eewee_adminMenu(){
			// main menu
			add_menu_page( "Eewee Pinterest", "Eewee Pinterest", "manage_options", "idEeweePinterest", array($this, menu), plugins_url("eewee_pinterest/img/icon.png") );
			// submenu (into main menu)
			add_submenu_page( "idEeweePinterest", "Widget", "Widget", "manage_options", "idSousMenu1", array($this, sousMenu1));
			add_submenu_page( "idEeweePinterest", "Manuel", "Manuel", "manage_options", "idSousMenu2", array($this, sousMenu2));
			
			// menu B
//			add_object_page( "monMenuB", "monMenuB", "manage_options", "idMonMenuB", "fct_b" );
			// submenu (into main menu)
//			add_pages_page( "sousPages", "sous page ici", "manage_options", "idSousMenuPage", "fct_sousMenu");
			
			// appel init
			add_action('admin_init', array($this, 'init'));
		}
		
		/**
		 * Page : main menu
		 */
		function menu(){ echo "Main menu here"; }


		/**
		 * Page : submenu 1
		 */
		function sousMenu1(){ include(EEWEE_PINTEREST_PLUGIN_DIR.'/view/tableau.php'); }
		
		/**
		 * Page : submenu 1
		 */
		function sousMenu2(){ include(EEWEE_PINTEREST_PLUGIN_DIR.'/view/manuel.php'); }

		
		/**
		 * Render
		 */
		function render(){
			/*if( !empty(get_option( "eewee_pinterest_val_imagewidth" ) ) ){
				
			}*/
			
			$position = get_option( "eewee_pinterest_val_position" );
			
			if( isset($position) ){
				add_action("wp_footer", array($this, "incJs"));
			}
			
			switch( $position ){
				case "header" :
					add_action("wp_head", array($this, 'renderHeader'));
					break;
					
				default :
					add_action("wp_footer", array($this, 'renderHeader'));
			}
		}
		
		function incJs(){ echo '<script src="//assets.pinterest.com/js/pinit.js"></script>'; }
		
		function renderHeader(){
			$url			= get_option( "eewee_pinterest_val_url" );
                        $imageWidth             = get_option( "eewee_pinterest_val_imagewidth" );
                        $boardHeight            = get_option( "eewee_pinterest_val_boardheight" );
                        $boardWidth             = get_option( "eewee_pinterest_val_boardwidth" );
                        if( empty($imageWidth) ){ $imageWidth=92; }
                        if( empty($boardHeight) ){ $boardHeight=175; }
                        if( empty($boardWidth) ){ $boardWidth=''; }
			$tbl['imageWidth']	= 'data-pin-scale-width="'.get_option( "eewee_pinterest_val_imagewidth" ).'"';
			$tbl['boardHeight']	= 'data-pin-scale-height="'.get_option( "eewee_pinterest_val_boardheight" ).'"';
			$tbl['boardWidth']	= 'data-pin-board-width="'.get_option( "eewee_pinterest_val_boardwidth" ).'"';
			
			$concat = implode(" ", $tbl);
			
			if( empty($imageWidth) && empty($boardHeight) && empty($boardWidth) ){
				?><a data-pin-do="embedUser" href="<?php echo $url; ?>"></a><?php
			}else{ ?>
				<a 
				<?php echo $tbl['imageWidth']; ?> 	<?php // min:60; leave blank for 92 ?>
				<?php echo $tbl['boardHeight']; ?> 	<?php // min:60; leave blank for 175 ?> 
				<?php echo $tbl['boardWidth']; ?>	<?php // min:130;leave blank for auto ?>
				data-pin-do="embedBoard" href="<?php echo $url; ?>"></a>
				<?php
			}
			
		}
		
		
		/**
		 * Shortcode 
		 * @param unknown_type $atts
		 */
		function eeweepinterest( $atts='' ){
			extract( shortcode_atts(array('url'=>'', 'imgw'=>'', 'h'=>'', 'w'=>''), $atts ));
			include(EEWEE_PINTEREST_PLUGIN_DIR.'/view/shortcode.php');
		}//fin function
		

		
		/**
		 * Définition des options
		 */
		function getOptionsAdmin(){
			//assigne les valeurs par défaut aux options d'administration
			$tbl_optionsAdmin = array(
				'enabled'		=> true,
				'exclude_ips'	=> ''
			);
			//recup les options stockées en bdd
			$options = get_option($this->adminOptionsName);
			//si les options existent dans la base de données, les valeurs par défaut sont écrasées par celles de la base			
			if( !empty($options) ){
				foreach( $options as $k=>$v ){
					$tbl_optionsAdmin[$k] = $v;
				}
			}
			//les options sont stockées dans la base
			update_option($this->adminOptionsName, $tbl_optionsAdmin);
			//les options sont renvoyées pour être utilisées
			return $tbl_optionsAdmin;
		}

	}//fin class
}//fin if
