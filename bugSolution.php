function foo(array $arr) {
  foreach ($arr as $key => $value) {
    $arr[$key] = $value + 1;
  }
}