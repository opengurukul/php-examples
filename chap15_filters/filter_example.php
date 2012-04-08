<?php
$int = 123;

if(!filter_var($int, FILTER_VALIDATE_INT))
{
echo("Integer is not valid");
}
else
{
echo("Integer is valid");
}
?> 