<?php
$msie = strpos($_SERVER["HTTP_USER_AGENT"], 'MSIE') ? true : false;
$firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
$safari = strpos($_SERVER["HTTP_USER_AGENT"], 'Safari') ? true : false;
$chrome = strpos($_SERVER["HTTP_USER_AGENT"], 'Chrome') ? true : false;
?>
<?php

if ($firefox) {
echo 'you are using Firefox!';
echo '<br />';
}


if ($safari || $chrome) {
echo 'chrome';
echo '<br />';
}


if ($msie) {
echo '<br>Internet Explorer<br>';
echo '<br />';
}

?>
