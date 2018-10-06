--TEST--
ast\get_supported_versions() function
--FILE--
<?php

var_dump(ast\get_supported_versions());
var_dump(ast\get_supported_versions(true));

?>
--EXPECT--
array(6) {
  [0]=>
  int(30)
  [1]=>
  int(35)
  [2]=>
  int(40)
  [3]=>
  int(45)
  [4]=>
  int(50)
  [5]=>
  int(60)
}
array(2) {
  [0]=>
  int(50)
  [1]=>
  int(60)
}
