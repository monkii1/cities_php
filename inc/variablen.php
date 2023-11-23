<?php 

header("Content-type: text/plain");

/*
$varName = 'xzy';
${$varName} = 'Jawoll11111';
var_dump($varName);
*/

$array = [
  'xzy' => 'Hallo Welt'
];

/*
foreach($array AS $key => $value) {
  ${$key} = $value;
  var_dump($key);
  var_dump($value);
}
*/
extract($array);
var_dump($xzy);
