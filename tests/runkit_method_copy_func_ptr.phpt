--TEST--
runkit_method_copy() uses wrong function pointer
--FILE--
<?php

class a
{
    public function test()
    {
    }
}

class b extends a
{
}

$class = 'a';
$method_tmp = '__construct';
$method = 'test';
runkit_method_copy($class, $method_tmp, $class, $method);
$b = new b;

echo "==DONE==\n";

?>
--EXPECT--
==DONE==
