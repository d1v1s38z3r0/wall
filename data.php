<?php

$dat = $_POST['phrase'] . '' . "\n";
file_put_contents('data.txt', $dat, FILE_APPEND | LOCKEX);
?>