<?php
$text = $_GET["paragraph"];
$badWord = $_GET["badword"];

$censored_text = str_replace(strtolower($badWord), '***', strtolower($text));
?>


<h1><?php echo $text . ' ' . strlen($text) ?></h1>

<h1><?php echo  ucfirst($censored_text) . ' ' . strlen($censored_text) ?></h1>