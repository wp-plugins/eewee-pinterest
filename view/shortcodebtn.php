<?php 
if( empty($url) ){    $tbl['url']    = "http://pinterest.com/michaeldumontet/";   }
if( empty($name) ){   $tbl['name']   = "eewee";     }
?>

<a data-pin-do="buttonFollow" href="<?php echo $url; ?>"><?php echo $name; ?></a>