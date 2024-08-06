<?php 
$nav = 1;
$footer = 1;

ob_start();
?>



<?php 

$content = ob_get_clean();
$title = "";
$css = "";
$js = "";

require "./views/base.php";
?>