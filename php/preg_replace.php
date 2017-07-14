<?php //Replace first paragraph with blank string
$desc_str = preg_replace('/(<p>){1}.*(<\/p>){1}/', "", $desc,2);

// echo a few characters if exceeds a length
if(strlen($desc) > 60)
echo mb_strimwidth($desc_str, 0, 100, "...");

?>
