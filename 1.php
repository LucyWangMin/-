<?php
$data = array(
    'age' => 20,
    'name' => '����',
);

$callback = $_GET['callback'];

echo $callback."(".json_encode($data).")";
return;
