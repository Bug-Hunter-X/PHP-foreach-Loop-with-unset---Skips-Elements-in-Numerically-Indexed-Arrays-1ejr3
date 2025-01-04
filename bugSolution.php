function foo(array $arr) {
  return array_filter($arr, function ($value) {
    return $value !== 'bar';
  });
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

$arr = ['foo' => 'foo', 'bar' => 'bar', 'baz' => 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [foo] => foo [baz] => baz )

//This solution uses array_filter which creates a new array containing only the elements that satisfy the condition.
//This approach avoids manipulating the array during iteration, solving the index-shifting problem.