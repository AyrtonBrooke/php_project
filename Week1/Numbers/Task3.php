<?php
$can_diameter = 15;
$can_height = 30;

$can_radius = $can_diameter / 2;
$can_volume = ((pi() * ($can_radius * $can_radius) * $can_height));
$box_volume = (60 * 30 * 35);

$area_paint = (140 * 3.4);
$can_cover_measurement = 5.1;
$can_required = ($area_paint / $can_cover_measurement);

$can_per_box = $box_volume / $can_volume;

echo ceil($can_required) . " cans are required. You will have " . floor($can_per_box) . " full boxes with 6 cans loose.";
?>