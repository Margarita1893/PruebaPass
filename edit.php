<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'empleados'
);

if (isset($conn)) {
    echo 'DB is conneted';
}

?>