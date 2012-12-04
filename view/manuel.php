<?php if (!defined('EEWEE_PINTEREST_VERSION')) exit('No direct script access allowed'); ?>

<div id="framework_wrap" class="wrap">

	<div id="header">
	    <h1>Manuel d'utilisation</h1>
	    <h2>Eewee Pinterest</h2>
	    <div class="version">
	      <?php echo EEWEE_PINTEREST_VERSION; ?>
	    </div>
	</div>
  
  <div id="content_wrap">
  
    <div id="content">
      <div id="options_tabs" class="docs">
      
        <ul class="options_tabs">
          <li><a href="#general1"><?php _e('Pinterest URL', 'eeweepinterest'); ?></a></li>
          <li><a href="#general2"><?php _e('Pinterest Shortcode', 'eeweepinterest'); ?></a></li>
        </ul>
        
        <hr />
        
        <section id="general1">
          <h3><?php _e('Pinterest URL', 'eeweepinterest'); ?></h3>
          <p><?php _e('Example pinterest url'); ?> : </p>
          <ul>
              <li><?php _e('Pinterest profil', 'eeweepinterest'); ?> : 
                  <ul>
                      <li>
                          <a href='http://pinterest.com/michaeldumontet/' target='_blank'>http://pinterest.com/michaeldumontet/</a>
                      </li>
                  </ul>
              </li>
              <li><?php _e('Pinterest table', 'eeweepinterest'); ?> : 
                  <ul>
                      <li>
                          <a href='http://pinterest.com/michaeldumontet/infographie/' target='_blank'>http://pinterest.com/michaeldumontet/infographie/</a>
                      </li>
                      <li>
                          <a href='http://pinterest.com/michaeldumontet/emailing/' target='_blank'>http://pinterest.com/michaeldumontet/emailing/</a>
                      </li>
                      <li>
                          <a href='http://pinterest.com/michaeldumontet/responsive-design/' target='_blank'>http://pinterest.com/michaeldumontet/responsive-design/</a>
                      </li>
                  </ul>
             </li>
          </ul>
          
        </section><!-- general1 -->
        <br />
        
        <section id="general2">
          <h3><?php _e('Pinterest Shortcode', 'eeweepinterest'); ?></h3>
          <p><pre><code>[eeweepinterest url="http://pinterest.com/michaeldumontet/" imgw="100" w="520" h="350"]</code></pre></p>
          <p>url : <?php _e('Pinterest URL', 'eeweepinterest'); ?></p>
          <p>imgw : <?php _e('image width', 'eeweepinterest'); ?></p>
          <p>w : <?php _e('Bloc width', 'eeweepinterest'); ?></p>
          <p>h : <?php _e('Bloc height', 'eeweepinterest'); ?></p>
        </section><!-- general2 -->
        <br />
        
        <section id="general3">
          <h3><?php _e('Pinterest Shortcode', 'eeweepinterest'); ?></h3>
          <p><pre><code>[eeweepinterestbtn url="http://pinterest.com/michaeldumontet/" name="eewee"]</code></pre></p>
          <p>url : <?php _e('User URL', 'eeweepinterest'); ?></p>
          <p>name : <?php _e('Full name', 'eeweepinterest'); ?></p>
          <?php do_shortcode( '[eeweepinterestbtn url="http://pinterest.com/michaeldumontet/" name="eewee"]' ); ?>
        </section><!-- general3 -->
        
        <br class="clear" />
      </div><!-- options_tabs -->
    </div><!-- content -->
  </div><!-- content_wrap -->

</div><!-- framework_wrap -->