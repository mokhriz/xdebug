--TEST--
Test for bug #1515: Object property names with a NULL char are cut off at NULL char (var_dump)
--INI--
html_errors=0
xdebug.cli_color=0
--FILE--
<?php
include dirname(__FILE__) . '/bug01515.inc';

ini_set('html_errors', 1);
var_dump($obj);

ini_set('html_errors', 0);
var_dump($obj);

ini_set('xdebug.cli_color', 2);
var_dump($obj);
?>
--EXPECT--
We're here
object(stdClass)#1 (1) {
  ["with_ _null_char"]=>
  int(42)
}
object(stdClass)#1 (1) {
  ["with_ _null_char"]=>
  int(42)
}
object(stdClass)#1 (1) {
  ["with_ _null_char"]=>
  int(42)
}
