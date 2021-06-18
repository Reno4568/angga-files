<?php
$country = geoip_country_name_by_name('www.example.com');
if ($country) {
    echo "$country";
}
?>
