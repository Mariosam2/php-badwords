<?php
$text = $_GET["paragraph"];
$badWord = $_GET["badword"];

$censored_text = str_replace($badWord, '***', $text);
?>


<h1><?php echo $text . ' ' . strlen($text) ?></h1>

<h1><?php echo $censored_text . ' ' . strlen($censored_text) ?></h1>