<?php
$data = array(
    'age' => 20,
    'name' => 'уехЩ',
);

$callback = $_GET['callback'];

echo $callback."(".json_encode($data).")";
return;
