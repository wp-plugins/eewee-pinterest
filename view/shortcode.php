<?php 
if( !empty($imgw) ){    $tbl['imgw']    = 'data-pin-scale-width="'.$imgw.'"';   }
if( !empty($h) ){       $tbl['h']       = 'data-pin-scale-height="'.$h.'"';     }
if( !empty($w) ){       $tbl['w']       = 'data-pin-board-width="'.$w.'"';      }
?>

<a 
<?php echo $tbl['imgw']." "; ?>     <?php // min:60; leave blank for 92 ?>
<?php echo $tbl['h']." "; ?>        <?php // min:60; leave blank for 175 ?> 
<?php echo $tbl['w']." "; ?>        <?php // min:130;leave blank for auto ?>
data-pin-do="embedBoard" href="<?php echo $url; ?>"></a>