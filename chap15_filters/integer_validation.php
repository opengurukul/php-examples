<?php
$var=300;

$int_options = array(
"options"=>array
(
"min_range"=>0,
"max_range"=>256
)
);

if(!filter_var($var, FILTER_VALIDATE_INT, $int_options))
{
echo("Integer is not valid");
}
else
{
echo("Integer is valid");
}
?>  