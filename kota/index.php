<?php
$region = geoip_region_by_name('www.example.com');
if ($region) {
    echo "$region";
}
?>
