
<?
function pass_by_value($param)

{
push_array($param, 4, 5);
}

$ar = array(1,2,3);

pass_by_value($ar);

foreach ($ar as $elem)

{
print "$elem";
}
?>