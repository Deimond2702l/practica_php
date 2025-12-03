<?php

$texto="Colombia";
$variable_1=$texto;
$variable_2= &$texto;

echo $variable_2;

$texto="Deimond";

echo $variable_2;