<?php
header('Content-type: application/json');
$data = array(
    'age' => 20,
    'name' => '123',
);

$callback = $_GET['callback'];

echo $callback."(".json_encode($data).")";
return;
?>
