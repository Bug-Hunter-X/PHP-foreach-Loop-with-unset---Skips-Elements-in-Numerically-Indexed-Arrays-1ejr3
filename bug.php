function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

$arr = ['foo' => 'foo', 'bar' => 'bar', 'baz' => 'baz'];
$result = foo($arr); 
print_r($result); // Output: Array ( [foo] => foo [baz] => baz )

//The problem arises when modifying arrays with numeric keys within a foreach loop using unset().
//The indexes shift during the unset operation leading to skipped elements.