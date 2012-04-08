 <?php
$str = <<<EOT
This is some PHP text.
It is completely free
I can use "double quotes"
and 'single quotes',
plus $variables too, which will
be properly converted to their values,
you can even type EOT, as long as it
is not alone on a line, like this:
EOT;

/* More complex example, with variables. */


class foo
{
var $foo;
var $bar;

function foo()
{
$this->foo = 'Foo';
$this->bar = array('Bar1', 'Bar2', 'Bar3');
}
}

$foo = new foo();
$name = 'MyName';

echo <<<EOT
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41
EOT;
?> 