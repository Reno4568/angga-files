<?php
$region = geoip_region_by_name('anggaxd.herokuapp.com');
if ($region) {
    echo "$region";
}
?>
