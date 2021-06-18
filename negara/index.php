<?php
$country = geoip_country_name_by_name('anggaxd.herokuapp.com');
if ($country) {
    echo "$country";
}
?>
