<?php

$conn = mysqli_connect('localhost', 'root', '', 'chat');

echo !$conn ? 'Conected Error '+ mysqli_connect_error() : null;

?>